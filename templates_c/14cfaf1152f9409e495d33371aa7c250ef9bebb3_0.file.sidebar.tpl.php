<?php
/* Smarty version 4.3.1, created on 2023-07-31 05:36:14
  from 'C:\XAMPP\htdocs\PHP_Project\templates\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c72c2e6685a8_85792642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14cfaf1152f9409e495d33371aa7c250ef9bebb3' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\PHP_Project\\templates\\sidebar.tpl',
      1 => 1690774235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c72c2e6685a8_85792642 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
 
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
          </div>
</div>


<?php }
}
