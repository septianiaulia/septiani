<!DOCTYPE html>
<html lang="en">
<style>
.error {color: black;}
body{
background:url(T.jpg);
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

    <title>Edit Post</title>

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
          <li><a href="home2.php">Home</a></li>
          <li><a href="post.php">My Post</a></li>
          <li class="active"><a href="edit.php">Edit Post</a></li>
          <li><a href="logout.php">Logout</a></li>

            <br>
          </ul>
        </div>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Edit Post</h1>
            <div>
             <form action="actionedit.php" method="POST">
              <?php
                require_once('koneksi.php');
                $id_post=$_GET['id_post'];
                $sql = "SELECT * FROM post WHERE id_post=$id_post";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                ?>
                
                <table>
              <tr>
                <td> Title   : </td>
                <td>
                <input type"hidden" name="id_post" value="<?php echo $row['id_post']; ?>">
                <input type="text" name="title" value="<?php echo $row['title']; ?>">
              </td>
              </tr>
              
              <tr>
                <td> Isi  : </td>
                <td><br><br><textarea type="text" name="isi"><?php echo $row['isi'];?></textarea></td>
              </tr>
              <tr>
              <td><td><br><br><input type="submit" value="Save"></td></td>
              </tr>
            </table>
            </div>
          </div>   
      </div><?php
          }
        }
        ?>
    </form>

		    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

