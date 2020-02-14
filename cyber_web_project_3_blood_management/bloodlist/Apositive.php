<?php
ob_start();
include ('aheader.php');
include('../connection.php');
session_start();
?>


<h1 style="text-align: center;"><a href="../admin.php" style="text-decoration: none;color: green;">Blood Information</a></h1><hr>
<body style="" >
	<div id="full" class="container">
		<div id="inner-full">
			<h6 class="alert alert-warning">Please select your blood group to know the blood informations:</h6><hr>
			<form action="" method="post">
							<select name="bgroup">
								<option></option>
								<option>A+</option>
								<option>B+</option>
								<option>O+</option>
								<option>AB+</option>
								<option>A-</option>
								<option>B-</option>
								<option>O-</option>
								<option>AB-</option>
							</select>
							<input type="submit" name="sub" value="Search your blood" ></td>
			</form>
			
			
        <?php
        	$blname='';
         if (isset($_POST['sub'])) {
        	 $blname=$_POST['bgroup'];
        	 if ($_POST['bgroup']=='') {
        	 	echo '<h3 style="background-color:red; color:white;">&nbsp;Please select any of the blood group</h3>';
        	 }
        	}

         ?>
         <hr>

			<h6 class="alert alert-danger">Information about current: <?=$blname;?> blood group</h6>
										<?php 
												$q=$db->query("SELECT *FROM donor_registration  WHERE bgroup='$blname' "); 
												$row=$q->rowcount();
												if ($row<1) {
							    						echo '<h4 style="color:red;">'.$blname. ' blood is limited </h4>';
							    					}
							    					else{
							    						echo '<h4 style="color:green;">We have only '.$row.' bags of '.$blname. 'blood</h4>';
							    					}
							    					echo'<br>';
											?>
											<h4 style="margin-top: -20px;">Available <?=$blname;?> blood donor information .......</h4> <hr>
											<table style="width: 100%; text-align: center; height: auto; margin-top: -10px;">
													<tr style="">
														<td ><b>Name</b><hr></td>
														<td><b>Mobile No</b><hr></td>
														<td><b>Address</b><hr></td>
													</tr>

											<?php
							    					$q1=$db->query("SELECT *FROM donor_registration WHERE bgroup='$blname' ORDER BY name");

												foreach ($q1 as $r2) 
												{

													echo '<tr>
							                       <td> '.$r2["name"].'<hr> </td>
							                       <td> '.$r2["mno"].'<hr> </td>
							                       <td> '.$r2["address"].'<hr></td>	                       
							                    </tr>';
							                    //echo '<br>';

												} 


											?>
											</table>
									
		
		</div>
	</div>
	<?php include '../footer.php'; ?>
</body>
</html>