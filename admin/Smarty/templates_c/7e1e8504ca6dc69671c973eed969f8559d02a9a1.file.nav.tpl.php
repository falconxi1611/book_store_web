<?php /* Smarty version Smarty-3.1.14, created on 2017-07-30 08:48:29
         compiled from "Smarty\templates\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22013597d9d5d9e2b51-59195301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e1e8504ca6dc69671c973eed969f8559d02a9a1' => 
    array (
      0 => 'Smarty\\templates\\nav.tpl',
      1 => 1501299161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22013597d9d5d9e2b51-59195301',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_597d9d5da48489_76330884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d9d5da48489_76330884')) {function content_597d9d5da48489_76330884($_smarty_tpl) {?><script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	 var id=null;
	 if (pgurl=="") pgurl="." ;
     $("#main-nav li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		  {
			var title = $(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");	
		  }
		  
     })
		
	$(id).click();
	
});

</script> 
<ul id="main-nav">
  <!-- Accordion Menu -->
  
  <li> 
  <a href="quantri.php" class="nav-top-item no-submenu"> 
  <!-- Add the class "no-submenu" to menu items with no sub menu  -->
  Danh mục 
  </a> 
  </li>
  
    <li>
    <a href="#" class="nav-top-item" id="tintuc"> Tin tức </a>
        <ul>
            <li><a href="tintuc.php" title="tintuc">Danh sách tin tức</a></li>
            <li><a href="themtintuc.php" title="tintuc">Thêm tin tức</a></li>
        </ul>
    </li>
  <li> 
  <a href="#" class="nav-top-item" id="loaisach"> Loại sách</a>
    <ul>
      <li><a href="loaisach.php" title="loaisach">Danh sách loại sách</a></li>
      <li><a href="themloaisach.php" title="loaisach" >Thêm loại sách</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="monan">Sách</a>
    <ul>
      <li><a href="sach.php" title="sach">Danh sách sách</a></li>
      <li><a href="themsach.php" title="sach">Thêm sách</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="user"> User </a>
    <ul>
      <li><a href="user.php" title="user">Danh sách user</a></li>
      <li><a href="themuser.php" title="user">Thêm User</a></li>
    </ul>
  </li>
</ul>
<!-- End #main-nav --><?php }} ?>