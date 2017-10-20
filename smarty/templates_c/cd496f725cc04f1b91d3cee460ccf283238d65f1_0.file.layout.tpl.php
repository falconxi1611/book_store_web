<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 10:30:19
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\smarty\templates\gio_hang\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597db53bc73ff9_05554022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd496f725cc04f1b91d3cee460ccf283238d65f1' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\smarty\\templates\\gio_hang\\layout.tpl',
      1 => 1500968956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:content.tpl' => 1,
  ),
),false)) {
function content_597db53bc73ff9_05554022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10058597db53bc54d92_09753520', 'banner');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30395597db53bc5bff3_35456466', 'banner_bottom');
?>

<?php $_smarty_tpl->_subTemplateRender('file:content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14296597db53bc6a5a4_95333854', 'new_product');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18225597db53bc70459_59999967', 'top_brand');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'banner'} */
class Block_10058597db53bc54d92_09753520 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_10058597db53bc54d92_09753520',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'banner_bottom'} */
class Block_30395597db53bc5bff3_35456466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner_bottom' => 
  array (
    0 => 'Block_30395597db53bc5bff3_35456466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner_bottom'} */
/* {block 'new_product'} */
class Block_14296597db53bc6a5a4_95333854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'new_product' => 
  array (
    0 => 'Block_14296597db53bc6a5a4_95333854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'new_product'} */
/* {block 'top_brand'} */
class Block_18225597db53bc70459_59999967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_brand' => 
  array (
    0 => 'Block_18225597db53bc70459_59999967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'top_brand'} */
}
