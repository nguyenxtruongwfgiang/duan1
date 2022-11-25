<?php 
function insert_taikhoan($email,$user,$pass){
    $spl="insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($spl);
}
function checkuser($email,$pass){
    $sql="SELECT * FROM nguoi_dung WHERE email = '$email' AND password = '$pass'";
    $user=getData($sql, FETCH_ONE);
    return $user;
}
