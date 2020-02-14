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
			<h2 class="alert alert-primary">Donor Registration <a href="donor-list.php" style="float: right;"><button class="btn btn-md btn-warning">List of Donor Information</button></a></h2>
			<center>

				<div id="form" >
					
				<form action="" method="post" target="donor-list.php">
					<div class="form-group">
				<table>
					<tr>
						<td >Name:</td>
						<td ><input type="text" name="name" placeholder="Enter Name"></td>
						<td></td>
						<td >Age:</td>
						<td ><input type="text" name="age" placeholder="Enter age"></td>
					</tr>
					<br>
					<tr>
						<td >Address:</td>
						<td ><input type="text" name="address" placeholder="Enter address"></td>
						<td></td>
						<td >City:</td>
						<td ><input type="text" name="city" placeholder="Enter city"></td>
					</tr>
					<br>
					<tr>
						<td >E-mail:</td>
						<td ><input type="text" name="email" placeholder="Enter E-mail"></td>
						<td></td>
						<td >Mobile No:</td>
						<td ><input type="text" name="mno" placeholder="Enter mobile no"></td>
					</tr>
					<br>
					<tr>
						
						<td ></td>
						<td>Blood Group:</td>
						<td >
							<select name="bgroup" style="color: green;">
								<option>Select Your Blood Group</option>
								<option>A+</option>
								<option>B+</option>
								<option>O+</option>
								<option>AB+</option>
								<option>A-</option>
								<option>B-</option>
								<option>O-</option>
								<option>AB-</option>
							</select>
						</td>	
						<td></td>
						
						
					</tr>
					<br>
					<tr>
						<td></td>
						<td></td>
						<td><br><br><input class="btn btn-block btn-success" type="submit" name="sub" value="save" ></td>
					</tr>
				</table>
			</div>
			   </form>
			   <br>
			  


			   <?php
			   $bgroup='';
			   $name='';
			   $age='';
			   $address='';
			   $city='';
			   $email='';
			   $mno='';

			   if(isset($_POST['sub']))
			   {
			   	   $name=$_POST['name'];
			   	   $age=$_POST['age'];
			   	    $address=$_POST['address'];
			   	   $city=$_POST['city'];
			   	   $email=$_POST['email'];
			   	   $mno=$_POST['mno'];
			   	   $bgroup=$_POST['bgroup'];
			   	    if($_POST['name']!='' && $_POST['age']!='' && $_POST['address']!='' && $_POST['city']!='' && $_POST['email']!='' && $_POST['mno']!='' && $_POST['bgroup']!='')
			   	    {

					   	   $q=$db->prepare("INSERT INTO donor_registration(name,age,address,city,email,mno,bgroup) VALUES(:name,:age,:address,:city,:email,:mno,:bgroup)");
					   	   $q->bindvalue('name',$name);
					   	   $q->bindvalue('age',$age);
					   	   $q->bindvalue('address',$address);
					   	   $q->bindvalue('city',$city);
					   	   $q->bindvalue('email',$email);
					   	   $q->bindvalue('mno',$mno);
					   	   $q->bindvalue('bgroup',$bgroup);
					   	   $q->execute();
					   	   echo '<br> <p style="background-color:#DCDDDE; color:green; font-size:25px;">&#9745; You have successfully done all the works.. congratulations !!<p>';
					   	   /*if($q->execute())
					   	   {
					   	   	echo "<script>alert('donor registration successful')</script>";
					   	   }
					   	   else
					   	   {
					   	   	echo "<script>alert('donor registration fail')</script>";
					   	   }*/

			   		}
			  		 else{
			   			echo '<br> <p style="background-color:#DCDDDE; color:red; font-size:25px;">&#9940; You may forget to fill up the any of them, please insert all the data<p>';
			   			}
			} 
         
               
                ?>	
			</div></center>
			
        </div>
	</div>
	<br>
	<br>
	<?php include'footer.php'; ?>	
</div>	

</body>



</html>