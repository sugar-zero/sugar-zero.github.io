<html>
<head>
<?php
if($_GET['id'] == null){
header('HTTP/1.1 404 Not Found');
header("status: 404 Not Found");
}
require_once'../admin.php';

$uid=$_GET['id'];
$sql = "select * from 数据库表 where id = $uid";//具体显示根据获得ID
$result = $conn -> query($sql);
?>
<meta charset='utf-8'>
  <style>
    *{font-family: Microsoft Yahei}
  </style>
  <title><? if ($result->num_rows > 0) { while($row = $result->fetch_assoc()){ echo $row['title'];?></title>
</head>
<body>
  <?php 
  $l=$row['licence'];
  $hl=$row['highlight'];
  if($l == -1 || $l =='null'){//这里是根据数据库配置的是否可读判断，非可读则404
  	header('HTTP/2 404 Not Found ');
	header("status: 404 Not Found ");
  }else{?>
  <div div style="padding:0 5%">
    <? if($hl == 0){ ?>
		<h2><?echo $row[title];?></h2>
    <? }elseif($hl == 1){?>
    	<h2><font color='red'><? echo $row[title]; ?></font></h2>
    <? }elseif($hl == 2){ ?>
    	<h2><font color='blue'><? echo $row[title]; ?></font></h2>
     <? }elseif($hl == 3){ ?>
    	<h2><font color='#00b0f0'><? echo $row[title]; ?></font></h2>
    <? }elseif($hl == 4){ ?>
    	<h2><font color='purple'><? echo $row[title]; ?></font></h2>
    <? }elseif($hl == 5){ ?>
    	<h2><font color='pink'><? echo $row[title]; }?></font></h2>
          <?echo $row['notice'];}}} ?>
  </div>
</body>
</html>