<?php
$id = $_POST['id'];
include('models/m_tin_tuc.php');
$m_tin_tuc = new M_tin_tuc();
$tin = $m_tin_tuc->Doc_tin_tuc_theo_id($id);
?>
<div class="w3l_faq_grid">
	<h3> <?php echo $tin->tieu_de_tin ?></h3>
	<p><?php echo $tin->noi_dung_chi_tiet ?></p>
</div>