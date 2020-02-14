<?php
ob_start();
include ('head.php');
include('connection.php');

session_start();
?>


<div id="full">
	<div id="inner-full">
		
	<div id="header">
		<h2 align="center"><a href="admin.php" style="text-decoration: none;color: white;">Blood Bank Management System</a></h2>
	</div>
			<div id="body">
				    <h1>Out Of Stock Blood List</h1>
								<div class="v1" style="background-color: red;">


									<h2>Information about: A positive (A+) blood group</h2>
										<?php 
												$q=$db->query("SELECT *FROM donor_registration WHERE bgroup='A+'"); 
												$row=$q->rowcount();
												if ($row<1) {
							    						echo "A+ is limited";
							    					}
							    					else{
							    						echo 'We have only '.$row.' bags of A+ blood';
							    					}
							    					echo'<br>';
											?>
											<h4>Available A+ blood donor information</h4>
											<table style="width: 100%; text-align: center; height: auto;">
													<tr style="border: 1px solid black;">
														<td ><b>Name</b></td>
														<td><b>Mobile No</b></td>
														<td><b>Address</b></td>
													</tr>

											<?php
							    					$q1=$db->query("SELECT *FROM donor_registration WHERE bgroup='A+'");

												foreach ($q1 as $r2) 
												{
													echo '<tr>
							                       <td> '.$r2["name"].' </td>
							                       <td> '.$r2["mno"].' </td>
							                       <td> '.$r2["address"].'</td>	                       
							                    </tr>';
							                    echo '<br>';
												} 

											?>
											</table>
											<br>
											<hr>
									
							
									<!-------------------------------------------------------------------------->
										<h2>Information about: B positive (B+) blood group</h2>
										<?php 
												$q=$db->query("SELECT *FROM donor_registration WHERE bgroup='B+'"); 
												$row=$q->rowcount();
												if ($row<1) {
							    						echo "B+ is limited";
							    					}
							    					else{
							    						echo 'We have only '.$row.' bags of B+ blood';
							    					}
							    					echo'<br>';
											?>
											<h4>Available B+ blood donor information</h4>
											<table style="width: 100%; text-align: center; height: auto;">
													<tr style="border: 1px solid black;">
														<td ><b>Name</b></td>
														<td><b>Mobile No</b></td>
														<td><b>Address</b></td>
													</tr>
											
											<?php
							    					$q=$db->query("SELECT *FROM donor_registration WHERE bgroup='B+'");

												foreach ($q as $r1) 
												{
													echo '<tr>
							                       <td> '.$r1["name"].' </td>
							                       <td> '.$r1["mno"].' </td>
							                       <td> '.$r1["address"].'</td>	                       
							                    </tr>';
							                    echo '<br>';
												} 

											?>
											</table>
											<br>
											<hr>
											<!------------------------------------------------------->
											
											<!------------------------------------------------------->

											<h2>Information about: AB positive (AB+) blood group</h2>
										<?php 
												$q=$db->query("SELECT *FROM donor_registration WHERE bgroup='AB+'"); 
												$row=$q->rowcount();
												if ($row<1) {
							    						echo "AB+ is limited";
							    					}
							    					else{
							    						echo 'We have only '.$row.' bags of AB+ blood';
							    					}
							    					echo'<br>';
											?>
											<h4>Available AB+ blood donor information</h4>
											<table style="width: 100%; text-align: center; height: auto;">
													<tr style="border: 1px solid black;">
														<td ><b>Name</b></td>
														<td><b>Mobile No</b></td>
														<td><b>Address</b></td>
													</tr>

											<?php
							    					$q1=$db->query("SELECT *FROM donor_registration WHERE bgroup='AB+'");

												foreach ($q1 as $r2) 
												{
													echo '<tr>
							                       <td> '.$r2["name"].' </td>
							                       <td> '.$r2["mno"].' </td>
							                       <td> '.$r2["address"].'</td>	                      
							                    </tr>';
							                    echo '<br>';
												} 

											?>
											</table>
											<br>
											<hr>

									</div>

                    </div>
      
                </div>
            </div>
          
        </div>
    </body>
     
</html>    



		
		
					


                   <!--
										
								
								<?php
										//$sql = "SELECCT * FROM donor_registration";
										
		 
										//$q = $db->query($sql);
										//$q = $db->prepare($sql);
   										//$q->execute();
										//$q->setFetchMode(PDO::FETCH_ASSOC);


								?>	
											 
										<?php //while ($r = $q->setFetchMode(PDO::FETCH_ASSOC) ): ?>
											
										
						                     <tr>
						                     	<td><?php// echo $r['name'];?></td>

						                       <td><center><?php// echo $r["name"];?></center></td>
						          
						         
						                    </tr>
						                 <?php //endwhile; ?> 
						             -->
						             
            <!--        
						</table>
						</div>
						</center>
						</div>
					</div>
				</div>
			</body>
-->
						                      
								
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
							
<!--
</body>
     <?php
		//include 'footer.php'
     ?>
</html>
-->