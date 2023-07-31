<?php
/* Smarty version 4.3.1, created on 2023-07-31 06:01:22
  from 'C:\XAMPP\htdocs\PHP_Project\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c732126f2481_22654055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95fd6bd6a07a6d87eb842c4e3b82d22ddfb4e09' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\PHP_Project\\templates\\footer.tpl',
      1 => 1690776080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c732126f2481_22654055 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
 
    <link rel="stylesheet" href="https://ucertify.com/layout/themes/bootstrap4/ux/css/uc_global.css">
    <link rel="stylesheet" href="https://www.ucertify.com/layout/themes/bootstrap4/ux/css/main_sass/main.css">
    <link rel="stylesheet" href="https://www.ucertify.com/layout/themes/bootstrap4/ux/css/bootstrap4.css">
    <link rel="stylesheet" href="https://www.ucertify.com/utils/?util=icomoon">
</head>
<div class="border-top pt-2 pb-2 bg-light d-flex justify-content-end mt2">
<span class="mr-2 pt-1">
    <span id="hh">01</span>:
    <span id="mm">13</span>:
    <span id="ss">22</span>
</span>
<button class="mr-2 btn btn-secondary" id="list">List</button>
<button class="mr-2 btn btn-secondary" id="prev">Previous</button>
<span class="mr-2 pt-1"><span id="curr_ques_no">1</span><span> of </span><span id="total_ques_no">20</span></span>
<button class="mr-2 btn btn-secondary" id="next">Next</button>
<button class="mr-5 btn btn-secondary" onclick="handleEnd()">End Test</button>

</div><?php }
}
