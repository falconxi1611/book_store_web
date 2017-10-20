<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 09:27:16
  from "C:\wamp\www\Book_Store_Project_29.07.2017\views\tin_tuc\v_tin_tuc_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8a54650d14_16927641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '771ca8834290c39fb7dfdad7a85d9523217ed0bc' => 
    array (
      0 => 'C:\\wamp\\www\\Book_Store_Project_29.07.2017\\views\\tin_tuc\\v_tin_tuc_right.tpl',
      1 => 1500226424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d8a54650d14_16927641 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tin_tucs']->value, 'tin_tuc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tin_tuc']->value) {
?>
     <div class="tin_tuc" style="padding-bottom: 25px">
      <a href="javascript:Doc_tin_tuc(<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->id;?>
)"><img  src="public/layout/hinh_tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->hinh_dai_dien;?>
" alt="" width="210px" height="125px" align="right"></a>
<h3><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tieu_de_tin;?>
</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->noi_dung_tom_tat;?>
</p>
    <a href="javascript:Doc_tin_tuc(<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->id;?>
)" class="button-2" style="height:5px; line-height:5px; border-radius:5px">Xem tiếp</a>  
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<div class="div_phan_trang"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div>  <?php }
}
