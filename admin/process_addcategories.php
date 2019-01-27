<?php session_start();
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}
if(empty($_POST))
{
	exit;
}
$msg=array();

if(empty($_POST['nm']))
{
	$msg[]="One of the field is empty";
}

if(!empty($msg))
{
	echo "<b>Errors:</b><br>";
	foreach($msg as $k)
	{
		echo "<li>".$k;
	}
}
else
{
	$link=mysqli_connect("localhost","root","","jobscope") or die("cant connect");
	//mysql_select_db("jobscope",$link) or die("cant select db");
	$nm=$_POST['nm'];
	$q="insert into categories(cat_nm)values('$nm')";
	mysqli_query($link,$q) or die("wrong query");
	mysqli_close($link);
	header("location:category.php");
}