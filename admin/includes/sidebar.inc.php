<ul>
					<li>
	
						<b>Login:</b><br> <input type="text">
						<br>
						<br>
						<b>Password:</b><br><input type"text">
					</li>
					<li>
						<h2>categories </h2>
						<ul>
						
<?php
$link=mysqli_connect("localhost","root","","jobscope")or die("can not connect");
//mysql_select_db ("jobscope",$link) or die("can not select database");
$q="select * from categories";
$res=mysqli_query($link,$q) or die("cant connect");
while($row=mysqli_fetch_assoc($res))
{
	echo '<li><a href="jobs_by_category.php">'.$row['cat_nm'].'</a></li>';
}
mysqli_close($link);
?>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
							<li><a href="jobs_by_category.php">IT-software service</a></li>
							<li><a href="jobs_by_category.php">IT-hardware service</a></li>
							<li><a href="jobs_by_category.php">Atomobile</a></li>
							<li><a href="jobs_by_category.php">Banking</a></li>
							<li><a href="jobs_by_category.php">Construction</a></li>
							<li><a href="jobs_by_category.php">Engineering design</a></li>
						    <li><a href="jobs_by_category.php">Export-Inport</a></li>
					        <li><a href="jobs_by_category.php">Travel</a></li>
							<li><a href="jobs_by_category.php">AirLine</a></li>
							<li><a href="jobs_by_category.php">Telecom</a></li>
							<li><a href="jobs_by_category.php">Insurance</a></li>



						</ul>
					</li>
					
				</ul>