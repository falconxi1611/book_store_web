<script>
function Hoi_xoa(id)
{
	if(confirm("Bạn có muốn xóa sách hiện hành?"))
	{
		window.location='xoasach.php?id=' + id;	
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
          <th width="63">Mã sách</th>
          <th width="150">Tên sách</th>
          <th width="161">Loại sách</th>
          <th width="118">Tác giả</th>
          <th width="128">Đơn Giá</th>
          <th width="72">&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="8">
            <div class="div_phan_trang">{$lst}</div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        
        {foreach $sachs as $sach}
        
        <tr>
          
          <td>{$sach->id}</td>
          <td><a href="suatintuc.php?ma_sach=" title="Edit">{$sach->ten_sach}</a></td>
          {foreach $loai_sachs as $loai}
          	{if $sach->id_loai_sach == $loai->id}
		  <td>{$loai->ten_loai_sach}</td>
         	{/if}
          {/foreach}
          {foreach $tac_gia as $tg}
            {if $sach->id_tac_gia == $tg->id}
          <td width="129">{$tg->ten_tac_gia}</td>
            {/if}
          {/foreach}
          <td>{number_format($sach->don_gia)} đ</td>
          
          <td><!-- Icons --> 
            <a href="suasach.php?id={$sach->id}" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:Hoi_xoa({$sach->id})" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
		</td>
        </tr>
  
        {/foreach}
      </tbody>
    </table>
   
  </div>
  
</div>
