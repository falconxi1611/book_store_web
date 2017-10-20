<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 07:44:07
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\views\v_huong_dan.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d8e477e1293_29736063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82d4270f3fab7e61fe42cf0427dd978fe0019908' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\views\\v_huong_dan.tpl',
      1 => 1501315726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d8e477e1293_29736063 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container" style="padding:20px; margin:auto">
	<h2 align="left" >HƯỚNG DẪN ĐẶT HÀNG</h2>
	<h4 align="center"> HƯỚNG DẪN ĐĂNG KÝ THÀNH VIÊN</h4>
	<hr />
    <p>Để tiết kiệm thời gian trong những lần mua hàng sau và có thể kiểm tra đơn hàng của bạn bất cứ lúc nào, bạn vui lòng Đăng ký thành viên theo các bước sau:</p>
    <p>BƯỚC 1: Bấm vào link Tạo tài khoản</p>
    <img src="../public/layout/hinh/tao_tai_khoan.jpg"/>
	<p>BƯỚC 2: Nhập đầy đủ thông tin trên trang tạo tài khoản. Chọn Đăng ký nhận tin định kỳ nếu bạn muốn FAHASA gửi cho bạn thông tin về sách mới và các chương trình khuyến mãi. Bấm nút Gởi đi để hoàn tất.
(*) là các trường bắt buộc</p>
	<img src="../public/layout/hinh/tao-tai-khoan-1.jpg" />
   <hr />
   <h4 align="center"> HƯỚNG DẪN ĐĂNG NHẬP</h4>
   <p>Bạn vui lòng Đăng nhập vào tài khoản của bạn để mua hàng được nhanh chóng hoặc mỗi khi bạn muốn kiểm tra tình trạng các đơn hàng của bạn.</p>
   <p>BƯỚC 1: Bấm vào Đăng nhập trên thanh menu ngang ở đầu trang</p>
   <p>BƯỚC 2: Điền thông tin đăng nhập và bấm phím ENTER hoặc nhấp chuột vào nút Đăng nhập </p>	
   <img src="../public/layout/hinh/dang-nhap.jpg"/>
   <hr />
   <h4 align="center"> HƯỚNG DẪN ĐẶT HÀNG</h4>
   <p>BƯỚC 1: Để chọn sản phẩm cần mua bạn có thể sử dụng một trong hai cách:</p>
   <p>Chọn mảng hàng hóa bạn cần mua trên thanh menu hoặc trong bảng “Nhóm sản phẩm” phía bên trái góc trên để màn hình hiển thị ra sản phẩm trong mảng hàng để chọn; hoặc</p>
   <img src="../public/layout/hinh/dat-hang-1.jpg" />
</div>


<!-- faq -->


<!-- //faq -->
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
	</div>
<!-- //newsletter -->
<?php }
}
