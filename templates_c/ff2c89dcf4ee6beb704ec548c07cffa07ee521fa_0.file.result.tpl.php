<?php
/* Smarty version 4.3.1, created on 2023-08-07 12:06:27
  from 'C:\xampp\htdocs\website\PHP_Project\templates\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d0c22360b767_10305768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff2c89dcf4ee6beb704ec548c07cffa07ee521fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\website\\PHP_Project\\templates\\result.tpl',
      1 => 1691315732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_64d0c22360b767_10305768 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
<div class="height100"></div>

<div class="d-flex justify-content-center">
<button class="btn btn-light custom_btn outline1 mr-3 width150">
                    <div> 
                        <span class="icomoon-reports-sm mr-sm text-indigo s3 top2 relative"></span>
                        <span class="d-inline-block font18 text-indigo"> 
                        <?php echo $_smarty_tpl->tpl_vars['percentage']->value;?>
 % 
                        </span>
                    </div> 
                    <span class="d-none d-md-inline-block">
                        Result
                    </span>
                    
</button>
<button class="btn btn-light custom_btn outline1 mr-3 width150">
                <div>
                    <span class="icomoon-new-24px-items-1 text-primary s3 top2 relative"></span> 
                    <span class="d-inline-block font18 text-primary"> <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
                </div>
                <span class="d-none d-md-inline-block">Items</span>
</button>
<button class="btn btn-light custom_btn outline1 mr-3 width150" >
                    <div>
                        <span class="icomoon-correct text-success s3 top2 relative"></span>
                        <span class="d-inline-block font18 text-success"> <?php echo $_smarty_tpl->tpl_vars['correct']->value;?>
</span>
                    </div>
                    <span class="d-none d-md-inline-block">
                        Correct
                    </span>
</button>
<button class="btn btn-light custom_btn outline1 width150" >
                    <div>
                        <span class="icomoon-incorrect text-danger mr s3 relative top2"></span>
                        <span class="d-inline-block font18 text-danger font18"> <?php echo $_smarty_tpl->tpl_vars['incorrect']->value;?>
</span>
                    </div>
                    <span class="d-none d-md-inline-block">
                        Incorrect
                    </span>
</button>

 
</div>
<table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">Index</th>
      <th scope="col">Question</th>
      <th scope="col">Answer</th>
    </tr>
  </thead>
  <tbody id="box">
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['total']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            
            <tr id= <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
              <span <?php ob_start();
echo $_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['i']->value]['correct'];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == $_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['i']->value]) {?>  class=" ml-2 icomoon-correct s3 align-middle"<?php } else { ?> class="ml-2 icomoon-incorrect s3 align-middle" <?php }?>></span>
             </td>
             </tr>           
           
        <?php }
}
?>
        
  </tbody>
</table>
<div class="height50"></div>
<div class="border-top pt-2 pb-2 bg-light d-flex justify-content-end mt2  fixed-bottom">

<a href="./index.php" class="mr-5 btn btn-secondary" >

Dashboard

</a>
</div>
   
<?php echo '<script'; ?>
>

   
    const box = document.getElementById('box');
    box.addEventListener('click',function(e){
        if(e.target.parentElement.id){
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '/PHP_Project/explanation/'+e.target.parentElement.id;
            document.body.appendChild(form);
            form.submit();
        }
    });

    box.addEventListener('mouseover',function(e){
      box.style.cursor = 'pointer';
      e.target.classList.add('text-primary');
    });
    
    box.addEventListener('mouseout',function(e){
      box.style.cursor = 'default';
      if( e.target.classList.contains('text-primary')){
        e.target.classList.remove('text-primary');
      }
    });
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
