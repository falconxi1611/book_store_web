<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 08:45:26
  from "C:\wamp\www\Book_Store_Project_29.07.2017\smarty\templates\banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8086c97e24_94475420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0e3fa493388c9d0e863a319ebcad1961a0987da' => 
    array (
      0 => 'C:\\wamp\\www\\Book_Store_Project_29.07.2017\\smarty\\templates\\banner.tpl',
      1 => 1500881637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d8086c97e24_94475420 (Smarty_Internal_Template $_smarty_tpl) {
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
