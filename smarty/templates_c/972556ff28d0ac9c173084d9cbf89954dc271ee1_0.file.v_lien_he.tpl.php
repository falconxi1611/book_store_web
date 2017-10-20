<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 07:44:20
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\views\v_lien_he.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8e54487e03_49217480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '972556ff28d0ac9c173084d9cbf89954dc271ee1' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\views\\v_lien_he.tpl',
      1 => 1501383970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d8e54487e03_49217480 (Smarty_Internal_Template $_smarty_tpl) {
?>
	
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Trang chủ</a> <i>/</i></li>
				<li>Liên hệ</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3>Liên hệ</h3>
			<div class="agile_mail_grids">
				<div class="col-md-5 contact-left">
					<span>Địa chỉ</span>
					<p>Trung Tâm Tin Học ĐH Khoa Học Tự Nhiên
						<p>227 Nguyễn Văn Cừ, Quận 5, Hồ Chí Minh</p>
					<ul>
						<li>Free Phone :028 3835 1056</li>
						<li>Telephone :028 3835 1056</li>
						
						<li><a href="mailto:info@example.com">info@example.com</a></li>
					</ul>
				</div>
				<div class="col-md-7 contact-left">
					<h4>Thông tin liên hệ</h4>
                    
					<form action="kh_lien_he.php?key=kh-lien-he" method="post">
						<input type="text" name="Name" value="Tên quý khách" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>
						<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
						<input type="text" name="Telephone" value="Số điện thoại" onfocus="this.value = '';" onblur="if (this.value == 'Telephone') {this.value = '';}" required>
						<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Quý khách vui lòng cho biết yêu cầu</textarea>
						<input type="submit" value="Gửi thông tin" name="kh_lien_he" >
					</form>
                     
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.631042867682!2d106.6800684142971!3d10.762892262387641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1bf8cfbf85%3A0x1cc90b59bd91e938!2zVHJ1bmcgVMOibSBUaW4gSOG7jWMgLSDEkEggS2hvYSBI4buNYyBU4buxIE5oacOqbg!5e0!3m2!1sen!2sin!4v1501294437453" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
<!-- //mail -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Đăng ký nhận tin</h3>
				<p>Vui lòng nhập email vào khung kế bên</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
             
				<form action="kh_lien_he.php?key=Newsletter" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
					<input type="submit" value="" name="Newsletter">
				</form>
                 
                 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div><?php }
}
