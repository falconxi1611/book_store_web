<?php
/**
 * <pre>
 * <p>[Summary]</p>
 * Library for check error
 * </pre>
 *
 * @author ToanLD
 */

/** Error code Login */
const ERR101 = 'Vui lòng nhập vào Username';
const ERR102 = 'Vui lòng nhập vào Password';
const ERR103 = 'Username có độ tối đa 32 ký tự';
const ERR104 = 'Password có độ tối đa 64 ký tự';
const ERR105 = 'Username hoặc Password không hợp lệ';


/**
 * <pre>
 * <p>[Summary]</p>
 * Check data input login
 * </pre>
 *
 * @param  string $user_name Username
 * @param  object $password  Password
 *
 * @return array $err Error Code
 */
function checkErrorInputLogin($user_name, $password)
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
