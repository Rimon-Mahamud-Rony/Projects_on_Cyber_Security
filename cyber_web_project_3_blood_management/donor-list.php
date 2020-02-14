<?php
ob_start();
include ('head.php');
include('connection.php');

session_start();
?>


<div id="body">
				<br>
					<?php
		            $un=$_SESSION['un'];
		            if(!$un)
		            {
		            	header("Location:index.php");
		            }

					?>
					<h2 class="alert alert-primary"><center> Donor List </center></h2>

				<a href="donor-reg.php"><button class="btn btn-sm btn-primary">ADD BLOOD DONER</button></a>
				<br>
				
		
		<center>

				<div id="form" style="width: 100%; height: auto;">
						<style>
							table {
		  							border-collapse: collapse;
									}
							table, td {
		 							 border: 1px solid black;
									}

						</style>

					<table style="width: 100%; text-align: center; height: auto;">
						<tr style="border: 1px solid black;">
							<td ><center><b>Name</b></center></td>
							<td><center><b>Age</b></center></td>
							<td><center><b>Address</b></center></td>
							<td><center><b>City</b></center></td>
							<td><center><b>Email</b></center></td>
							<td><center><b>Mobile No</b></center></td>
							<td><center><b>Blood Group</b></center></td>
						</tr>
  
							<?php
		                		$data = $db->query("SELECT * FROM donor_registration ")->fetchAll();

								foreach ($data as $r1) 
								{
								    


									echo '<tr>
				                       <td> <center>'.$r1["name"].' </center></td>
				                       <td> <center>'.$r1["age"].' </center></td>
				                       <td> <center>'.$r1["address"].' </center></td>
				                       <td> <center>'.$r1["city"].' </center></td>
				                       <td> <center>'.$r1["email"].' </center></td>
				                       <td> <center>'.$r1["mno"].' </center></td>
				                       <td> <center>'.$r1["bgroup"].' </center></td>	                       
				                    </tr>';
								} 
								

							?>                                            
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
</html>