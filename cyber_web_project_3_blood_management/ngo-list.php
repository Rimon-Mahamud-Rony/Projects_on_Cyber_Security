<?php
ob_start();
include ('head.php');
include('connection.php');
session_start();
?>

		
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
					<h1>NGO List</h1>
				
		
	

				<div id="form" style="width: 100%; height: auto;">
						<style>
							table {
		  							border-collapse: collapse;
									}
							table, td {
		 							 border: 1px solid black;
									}

						</style>

					<table style="width: 100%; text-align: center;">
						<tr style="border: 2px solid black;">
							
							<td width="50%"><b>Name</b></td>
							<td><b>Contact No</b></td>
						</tr>
						<tr style="border: 2px solid black;">
							
							<td width="50%"><b>NBDS</b></td>
							<td><b><a href="tel:01845123844"> 01845123844</a></b></td>
						</tr>
						<tr style="border: 2px solid black;">
							<td width="50%"><b>Badhon</b></td>
							<td><b>01862117112</b></td>
						</tr>
						<tr style="border: 2px solid black;">
							<td width="50%"><b>Roktokonika</b></td>
							<td><b>01719213456</b></td>
						</tr>
						<tr style="border: 2px solid black;">
							<td width="50%"><b>SANDHANI</b></td>
							<td><b>01845345623</b></td>
						</tr>
						<tr style="border: 2px solid black;">
							<td width="50%"><b>BDRCS</b></td>
							<td><b>01785125643</b></td>
						</tr>
						
						
					</table>
			</div>

		</div>
		<?php
		   include 'footer.php';
	    ?>
	</div>


</body>
</html>
