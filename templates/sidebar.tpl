<head>
 
    <link rel="stylesheet" href="https://ucertify.com/layout/themes/bootstrap4/ux/css/uc_global.css">
    <link rel="stylesheet" href="https://www.ucertify.com/layout/themes/bootstrap4/ux/css/main_sass/main.css">
    <link rel="stylesheet" href="https://www.ucertify.com/layout/themes/bootstrap4/ux/css/bootstrap4.css">
    <link rel="stylesheet" href="https://www.ucertify.com/utils/?util=icomoon">
</head>
<div class="position-absolute d-none bg-white overflow-auto w-50 h-100 border border-dark " id="sidebar">
   <div class="d-flex justify-content-around mt-2 border-bottom pb-2">
        <span class="btn btn-primary" id="all" onclick="quesList('all')">ALL</span>
        <span class="btn btn-secondary" id="attempted" onclick="quesList('attempted')">Attempted</span>
        <span class="btn btn-secondary" id="unattempted" onclick="quesList('unattempted')">Unattempted</span>
   </div>

   <div id="ques_list" class="offset-1">
       {* All the question list will be shown here *}
   </div>
</div>


