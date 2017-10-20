<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 09:24:27
  from "C:\wamp\www\Book_Store_Project_29.07.2017\views\khach_hang\v_them_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d89abc2bd18_17116735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4ba22b760a54ff70f69ace8903c9628ed0bf126' => 
    array (
      0 => 'C:\\wamp\\www\\Book_Store_Project_29.07.2017\\views\\khach_hang\\v_them_khach_hang.tpl',
      1 => 1501057938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d89abc2bd18_17116735 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="content" style="padding-top: 30px">
  <div class="main" style="min-height:768px">
    <div class="container">
        <h3 align="center" style="padding-bottom: 30px">Vui lòng nhập thông tin khách hàng</h3>
        	<form name="them_khach_hang" action="khach_hang.php?key=dat-hang" method="post">
			<table align="center" width="90%" cellpadding="5px" cellspacing="5px" >
                
                <tr>
					<td align="center">
                        Tên khách hàng<br />
                        <input type="text" value="" name="ten_khach_hang" style="width:450px; text-align:center"/>
			  </tr>
                <tr>
					<td align="center">Email<br /><input type="text" value="" name="email" style="width:450px; text-align:center"/></td>
				</tr>
                <tr>
					<td align="center">Địa chỉ<br /><input type="text" value="" name="dia_chi" style="width:450px; text-align:center"/></td>
				</tr>                
				<tr>
					<td align="center">Điện thoại<br /><input type="text" name="dien_thoai" style="width:450px; text-align:center"/></td>
				</tr>
                
                <tr>
					<td align="center">Ghi chú<br /><textarea name="ghi_chu" cols="55" rows="3"  style="width:450px; text-align:center"></textarea></td>
				</tr> 
                
                <tr>
					<td align="center">Tiền đặt cọc<br /><input type="text" name="tien_dat_coc" value="0" style="width:450px; text-align:center"/></td>
				</tr>
                
                <tr>
					<td align="center">Hình thức thanh toán<br />
                        <input type="radio" name="httt" value="tiền mặt" checked="true"/> Tiền mặt
                        <input type="radio" name="httt" value="chuyển khoản"/> Chuyển khoản
                        <input type="radio" name="httt" value="tín dụng"/> Tín dụng
                    </td>
				</tr>
                
				<tr>
					<td align="center"><input type="submit"  class="button-1" value="Lưu" name="submit"/> 
						<input type="button"  class="button-2"
						onclick="window.location.href = 'gio_hang.php'"
						value="Quay về"/>
					</td>
				</tr>
			</table>
			</form>
    </div>
  </div>
</section><?php }
}
