<?php

function danh_sach_hoa_don()
{
    $sql = "SELECT * FROM dang_ki";
    $danh_sach_hoa_don = getData($sql, FETCH_ALL);
    return $danh_sach_hoa_don;
}

function xoa_hoa_don_theo_id($ma_dk)
{
    $sql = "DELETE FROM dang_ki WHERE ma_dk = '$ma_dk'";
    pdo_execute($sql);
}

function chi_tiet_hoa_don_theo_id($ma_dk)
{
    $sql = "SELECT * FROM dang_ki WHERE ma_dk = '$ma_dk'";
    $chi_tiet_hoa_don = getData($sql, FETCH_ONE);
    return $chi_tiet_hoa_don;
}

function sua_hoa_don_theo_id($ma_dk, $trang_thai)
{
    $sql = "UPDATE dang_ki SET trang_thai = '$trang_thai' WHERE $ma_dk = '$ma_dk'";
    pdo_execute($sql);
}
