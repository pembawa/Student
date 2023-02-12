<?php

    require_once "conn.php";


    if(isset($_POST['submit'])){

    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $mobilenumber=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $address=$_POST['address'];

    $sql = mysqli_query($conn,"INSERT INTO tb_student(firstname,lastname,mobilenumber,email,address,creationdate) VALUES('$fname','$lname','$mobilenumber','$email','$address',NOW())");
    

    if($sql){
        echo "<script>alert('New record successfully added!');</script>";
        echo "<script>document.location='insert.php';</script>";

}else{
        echo "<script>alert('Something went wrong!');</script>";
}
    }

?>


<html>
    <head>
        <title>Student Information Management System</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container" style="width:50%">
    <div class="row">
        <div class="col-md-12">
            <h2>Add New Record</h2>
</div>
</div>
<form method="POST">
    <div class="row">
    <div class="col-md-6">
        <label>First Name</label>
        <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" required>
</div>
</div>
        <div class="row">
        <div class="col-md-6">
        <label>Last Name</label>
        <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" required>
</div>
</div>
        <div class="row">
        <div class="col-md-6">
        <label>Mobile Number</label>
        <input type="text" name="mobilenumber" class="form-control" placeholder="Enter Mobile Number" required>
</div>
</div>
        <div class="row">
        <div class="col-md-9">
        <label>Email Address</label>
        <input type="text" name="email" class="form-control" placeholder="Enter Email Address" required>
</div>
</div>
        <div class="row">
        <div class="col-md-9">
        <label>Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
</div>
</div>
        <div class="row" style="margin-top: 1%">
        <div class="col-md-6">
        <button type="text" name="submit" class="btn btn-primary">Submit</button>
        <a href="index.php" class="btn btn-success">View Record</a>
        
</div>
</div>
</form>
</div>
</body>
</html>