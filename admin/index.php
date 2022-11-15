<?php
include('view/header.php');

$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch($url){
    case '/':
        include('view/dashboard.php');
        break;
    case 'hoc_vien':
        include('view/dashboard.php');
        break;
}

include('view/footer.php');
