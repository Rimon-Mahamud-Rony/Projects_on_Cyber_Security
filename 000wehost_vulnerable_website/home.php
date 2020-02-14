<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","id12578757_thesis","thesis","id12578757_mysite");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>thesis test</title>
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
    <h1 class="site-title" style="text-align: center; color: green;">Authentication Analysis Form</h1><br>
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
 <div class="col-md-6 col-md-offset-4">
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<h1>Home</h1>
<div>
    <h4>Welcome <?php echo $_SESSION['username']; ?></h4>
    <h5>
        So you are logged in in this page, This page is for the thesis entitled "Analysis of attacks on cloud computing and simulation of DDOs"
    </h5>
</div>
<div class="col-6">
      <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">GO BACK TO THE RIMONS PENTEST LAB & BLOG</h5><hr>
            <p class="card-text">You may learn a lot to improve your skill</p>
            <a href="http://rimonrony.info" class="btn btn-primary">Rimons Pentest LAB & BLOG</a>
          </div>
  </div>
<a href="logout.php">Log Out</a>
</div>
</main>
</div>

</body>
</html>
