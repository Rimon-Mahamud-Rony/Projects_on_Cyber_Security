<?php
ob_start();
include ('head.php');
include('connection.php');
session_start();
?>
<div id="header">
	<h2 align="center">Blood Bank Management System</h2>
</div>
		<div id="body">

			<form action="" method="post" class="col-sm-6" style="margin-left: 25%;">
				<div class="form-group">
			<table  class="table">
				<tr>
					<td >Enter Username</td>
					<td ><input type="text" name="un" placeholder="Username.."> </td>
				</tr>
				<br>
				<tr>
					<td >Enter password</td>
					<td ><input type="password" name="ps" placeholder="password.."> </td>
				</tr>
				<br>
				<tr>
					<td></td>
					<td><input class="btn btn-block btn-primary" type="submit" name="sub" value="login"></td>
				</tr>	
			</table>
		</div>
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
			 	//ob_enf_fluch();
			 }
			 else
			 {
			 	echo"<script>alert('wrong user')</script>";
			 }
		}

        ?>
        
</div>	

</body>

<?php
	include 'footer.php';
?>