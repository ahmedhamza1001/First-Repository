<?php
  include "first_oop_project.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      h1
      {
        text-align:center;
        padding:30px;
      }
      .form-control 
      { 
        width:400px;
        margin:30px;
      }
      .btn 
      { 
          background-color:black;
          color:white;

      }
      .dot_form 
      { 
        text-align:center;
        width:500px;
        height:350px;
        top:50%;
        position:absolute;
        left:50%;
        margin-left:-250px;
        margin-top:-175px;
        padding:20px;
      }
      .alert
      { 
        width:400px;
        margin-top:20px;
      }
      .btn:hover 
      { 
        background-color:white;
        color:#000;
        border:1px solid #000;
      }
    </style>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <body>
    <h1>WELCOME</h1>

<center>
<form action="another.php" method='GET'>
    <select name="category" class='form-control'>
      <option value="none" >None</option>
      <?php 
      $selecting=new tree_category();
      $selecting->displaying_tree();
      ?>
    </select>
    <input type="text" name='field' class='form-control' placeholder='category'>
    <input type="submit" name='submit' class='btn default'>
</form>
<center>

<?php 

    if(isset($_GET['user']))
      { 
        $user=$_GET['user'];
        if($user=='Done')
        { 
          echo "<div class='alert alert-success'> Inserted</div>";
        }else{ 
          echo "<div class='alert alert-danger'>Not Inserted</div>";
        }
      }

?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="bootstrap.js"></script>
    <script src="popper.js"></script>
  </body>
</html>
