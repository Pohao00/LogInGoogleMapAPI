<!DOCTYPE html>
<html>
	<body>
<?php
//資料庫設定

	$servername="localhost";
	$username="test123";
	$password="test123";
			
			$conn=mysqli_connect($servername,$username,$password);
			mysqli_query($conn, 'SET CHARACTER SET utf8');
			if(!$conn)
			{
				die("Connection failed:".mysqli_connect_error());
			}
			

//資料庫連線採UTF8
mysqli_query($conn, 'SET CHARACTER SET utf8');mysqli_query($conn,'SET NAMES utf8');

//選擇資料庫
if(!@mysqli_select_db($conn,"sensor_network"))
{
	die("<script> window.alert('無法使用資料庫'),location.href=\"index.html\"; </script>");
}
else
{}
?>

</body>
</html>