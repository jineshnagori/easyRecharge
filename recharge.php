<?php
    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con, 'easyrecharge');

    $name = $_POST['name'];
    $num = $_POST['number'];
    $operator = $_POST['operator'];
    $circle = $_POST['circle'];

    $reg = mysqli_query($con," insert into recharge (name, num, operator, circle) values ('$name','$number','$operator','$circle')");
?>