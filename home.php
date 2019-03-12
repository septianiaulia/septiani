<!DOCTYPE html>
<html lang="en">
<style>
.error {color: black;}
body{
background:url(S.jpg);
background-size: 1400px 845px;
}
</style>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
             <a class="navbar-brand"><font color ="skyblue">MY BLOG</font></a>
        </div>
        
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="login.php"><strong>Sign In</strong></a></li>
            <li><a href="register.php"><strong>Sign Up</strong></a></li>
            <br>
          </ul>
        </div>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header"><font color="black">Hello Friends</font></h1>
            
            <?php
              include("koneksi.php");
              $conn = mysqli_connect("localhost","root","","septii");

              $sql = "SELECT * FROM post";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo " ".$row["waktu"]."<br>"."<br>";
                      echo "<strong>Title : " . $row["title"]."</strong><br>"."<br>";
                      echo "-Content : " . substr($row["isi"], 0,100);
                      echo " <a href='view.php?id_post=".$row["id_post"]."'>Read Full</a><br />";
                      echo "<hr/>";
                  }
              } else {
                  echo "0 results";
              }

              $conn->close();
              ?>
          </div>    
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
