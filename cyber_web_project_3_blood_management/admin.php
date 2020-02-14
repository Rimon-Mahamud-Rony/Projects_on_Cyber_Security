<?php
ob_start();
include ('head.php');
include('connection.php');
session_start();
?>

<div id="container">
	<div id="body">
			<br>
			<?php
            $un=$_SESSION['un'];
            if(!$un)
            {
            	header("Location:index.php");
            }

			?>
			<h1 class="alert alert-success" align="center">WELCOME ADMIN</h1>

			

			<div class="container" >
				Features...
			  <div class="row" style="margin: 5%;">
			    <div class="col-6 col-sm-4 alert alert-dark" style="margin: 10px;">
			    	<a href="donor-reg.php">Donor Registration</a>
			    </div>
			    <div class="col-6 col-sm-4 alert alert-dark" style="margin: 10px;">
			    	<a href="donor-list.php">Donor List</a>
			    </div>
			    <div class="col-6 col-sm-4 alert alert-dark" style="margin: 10px;">
			    	<a href="stock-blood-list.php">Stock Blood List</a>
			    </div>

			    <!-- Force next columns to break to new line at md breakpoint and up -->
			    

			    <div class="col-6 col-sm-4 alert alert-dark" style="margin: 10px;">
			    	<a href="out-stock-blood-list.php">Out Stock Blood</a>
			    </div>
			    <div class="col-6 col-sm-4 alert alert-dark" style="margin: 10px;">
			    	<a href="ngo-list.php">NGO List</a>
			    </div>
			    <div class="col-6 col-sm-4 alert alert-dark" style="margin: 10px;">
			    	<a href="bloodlist/Apositive.php">All Blood Information</a>
			    </div>

			  </div>
			  
			</div>


			<!--
			<center><ul>
				<a href="donor-reg.php"><li>Donor Registration</li></a>
				<a href="donor-list.php"><li>Donor List</li></a>
				<a href="Stock-blood-list.php"><li>Stock Blood List</li></a>
			</ul><br><br><br><br><br>
			<ul>

				<li><a href="out-stock-blood-list.php">Out Stock Blood</a></li>
				<li><a href="exchange-blood-list.php">Exchange Blood List</a></li>
				<a href="ngo-list.php"><li>NGO List</li></a>
				<a href="bloodlist/Apositive.php"><li>All Blood Information</li></a>
			</ul></center>

		-->
			
     </div>  
</div>

	<?php include 'footer.php' ?>
</div>	

