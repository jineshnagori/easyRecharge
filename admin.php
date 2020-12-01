<?php

    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'easyrecharge');

    $username = $_POST['username'];

    $password = $_POST['password'];

    $_SESSION['username']=$username;

    $q = " select * from admin where username = '$username' && password ='$password' ";

    $result = mysqli_query($con,$q);

    $row = mysqli_num_rows($result);

    if($row == 1){
        header('location: /easyRecharge/admin');	
    }
    else{
        header('location:index.html');
    }
?>