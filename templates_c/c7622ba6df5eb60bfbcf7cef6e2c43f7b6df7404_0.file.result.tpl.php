<?php
/* Smarty version 4.3.1, created on 2023-07-31 06:52:45
  from 'C:\XAMPP\htdocs\PHP_Project\templates\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c73e1d938a84_04508478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7622ba6df5eb60bfbcf7cef6e2c43f7b6df7404' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\PHP_Project\\templates\\result.tpl',
      1 => 1690777803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_64c73e1d938a84_04508478 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Result</title>
       <link rel="stylesheet" href="https://ucertify.com/layout/themes/bootstrap4/ux/css/uc_global.css">
    <link rel="stylesheet" href="https://www.ucertify.com/layout/themes/bootstrap4/ux/css/main_sass/main.css">
    <link rel="stylesheet" href="https://www.ucertify.com/layout/themes/bootstrap4/ux/css/bootstrap4.css">
    <link rel="stylesheet" href="https://www.ucertify.com/utils/?util=icomoon">
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
  
</div>
<table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">Index</th>
      <th scope="col">Question</th>
      <th scope="col">Answer</th>
    </tr>
  </thead>
  <tbody>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (0) : 0-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            
            <tr id= <?php echo $_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['i']->value]['content_id'];?>
>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['i']->value]['snippet'];?>
</td>
            <td class="d-flex">
              <span <?php ob_start();
echo $_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['i']->value]['correct'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?> class ="answer_bullets bg-success"<?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['i']->value] == "1") {?> class="answer_bullets bg-danger" <?php } else { ?>class ="answer_bullets" <?php }?>>A</span>
              <span <?php ob_start();
echo $_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['i']->value]['correct'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 2) {?> class ="answer_bullets bg-success"<?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['i']->value] == "2") {?> class="answer_bullets bg-danger" <?php } else { ?>class ="answer_bullets" <?php }?>>B</span>
              <span <?php ob_start();
echo $_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['i']->value]['correct'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 3) {?> class ="answer_bullets bg-success"<?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['i']->value] == "3") {?> class="answer_bullets bg-danger" <?php } else { ?>class ="answer_bullets" <?php }?>>C</span>
              <span <?php ob_start();
echo $_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['i']->value]['correct'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 4) {?> class ="answer_bullets bg-success"<?php } elseif ($_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['i']->value] == "4") {?> class="answer_bullets bg-danger" <?php } else { ?>class ="answer_bullets" <?php }?>>D</span>

             </td>
             </tr>           
           
        <?php }
}
?>
        
  </tbody>
</table>

   
<?php echo '<script'; ?>
>
    let body = document.getElementsByTagName('tbody');
    body = body[0];
    body.addEventListener('click',function(e){
        if(e.target.parentElement.id){
            // console.log(e.target.parentElement.id);
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'id';
            hiddenInput.value = JSON.stringify(e.target.parentElement.id);
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = './explanation';
            form.appendChild(hiddenInput);
            document.body.appendChild(form);
            form.submit();
        }
    });
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
