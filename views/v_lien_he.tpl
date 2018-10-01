<!-- //banner -->

<!-- breadcrumbs -->
<div class="breadcrumb_dress">
	<div class="container">
		<ul>
			<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Trang chủ</a>
				<i>/</i></li>
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
				<p>PTIT
				<p>97 Man Thiện, P. Hiệp Phú, Q.9, Hồ Chí Minh</p>
				<ul>
					<li>Free Phone :028 3835 1056</li>
					<li>Telephone :028 3835 1056</li>

					<li><a href="mailto:info@example.com">info@example.com</a></li>
				</ul>
			</div>
			<div class="col-md-7 contact-left">
				<h4>Thông tin liên hệ</h4>
				{literal}
					<form action="kh_lien_he.php?key=kh-lien-he" method="post">
						<input type="text" name="Name" value="Tên quý khách" onfocus="this.value = '';"
							   onblur="if (this.value == '') {this.value = 'Name';}" required>
						<input type="email" name="Email" value="Email" onfocus="this.value = '';"
							   onblur="if (this.value == '') {this.value = 'Email';}" required>
						<input type="text" name="Telephone" value="Số điện thoại" onfocus="this.value = '';"
							   onblur="if (this.value == 'Telephone') {this.value = '';}" required>
						<textarea name="message" onfocus="this.value = '';"
								  onblur="if (this.value == '') {this.value = 'Message...';}" required>Quý khách vui lòng cho biết yêu cầu</textarea>
						<input type="submit" value="Gửi thông tin" name="kh_lien_he">
					</form>
				{/literal}
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="contact-bottom">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.519417217542!2d106.78439431428751!3d10.848042260835314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752772b245dff1%3A0xb838977f3d419d!2zSOG7jWMgVmnhu4duIEPDtG5nIE5naOG7hyBCxrB1IENow61uaCBWaeG7hW4gVGjDtG5nIEPGoSBT4bufIDI!5e0!3m2!1svi!2s!4v1538408985720"
					width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
			{literal}
				<form action="kh_lien_he.php?key=Newsletter" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';"
						   onblur="if (this.value == '') {this.value = 'Email';}" required>
					<input type="submit" value="" name="Newsletter">
				</form>
			{/literal}

		</div>
		<div class="clearfix"></div>
	</div>
</div>