<?php
	if(empty($_GET))
	{
		header("location:index.php");
	}
	
		$link=mysqli_connect("localhost","root","","jobscope")or die("can not connect");
		//mysql_select_db("jobscope",$link) or die("can not select database");
		
		$q="delete from jobs where j_id=".$_GET['id'];
		
		mysqli_query($link,$q);
		
		header("location:manage.php");	
?>