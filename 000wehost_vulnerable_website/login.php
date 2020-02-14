<?php
session_start();
if(  isset($_SESSION['username']) )
{
  header("location:home.php");
  die();
}
//connect to database
$db=mysqli_connect("localhost","id12578757_thesis","thesis","id12578757_mysite");
if($db)
{
  if(isset($_POST['login_btn']))
  {
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      //$password=md5($password); //Remember we hashed password before storing last time
      $sql="SELECT * FROM users WHERE  username='$username' AND password='$password'";
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['username']=$username;
            header("location:home.php");
        }
       else
       {
              $_SESSION['message']="Username and Password combiation incorrect";
       }
      }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thesis TEST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <hgroup>
    <h1 class="site-title" style="text-align: center; color: green;">Login / Logout</h1><br>
  </hgroup>

<br>
<nav class="navbar navbar-inverse">

  <div class="container-fluid">
  <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav center">
        <li><a href="login.php">LogIN</a></li>
        <li><a href="logout.php">LogOut</a></li>
      </ul>

    </div>
  </div>
</nav>

<main class="main-content">
    <center>
 <div class="col-md-6 col-md-offset-2" style="margin:5%;">
     <div style="color:red;">
<?php
    if(isset($_SESSION['message']))
    {
         echo "<h1>".$_SESSION['message']."</h1>";
         unset($_SESSION['message']);
    }
?>
</div>
<form method="post" action="login.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="login_btn" class="Log In"></td>
     </tr>
 
</table>
</form>
</div>

<div class="col-6">
      <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">GO BACK TO THE RIMONS PENTEST LAB & BLOG</h5><hr>
            <p class="card-text">You may learn a lot before braek the system</p>
            <a href="http://rimonrony.info" class="btn btn-primary">Rimons Pentest LAB & BLOG</a>
          </div>
  </div>
</center>
</main>
</div>

</body>
</html>
