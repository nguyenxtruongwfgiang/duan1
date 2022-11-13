<?php
require('controllers/c_home.php');

include('view/client/header.php');

$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url){
    case '/':
        hien_thi_trang_chu();
        break;
    case 'trang_chu':
        hien_thi_trang_chu();
        break;
}

include('view/client/footer.php');
