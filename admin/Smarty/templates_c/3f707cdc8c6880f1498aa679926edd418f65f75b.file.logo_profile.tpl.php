<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 08:48:29
         compiled from "Smarty\templates\logo_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21076597d9d5d888466-65844372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f707cdc8c6880f1498aa679926edd418f65f75b' => 
    array (
      0 => 'Smarty\\templates\\logo_profile.tpl',
      1 => 1501176506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21076597d9d5d888466-65844372',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9d5d8e9380_83312840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9d5d8e9380_83312840')) {function content_597d9d5d8e9380_83312840($_smarty_tpl) {?><a href="quantri.php"><img id="logo" style="padding-left: 30px" width=150px height=120px  src="public/layout/resources/images/bookstore-icon-black-style-isolated-white-background-library-bookstore-symbol-stock-vector-illustration-design-86552962.jpg" alt="Simpla Admin logo" /></a> 
<!-- Sidebar Profile links -->
<div id="profile-links"> Chào, <a href="#" title="Edit your profile">
<?php echo $_SESSION['fullname'];?>

</a><br />
  <br />
  <a href="#" title="View the Site">View the Site</a> | 
  <a href="quantri.php?func=exit" title="Sign Out">Sign Out</a> </div><?php }} ?>