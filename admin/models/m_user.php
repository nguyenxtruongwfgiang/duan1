<?php

function get_users()
{
    $sql = "SELECT * FROM nguoi_dung WHERE quyen = 0";
    $users = getData($sql, FETCH_ALL);
    return $users;
}

function xoa_nguoi_dung_theo_id($ma_nguoi_dung)
{
    $sql = "DELETE FROM nguoi_dung WHERE ma_nguoi_dung = '$ma_nguoi_dung'";
    pdo_execute($sql);
    echo "";
}

function lay_nguoi_dung_theo_id($ma_nguoi_dung)
{
    $sql = "SELECT * FROM nguoi_dung WHERE ma_nguoi_dung = '$ma_nguoi_dung'";
    $nguoi_dung = getData($sql, FETCH_ONE);
    return $nguoi_dung;
}

function dem_hoc_vien()
{
    $sql = "SELECT COUNT(*) as total_student FROM nguoi_dung WHERE quyen = 0";
    $tong_hoc_vien = getData($sql, FETCH_ONE);
    return $tong_hoc_vien;
}

function cap_nhat_nguoi_dung($ma_nguoi_dung,$email, $ho_ten, $hinh)
{
    $sql = "UPDATE nguoi_dung SET email = '$email', ho_ten = '$ho_ten', hinh = '$hinh' WHERE ma_nguoi_dung = '$ma_nguoi_dung'";
    pdo_execute($sql);
}