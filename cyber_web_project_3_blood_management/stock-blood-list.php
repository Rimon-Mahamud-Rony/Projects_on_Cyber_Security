<?php
ob_start();
include ('head.php');
include('connection.php');

session_start();
?>


	<div id="inner-full">
		
	<div id="header">
		<h2 align="center"><a href="admin.php" style="text-decoration: none;color: white;">Blood Bank Management System</a></h2>
	</div>
			<div id="body">
				<br>
					<?php
		            $un=$_SESSION['un'];
		            if(!$un)
		            {
		            	header("Location:index.php");
		            }

					?>
				    <h1>Stock Blood List</h1>
				    <center><div id="form">
				    	<table>
				    		<tr>
				    			<td><center><b><font color="white">Name</font></b></center></td>
				    			<td><center><b><font color="white">Qty</font></b></center></td>
				    		</tr>
				    		
				    			<tr>
				    				<td><center>O+</center></td>
				    				<td><center>
				    					<?php
				    					$q=$db->query("SELECT *FROM donor_registration WHERE bgroup='o+'");
				    					echo $row=$q->rowcount();
				    					?>
				    				</center></td>
				    			</tr>
				    		
				    		    <tr>
				    				<td><center>AB+</center></td>
				    				<td><center>
				    					<?php
				    					$q=$db->query("SELECT *FROM donor_registration WHERE bgroup='AB+'");
				    					echo $row=$q->rowcount();
				    					?>
				    				</center></td>
				    			</tr>

				    			<tr>
				    				<td><center>AB-</center></td>
				    				<td><center>
				    					<?php
				    					$q=$db->query("SELECT *FROM donor_registration WHERE bgroup='AB-'");
				    					echo $row=$q->rowcount();
				    					?>
				    				</center></td>
				    			</tr>

				    			<tr>
				    				<td><center>A+</center></td>
				    				<td><center>
				    					<?php
				    					$q=$db->query("SELECT *FROM donor_registration WHERE bgroup='A+'");
				    					echo $row=$q->rowcount();
				    					?>
				    				</center></td>
				    			</tr>

				    			<tr>
				    				<td><center>A-</center></td>
				    				<td><center>
				    					<?php
				    					$q=$db->query("SELECT *FROM donor_registration WHERE bgroup='A-'");
				    					echo $row=$q->rowcount();
				    					?>
				    				</center></td>
				    			</tr>

				    			<tr>
				    				<td><center>O-</center></td>
				    				<td><center>
				    					<?php
				    					$q=$db->query("SELECT *FROM donor_registration WHERE bgroup='o-'");
				    					echo $row=$q->rowcount();
				    					?>
				    				</center></td>
				    			</tr>

				    			<tr>
				    				<td><center>B+</center></td>
				    				<td><center>
				    					<?php
				    					$q=$db->query("SELECT *FROM donor_registration WHERE bgroup='B+'");
				    					echo $row=$q->rowcount();
				    					?>
				    				</center></td>
				    			</tr>

				    			<tr>
				    				<td><center>B-</center></td>
				    				<td><center>
				    					<?php
				    					$q=$db->query("SELECT *FROM donor_registration WHERE bgroup='B-'");
				    					echo $row=$q->rowcount();
				    					?>
				    				</center></td>
				    			</tr>

						</table>
						</div>
						</center>
						</div>
					</div>
						<?php
						include 'footer.php';
						?>
				</div>
			</body>

						                      
								
                      <!--
							<?php

								//$sql = "SELECT * FROM donor_registration";
	   							$retval// = mysqli_query($db,$sql);	
	           				?>
		           			<?php //while($r1=mysqli_fetch_assoc($retval)) : ?>
		                <tr>
		                       <td> <center> <?php //echo $r1['name'];?> </center></td>
		                       <td> <center> <?php //echo $r1['age'];?> </center></td>
		                       <td> <center> <?php //echo $r1['address'];?> </center></td>
		                       <td> <center> <?php //echo $r1['city'];?> </center></td>
		                       <td> <center> <?php //echo $r1['email'];?> </center></td>
		                       <td> <center> <?php //echo $r1['mno'];?> </center></td>
		                       <td> <center> <?php //echo $r1['bgroup'];?> </center></td>	                       
		                </tr>
		                <?php// endwhile; ?>   
		                -->   
							
</html>