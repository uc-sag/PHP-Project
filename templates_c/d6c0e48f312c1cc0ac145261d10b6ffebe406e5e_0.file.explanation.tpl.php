<?php
/* Smarty version 4.3.1, created on 2023-08-07 06:05:03
  from 'C:\XAMPP\htdocs\website\PHP_Project\templates\explanation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64d06d6f2a8553_72437287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6c0e48f312c1cc0ac145261d10b6ffebe406e5e' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\website\\PHP_Project\\templates\\explanation.tpl',
      1 => 1691381100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_64d06d6f2a8553_72437287 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="height100"></div>
<div class="d-flex justify-content-center">
<p <?php if ($_smarty_tpl->tpl_vars['user_answer']->value[$_smarty_tpl->tpl_vars['current']->value] == $_smarty_tpl->tpl_vars['original_correct_options']->value[$_smarty_tpl->tpl_vars['current']->value]) {?> class="btn bg-success text-white"<?php } else { ?> class="d-none"<?php }?> >Correct</p>
<p <?php if ($_smarty_tpl->tpl_vars['user_answer']->value[$_smarty_tpl->tpl_vars['current']->value] != $_smarty_tpl->tpl_vars['original_correct_options']->value[$_smarty_tpl->tpl_vars['current']->value]) {?> class="btn bg-danger text-white"<?php } else { ?> class="d-none"<?php }?> >Incorrect</p>
</div>

<div class="ml-3 pl-3">
<span class="mr-2 font-weight-bold">Ques No. <?php echo $_smarty_tpl->tpl_vars['current']->value+1;?>
 -</span><span> <?php echo $_smarty_tpl->tpl_vars['question_arr']->value[$_smarty_tpl->tpl_vars['current']->value]['question'];?>
</span>
</div>
<br>
<div class="ml-3 pl-3">
  <ol type="A">
    <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (0) : 0-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
        <li><span <?php if ($_smarty_tpl->tpl_vars['original_answer']->value[$_smarty_tpl->tpl_vars['current']->value] == $_smarty_tpl->tpl_vars['foo']->value+1) {?> class ="alert-success"<?php } elseif ($_smarty_tpl->tpl_vars['answerByUser']->value[$_smarty_tpl->tpl_vars['current']->value] == $_smarty_tpl->tpl_vars['foo']->value+1) {?> class="alert-danger"<?php }?>><?php echo $_smarty_tpl->tpl_vars['question_arr']->value[$_smarty_tpl->tpl_vars['current']->value]['options'][$_smarty_tpl->tpl_vars['foo']->value]['answer'];?>
</span> </li>
    <?php }
}
?>
  </ol>
</div>
    <div class="mt-3 ml-3 pl-3 ">
    <h3 class="border-bottom">Explanation</h3>
    <p>Answer option <?php echo $_smarty_tpl->tpl_vars['original_correct_options']->value[$_smarty_tpl->tpl_vars['current']->value];?>
 is correct.</p>
</div>

<div class="ml-3 pl-3 mb-3">
  <p>Answer <?php echo $_smarty_tpl->tpl_vars['original_correct_options']->value[$_smarty_tpl->tpl_vars['current']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['explanation']->value[$_smarty_tpl->tpl_vars['current']->value];?>
</p>
</div>

<div class="h-25"></div>





    <div class="pb-3 pt-3 d-flex justify-content-end mt2 bg-light mt-3 navbar-fixed-bottom fixed-bottom">


    <form action="/PHP_Project/explanation/<?php echo $_smarty_tpl->tpl_vars['current']->value-1;?>
" method="post">
<button type="submit" id="prev" <?php if ($_smarty_tpl->tpl_vars['current']->value-1 < 0) {?> class = "mr-2 btn btn-secondary position-relative disabled"<?php } else { ?> class = "mr-2 btn btn-secondary position-relative" <?php }?> >Previous</button>
    </form>

    <div class="mr-2 ml-2 pt-1 mt-1 width60 d-flex justify-content-around"><div id="curr_ques_no"><?php echo $_smarty_tpl->tpl_vars['current']->value+1;?>
</div><span> of </span><span id="total_ques_no"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span></div>
    <form action="/PHP_Project/explanation/<?php echo $_smarty_tpl->tpl_vars['current']->value+1;?>
" method="post">
    <button type="submit" id="next" <?php if ($_smarty_tpl->tpl_vars['current']->value+1 >= $_smarty_tpl->tpl_vars['total']->value) {?> class = "mr-2 btn btn-secondary position-relative disabled"<?php } else { ?> class = "mr-2 btn btn-secondary position-relative" <?php }?>>Next</button>
    </form>

    <form action="/PHP_Project/result" method="post">
    <button type="submit" class="mr-2 btn btn-secondary position-relative" id="back">Result</button>
    </form>

    <form action="/PHP_Project/" method="post">
    <button type="submit" class="mr-2 btn btn-secondary position-relative">Dashboard</button>
    </form>
    
   

    </div>
</body>

</html><?php }
}
