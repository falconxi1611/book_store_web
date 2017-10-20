<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 07:55:04
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\smarty\templates\sach_chi_tiet\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d90d8e9c2d1_78078689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35648036dec8385ce7e2d31fcfc6f55348d45748' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\smarty\\templates\\sach_chi_tiet\\layout.tpl',
      1 => 1500687932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sach_chi_tiet/head.tpl' => 1,
  ),
),false)) {
function content_597d90d8e9c2d1_78078689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_612597d90d8e74b78_42393334', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11469597d90d8e83df1_84996356', 'banner_bottom');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14722597d90d8e89b11_30920261', 'special_deal');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18579597d90d8e8fd59_89014948', 'new_product');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24784597d90d8e970a0_99769248', 'top_brand');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'head'} */
class Block_612597d90d8e74b78_42393334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_612597d90d8e74b78_42393334',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:sach_chi_tiet/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'banner_bottom'} */
class Block_11469597d90d8e83df1_84996356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner_bottom' => 
  array (
    0 => 'Block_11469597d90d8e83df1_84996356',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner_bottom'} */
/* {block 'special_deal'} */
class Block_14722597d90d8e89b11_30920261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'special_deal' => 
  array (
    0 => 'Block_14722597d90d8e89b11_30920261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'special_deal'} */
/* {block 'new_product'} */
class Block_18579597d90d8e8fd59_89014948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'new_product' => 
  array (
    0 => 'Block_18579597d90d8e8fd59_89014948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'new_product'} */
/* {block 'top_brand'} */
class Block_24784597d90d8e970a0_99769248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_brand' => 
  array (
    0 => 'Block_24784597d90d8e970a0_99769248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'top_brand'} */
}
