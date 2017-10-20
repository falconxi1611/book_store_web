<script>
function Hoi_xoa(ma_tin_tuc)
{
	if(confirm("Bạn xóa tin hiện hành?"))
	{
		window.location='xoatintuc.php?ma_tin_tuc=' + ma_tin_tuc;	
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
          <th width="63">Mã tin</th>
          <th width="118">Tiêu đề</th>
          <th width="207">Nội dung tóm tắt</th>
          <th>Ngày đăng</th>
          <th width="88">&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="div_phan_trang">{$lst}</div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        
        {foreach $tin_tuc as $tin}
        <tr>
          
          <td>{$tin->id}</td>
          <td><a href="suatintuc.php?ma_tin_tuc={$tin->id}" title="Edit">{$tin->tieu_de_tin}</a></td>
          <td>{$tin->noi_dung_tom_tat}</td>
          <td width="138">{$tin->ngay_dang}</td>
          <td><!-- Icons --> 
            <a href="suatintuc.php?ma_tin_tuc={$tin->id}" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:Hoi_xoa({$tin->id})" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
		</td>
        </tr>
        {/foreach}
      </tbody>
    </table>
   
  </div>
  
</div>
