<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 09:27:15
  from "C:\wamp\www\Book_Store_Project_29.07.2017\smarty\templates\tin_tuc\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8a53d22320_31255047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f1025d31c4f458eb6731d7dceb1cf295d25c63a' => 
    array (
      0 => 'C:\\wamp\\www\\Book_Store_Project_29.07.2017\\smarty\\templates\\tin_tuc\\layout.tpl',
      1 => 1500127458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d8a53d22320_31255047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31955597d8a53d07338_94865604', 'special_deal');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8208597d8a53d147f5_75948604', 'new_product');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14089597d8a53d1ca66_74527446', 'top_brand');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'sach/layout.tpl');
}
/* {block 'special_deal'} */
class Block_31955597d8a53d07338_94865604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'special_deal' => 
  array (
    0 => 'Block_31955597d8a53d07338_94865604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'special_deal'} */
/* {block 'new_product'} */
class Block_8208597d8a53d147f5_75948604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'new_product' => 
  array (
    0 => 'Block_8208597d8a53d147f5_75948604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'new_product'} */
/* {block 'top_brand'} */
class Block_14089597d8a53d1ca66_74527446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_brand' => 
  array (
    0 => 'Block_14089597d8a53d1ca66_74527446',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'top_brand'} */
}
