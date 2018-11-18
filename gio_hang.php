<?php
/**
 * <pre>
 * <p>[Summary]</p>
 * Route for Cart
 * </pre>
 *
 * @author ToanLD3
 *
 *
 */
include("controllers/c_gio_hang.php");
ini_set("display_errors", 1);

/** Create Cart Controller $c_gio_hang */
$c_gio_hang = new C_gio_hang();

if (isset($_POST["btnCapnhat"]))
{
    $giohang = $c_gio_hang->layGioHang();

    //Delete item in cart
    foreach ($giohang as $key => $value)
    {
        if (isset($_POST[$key]))
        {
            $c_gio_hang->xoaMatHang($key, $_POST[$key]);
        }
    }

    //Update item in cart
    $giohang = $c_gio_hang->layGioHang();
    if ($giohang)
    {
        foreach ($giohang as $key => $value)
        {
            $soluong_moi = $_POST["soluong" . $key];
            if ($soluong_moi != $value)
            {
                $c_gio_hang->capNhatGioHang($key, $soluong_moi, $_POST["dongia" . $key]);
            }
        }
    }
}

/** Render to view cart */
$c_gio_hang->xem_gio_hang();
