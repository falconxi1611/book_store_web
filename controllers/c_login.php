<?php
@session_start();
include("Smarty_Book.php");

class C_login
{
    public function Hien_thi()
    {
        //View
        $smarty = new Smarty_book();
        $smarty->display("login.tpl");
    }
}

?>