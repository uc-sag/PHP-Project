<?php
/* Smarty version 4.3.1, created on 2023-07-30 20:24:25
  from 'C:\XAMPP\htdocs\PHP_Project\templates\Dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c6aad9237812_01532224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5520d0021780bfc4689b06a3a520b06f6a0ecc2' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\PHP_Project\\templates\\Dashboard.tpl',
      1 => 1690741463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_64c6aad9237812_01532224 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Dashboard</title>
       <link rel="stylesheet" href="https://ucertify.com/layout/themes/bootstrap4/ux/css/uc_global.css">
    <link rel="stylesheet" href="https://www.ucertify.com/layout/themes/bootstrap4/ux/css/main_sass/main.css">
    <link rel="stylesheet" href="https://www.ucertify.com/layout/themes/bootstrap4/ux/css/bootstrap4.css">
    <link rel="stylesheet" href="https://www.ucertify.com/utils/?util=icomoon">
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-flex justify-content-center h-100 align-items-center">
    <a href="./start" class="position-relative " >
        <button>
        Start Test
        </button>
    </a>
</div>

   

</body>

</html><?php }
}
