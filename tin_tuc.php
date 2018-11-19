<?php
/**
 * <pre>
 * <p>[Summary]</p>
 * Route for news
 * </pre>
 *
 * @author ToanLD3
 *
 */
include('controllers/c_tin_tuc.php');
$c_tin_tuc = new C_tin_tuc();
$c_tin_tuc->Hien_thi_tin_tuc();
