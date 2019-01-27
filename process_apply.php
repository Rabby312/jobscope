<?php session_start();
	if(empty($_GET))
	{
		header("location:index.php");
	
	}
	$link=mysqli_connect("localhost","root","","jobscope")or die("can not connect");
	//mysql_select_db("jobscope",$link) or die("can not select database");
	$q="insert into applicants (a_uid,a_jid)values(".$_SESSION['eeid'].",".$_GET['jid'].")";

	mysqli_query($link,$q) or die("wrong query");
	header("location:index.php");
	
?>