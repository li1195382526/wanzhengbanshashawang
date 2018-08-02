<?php
    header("content-type:text/html;charset=utf-8");
    $uname = $_POST['uname'];
    $upwd = $_POST['upwd'];
    $db = mysql_connect("localhost","root","root");
    mysql_select_db("shashawang",$db);
    mysql_query("set names utf-8");
    $sql = "SELECT * FROM `shashausers` WHERE uname='$uname'";
    $set = mysql_query($sql);
    echo $set;
    $arr = mysql_fetch_array($set);
//  print_r($arr);
    if($uname == $arr['uname']){
        if($upwd == $arr['upwd']){
            echo "登录成功！";
        }else{
            echo "密码错误！";
        }
    }else{
        echo "<script>alert('用户名不存在！');window.location = 'login.html';</script>";
    }
