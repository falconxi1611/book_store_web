<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 09:27:15
  from "C:\wamp\www\Book_Store_Project_29.07.2017\smarty\templates\sach\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8a53dd87b1_25958710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bef61d063a8198ef32a325c1d6e7b1b1c2fe393' => 
    array (
      0 => 'C:\\wamp\\www\\Book_Store_Project_29.07.2017\\smarty\\templates\\sach\\layout.tpl',
      1 => 1500527173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sach/head.tpl' => 1,
  ),
),false)) {
function content_597d8a53dd87b1_25958710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4911597d8a53dab5d0_01570121', "head");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11580597d8a53dc5fc3_48397040', 'banner_bottom');
?>
		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15045597d8a53dce8e0_42507474', 'top_brand');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "head"} */
class Block_4911597d8a53dab5d0_01570121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_4911597d8a53dab5d0_01570121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sach/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block 'banner_bottom'} */
class Block_11580597d8a53dc5fc3_48397040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner_bottom' => 
  array (
    0 => 'Block_11580597d8a53dc5fc3_48397040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner_bottom'} */
/* {block 'top_brand'} */
class Block_15045597d8a53dce8e0_42507474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_brand' => 
  array (
    0 => 'Block_15045597d8a53dce8e0_42507474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'top_brand'} */
}
