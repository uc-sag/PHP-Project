<?php
/* Smarty version 4.3.1, created on 2023-07-31 06:28:20
  from 'C:\XAMPP\htdocs\PHP_Project\templates\explanation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c73864275936_20102628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f9828f6f3844ea3d83621206d78c1dd1ba32833' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\PHP_Project\\templates\\explanation.tpl',
      1 => 1690777696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_64c73864275936_20102628 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Explanation</title>
       <link rel="stylesheet" href="https://ucertify.com/layout/themes/bootstrap4/ux/css/uc_global.css">
    <link rel="stylesheet" href="https://www.ucertify.com/layout/themes/bootstrap4/ux/css/main_sass/main.css">
    <link rel="stylesheet" href="https://www.ucertify.com/layout/themes/bootstrap4/ux/css/bootstrap4.css">
    <link rel="stylesheet" href="https://www.ucertify.com/utils/?util=icomoon">
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Explanation</h2>
<div class="h-50">
  <?php echo $_smarty_tpl->tpl_vars['explain']->value;?>

</div>

<div class="height100"></div>

<div class="border-top pt-2 pb-2 bg-light d-flex justify-content-end mt2">

<button class="mr-2 btn btn-secondary" id="back" onclick="history.back()">Go Back</button>


<a href="./index.php" class="mr-5 btn btn-secondary " >

Dashboard

</a>
</div>
</body>

</html><?php }
}
