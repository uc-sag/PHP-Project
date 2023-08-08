<?php
/* Smarty version 4.3.1, created on 2023-08-08 12:44:39
  from 'C:\xampp\htdocs\website\PHP_Project\templates\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d21c97d0c8c0_36096816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a848784eff4a4fd6cc0eeea0949990094b68d235' => 
    array (
      0 => 'C:\\xampp\\htdocs\\website\\PHP_Project\\templates\\sidebar.tpl',
      1 => 1691491474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d21c97d0c8c0_36096816 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="position-fixed d-none bg-white overflow-auto w-25 h-100 border border-dark mt-3" id="sidebar">
   <div class="d-flex justify-content-around mt-2 border-bottom pb-2">
        <span class="btn btn-primary" id="all" onclick="quesList('all')">ALL</span>
        <span class="btn btn-secondary" id="attempted" onclick="quesList('attempted')">Attempted</span>
        <span class="btn btn-secondary" id="unattempted" onclick="quesList('unattempted')">Unattempted</span>
   </div>

   <div id="ques_list">
          </div>
   <div class="h-25"></div>
</div>




<?php }
}
