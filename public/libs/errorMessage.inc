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

/** Error code Order Cart*/
const ERR201 = 'Vui lòng nhập họ tên';
const ERR202 = 'Vui lòng nhập email';
const ERR203 = 'Vui lòng nhập địa chỉ';
const ERR204 = 'Vui lòng nhập số điện thoại';
const ERR205 = 'Vui lòng nhập họ tên tối 50 ký tự';
const ERR206 = 'Vui lòng nhập đúng định dạng email';
const ERR207 = 'Vui lòng nhập địa chỉ tối đa 200 ký tự';
const ERR208 = 'Vui lòng nhập số điện thoại tối đa 10 chữ số';
const ERR209 = 'Vui lòng nhập ghi chú tối đa 200 ký tự';
const ERR210 = 'Vui lòng nhập số điện thoại với định dạng là số';
const ERR211 = 'Vui lòng nhập số tiền cọc với định dạng là số';


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

/**
 * <pre>
 * <p>[Summary]</p>
 * Check data input order
 * </pre>
 *
 * @param  string $ten_khach_hang Ten Khach Hang
 * @param  string $email          Email
 * @param  string $dia_chi        Dia Chi
 * @param  string $dien_thoai     Dien Thoai
 *
 * @return array $err Error Code
 */
function checkErrorInputOrder($ten_khach_hang, $email, $dia_chi, $dien_thoai, $ghi_chu, $so_tien)
{
    $flg_check = 0;
    $err = array();
    if (strlen($ten_khach_hang) < 0)
    {
        $err[] = ERR201;
    }
    if (strlen($email) == 0)
    {
        $err[] = ERR202;
        $flg_check = 1;
    }
    if (strlen($dia_chi) == 0)
    {
        $err[] = ERR203;
    }
    if (strlen($dien_thoai) == 0)
    {
        $err[] = ERR204;
    }
    if (strlen($ten_khach_hang) > 50)
    {
        $err[] = ERR205;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && $flg_check == 0)
    {
        $err[] = ERR206;
    }
    if (strlen($dia_chi) > 100)
    {
        $err[] = ERR207;
    }
    if (strlen($dien_thoai) > 10)
    {
        $err[] = ERR208;
    }
    if (strlen($ghi_chu) > 200)
    {
        $err[] = ERR209;
    }
    if(is_numeric($dien_thoai) == false)
    {
        $err[]= ERR210;
    }
    if(is_numeric($so_tien) == false)
    {
        $err[]= ERR211;
    }


    return $err;
}