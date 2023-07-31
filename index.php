<?php

 require_once('C:\smarty-4.3.1\libs/Smarty.class.php');
 
 $smarty = new Smarty();
 $smarty->setTemplateDir('./templates/');
 $smarty->setCompileDir('./templates_c/');
//  $smarty->setCacheDir('./cache/');

$json = file_get_contents('data.json');
$json_data = json_decode($json,true);

function getQuestions(){
    
}

 if($_SERVER['REQUEST_URI'] == '/PHP_Project/' || $_SERVER['REQUEST_URI'] == '/PHP_Project/index.php' )
 {
    $smarty->display('Dashboard.tpl');
 }
 else if($_SERVER['REQUEST_URI'] == '/PHP_Project/start')
 {  
    
    $smarty->display('TestPage.tpl');
 }

 else if($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] == '/PHP_Project/start/questions')
 {           
    $question_arr = array();
    for($count =0 ;$count < count($json_data);$count++){
        $current_json = $json_data[$count];
        $id = $current_json['content_id'];
        $data = $current_json['content_text'];
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
            'options'=>$options,
        );
        array_push($question_arr,$data);
    }           
    $jsonResponse = json_encode($question_arr);
    header('Content-Type: application/json');
    echo $jsonResponse;
 }

 else if($_SERVER['REQUEST_URI'] == '/PHP_Project/end')
 {  
   $user  = $_POST['data'];
  
  $user = json_decode($user);

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

    $smarty->assign('questions', $question_arr);
    $smarty->assign('user', $user);
    $smarty->display('result.tpl');
 }
 else if($_SERVER['REQUEST_URI'] == '/PHP_Project/explanation')
 {  
    $id  = $_POST['id'];
    $id= json_decode($id);
    
    for($i=0; $i<count($json_data);$i++){
        if($json_data[$i]['content_id'] == $id){
            $data = $json_data[$i]['content_text'];
            $data = (array)json_decode($data);
            $explain = $data['explanation'];
        }
    }
   
    $smarty->assign('explain', $explain);
    $smarty->display('explanation.tpl');
 }




?>