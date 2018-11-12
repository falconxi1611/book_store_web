<section id="content">
    <div class="main" style="min-height: 768px; font-style: normal;" id="th_giohang">
        <div class="container">
            {if isset($ds_sach)}
                <div>{assign var=tien_sach value=0}
                    <form action="gio_hang.php" method="post">
                        {if isset($ds_sach)}
                            <h3 align="center" style="padding-top:30px; padding-bottom:50px">Danh sách ấn phẩm bạn đã
                                chọn</h3>
                            <table align="center" width="90%" cellpadding="2px" cellspacing="2">
                                <tr bgcolor="#FF9B05" style="height: 30px; padding: 50spx">
                                    <td width="100px" style="padding-left: 10px"><b>STT</b></td>
                                    <td><b>Tên sách</b></td>
                                    <td width="100px"><b>Số lượng</b></td>
                                    <td width="150px" align="right"><b>Đơn giá</b></td>
                                    <td width="150px" align="right"><b>Thành tiền</b></td>
                                    <td width="70px" align="center"><b>Xóa</b></td>
                                </tr>
                                {foreach $ds_sach as $key => $item}
                                    <tr>
                                        <td style="padding-left: 15px">
                                            {$key+1}
                                        </td>
                                        <td>
                                            {$item->ten_sach}
                                        </td>
                                        <td>
                                            <input type="text" value="{$item->so_luong}" name="soluong{$item->id}"
                                                   style="width:60px; text-align:center; margin: 5px"/>
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
                                <tr bgcolor="#FFE9D2">
                                    <td colspan="4" align="right">Tiền sách:</td>
                                    <td align="right">{number_format($tien_sach)}đ</td>
                                </tr>
                            </table>
                        {/if}
                        <p align="center" style="padding: 50px">

                            <input type="submit" name="btnCapnhat" value="Cập nhật" class="btn btn-primary"
                                   style="width: 120px"/>

                            <input type="button" class="btn btn-success"
                                   onclick="window.location.href = 'khach_hang.php?key=dat-hang'"
                                   value="Đặt hàng" class="art-button" style="width: 120px "/>

                            <input type="button" class="btn btn-danger" id="btnxoa"
                                   value="Xóa giỏ hàng" class="art-button" style="width: 120px "/>
                        </p>
                    </form>
                </div>
            {else}
                <h3 align="center" class="alert alert-info" style="font-size: 20px">Bạn chưa chọn sách nào trong giỏ
                    hàng</h3>
            {/if}
        </div>
    </div>
</section>