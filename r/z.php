<?php
@header("content-type:text/html;charset=uft8");
$conne = mysql_connect("localhost","root","root")or die("数据库用户名或密码错误".@mysql_error());
$select = mysql_select_db("shasha",$conne)or die("数据库用户名或密码错误".@mysql_error());
$utf = mysql_query("set names utf8");
$username= $_REQUEST['username'];
$pass = $_REQUEST['pass'];
$arrays = array(array("one"=>'repeat','two'=>'success'));
$sql  = mysql_query("select count(*) from user where username='$username'");
$row = mysql_fetch_row($sql);
$num = $row[0];
//判断用户名是否已经被注册了
if($num == 1){
    echo json_encode($arrays[0]['one']);//被注册返回repeat
}else{
    mysql_query("insert into user(username,pass) values('$username','$pass')");
    echo json_encode($arrays[0]['two']);
}
?>