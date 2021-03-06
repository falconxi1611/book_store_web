<section id="content" style="padding-top: 30px">
    <div class="main" style="min-height:768px">
        <div class="container">
            <h3 align="center" style="padding-bottom: 30px">Vui lòng nhập thông tin khách hàng</h3>

            <form name="them_khach_hang" action="khach_hang.php?key=dat-hang" method="post">
                {if isset($error) > 0}
                <div class="alert alert-danger" align="center">
                    {foreach $error as $err}
                        <strong style="align-content: center">{$err}<br></strong>
                    {/foreach}
                </div>
                {/if}>
                <table align="center" width="90%" cellpadding="5px" cellspacing="5px">
                    <tr>
                        <td align="center">
                            Tên khách hàng<br/>
                            <input type="text" class="form-control" value="{if isset($customer)}{$customer->ho_ten}{/if}" name="ten_khach_hang"
                                   style="width:450px; text-align:center"/>
                    </tr>
                    <tr>
                        <td align="center">Email<br/><input type="email" value="{if isset($customer)}{$customer->email}{/if}" name="email" class="form-control"
                                                            style="width:450px; text-align:center"/></td>
                    </tr>
                    <tr>
                        <td align="center">Địa chỉ<br/><textarea name="dia_chi"
                                                                 style="width:450px; text-align:center"
                                                                 class="form-control" rows="5">{if isset($customer)}{$customer->dia_chi}{/if}</textarea></td>
                    </tr>
                    <tr>
                        <td align="center">Điện thoại<br/><input type="text" name="dien_thoai"
                                                                 style="width:450px; text-align:center" value="{if isset($customer)}{$customer->dien_thoai}{/if}"
                                                                 class="form-control"/></td>
                    </tr>

                    <tr>
                        <td align="center">Ghi chú<br/><textarea name="ghi_chu" cols="55" rows="3"
                                                                 style="width:450px; text-align:center"
                                                                 class="form-control"></textarea></td>
                    </tr>

                    <tr>
                        <td align="center">Tiền đặt cọc<br/><input type="text" name="tien_dat_coc" value="0"
                                                                   style="width:450px; text-align:center"
                                                                   class="form-control"/></td>
                    </tr>

                    <tr>
                        <td align="center">Hình thức thanh toán<br/>
                            <input type="radio" name="httt" value="tiền mặt" checked="true"/> Tiền mặt
                            <input type="radio" name="httt" value="chuyển khoản"/> Chuyển khoản
                            <input type="radio" name="httt" value="tín dụng"/> Tín dụng
                        </td>
                    </tr>

                    <tr>
                        <td align="center">
                            <input type="submit" class="btn btn-primary" value="Xác Nhận" name="submit"/>
                            <input type="button" class="btn btn-danger"
                                   onclick="window.location.href = 'gio_hang.php'"
                                   value="Quay Về"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</section>