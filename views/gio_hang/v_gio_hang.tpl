<section id="content">
  <div class="main" style="min-height: 768px; font-style: normal;" id="th_giohang">
    <div class="container">
    {if isset($ds_sach)}
        <div>{assign var=tien_sach value=0}
        <form action="gio_hang.php" method="post">
    {if isset($ds_sach)}       
        <h3 align="center" style="padding-top:30px; padding-bottom:50px">Danh sách ấn phẩm bạn đã chọn</h3>
        <table align="center" width="90%" cellpadding="2px" cellspacing="2">
            <tr bgcolor="#FF9B05"><td width="100px">Mã loại</td><td>Tên sách</td><td  width="100px">Số lượng</td><td width="150px" align="right">Đơn giá</td><td  width="150px" align="right">Thành tiền</td><td  width="70px" align="center">Xóa</td></tr>
        {foreach $ds_sach as $item}
            <tr>
                <td>
                    {$item->id}
                </td>
                <td>
                    {$item->ten_sach}
                </td>
                <td>
                    <input type="text" value="{$item->so_luong}" name="soluong{$item->id}" style="width:70px; text-align:center"/>
                    <input type="hidden" value="{$item->don_gia}" name="dongia{$item->id}"/>
                </td>
                <td align="right">
                    {number_format($item->don_gia)}
                </td>
                <td align="right">
                    {number_format($item->so_luong*$item->don_gia)}đ 
                    {$tien_sach=$tien_sach+$item->so_luong*$item->don_gia}
                </td>
                <td align="center">
                    <input type="checkbox" name="{{$item->id}}" value="{$item->don_gia}"/>
                </td>
            </tr>
        {/foreach}
            <tr bgcolor="#FFE9D2"><td colspan="4" align="right">Tiền sách:</td><td align="right">{number_format($tien_sach)}đ</td></tr>
        </table> 
    {/if} 
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
    {else}
        <h3 align="center" style="padding-top:30px">Bạn chưa chọn sách nào trong giỏ hàng</h3> 
    {/if}
    </div>
  </div>
</section>