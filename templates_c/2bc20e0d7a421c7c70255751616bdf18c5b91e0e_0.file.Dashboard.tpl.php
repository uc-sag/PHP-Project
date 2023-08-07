<?php
/* Smarty version 4.3.1, created on 2023-08-07 05:05:56
  from 'C:\XAMPP\htdocs\website\PHP_Project\templates\Dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d05f9459a488_56053762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bc20e0d7a421c7c70255751616bdf18c5b91e0e' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\website\\PHP_Project\\templates\\Dashboard.tpl',
      1 => 1691250324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_64d05f9459a488_56053762 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="d-flex justify-content-center h-100 align-items-center">
    <a href="./start" class="position-relative " >
        <button class="btn btn-primary">
        Start Test
        </button>
    </a>
</div>

</body>

</html><?php }
}
