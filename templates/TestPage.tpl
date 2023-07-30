<html>
<head>
    <title>Test</title>
</head>
<body>
{include file = 'header.tpl'}

{include file = 'sidebar.tpl'}

<div class="modal d-none bg-primary" id="endBox">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMediumTitle">Confirmation</h5>
      </div>
      <div class="modal-body">
        <p>This action will end your test. Do you want to proceed?</p>
        <span id="end_total">0</span><span class="mr-2">  -Items </span>
        <span id="end_attempted">0</span><span class="mr-2 ">  -Attempted </span>
        <span id="end_unattempted">0</span><span class="mr-2">  -Unattempted </span>
      </div>
      <div class="modal-footer">
    
       <button type="button" class="btn btn-primary" onclick="endTest()">End Test</button>
    
        <button type="button" class="btn btn-secondary" onclick="closeEndBox()" id="endBoxClose" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="d-flex flex-column align-items-start mt-5 ml-5 h-75">
    <div id="question">Click to select the areas that should be covered in redundancy plans. </div>
    <br>
    <div> 
    <input type="radio" id="option-a" name="que" value=1>
    <label for="option-a" id="optionA">CREATE VIEW Get_salary WITH SCHEMABINDING SELECT FirstName, LastName, Salary FROM Employees</label>
    </div>
    <div>
    <input type="radio" id="option-b" name="que" value=2>
    <label for="option-b" id="optionB">CREATE VIEW Get_salary WITH SCHEMABINDING SELECT FirstName, LastName, Salary FROM Employees/label>
    </div>
    <div>
    <input type="radio" id="option-c" name="que" value=3>
    <label for="option-c" id="optionC">CREATE VIEW Get_salary WITH SCHEMABINDING SELECT FirstName, LastName, Salary FROM Employees</label>
    </div>
    <div>   <input type="radio" id="option-d" name="que" value=4>
    <label for="option-d" id="optionD">CREATE VIEW Get_salary WITH SCHEMABINDING SELECT FirstName, LastName, Salary FROM Employees</label>
    </div>
</div>


{include file = 'footer.tpl'}
<script>
//It shows the List option and Hide it*****************************
const list = document.getElementById('list');
const sidebar = document.getElementById('sidebar');
list.addEventListener('click',function(){
    let show = sidebar.classList.contains("d-none");
   
    if(show){
        sidebar.classList.remove("d-none");
        sidebar.classList.add("d-block");
        quesList();
    }
    else{
        sidebar.classList.remove("d-block");
        sidebar.classList.add("d-none");
    }
});
//**************************************************************

//Set questions *************************************************
let ques_no = -1;
function setQuestion(condition){
  let que_ele = document.getElementById('question');
  if(condition === 'decr')        // decr is used because if we use incr the during first time it will not run 
  {   
                                                       
    que_ele.innerText = questions[--ques_no].question;
    setOptions(ques_no);
    setCurrQuesNo(ques_no + 1);
  }
  else{

    que_ele.innerText = questions[++ques_no].question;
    setOptions(ques_no); 
    setCurrQuesNo(ques_no + 1);
  }

}

//Set question by Id clicked on list bar*******************************
function listClickHandller(id){
  saveAnswer(ques_no);
  let que_ele = document.getElementById('question');
  
  for(let i=0;i<questions.length;i++){
    if(questions[i].content_id == id){
         ques_no = i;
         que_ele.innerText = questions[i].question;
         setOptions(i); 
         setCurrQuesNo(i+1);
         resetOptions();
    }
  }

}

//Set Options******************************************************
function setOptions(curr){
  
  let option_a = document.getElementById('optionA');
  let option_b = document.getElementById('optionB');
  let option_c = document.getElementById('optionC');
  let option_d = document.getElementById('optionD');
  option_a.innerText = questions[curr].options[0].answer;
  option_b.innerText = questions[curr].options[1].answer;
  option_c.innerText = questions[curr].options[2].answer;
  option_d.innerText = questions[curr].options[3].answer;

}
//*******************************************************************

// Show Question No*************************************************
function setCurrQuesNo(curr_no){
  let curr_ques_no = document.getElementById('curr_ques_no');
  curr_ques_no.innerText = curr_no ;
}
function setTotalQuesNo(total_no){
  let total_ques_no = document.getElementById('total_ques_no');
  total_ques_no.innerText = total_no ;
}


// Next button handler*******************************************
let next = document.getElementById('next');
next.addEventListener('click',function()
{ 
  
  if(ques_no < questions.length-1){ 
    saveAnswer(ques_no);
    setQuestion('incr');
    resetOptions();
  }
});

let prev = document.getElementById('prev');
prev.addEventListener('click',function()
{ 
  if(ques_no > 0){
    saveAnswer(ques_no);
    setQuestion('decr');
    resetOptions();
  }
});




//Question load handler************************************
const questions = [];
const answer = [];
window.addEventListener('load',Questions);
async function Questions() {
  const response = await fetch("start/questions",
  {
    method: "POST", 
    mode: "cors", 
    headers: {
      "Content-Type": "application/json",
    }
  });
  const data = await response.json();
  for(let i =0;i<data.length;i++){
   questions.push(data[i]);
  }
  setQuestion('incr');
  setTotalQuesNo(questions.length);
 
  setInitialAnswer(questions.length);
}
//**************************************************************

function setInitialAnswer(ques_length){
  for(let i =0 ;i<ques_length;i++){
      answer[i] = -1;
  }
}






//Timer handler**************************************************************************

const hh = document.getElementById("hh");
const mm = document.getElementById("mm");
const ss = document.getElementById("ss");
var hours = 1;
var minutes = 30;
var seconds = 0;
hh.innerText = hours;
mm.innerText = minutes;
ss.innerText = seconds;
cloclId = setInterval(() => {
  if(seconds>0){

    seconds = --seconds;
    setTimer(hours,minutes,seconds);
  }
  else if(seconds == 0 && minutes > 0){

  minutes = --minutes;
  seconds = 59;
    setTimer(hours,minutes,seconds);
  }
  else if(seconds ==0  && minutes ==0 && hours >0){

    hours = --hours;
    minutes = 59;
    seconds = 59;
    setTimer(hours,minutes,seconds);
  }
  else if(seconds == 0 && minutes ==0 && hours ==0){
     clearInterval(cloclId);
     console.log("Time over ");

  }
   
}, 1000);


function setTimer(HH,MM,SS){
  hours = HH;
  minutes == MM;
  seconds == SS;

  hh.innerText = hours;
  mm.innerText = minutes;
  ss.innerText = seconds;
}
//***************************************************************************************


//Question List *******************************************************************************
const ques_list = document.getElementById('ques_list');


function quesList(){
  ques_list.innerHTML = "";
  for(i=0;i<questions.length;i++){
    const box = document.createElement("div");
    const node = document.createElement("div");
    const status = document.createElement('div'); 
    let ele = (i+1)+ " -> " + questions[i].question;
    node.innerText = ele;
    status.innerText = 'unattempted';
    node.classList.add("overflow-hidden");
    
    box.setAttribute('id',questions[i].content_id);
    status.classList.add('badge');
    status.classList.add('rounded-pill');
    status.classList.add('bg-secondary');
    box.appendChild(node);
    box.appendChild(status);
    box.classList.add('border-bottom');
    ques_list.appendChild(box); 
  }

}

ques_list.addEventListener('click',function(e){
   let clicked_id =  e.target.parentElement.id;
   listClickHandller(clicked_id);
});

//************************************************************

function handleEnd(){
  saveAnswer(ques_no);
  let box = document.getElementById('endBox');
  box.classList.remove("d-none");
  box.classList.add("d-block");
  setEndBox();

}

function closeEndBox(){
  let box = document.getElementById('endBox');
  box.classList.remove("d-block");
  box.classList.add("d-none");
}

function endTest(){
  let box = document.getElementById('endBox');
  box.classList.remove("d-block");
  box.classList.add("d-none");


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

function setEndBox(){
  let end_total = document.getElementById('end_total');
  let end_attempted = document.getElementById('end_attempted');
  let end_unattempted = document.getElementById('end_unattempted');
  let attempted = 0;
  
  for(let i=0;i<answer.length;i++){
    if(answer[i] != -1){
      attempted++;
    }
  }
  let unattempted = questions.length - attempted;

  end_total.innerText = questions.length ;
  end_attempted.innerText =  attempted;
  end_unattempted.innerText = unattempted ;

}

//************************Save Answer********************
function saveAnswer(ques_no){
  let ele = document.getElementsByName('que');
  for (let i = 0; i < ele.length; i++){
        if(ele[i].checked){       
          answer[ques_no] = ele[i].value;
        }
   }
}




function resetOptions()
{
  let ele = document.getElementsByName('que');
  
  for(let i = 0;i<ele.length;i++){
    if(ele[i].checked){
      ele[i].checked = false;
    }
  } 
}




</script>
</body>

</html> 