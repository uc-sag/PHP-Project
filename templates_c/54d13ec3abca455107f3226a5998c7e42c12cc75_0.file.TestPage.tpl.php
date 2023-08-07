<?php
/* Smarty version 4.3.1, created on 2023-08-07 05:41:55
  from 'C:\XAMPP\htdocs\website\PHP_Project\templates\TestPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d06803e849a7_76821950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54d13ec3abca455107f3226a5998c7e42c12cc75' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\website\\PHP_Project\\templates\\TestPage.tpl',
      1 => 1691379714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64d06803e849a7_76821950 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="height50"></div>
  <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-50">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="text-center">This action will end your test. Do you want to proceed?</div>
            <div class="d-flex justify-content-around">
            <span>
              <h2 id="end_total" class="text-center"></h2>
              <div>Items</div>
            </span>
            <span>
              <h2 id="end_attempted" class="text-center"></h2>
              <div>Attempted</div>
            </span>
            <span>
              <h2 id="end_unattempted" class="text-center"></h2>
              <div>unattempted</div>
            </span>  
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" onclick="endTest()" >End Test</button>
        </div>
      </div>
    </div>
  </div>


  <div class="d-flex flex-column align-items-start mt-5 ml-5  h-50 ">
    <div id="question"> </div>
    <br>
   
    <div class="mb-1">
      <span class="btn btn-secondary">A</span>
      <input type="radio" id="option-a" name="que" value=1>
      <label for="option-a" id="optionA"></label>
   </div>
   
    <div class="mb-1">
    <span class="btn btn-secondary">B</span>
      <input type="radio" id="option-b" name="que" value=2>
      <label for="option-b" id="optionB"></label>
    </div>
    <div class="mb-1">
    <span class="btn btn-secondary">C</span>
      <input type="radio" id="option-c" name="que" value=3>
      <label for="option-c" id="optionC"></label>
    </div>
    <div class="mb-1"> 
    <span class="btn btn-secondary">D</span>
    <input type="radio" id="option-d" name="que" value=4>
      <label for="option-d" id="optionD"></label>
    </div>
  </div>
  <div class="height50"></div>
  
  <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




  <?php echo '<script'; ?>
>
    //It shows the List option and Hide it*****************************
    document.getElementById('list').addEventListener('click', showHideList);

    function showHideList(){
      const sidebar = document.getElementById('sidebar');
      saveAnswer(ques_no);
      let show = sidebar.classList.contains("d-none");

      if (show) {
        sidebar.classList.remove("d-none");
        sidebar.classList.add("d-block");
        quesList("all");
      } else {
        sidebar.classList.remove("d-block");
        sidebar.classList.add("d-none");
      }
    }
    //**************************************************************

    //Set questions *************************************************
    let ques_no = -1;
    function setQuestion(condition) {
      let que_ele = document.getElementById('question');
      if (condition === 'decr') // decr is used because if we use incr the during first time it will not run 
      {

        que_ele.innerText = questions[--ques_no].question;
        setOptions(ques_no);
        setCurrQuesNo(ques_no + 1);
      } else {

        que_ele.innerText = questions[++ques_no].question;
        setOptions(ques_no);
        setCurrQuesNo(ques_no + 1);
      }
      buttonDisable();

    }

    function buttonDisable() {
      if (ques_no == 0) {
        document.getElementById('prev').classList.add('disabled');
      } else if (document.getElementById('prev').classList.contains('disabled')) {
        document.getElementById('prev').classList.remove('disabled');
      }

      if (ques_no == questions.length - 1) {
        document.getElementById('next').classList.add('disabled');
      } else if (document.getElementById('next').classList.contains('disabled')) {
        document.getElementById('next').classList.remove('disabled');
      }

    }

    //Set question by Id clicked on list bar*******************************
    function listClickHandller(id) {
      showHideList();
      saveAnswer(ques_no);
      let que_ele = document.getElementById('question');

      for (let i = 0; i < questions.length; i++) {
        if (questions[i].content_id == id) {
          ques_no = i;
          que_ele.innerText = questions[i].question;
          resetOptions();
          setOptions(i);
          buttonDisable();
          setCurrQuesNo(i + 1);
        }
      }

    }

    //Set Options******************************************************
function setOptions(curr) {
 
  const optionsIds = ['optionA', 'optionB', 'optionC', 'optionD'];
  const optionsLabels = ['option-a', 'option-b', 'option-c', 'option-d'];

  for (let i = 0; i < 4; i++) {
  const optionElem = document.getElementById(optionsIds[i]);
  const optionLabelElem = document.getElementById(optionsLabels[i]);
  optionElem.innerText = questions[curr].options[i]['answer'];

  if (answer[curr] == i + 1) {
    optionLabelElem.checked = true;
  } else {
    optionLabelElem.checked = false;
  }
  }


}


    // Show Question No*************************************************
    function setCurrQuesNo(curr_no) {
      document.getElementById('curr_ques_no').innerText = curr_no;
    }

    function setTotalQuesNo(total_no) {
      document.getElementById('total_ques_no').innerText = total_no;
    }


    // Next button handler*******************************************
    document.getElementById('next').addEventListener('click', function() {

      if (ques_no < questions.length - 1) {
        saveAnswer(ques_no);
        resetOptions();
        setQuestion('incr');
      }
    });
    // Prev button Handler**********************************************
    document.getElementById('prev').addEventListener('click', function() {
      if (ques_no > 0) {
        saveAnswer(ques_no);
        resetOptions();
        setQuestion('decr');
      }
    });




    //Question load handler************************************
    const questions = [];
    const answer = [];
    window.addEventListener('load', Questions);
    async function Questions() {
      const response = await fetch("start/questions", {
        method: "POST",
        mode: "cors",
        headers: {
          "Content-Type": "application/json",
        }
      });
      const data = await response.json();
      for (let i = 0; i < data.length; i++) {
        questions.push(data[i]);
      }
      setQuestion('incr');
      setTotalQuesNo(questions.length);
      setInitialAnswer(questions.length);
      let clockId = timeHandler(1,29,5);
  
    }
    //**************************************************************

    function setInitialAnswer(ques_length) {
      for (let i = 0; i < ques_length; i++) {
        answer[i] = -1;
      }
    }


    //Timer handler**************************************************************************
    
    function timeHandler(hours,minutes,seconds){
      clockId = setInterval(() => {
      const [hh, mm, ss] = ["hh", "mm", "ss"].map(id => document.getElementById(id));
        if (seconds > 0) {
          seconds = --seconds;
          setTimer(hours, minutes, seconds);
        } else if (seconds == 0 && minutes > 0) {
          minutes = --minutes;
          seconds = 59;
          setTimer(hours, minutes, seconds);
        } else if (seconds == 0 && minutes == 0 && hours > 0) {
          hours = --hours;
          minutes = 59;
          seconds = 59;
          setTimer(hours, minutes, seconds);
        } else if (seconds == 0 && minutes == 0 && hours == 0) {
          clearInterval(cloclId);
          console.log("Time over ");
        }
      }, 1000);
     return clockId;
    }

    function setTimer(HH, MM, SS) {
      HH < 9 ?  hh.innerText = '0'+HH :  hh.innerText = HH;
      MM < 9 ?  mm.innerText = '0'+MM :  mm.innerText = MM;
      SS < 9 ?  ss.innerText = '0'+SS :  ss.innerText = SS; 
    }


    //**************************************************************************************
    // It highlight the selected button in list*********************************************
    function selectCondition(condition) {

      const [ele1, ele2, ele3] = ["all", "attempted", "unattempted"].map(id => document.getElementById(id));
      if (condition == 'all') {
        if (ele1.classList.contains('btn-secondary')) {
          ele1.classList.remove('btn-secondary');
          ele1.classList.add('btn-primary');
        }
        if (ele2.classList.contains('btn-primary')) {
          ele2.classList.remove('btn-primary');
          ele2.classList.add('btn-secondary');
        }
        if (ele3.classList.contains('btn-primary')) {
          ele3.classList.remove('btn-primary');
          ele3.classList.add('btn-secondary');
        }
      } else if (condition == 'attempted') {

        if (ele2.classList.contains('btn-secondary')) {
          ele2.classList.remove('btn-secondary');
          ele2.classList.add('btn-primary');
        }
        if (ele1.classList.contains('btn-primary')) {
          console.log("Called");
          ele1.classList.remove('btn-primary');
          ele1.classList.add('btn-secondary');
        }
        if (ele3.classList.contains('btn-primary')) {
          ele3.classList.remove('btn-primary');
          ele3.classList.add('btn-secondary');
        }
      } else if (condition == 'unattempted') {

        if (ele3.classList.contains('btn-secondary')) {
          ele3.classList.remove('btn-secondary');
          ele3.classList.add('btn-primary');
        }
        if (ele2.classList.contains('btn-primary')) {
          ele2.classList.remove('btn-primary');
          ele2.classList.add('btn-secondary');
        }
        if (ele1.classList.contains('btn-primary')) {
          ele1.classList.remove('btn-primary');
          ele1.classList.add('btn-secondary');
        }
      }
    }


    //Question List *******************************************************************************
    const ques_list = document.getElementById('ques_list');

    function questionListHandler(){
          const box = document.createElement("div");
          const node = document.createElement("div");
          const status = document.createElement('div');
          let ele = (i + 1) + " -> " + questions[i].snippet;
          node.innerText = ele;
          status.classList.add('badge');
          status.classList.add('rounded-pill');

          if (answer[i] == -1) {
            status.innerText = 'unattempted';
            if (status.classList.contains('bg-success')) {
              status.classList.remove('bg-success');
            }
            status.classList.add('bg-secondary');
          } else {
            status.innerText = 'attempted';
            if (status.classList.contains('bg-secondary')) {
              status.classList.remove('bg-secondary');
            }
            status.classList.add('bg-success');
          }
          node.classList.add("overflow-hidden");

          box.setAttribute('id', questions[i].content_id);
          box.appendChild(node);
          box.appendChild(status);
          box.classList.add('border-bottom');
          ques_list.appendChild(box);
    }
    
    function quesList(condition) {

      if (condition == "all") {
        selectCondition('all');
        ques_list.innerHTML = "";
        for (i = 0; i < questions.length; i++) {
          questionListHandler();
        }

      } else if (condition == "attempted") {
        selectCondition('attempted');
        ques_list.innerHTML = "";
        for (i = 0; i < questions.length; i++) {
          if (answer[i] != -1) {
            questionListHandler();
          }
        }
      } else if (condition == "unattempted") {
        selectCondition('unattempted');
        ques_list.innerHTML = "";
        for (i = 0; i < questions.length; i++) {
          if (answer[i] == -1) {
            questionListHandler();
          }
        }
      }
    }



    // Adding Event Listener to Question List in Side Bar********************************
    ques_list.addEventListener('click', function(e) {
      let clicked_id = e.target.parentElement.id;
      listClickHandller(clicked_id);
    });
    ques_list.addEventListener('mouseover', function(e) {
      ques_list.style.cursor = 'pointer';
      e.target.parentElement.classList.add('bg-light');
    });
    ques_list.addEventListener('mouseout', function(e) {
      ques_list.style.cursor = 'default';
      if (e.target.parentElement.classList.contains('bg-light')) {
        e.target.parentElement.classList.remove('bg-light');
      }
    });
    // ************************************************************************************


    //************************************************************

    function handleEnd() {
      saveAnswer(ques_no);
      setEndBox();
    }


    function setEndBox() {
      const [end_total, end_attempted, end_unattempted] = ["end_total", "end_attempted", "end_unattempted"].map(id => document.getElementById(id));
      let attempted = 0;
      for (let i = 0; i < answer.length; i++) {
        if (answer[i] != -1) {
          attempted++;
        }
      }
      let unattempted = questions.length - attempted;   
      end_total.innerHTML = questions.length;
      end_attempted.innerText = attempted;
      end_unattempted.innerText = unattempted;
    }


        //************************Save Answer********************
    function saveAnswer(ques_no) {
      let ele = document.getElementsByName('que');
      for (let i = 0; i < ele.length; i++) {
        if (ele[i].checked) {
          answer[ques_no] = ele[i].value;
        }
      }
    }

    function endTest() {
      const hiddenInput = document.createElement('input');
      hiddenInput.type = 'hidden';
      hiddenInput.name = 'data';
      hiddenInput.value = JSON.stringify(answer);
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = './end';
      form.appendChild(hiddenInput);
      document.body.appendChild(form);
      form.submit();

    }


    function resetOptions() {
      let ele = document.getElementsByName('que');

      for (let i = 0; i < ele.length; i++) {
        if (ele[i].checked) {
          ele[i].checked = false;
        }
      }
    }


   
  <?php echo '</script'; ?>
>
</body>

</html><?php }
}
