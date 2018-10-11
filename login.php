<?php
include("controllers/c_login.php");

//Create class login
$c_login = new C_Login();

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
    //Display login template
    $c_login->Init_Display();
}


