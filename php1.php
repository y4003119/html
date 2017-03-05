<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>查询结果</title>
</head>
<body>
    <fieldset>
        <legend>查询结果</legend>
        	  <?php
						$mysqli=new mysqli('localhost','root','y4003119','test');
						$sql="SELECT * FROM `name` WHERE id='$_POST[bh]'and date>='$_POST[sdate]'|date<='$_POST[edate]';";
						$result=$mysqli->query($sql);
						/*if ($result==false) {
							echo "error!";
						}
						echo "<table>";
							while ($rec=mysqli_fetch_array($result)) {
								$flc=mysqli_num_fields($result);//de dao jie guo de zi duan ge shu
								echo "<tr>";
									for ($i=0; $i <  $flc; $i++) { 
										$flname=mysqli_field_name($result,$i);
										echo "<td>" . $rec[$flname] . "</td>";
									}
								echo "</tr>";
							}
						echo "</table>";
						echo "<hr />";
						echo "Done!";*/
						$rows = mysqli_num_rows($result);
   						 $cols = mysqli_num_fields($result);
    						echo "<table border='1' align='center' width='80%'>";
    						echo "<caption>设备运行状态</caption>";
    						echo "<th>设备名</th><th>巡检人</th><th>日期</th><th>巡检点1</th><th>巡检点2</th><th>巡检点3</th><th>巡检点4</th><th>巡检点5</th><th>巡检点6</th><th>巡检点7</th><th>巡检点8</th><th>巡检点9</th><th>巡检点10</th><th>巡检点11</th><th>巡检点12</th><th>备注：</th>";
    						while ($row=mysqli_fetch_row($result)){
       						 			echo "<tr align='center'>";
       						 			foreach ($row as $data){
           								 echo "<td>".$data."</td>";
        							}
       								 	echo "</tr>";
							}
						echo "</table>";
						$mysqli->close();
	?>
    </fieldset>
</body>
</html>

