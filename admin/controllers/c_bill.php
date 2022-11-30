<?php
require('models/m_bill.php');

function hien_thi_danh_sach_hoa_don(){
    $danh_sach_hoa_don = danh_sach_hoa_don();
    include('view/bill/all_bill.php');
}

function xoa_hoa_don(){
    if(isset($_GET['ma_hoa_don'])){
        $ma_dk = $_GET['ma_hoa_don'];
        xoa_hoa_don_theo_id($ma_dk);
    }
}

function hien_thi_form_sua_hoa_don(){
    if(isset($_GET['ma_hoa_don'])){
        $ma_dk = $_GET['ma_hoa_don'];
        $chi_tiet_hoa_don = chi_tiet_hoa_don_theo_id($ma_dk);
        $nguoi_dung = lay_nguoi_dung_theo_id($chi_tiet_hoa_don['ma_nguoi_dung']);
        $class = get_class_by_id($chi_tiet_hoa_don['ma_lop']);
        $course = lay_khoa_hoc_theo_id($chi_tiet_hoa_don['ma_khoa_hoc']);
        include('view/bill/bill_detail.php');
    }
}
?>