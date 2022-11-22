<?php
require('models/m_user.php');

function hien_thi_dashboard(){
    $users = get_users();
    include('view/user/dashboard.php');
}

function xoa_nguoi_dung(){
    if(isset($_GET['ma_nguoi_dung'])){
        $ma_nguoi_dung = $_GET['ma_nguoi_dung'];
        xoa_nguoi_dung_theo_id($ma_nguoi_dung);
    }
}

function form_sua_nguoi_dung(){
    if(isset($_GET['ma_nguoi_dung'])){
        $ma_nguoi_dung = $_GET['ma_nguoi_dung'];
        $nguoi_dung = lay_nguoi_dung_theo_id($ma_nguoi_dung);
        include('view/user/sua_user.php');
    }
}
?>