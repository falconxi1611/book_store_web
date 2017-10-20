<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 08:45:26
  from "C:\wamp\www\Book_Store_Project_29.07.2017\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d80863bf894_40283274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d5a72adea3cef3c74bf6238952adc60c9a549b5' => 
    array (
      0 => 'C:\\wamp\\www\\Book_Store_Project_29.07.2017\\smarty\\templates\\layout.tpl',
      1 => 1500894586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:banner.tpl' => 1,
    'file:banner_bottom.tpl' => 1,
    'file:content.tpl' => 1,
    'file:new_product.tpl' => 1,
    'file:top_brand.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_597d80863bf894_40283274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4720597d808636bd23_41853776', "head");
?>

<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="hienthi">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10729597d80863835a9_12137800', 'banner');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1646597d80863921d8_79047135', 'banner_bottom');
?>

<?php $_smarty_tpl->_subTemplateRender('file:content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28943597d80863a3545_33430872', 'new_product');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26012597d80863af0e2_58514128', 'top_brand');
?>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "head"} */
class Block_4720597d808636bd23_41853776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_4720597d808636bd23_41853776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block 'banner'} */
class Block_10729597d80863835a9_12137800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_10729597d80863835a9_12137800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'banner'} */
/* {block 'banner_bottom'} */
class Block_1646597d80863921d8_79047135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner_bottom' => 
  array (
    0 => 'Block_1646597d80863921d8_79047135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:banner_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'banner_bottom'} */
/* {block 'new_product'} */
class Block_28943597d80863a3545_33430872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'new_product' => 
  array (
    0 => 'Block_28943597d80863a3545_33430872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:new_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'new_product'} */
/* {block 'top_brand'} */
class Block_26012597d80863af0e2_58514128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_brand' => 
  array (
    0 => 'Block_26012597d80863af0e2_58514128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:top_brand.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'top_brand'} */
}
