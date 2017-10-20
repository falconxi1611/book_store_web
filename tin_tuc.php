<?php
include('controllers/c_tin_tuc.php');
$c_tin_tuc = new C_tin_tuc();
$c_tin_tuc->Hien_thi_tin_tuc();
//include('models/m_tin_tuc.php');
//$m_tin_tuc = new M_tin_tuc();
//$tin_tucs = $m_tin_tuc->Doc_tin_tuc();
//foreach ($tin_tucs as $tin)
//{
//	echo $tin->tieu_de_tin;exit;
//}
?>