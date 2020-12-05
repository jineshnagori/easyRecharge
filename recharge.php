<?php
    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'easyrecharge');

    // $username = $_POST['username'];
    $username = $_SESSION['username'];
    $phone = $_POST['phone'];
    $operator = $_POST['operator'];
    $circle = $_POST['circle'];
    if (mysqli_query($con,"INSERT INTO recharge (name,username) SELECT name,username FROM registration WHERE username='$username'")) {
        header('location:plans.html');
    }
    $result = mysqli_query($con,"update recharge set phone='$phone', operator='$operator', circle='$circle' where username = '$username'") or die("failed to query database".mysqli_error());
?>