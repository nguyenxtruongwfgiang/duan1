<?php
require('../db.php');

function danh_sach_danh_muc()
{
    $sql = "SELECT * FROM danhmuc";
    $danh_sach_danh_muc = getData($sql, FETCH_ALL);
    return $danh_sach_danh_muc;
}

function them_danh_muc($ten_danhmuc)
{
    $sql = "INSERT INTO danhmuc (ten_danhmuc) VALUES ('$ten_danhmuc')";
    pdo_execute($sql);
}

function xoa_danhmuc($ma_danhmuc)
{
    $sql = "DELETE FROM danhmuc WHERE ma_danhmuc = '$ma_danhmuc' ";
    pdo_execute($sql);
}

//function get category by category_id
function lay_danhmuc_theo_id($ma_danhmuc)
{
    $sql = "SELECT * FROM danhmuc WHERE ma_danhmuc = '$ma_danhmuc'";
    $danhmuc = getData($sql, FETCH_ONE);
    return $danhmuc;
}

function sua_danhmuc($ma_danhmuc, $ten_danhmuc)
{
    $sql = "UPDATE danhmuc SET ten_danhmuc = '$ten_danhmuc' WHERE ma_danhmuc = $ma_danhmuc";
    pdo_execute($sql);
}
