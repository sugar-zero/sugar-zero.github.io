<html>
<title></title>
<head>
	<meta charset='utf-8'>
	<link rel="stylesheet" href="./css/cms.min.css">
</head>
<body>
<tr>
  <div>
    <ul>
       <? require_once'admin.php';
          $sql = "select * from 数据库表 where stime<= NOW() and etime >= NOW() or etime is null ORDER BY topid DESC,stime DESC,id DESC";//根据时间筛选并且根据条件排序
          $result = $conn -> query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
                  $online=$row['online'];
                  $s=$row['state'];
                  $t=$row['topid'];
                  $h=$row['href'];
                  $hl=$row['highlight'];
                  $times=date('m/d',strtotime($row['stime']));
                if($online != 1){
                  continue; 
                }else{ ?>
      				<li>
               <? }
                  if($s == 4){
                    }elseif($h != null){ ?>
                      <a href="<? echo $row[href]; ?>" target="_blank">
                        <? }else{ ?>
                        	<a href="./web_notice/?id=<? echo $row[id]; ?>">
						<? } ?>
                         <table>
                           <tbody>
                             <tr>
                               <td class="image-left">
                                 <? if ($s == 1){ ?>
                                 	<div class="new"></div>
                                 <? }elseif ($s == 2){ ?>
                                 	<div class="hot"></div>
                                 <? }elseif ($s == 3){ ?>
                                 	<div class="strong"></div>
                                 <? }elseif ($s == 4){ ?>
                                 	<div class="test"></div>
                                 <? }else{} ?>
								</td>
								<td class="image-mid">
                                 <text class="date"><? echo $times ?></text>
                                  <? if($hl == 0){
									echo $row[title]; ?>
                                  <? }elseif($hl == 1){ ?>
                                  	<font color="red"><? echo $row[title]; ?></font>
                                  <? }elseif($hl == 2){ ?>
                                  	<font color="blue"><? echo $row[title]; ?></font>
                                  <? }elseif($hl == 3){ ?>
                                  	<font color="#00b0f0"><? echo $row[title]; ?></font>
                                  <? }elseif($hl == 4){ ?>
                                  	<font color="purple"><? echo $row[title]; ?></font>
                                  <? }elseif($hl == 5){ ?>
                                  	<font color="pink"><? echo $row[title]; ?></font>
                                  <? } ?>
								</td>
                               <td class="image-right">
                                 <? if ($t == 1){ ?>
                                 	<div class="top1"></div>
                                 <? }elseif ($t == 2){ ?>
                                 	<div class="top2"></div>
                                 <? }elseif ($t == 3){ ?>
                                 	<div class="top3"></div>
                                 <? }elseif ($t >= 98){ ?>
                                 	<div class="top"></div>
                                 <? }else{} ?>
                                </td>
                             </tr>
						</tbody>
					</table>
				</a>
			</li>
			<? }}$conn->close(); ?>
		</ul>
	</div>
</tr>
<style>
.image-left{width:62px; height:50px;} 
.image-mid{width:826px;height:50px; line-height:62px; font-size:23px;} 
.image-right{width:62px; height:50px;} 
.swiper-container{height:269px;}
li{list-style: none;margin-bottom: 6px;}
body{width:950px;position:relative;margin:auto;}
</style>
</body>
</html>
