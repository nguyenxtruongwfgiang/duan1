<?php
function insert_account($email, $fullname, $password)
{
    $sql = "INSERT INTO `nguoi_dung`(`email`, `ho_ten`, `password`) VALUES ('$email','$fullname','$password')";
    // var_dump($sql);
    pdo_execute($sql);
}

function check_exist_email($email)
{
    $sql = "SELECT * FROM nguoi_dung WHERE email = '$email'";
    $email = getData($sql, FETCH_ONE);
    return $email;
}

function count_student(){
    $sql = "SELECT COUNT(*) as count FROM nguoi_dung WHERE quyen = 0";
    $count_student = getData($sql, FETCH_ONE);
    return $count_student;
}