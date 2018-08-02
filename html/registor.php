<?php
    header("content-type:text/html;charset=utf-8");

    $uname = $_POST['uname'];
    $upwd = $_POST['upwd'];
    // echo "<script>alert($uname);</script>";
    $db = mysql_connect("localhost","root","root");
    mysql_select_db("shashawang",$db);
    mysql_query("set names utf-8");
    $sql = "INSERT INTO `shashausers`( `uname`, `upwd`) VALUES ('$uname','$upwd')";
    // echo $sql;
    $row = mysql_query($sql);
    // echo $row;
    if($row){
        echo "注册成功！";
    }else{
        echo "<script> alert('注册失败！');location.href = 'register.html';</script>";
    }