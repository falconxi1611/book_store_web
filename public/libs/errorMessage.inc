<?php
/**
 * Created by PhpStorm.
 * User: ductoan
 * Date: 11-Oct-18
 * Time: 21:39
 */
define("ERR101", "Vui lòng nhập vào Username");
define("ERR102", "Vui lòng nhập vào Password");
define("ERR103", "Username có độ tối đa 32 ký tự");
define("ERR104", "Password có độ tối đa 64 ký tự");
define("ERR105", "Username hoặc Password không hợp lệ");

function checkErrorInput($user_name, $password)
{
    $err = array();
    if (strlen($user_name) == 0)
    {
        $err[] = ERR101;
    }
    if (strlen($user_name) > 32)
    {
        $err[] = ERR103;
    }
    if (strlen($password) == 0)
    {
        $err[] = ERR102;
    }
    if (strlen($password) > 64)
    {
        $err[] = ERR104;
    }

    return $err;
}
