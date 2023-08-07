<html>

{include file = 'header.tpl'}
<body>
<div class="height100"></div>

<div class="d-flex justify-content-center">
<button class="btn btn-light custom_btn outline1 mr-3 width150">
                    <div> 
                        <span class="icomoon-reports-sm mr-sm text-indigo s3 top2 relative"></span>
                        <span class="d-inline-block font18 text-indigo"> 
                        {$percentage} % 
                        </span>
                    </div> 
                    <span class="d-none d-md-inline-block">
                        Result
                    </span>
                    
</button>
<button class="btn btn-light custom_btn outline1 mr-3 width150">
                <div>
                    <span class="icomoon-new-24px-items-1 text-primary s3 top2 relative"></span> 
                    <span class="d-inline-block font18 text-primary"> {$total}</span>
                </div>
                <span class="d-none d-md-inline-block">Items</span>
</button>
<button class="btn btn-light custom_btn outline1 mr-3 width150" >
                    <div>
                        <span class="icomoon-correct text-success s3 top2 relative"></span>
                        <span class="d-inline-block font18 text-success"> {$correct}</span>
                    </div>
                    <span class="d-none d-md-inline-block">
                        Correct
                    </span>
</button>
<button class="btn btn-light custom_btn outline1 width150" >
                    <div>
                        <span class="icomoon-incorrect text-danger mr s3 relative top2"></span>
                        <span class="d-inline-block font18 text-danger font18"> {$incorrect}</span>
                    </div>
                    <span class="d-none d-md-inline-block">
                        Incorrect
                    </span>
</button>

 
</div>
<table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">Index</th>
      <th scope="col">Question</th>
      <th scope="col">Answer</th>
    </tr>
  </thead>
  <tbody id="box">
        {for $i = 0 to $total-1}
            
            <tr id= {$i}>
            <th scope="row">{$i+1}</th>
            <td>{$questions[$i]['snippet']}</td>
            <td class="d-flex">
              <span {if {$questions[$i]['correct']} == 1} class ="answer_bullets bg-success"{elseif $user[$i] == "1"} class="answer_bullets bg-danger" {else}class ="answer_bullets" {/if}>A</span>
              <span {if {$questions[$i]['correct']} == 2} class ="answer_bullets bg-success"{elseif $user[$i] == "2"} class="answer_bullets bg-danger" {else}class ="answer_bullets" {/if}>B</span>
              <span {if {$questions[$i]['correct']} == 3} class ="answer_bullets bg-success"{elseif $user[$i] == "3"} class="answer_bullets bg-danger" {else}class ="answer_bullets" {/if}>C</span>
              <span {if {$questions[$i]['correct']} == 4 } class ="answer_bullets bg-success"{elseif $user[$i] == "4"} class="answer_bullets bg-danger" {else}class ="answer_bullets" {/if}>D</span>
              <span {if {$questions[$i]['correct']}== $user[$i]}  class=" ml-2 icomoon-correct s3 align-middle"{else} class="ml-2 icomoon-incorrect s3 align-middle" {/if}></span>
             </td>
             </tr>           
           
        {/for}
        
  </tbody>
</table>
<div class="height50"></div>
<div class="border-top pt-2 pb-2 bg-light d-flex justify-content-end mt2  fixed-bottom">

<a href="./index.php" class="mr-5 btn btn-secondary" >

Dashboard

</a>
</div>
   
<script>

   
    const box = document.getElementById('box');
    box.addEventListener('click',function(e){
        if(e.target.parentElement.id){
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '/PHP_Project/explanation/'+e.target.parentElement.id;
            document.body.appendChild(form);
            form.submit();
        }
    });

    box.addEventListener('mouseover',function(e){
      box.style.cursor = 'pointer';
      e.target.classList.add('text-primary');
    });
    
    box.addEventListener('mouseout',function(e){
      box.style.cursor = 'default';
      if( e.target.classList.contains('text-primary')){
        e.target.classList.remove('text-primary');
      }
    });
</script>
</body>

</html>