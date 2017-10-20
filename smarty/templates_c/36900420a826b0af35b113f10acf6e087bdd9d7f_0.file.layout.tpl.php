<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 07:44:07
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\smarty\templates\tin_tuc\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8e4774f795_15482545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36900420a826b0af35b113f10acf6e087bdd9d7f' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\smarty\\templates\\tin_tuc\\layout.tpl',
      1 => 1500127458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d8e4774f795_15482545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10712597d8e47735276_88789839', 'special_deal');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20785597d8e4773eca3_69988438', 'new_product');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12310597d8e47749827_54689087', 'top_brand');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'sach/layout.tpl');
}
/* {block 'special_deal'} */
class Block_10712597d8e47735276_88789839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'special_deal' => 
  array (
    0 => 'Block_10712597d8e47735276_88789839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'special_deal'} */
/* {block 'new_product'} */
class Block_20785597d8e4773eca3_69988438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'new_product' => 
  array (
    0 => 'Block_20785597d8e4773eca3_69988438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'new_product'} */
/* {block 'top_brand'} */
class Block_12310597d8e47749827_54689087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_brand' => 
  array (
    0 => 'Block_12310597d8e47749827_54689087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'top_brand'} */
}
