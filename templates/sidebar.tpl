
<div class="position-fixed d-none bg-white overflow-auto w-25 h-100 border border-dark mt-3" id="sidebar">
   <div class="d-flex justify-content-around mt-2 border-bottom pb-2">
        <span class="btn btn-primary" id="all" onclick="quesList('all')">ALL</span>
        <span class="btn btn-secondary" id="attempted" onclick="quesList('attempted')">Attempted</span>
        <span class="btn btn-secondary" id="unattempted" onclick="quesList('unattempted')">Unattempted</span>
   </div>

   <div id="ques_list" class="offset-1">
       {* All the question list will be shown here *}
   </div>
   <div class="h-25"></div>
</div>




