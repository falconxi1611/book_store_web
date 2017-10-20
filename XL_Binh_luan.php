
<?php

include_once('models/m_khach_hang.php');
$m_khach_hang=new M_khach_hang();


$Name=$_POST["id_Name"];
$Email=$_POST["id_Email"];
$Review=$_POST["id_Review"];
$Telephone=$_POST["id_Telephone"];

echo 'Cám ơn bạn '.$Name.' đã gửi bình luận';
$id_sach = 1 ; // Chưa lấy được id của sách
$ngay_binh_luan = date('Y/m/d');
$trang_thai = 1;
$m_khach_hang->themBinhLuan($id_sach,$Name,$Email,$Review,$Telephone,$ngay_binh_luan,$trang_thai)


?>