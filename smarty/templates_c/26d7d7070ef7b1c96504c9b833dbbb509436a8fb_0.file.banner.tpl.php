<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 07:42:09
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\smarty\templates\banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8dd165fa28_77593774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26d7d7070ef7b1c96504c9b833dbbb509436a8fb' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\smarty\\templates\\banner.tpl',
      1 => 1500881637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d8dd165fa28_77593774 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container"> 
 <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <ol class="carousel-indicators"> 
   <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
   <li data-target="#myCarousel" data-slide-to="1"></li> 
   <li data-target="#myCarousel" data-slide-to="2"></li> 
   <li data-target="#myCarousel" data-slide-to="3"></li> 
   <li data-target="#myCarousel" data-slide-to="4"></li> 
  </ol> 
  <div class="carousel-inner"> 
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'sl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sl']->value) {
?>
  <?php if ($_smarty_tpl->tpl_vars['sl']->value->id == 1) {?>
   <div class="item active"> <img src="public/layout/hinh/<?php echo $_smarty_tpl->tpl_vars['sl']->value->hinh;?>
" alt=""> 
   </div> 
  <?php } elseif ($_smarty_tpl->tpl_vars['sl']->value->id != 1) {?>
   <div class="item"> <img src="public/layout/hinh/<?php echo $_smarty_tpl->tpl_vars['sl']->value->hinh;?>
" alt=""> 
    <div class="carousel-caption">  
    </div> 
   </div> 
   <?php }?>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </div> <a class="left carousel-control" href="http://hocwebgiare.com/#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="http://hocwebgiare.com/#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> 
 </div> <?php }
}
