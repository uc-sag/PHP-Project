<html>
{include file = 'header.tpl'}

<body>
<div class="height100"></div>
<div class="d-flex justify-content-center">
<p {if $user_answer[$current] == $original_correct_options[$current] } class="btn bg-success text-white"{else} class="d-none"{/if} >Correct</p>
<p {if $user_answer[$current] != $original_correct_options[$current] } class="btn bg-danger text-white"{else} class="d-none"{/if} >Incorrect</p>
</div>

<div class="ml-3 pl-3">
<span class="mr-2 font-weight-bold">Ques No. {$current+1} -</span><span> {$question_arr[$current]['question']}</span>
</div>
<br>
<div class="ml-3 pl-3">
  <ol type="A">
    {for $foo=0 to 3}
        <li><span {if $original_answer[$current] == $foo+1} class ="alert-success"{elseif $answerByUser[$current] == $foo+1} class="alert-danger"{/if}>{$question_arr[$current]['options'][$foo]['answer']}</span> </li>
    {/for}
  </ol>
</div>
    <div class="mt-3 ml-3 pl-3 ">
    <h3 class="border-bottom">Explanation</h3>
    <p>Answer option {$original_correct_options[$current]} is correct.</p>
</div>

<div class="ml-3 pl-3 mb-3">
  <p>Answer {$original_correct_options[$current]} {$explanation[$current]}</p>
</div>

<div class="h-25"></div>





{* Footer part *}
    <div class="pb-3 pt-3 d-flex justify-content-end mt2 bg-light mt-3 navbar-fixed-bottom fixed-bottom">


    <form action="/PHP_Project/explanation/{$current-1}" method="post">
<button type="submit" id="prev" {if $current-1 < 0} class = "mr-2 btn btn-secondary position-relative disabled"{else} class = "mr-2 btn btn-secondary position-relative" {/if} >Previous</button>
    </form>

    <div class="mr-2 ml-2 pt-1 mt-1 width60 d-flex justify-content-around"><div id="curr_ques_no">{$current+1}</div><span> of </span><span id="total_ques_no">{$total}</span></div>
    <form action="/PHP_Project/explanation/{$current+1}" method="post">
    <button type="submit" id="next" {if $current+1 >= $total} class = "mr-2 btn btn-secondary position-relative disabled"{else} class = "mr-2 btn btn-secondary position-relative" {/if}>Next</button>
    </form>

    <form action="/PHP_Project/result" method="post">
    <button type="submit" class="mr-2 btn btn-secondary position-relative" id="back">Result</button>
    </form>

    <form action="/PHP_Project/" method="post">
    <button type="submit" class="mr-2 btn btn-secondary position-relative">Dashboard</button>
    </form>
    
   

    </div>
{* Footer end *}
</body>

</html>