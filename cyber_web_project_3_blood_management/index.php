<?php
include ('head.php');
include('connection.php');
//session_start();
?>
		
	<center>
		<div class="container">
		  <div class="row" style="padding: 2%;">
		    <div class="col-sm-11" style="color:green;">
		    		<br>
		    		<h2>WELCOME TO THE RIMON'S PENTEST LAB</h2><hr>
		    		<br>
		    </div>
		    <div class="col-5">
		    	<h3>WHAT YOU WILL DO IN HERE..</h3><hr>
		    	<p class="alert alert-danger">
		    	Hi, this website is for Blood Bank , where user can use the system to store the blood information. Your task is to find out the vulnerabilies of the sytem.
		    	If you can break the the login system, You can enter the website.

		    	But your task is not only break the system, you have to analyze the traffic of the system , database and other system also.
		    	</p> 
		    </div>
		    <div class="col-5 alert" style="margin-left: 60px;">
		    	<h3>START YOUR JOURNEY</h3><hr>
		    	<p class="">
		    		By hit the button you can find the system.
		    	</p> 
		    	<a href="entry.php" style="text-decoration: none;">
		    	<button class="btn btn-lg btn-warning my-2 my-sm-0" type="submit">ENTER THE SYSTEM</button>
		    	</a>
		    	<hr>
		    	<p>
		    		Any query or problem ? You can connect with us ..
		    	</p>
		    	<a href="http://rimonrony.info"><button class="btn btn-outline-success my-2 my-sm-0">CONTACTS</button></a>
		    	<hr>
		    </div>
		  </div>
		</div>
	</center>
<!--		<div id="header"><h2 align="center">Blood Bank Management System</h2></div>
		<div id="body">
			<br><br><br><br><br>
			<form action="" method="post">
			<table align="center">
				<tr>
					<td width="200px" height="70px"><b>Enter Username</b></td>
					<td width="200px" height="70px"><input type="text" name="un" placeholder="Username.."> </td>
				</tr>
				<tr>
					<td width="200px" height="70px"><b>Enter password</b></td>
					<td width="200px" height="70px"><input type="password" name="ps" placeholder="password.."> </td>
				</tr>
				<tr>
					<td><input type="submit" name="sub" value="login"></td>
				</tr>
				
			</table>
			</form>
		<?php

		if(isset($_POST['sub']))
		{
			 $un=$_POST['un'];
			 $ps=$_POST['ps'];
			 $q=$db->prepare("select *from admin where uname='$un' && pass='$ps'");
			 $q->execute();
			 $res=$q->fetchAll(PDO::FETCH_OBJ);
			 if($res)
			 {
			 	
			 	$_SESSION['un']=$un;
			 	header("location:admin.php");
			 }
			 else
			 {
			 	echo"<script>alert('wrong user')</script>";
			 }
		}

        ?>
        
</div>	

</body>
-->
<?php
	include 'footer.php';
?>
</html>
