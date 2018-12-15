<!DOCTYPE html>
<html>
	<body>
		
		<?php 
		
		include("mysql_connect.inc.php");
			/*$servername="localhost";
			$username="root";
			$password="";
			
			$conn=mysqli_connect($servername,$username,$password);
			
			if(!$conn)
			{
				die("Connection failed:".mysqli_connect_error());
			}
			mysqli_select_db($conn,"conference");*/
			
			$sql="SELECT *
					FROM user_info
					WHERE username='".$_GET['text']."' AND passwd=$_GET[password]";
			mysqli_query($conn, 'SET CHARACTER SET utf8');
			mysqli_query($conn,'SET NAMES utf8');
			$result=mysqli_query($conn,$sql);
			
			if((mysqli_num_rows($result))>0)
			{
				$row=mysqli_fetch_assoc($result);
				session_start();
				$_SESSION['viewer']=$row['username'];
				die("<script> window.alert('HI'),location.href=\"map_success.html\"; </script>");
			}
			else
			{
				die("<script> window.alert('No user in Database'),location.href=\"index1.html\"; </script>");
			}
			?>
	</body>
</html>
		