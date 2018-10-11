<?php
require_once("database.php");

class M_user extends database
{
    function Login($username, $password)
    {
        $sql = "SELECT * FROM bs_nguoi_dung WHERE tai_khoan=? AND mat_khau=?";
        $this->setQuery($sql);
        return $this->loadRow(array($username, md5($password)));
    }
}

?>