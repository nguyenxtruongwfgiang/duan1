<?php
require('models/m_user.php');

function hien_thi_dashboard(){
    $users = get_users();
    include('view/user/dashboard.php');
}
?>