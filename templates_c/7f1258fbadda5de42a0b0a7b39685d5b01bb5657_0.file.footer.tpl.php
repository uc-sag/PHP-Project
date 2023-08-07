<?php
/* Smarty version 4.3.1, created on 2023-08-07 05:07:34
  from 'C:\XAMPP\htdocs\website\PHP_Project\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d05ff623d3d2_41271374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f1258fbadda5de42a0b0a7b39685d5b01bb5657' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\website\\PHP_Project\\templates\\footer.tpl',
      1 => 1691250273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d05ff623d3d2_41271374 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-3 pt-3 d-flex justify-content-end mt2 bg-light mt-3 navbar-fixed-bottom fixed-bottom">
  <span class="mr-2 pt-1 mt-1">
    <span id="hh"></span>:
    <span id="mm"></span>:
    <span id="ss"></span>
  </span>
  <button class="mr-2 btn btn-secondary" id="list">List</button>
  <button class="mr-2 btn btn-secondary position-relative" id="prev">Previous</button>
  <div class="mr-2 ml-2 pt-1 mt-1 width60 d-flex justify-content-around"><div id="curr_ques_no">0</div><span> of </span><span id="total_ques_no">20</span></div>
  <button class="mr-2 btn btn-secondary" id="next">Next</button>

  <button type="button" class="btn btn-primary mr-3" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="handleEnd()">End Test</button>

</div><?php }
}
