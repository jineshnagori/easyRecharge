<?php
    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'easyrecharge');

    $name = $_POST['name'];
    $num = $_POST['num'];
    $operator = $_POST['operator'];
    $circle = $_POST['circle'];

    $reg = mysqli_query($con,"INSERT INTO recharge (name) SELECT name FROM registration");
    $update = mysqli_query($con,"UPDATE recharge set number='$num' where name = '$name'");
?>