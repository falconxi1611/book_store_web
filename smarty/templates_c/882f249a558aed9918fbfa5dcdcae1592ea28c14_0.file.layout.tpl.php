<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 08:45:26
  from "C:\wamp\www\Book_Store_Project_29.07.2017\smarty\templates\sach_chi_tiet\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d80862e5064_04239008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '882f249a558aed9918fbfa5dcdcae1592ea28c14' => 
    array (
      0 => 'C:\\wamp\\www\\Book_Store_Project_29.07.2017\\smarty\\templates\\sach_chi_tiet\\layout.tpl',
      1 => 1500687932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sach_chi_tiet/head.tpl' => 1,
  ),
),false)) {
function content_597d80862e5064_04239008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14998597d80862b4535_71059027', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22039597d80862c8bf6_83512131', 'banner_bottom');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23044597d80862d0736_87631492', 'special_deal');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15341597d80862d8155_51659790', 'new_product');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27170597d80862dfc17_74084017', 'top_brand');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'head'} */
class Block_14998597d80862b4535_71059027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14998597d80862b4535_71059027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:sach_chi_tiet/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'banner_bottom'} */
class Block_22039597d80862c8bf6_83512131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner_bottom' => 
  array (
    0 => 'Block_22039597d80862c8bf6_83512131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner_bottom'} */
/* {block 'special_deal'} */
class Block_23044597d80862d0736_87631492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'special_deal' => 
  array (
    0 => 'Block_23044597d80862d0736_87631492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'special_deal'} */
/* {block 'new_product'} */
class Block_15341597d80862d8155_51659790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'new_product' => 
  array (
    0 => 'Block_15341597d80862d8155_51659790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'new_product'} */
/* {block 'top_brand'} */
class Block_27170597d80862dfc17_74084017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_brand' => 
  array (
    0 => 'Block_27170597d80862dfc17_74084017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'top_brand'} */
}
