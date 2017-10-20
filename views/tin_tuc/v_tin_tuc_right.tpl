{foreach $tin_tucs as $tin_tuc}
     <div class="tin_tuc" style="padding-bottom: 25px">
      <a href="javascript:Doc_tin_tuc({$tin_tuc->id})"><img  src="public/layout/hinh_tin_tuc/{$tin_tuc->hinh_dai_dien}" alt="" width="210px" height="125px" align="right"></a>
<h3>{$tin_tuc->tieu_de_tin}</h3>
    <p>{$tin_tuc->noi_dung_tom_tat}</p>
    <a href="javascript:Doc_tin_tuc({$tin_tuc->id})" class="button-2" style="height:5px; line-height:5px; border-radius:5px">Xem tiếp</a>  
</div>
{/foreach}
<div class="div_phan_trang">{$lst}</div>  