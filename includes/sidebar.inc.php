<ul>
					<li>
					<?php


				if(isset($_SESSION['status']))
				{
					echo '<h2 class="title">Hello '.$_SESSION['unm'].'!</h2>';
				}
				else
				{
					echo'
						<form action="process_login.php" method=POST>
						<b>Login:</b><br> <input type="text" name="unm" >
						<br>
						<br>
						<b>Password:</b><br><input type="password" name="pwd">
						<br>
						<br>
						<b>TYPE:<br><br><select name="cat">
										<option> employee
										<option> employer
										</select>
						<br>
						<br>
						<b><input type="submit" value="login">
						</form>
					';
					
				}
				?>
					</li>
					<li>
						<h2>categories </h2>
						<ul>
					<?php
						$link=mysqli_connect("localhost","root","","jobscope")or die("can not connect");
						//mysqli_select_db ("jobscope",$link) or die("can not select database");
						$q="select * from categories";
						$res=mysqli_query($link,$q) or die("cant connect");
						while($row=mysqli_fetch_assoc($res))
						{
							echo '<li><a href="jobs_by_category.php?cat='.$row['cat_nm'].'">'.$row['cat_nm'].'</a></li>';
						}
						mysqli_close($link);
					?>
	
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
							



						</ul>
					</li>
					
				</ul>