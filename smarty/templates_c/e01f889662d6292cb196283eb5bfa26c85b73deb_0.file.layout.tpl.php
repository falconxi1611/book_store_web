<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 07:44:07
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\smarty\templates\sach\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8e477873b6_62821179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e01f889662d6292cb196283eb5bfa26c85b73deb' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\smarty\\templates\\sach\\layout.tpl',
      1 => 1500527173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sach/head.tpl' => 1,
  ),
),false)) {
function content_597d8e477873b6_62821179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2948597d8e47766e35_00922368', "head");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20333597d8e477782e7_84294276', 'banner_bottom');
?>
		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14242597d8e4777fb42_39100775', 'top_brand');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "head"} */
class Block_2948597d8e47766e35_00922368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2948597d8e47766e35_00922368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sach/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block 'banner_bottom'} */
class Block_20333597d8e477782e7_84294276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner_bottom' => 
  array (
    0 => 'Block_20333597d8e477782e7_84294276',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner_bottom'} */
/* {block 'top_brand'} */
class Block_14242597d8e4777fb42_39100775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_brand' => 
  array (
    0 => 'Block_14242597d8e4777fb42_39100775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'top_brand'} */
}
