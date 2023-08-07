<?php
 session_start();
 require_once('C:\smarty-4.3.1\libs/Smarty.class.php');
 $smarty = new Smarty();
 $smarty->setTemplateDir('./templates/');
 $smarty->setCompileDir('./templates_c/');

 // Get the JSON data from file and decode it***************************************
$json = file_get_contents('data.json');
$json_data = json_decode($json,true);

// *********************************************************************************
// *********************************************************************************


// Handle the request for index.php file . It is the starting point of project*****************
 if($_SERVER['REQUEST_URI'] == '/PHP_Project/' || $_SERVER['REQUEST_URI'] == '/PHP_Project/index.php' )
 {
    $smarty->display('Dashboard.tpl');
 }
//  *******************************************************************************************
// ********************************************************************************************



// Handle the request for the start It Displays the Test Page**********************************
 elseif($_SERVER['REQUEST_URI'] == '/PHP_Project/start')
 {
   $smarty->display('TestPage.tpl');
 }
//**********************************************************************************************
//**********************************************************************************************


// It SENDS the ALL Questions , Snippet , Options array in JSON format *************************
 elseif($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] == '/PHP_Project/start/questions')
 {
    $question_arr = array();
    for($count =0 ;$count < count($json_data);$count++){
        $current_json = $json_data[$count];
        $id = $current_json['content_id'];
        $data = $current_json['content_text'];
        $snippet = $current_json['snippet'];
        $data = (array)json_decode($data);
        
        $options = array();
        for($i=0;$i<count($data['answers']);$i++){
            $temp2 = (array)$data['answers'][$i];
            $curr = array(
                'id'=>$temp2['id'],
                'answer'=>$temp2['answer']
            );
            array_push($options,$curr);
        }
        $data = array(
            'content_id' => $id,
            'question' =>$data['question'] ,
            'snippet'=> $snippet,
            'options'=>$options,
        );
        array_push($question_arr,$data);
    }
    $_SESSION['total'] = count($question_arr);
    $_SESSION['question_arr'] = $question_arr;
    $jsonResponse = json_encode($question_arr);
    header('Content-Type: application/json');
    echo $jsonResponse;
 }
// ************************************************************************************************
// ************************************************************************************************



//Handles the answers of User and Store answer in Session variable named  $_SESSION['user_answer']***
// It also Displays the result Page to the user******************************************************
 elseif($_SERVER['REQUEST_URI'] == '/PHP_Project/end')
 {
   $user  = $_POST['data'];
   $user = json_decode($user);
  
   $_SESSION['user_answer'] = $user;
   showResult($json_data,$user,$smarty);
 }
//**********************************************************************************************
//**********************************************************************************************


//It Displays the result Page to the User******************************************************
//It is different from '/PHP_Project/end' because it does not store the user answer************
// It get the answer already stored in $_SESSION['user_answer'] and Displays it****************
 elseif($_SERVER['REQUEST_URI'] == '/PHP_Project/result')
 {
   $user=  $_SESSION['user_answer'] ;
    showResult($json_data,$user,$smarty);

 }



// Handles the Explanation part. It return the Explanation of question depending on sequence number*********************************
// Here Sequence no 0 means 1st question***********************************************************************************************
 elseif($_SERVER['REQUEST_METHOD'] === 'POST' &&  preg_match('/\/PHP_Project\/explanation\/(\d+)/',$_SERVER['REQUEST_URI'], $matches))
 {
    
    $sequence_no  = $matches[1];
    $explanation = array();
    $original_correct_options = array();
    for($i=0;$i<count($json_data);$i++){
        $temp = (array)json_decode($json_data[$i]['content_text']);
        array_push($explanation,$temp['explanation']);
        for($a=0;$a<4;$a++){
            if($temp['answers'][$a]->is_correct){
                array_push($original_correct_options,$a+1);
            }
        }
    }
    $explanationModified = array();
    for($i=0;$i<count($explanation);$i++){
        $temp = explode("Answer",$explanation[$i]);
        $temp2 = $temp[1];
        array_push($explanationModified,$temp2);
    }
    $original_answer = $original_correct_options;
    $answerByUser = $_SESSION['user_answer'];
    $original_correct_options = array_map("convertOneToA",$original_correct_options);
    $_SESSION['user_answer'] = array_map("convertOneToA",$_SESSION['user_answer']);
    $total =  count($_SESSION['question_arr']);
    $smarty->assign('question_arr', $_SESSION['question_arr']);
    $smarty->assign('user_answer', $_SESSION['user_answer']);
    $smarty->assign('answerByUser', $answerByUser);
    $smarty->assign('explanation', $explanationModified);
    $smarty->assign('original_correct_options', $original_correct_options);
    $smarty->assign('original_answer',  $original_answer);
    $smarty->assign('current', $sequence_no);
    $smarty->assign('total', $total);
    $smarty->display('explanation.tpl');
 }


// **************Function to Show Result ************************************************************
 function showResult( $json_data ,$user,$smarty){
    $question_arr = array();
    for($count =0 ;$count < count($json_data);$count++){
        $current_json = $json_data[$count];
        $id = $current_json['content_id'];
        $snippet = $current_json['snippet'];
        $data = $current_json['content_text'];
        $data = (array)json_decode($data);
        $correct = -1;
        for($i=0;$i<count($data['answers']);$i++){
            $temp2 = (array)$data['answers'][$i];
            if($temp2['is_correct'] == 1){
                $correct = $i +1;
                break;
            }
        }
        $temp = array(
            'content_id' => $id,
            'snippet' =>$snippet ,
            'correct'=>$correct,
        );
        array_push($question_arr,$temp);
    }
   
    $corr = 0;
    $total = count($user);
    for($i=0;$i< $total;$i++){
        if($user[$i] == $question_arr[$i]['correct']){
            $corr ++;
        }
    }
    $percentage = ($corr / count($question_arr)) * 100;
    $percentage = number_format($percentage, 2, '.', '');
    $smarty->assign('questions', $question_arr);
    $smarty->assign('user', $user);
    $smarty->assign('total', $total);
    $smarty->assign('correct', $corr);
    $smarty->assign('incorrect', $total - $corr);
    $smarty->assign('percentage', $percentage);
    $smarty->display('result.tpl');
 }
//*******************************************************************************
//*******************************************************************************


// Convert Options in numbers to Characters*************************************
function convertOneToA($x){
    switch ($x){
        case 1:
            return 'A';
            break;
        case 2:
            return 'B';
            break;
        case 3:
            return 'C';
            break;
        case 4:
            return 'D';
            break;
        default:
            return 'X';
    }
}
// *************************************************************************************