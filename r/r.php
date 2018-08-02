<?php
    @header("content-type:text/html;charset=utf8");
    $conne = mysql_connect("localhost","root","root")or die("数据库用户名密码错误".@mysql_error());
    $select =mysql_select_db("shasha",$conne);
    $utf = mysql_query("set names utf8");
    $username=$_REQUEST['username'];
    $pass = $_REQUEST['pass'];
    $arrays = array(array('one'=>'nameerror','two'=>'passerror'));
    $sqlname = mysql_query("select count(*) from user where username= '$username'");
    $row = mysql_fetch_row($sqlname);
    $num = $row[0];
    //查看用户是否存在
    if(!$num){
        echo json_encode($arrays[0]['one']);//不存在返回nameerror
    }else{
        $sqlpass = mysql_query("select pass from user where username='$username'");//返回一个句柄；
        $passarray = mysql_fetch_row($sqlpass);//获得一个只有一行数据的数族
        $passval = $passarray[0];//这里才是对应用户的密码
        //判断该用户的密码是否正确
        if($passval!=$pass){
            echo json_encode($arrays[0]['two']);//不正确返回passerror
        }
    }
?>