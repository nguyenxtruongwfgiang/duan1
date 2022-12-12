<?php

function get_class_list()
{
    $sql = "SELECT * FROM lop";
    $class_list = getData($sql, FETCH_ALL);
    return $class_list;
}

function get_class_by_id($class_id)
{
    $sql = "SELECT * FROM lop WHERE ma_lop = '$class_id'";
    $class = getData($sql, FETCH_ONE);
    return $class;
}

function add_class($ten_lop, $ca_hoc, $ngay_khai_giang, $dia_diem_hoc, $ma_khoa_hoc, $ma_giang_vien, $so_cho)
{
    $sql = "INSERT INTO lop(ten_lop, ca_hoc, ngay_khai_giang, dia_diem_hoc, ma_khoa_hoc, ma_giang_vien, so_cho)
        VALUES ('$ten_lop', '$ca_hoc', '$ngay_khai_giang', '$dia_diem_hoc', '$ma_khoa_hoc', '$ma_giang_vien', '$so_cho')";
    pdo_execute($sql);
    echo "<script>
            window.location.href='index.php?url=all_classes';
        </script>";
}

function delete_class_by_id($class_id)
{
    $sql = "DELETE FROM lop WHERE ma_lop = '$class_id'";
    pdo_execute($sql);
    echo "<script>
        window.location.href='index.php?url=all_classes';
    </script>";
}

function edit_class($ma_lop, $ten_lop, $ca_hoc, $ngay_khai_giang, $dia_diem_hoc, $ma_khoa_hoc, $ma_giang_vien, $so_cho)
{
    $sql = "UPDATE lop SET 
        ten_lop = '$ten_lop', ca_hoc = '$ca_hoc', ngay_khai_giang = '$ngay_khai_giang', dia_diem_hoc = '$dia_diem_hoc',
        ma_khoa_hoc = '$ma_khoa_hoc', ma_giang_vien = '$ma_giang_vien', so_cho = '$so_cho' WHERE ma_lop = '$ma_lop'";
    pdo_execute($sql);
}
