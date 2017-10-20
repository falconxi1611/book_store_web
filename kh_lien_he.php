<?php
include "controllers/c_kh_lien_he.php";
$c_kh_lien_he = new C_kh_lien_he();
if(isset($_GET['key'])) 
{
    $key=$_GET['key'];
    if($key=='kh-lien-he')
    {
        $c_kh_lien_he->kh_lien_he();
    }
	if($key=='Newsletter')
    {
        $c_kh_lien_he->Newsletter();
    }
	if($key=='binh-luan')
    {
        $c_kh_lien_he->kh_binh_luan();
    }
}

?>