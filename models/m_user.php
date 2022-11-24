<?php
function insert_account($email, $fullname, $password)
{
    $sql = "INSERT INTO `nguoi_dung`(`email`, `ho_ten`, `password`) VALUES ('$email','$fullname','$password')";
    // var_dump($sql);
    pdo_execute($sql);
}
