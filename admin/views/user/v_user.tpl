<script>
function Hoi_xoa(id)
{
	if(confirm("Bạn chắc chắn muốn xóa người dùng hiện hành?"))
	{
		window.location='xoauser.php?id=' + id;	
	}	
}
</script>
<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <h3 style="text-align:center; color:red">{if isset($msg)}{$msg}{/if} </h3>
    <table>
      <thead>
        <tr>
          <th width="63">ID</th>
          <th width="118">Tài khoản</th>
          <th width="124">Loại người dùng</th>
          <th>Họ Tên</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>Điện thoại</th>
          <th width="162">&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="9">
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        
        {foreach $users as $user}
        <tr>
          
          <td>{$user->id}</td>
          <td><a href="user.php?id={$user->id}" title="Edit">{$user->tai_khoan}</a></td>
          {foreach $loai_users as $loai}
          {if $user->id_loai_user == $loai->id}
          <td>{$loai->ten_loai_nguoi_dung}</td>
          {/if}
          {/foreach}
          <td width="147">{$user->ho_ten}</td>
          <td width="147">{$user->email}</td>
          <td width="147">{$user->dia_chi}</td>
          <td width="147">{$user->dien_thoai}</td>
          <td><!-- Icons --> 
            <a href="suauser.php?id={$user->id}" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:Hoi_xoa({$user->id})" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
		</td>
        </tr>
        {/foreach}
      </tbody>
    </table>
   
  </div>
  
</div>
