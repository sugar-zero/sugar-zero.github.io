<?php
// 创建数据库连接
$servername="localhost";
$username="sugar_notice";
$password="FMILY137915-";
$testgame="sugar_notice";

$conn = new mysqli($servername,$username,$password,$testgame);
mysqli_query($conn,'set names utf8');
?>