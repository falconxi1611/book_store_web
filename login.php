<?php
include("controllers/c_user.php");

//Create class login
$c_login = new C_user();

//Check login
if (isset($_POST['btn_login']) > 0)
{
    $c_login->Sign_In();
}
if (isset($_GET["logout"]))
{
    $c_login->Logout();
}
else
{
    //Display login itinial
    $c_login->Init_Display();
}


