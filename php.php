<?php 
	//var_dump($_POST);
	$v1=date("Y-m-d");
	$mysqli=new mysqli('localhost','root','y4003119','test');
	$sql="INSERT INTO `name`(`id`, `uname`, `Date`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `bz`) VALUES ('$_POST[id]','$_POST[uname]','$v1','$_POST[1]','$_POST[2]','$_POST[3]','$_POST[4]','$_POST[5]','$_POST[6]','$_POST[7]','$_POST[8]','$_POST[9]','$_POST[10]','$_POST[11]','$_POST[12]','$_POST[bz]');";
	$result=$mysqli->query($sql);
	if ($result==false) {
		echo "error!";
	}
	/*else{
		echo "<table border='1'>";
		while ($record=mysqli_fetch_array($result)) {
			echo  "<tr>";
			echo "<td>" . $record['id'] . "</td>";
			echo "<td>" . $record['name'] . "</td>";
			echo  "<td></d>";
			echo "</tr>";
		}
		echo "</table>";
	}*/
	echo "Done!";
	$mysqli->close();
?>

