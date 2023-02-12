<?php

require_once "conn.php";

if(isset($_POST['update'])){

    $eid = $_GET['editid'];

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    

    $sql = mysqli_query($conn,"UPDATE tb_student SET firstname = '$fname', lastname = '$lname', mobilenumber = '$mobilenumber', email = '$email', address = '$address' WHERE id = '$eid'");
    if($sql){
        echo "<script>alert('You have successfully updated the record!');</script>";
        echo "<script>document.location='index.php';<script>";
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container" style="width:50%"><br><br><br>
    <div class="row">
        <div class="col-md-12">
            <h2>Update Record</h2><br>
</div>
</div>
<form method="POST">
    <?php
        $eid = $_GET['editid'];
        $sql = mysqli_query($conn,"SELECT * FROM tb_student WHERE id = '$eid'");
        while($row = mysqli_fetch_array($sql)){

?>
    <div class="row">
    <div class="col-md-6">
        <label>First Name</label>
        <input type="text" name="firstname" value="<?php echo $row['firstname'];?>" class="form-control" placeholder="Enter First Name" required>
</div>
</div>
        <div class="row">
        <div class="col-md-6">
        <label>Last Name</label>
        <input type="text" name="lastname" value="<?php echo $row['lastname'];?>" class="form-control" placeholder="Enter Last Name" required>
</div>
</div>
        <div class="row">
        <div class="col-md-6">
        <label>Mobile Number</label>
        <input type="text" name="mobilenumber" value="<?php echo $row['mobilenumber'];?>" class="form-control" placeholder="Enter Mobile Number" required>
</div>
</div>
        <div class="row">
        <div class="col-md-12">
        <label>Email Address</label>
        <input type="text" name="email" value="<?php echo $row['email'];?>" class="form-control" placeholder="Enter Email Address" required>
</div>
</div>
        <div class="row">
        <div class="col-md-12">
        <label>Address</label>
        <input type="text" name="address" value="<?php echo $row['address'];?>" class="form-control" placeholder="Enter Address" required>
</div>
</div>
<?php } ?>
        <div class="row" style="margin-top: 1%">
        <div class="col-md-6">
        <button type="text" name="update" class="btn btn-info">Submit</button>
        <a href="index.php" class="btn btn-warning">View Record</a>
        
</div>
</div>
</form>
</div>
</body>
</html>