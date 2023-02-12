<?php
require_once "connection.php";


if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = mysqli_query($conn,"INSERT INTO student_login (username,password) VALUES('$username','$password')");

    if($sql){
        echo "<script>alert('Account login success!');</script>";
        echo "<script>document.location='index.php';</script>";

}else{
        echo "<script>alert('Username or Password has already used by someone!');</script>";
}
    }

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Information Management System</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <style>
        body{

            background-image: url('bg.png');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;

        }
     
        </style>
</head>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><h1>Student Information Management System</h1></a>

    </nav>
    </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <body>
            <header>Login Account</header>
<form class="index.php" method="POST">
        <div class="row">
        <div class="col-md-2">
        <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
</div>
</div>
        <div class="row">
        <div class="col-md-2">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
</div>
</div>
        
        <div class="row" style="margin-top: 1%">
        <div class="col-md-6">
        <center><button type="text" name="submit" class="btn btn-primary">Login</button></center>
        <center><p>Not yet account ? </p><a href="register.php" class="btn btn-warning">Register Account</a></center>
    </body>
    </div>
    </div>

</body>
</html>

