<?php
require('models/m_comment.php');

function hien_thi_danh_sach_binh_luan(){
    $danh_sach_binh_luan = danh_sach_binh_luan();
    include('view/comment/all_comment.php');
}

function xoa_binh_luan(){
    if(isset($_GET['ma_binh_luan'])){
        $ma_binh_luan = $_GET['ma_binh_luan'];
        xoa_binh_luan_theo_id($ma_binh_luan);
        echo "<script>
            history.go(-1);
        </script>";
    }
}
?>