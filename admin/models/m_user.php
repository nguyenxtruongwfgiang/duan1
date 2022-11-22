<?php

function get_users(){
    $sql = "SELECT * FROM nguoi_dung WHERE quyen = 0";
    $users = getData($sql, FETCH_ALL);
    return $users;
}
?>