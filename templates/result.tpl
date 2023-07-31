<html>
<head>
    <title>Result</title>
       <link rel="stylesheet" href="https://ucertify.com/layout/themes/bootstrap4/ux/css/uc_global.css">
    <link rel="stylesheet" href="https://www.ucertify.com/layout/themes/bootstrap4/ux/css/main_sass/main.css">
    <link rel="stylesheet" href="https://www.ucertify.com/layout/themes/bootstrap4/ux/css/bootstrap4.css">
    <link rel="stylesheet" href="https://www.ucertify.com/utils/?util=icomoon">
</head>
<body>
{include file = 'header.tpl'}
<div>
  
</div>
<table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">Index</th>
      <th scope="col">Question</th>
      <th scope="col">Answer</th>
    </tr>
  </thead>
  <tbody>
        {for $i = 0 to 10}
            
            <tr id= {$questions[$i]['content_id']}>
            <th scope="row">{$i+1}</th>
            <td>{$questions[$i]['snippet']}</td>
            <td class="d-flex">
              <span {if {$questions[$i]['correct']} == 1} class ="answer_bullets bg-success"{elseif $user[$i] == "1"} class="answer_bullets bg-danger" {else}class ="answer_bullets" {/if}>A</span>
              <span {if {$questions[$i]['correct']} == 2} class ="answer_bullets bg-success"{elseif $user[$i] == "2"} class="answer_bullets bg-danger" {else}class ="answer_bullets" {/if}>B</span>
              <span {if {$questions[$i]['correct']} == 3} class ="answer_bullets bg-success"{elseif $user[$i] == "3"} class="answer_bullets bg-danger" {else}class ="answer_bullets" {/if}>C</span>
              <span {if {$questions[$i]['correct']} == 4 } class ="answer_bullets bg-success"{elseif $user[$i] == "4"} class="answer_bullets bg-danger" {else}class ="answer_bullets" {/if}>D</span>

             </td>
             </tr>           
           
        {/for}
        
  </tbody>
</table>

   
<script>
    let body = document.getElementsByTagName('tbody');
    body = body[0];
    body.addEventListener('click',function(e){
        if(e.target.parentElement.id){
            // console.log(e.target.parentElement.id);
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'id';
            hiddenInput.value = JSON.stringify(e.target.parentElement.id);
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = './explanation';
            form.appendChild(hiddenInput);
            document.body.appendChild(form);
            form.submit();
        }
    });
    body.addEventListener('mouseover',function(e){
      body.style.cursor = 'pointer';
      e.target.parentElement.classList.add('bg-light');
    });
    body.addEventListener('mouseout',function(e){
      body.style.cursor = 'default';
      if( e.target.parentElement.classList.contains('bg-light')){
        e.target.parentElement.classList.remove('bg-light');
      }
    });
</script>
</body>

</html>