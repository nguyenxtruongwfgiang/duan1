<?php
require('db.php');

function danh_sach_danh_muc(){
    $sql = "SELECT * FROM danhmuc";
    $danh_sach_danh_muc = getData($sql, FETCH_ALL);
    return $danh_sach_danh_muc;
}

function show_limit_categories()
{
    $sql = "SELECT * FROM danhmuc order by ma_danhmuc desc limit 9";
    $categories = getData($sql, FETCH_ALL);
    return $categories;
}

function get_category_by_course($ma_danh_muc){
    $sql = "SELECT * FROM danhmuc WHERE ma_danhmuc = '$ma_danh_muc'";
    $category = getData($sql, FETCH_ONE);
    return $category;
}