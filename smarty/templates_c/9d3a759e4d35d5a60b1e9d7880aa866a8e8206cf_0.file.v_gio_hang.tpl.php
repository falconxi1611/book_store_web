<?php
/* Smarty version 3.1.32-dev-11, created on 2017-07-30 09:16:02
  from "C:\wamp\www\Book_Store_Project_29.07.2017\views\gio_hang\v_gio_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_597d87b2c16da5_54916891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d3a759e4d35d5a60b1e9d7880aa866a8e8206cf' => 
    array (
      0 => 'C:\\wamp\\www\\Book_Store_Project_29.07.2017\\views\\gio_hang\\v_gio_hang.tpl',
      1 => 1501040939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597d87b2c16da5_54916891 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="content">
  <div class="main" style="min-height: 768px; font-style: normal;" id="th_giohang">
    <div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['ds_sach']->value)) {?>
        <div><?php $_smarty_tpl->_assignInScope('tien_sach', 0);
?>
        <form action="gio_hang.php" method="post">
    <?php if (isset($_smarty_tpl->tpl_vars['ds_sach']->value)) {?>       
        <h3 align="center" style="padding-top:30px; padding-bottom:50px">Danh sách ấn phẩm bạn đã chọn</h3>
        <table align="center" width="90%" cellpadding="2px" cellspacing="2">
            <tr bgcolor="#FF9B05"><td width="100px">Mã loại</td><td>Tên sách</td><td  width="100px">Số lượng</td><td width="150px" align="right">Đơn giá</td><td  width="150px" align="right">Thành tiền</td><td  width="70px" align="center">Xóa</td></tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_sach']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->ten_sach;?>

                </td>
                <td>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->so_luong;?>
" name="soluong<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" style="width:70px; text-align:center"/>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->don_gia;?>
" name="dongia<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"/>
                </td>
                <td align="right">
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->don_gia);?>

                </td>
                <td align="right">
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->don_gia);?>
đ 
                    <?php $_smarty_tpl->_assignInScope('tien_sach', $_smarty_tpl->tpl_vars['tien_sach']->value+$_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->don_gia);
?>
                </td>
                <td align="center">
                    <input type="checkbox" name="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->id;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->don_gia;?>
"/>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <tr bgcolor="#FFE9D2"><td colspan="4" align="right">Tiền sách:</td><td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['tien_sach']->value);?>
đ</td></tr>
        </table> 
    <?php }?> 
    <p align="center">
    
    <input type="submit" name="btnCapnhat" value="Cập nhật" class="button-2" />
    
    <input type="button"  class="button-2"
						onclick="window.location.href = 'khach_hang.php?key=dat-hang'"
						value="Đặt hàng" class="art-button" />
                        
    <input type="button"  class="button-1" id="btnxoa"						
						value="Xóa giỏ hàng" class="art-button" />
    </p>
    </form>
    </div>
    <?php } else { ?>
        <h3 align="center" style="padding-top:30px">Bạn chưa chọn sách nào trong giỏ hàng</h3> 
    <?php }?>
    </div>
  </div>
</section><?php }
}
