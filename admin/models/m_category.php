<?php
require('../db.php');

function danh_sach_danh_muc()
{
    $sql = "SELECT * FROM danhmuc";
    $danh_sach_danh_muc = getData($sql, FETCH_ALL);
    return $danh_sach_danh_muc;
}

function them_danh_muc()
{
    if (isset($_POST['them_danhmuc'])) {
        $ten_danhmuc = $_POST['ten_danhmuc'];
        $mau_nen = $_POST['mau_nen'];
        $icon = $_POST['icon'];

        // sql query for insert data
        $sql = "INSERT INTO danhmuc (ten_danhmuc, mau_nen, icon)
                VALUES ('$ten_danhmuc', '$mau_nen', '$icon')";
        pdo_execute($sql);
        echo "<script>
            window.location.href='index.php?url=danh_sach_danh_muc';
        </script>";
        // if (pdo_execute($sql)) {

        //     header("Location:index.php?url=danh_sach_danh_muc");
        // }
    }
    // if (isset($msg)) echo $msg;
}

function xoa_danhmuc($ma_danhmuc)
{
    $sql = "DELETE FROM danhmuc WHERE ma_danhmuc = '$ma_danhmuc' ";
    pdo_execute($sql);
    echo "<script>
            window.location.href='index.php?url=danh_sach_danh_muc';
        </script>";
}

//function get category by category_id
function lay_danhmuc_theo_id($ma_danhmuc)
{
    $sql = "SELECT * FROM danhmuc WHERE ma_danhmuc = '$ma_danhmuc'";
    $danhmuc = getData($sql, FETCH_ONE);
    return $danhmuc;
}

function sua_danhmuc()
{
    if (isset($_POST['them_danhmuc'])) {
        $ma_danhmuc = $_POST['ma_danhmuc'];
        $ten_danhmuc = $_POST['ten_danhmuc'];
        $mau_nen = $_POST['mau_nen'];
        $icon = $_POST['icon'];

        // sql query for insert data
        $sql = "UPDATE danhmuc SET 
        ten_danhmuc = '$ten_danhmuc',
        mau_nen = '$mau_nen', 
        icon = '$icon' WHERE ma_danhmuc = $ma_danhmuc";
        pdo_execute($sql);
        echo "<script>
            window.location.href='index.php?url=danh_sach_danh_muc';
        </script>";
        // if (pdo_execute($sql)) {

        //     header("Location:index.php?url=danh_sach_danh_muc");
        // }
    }
}
