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
