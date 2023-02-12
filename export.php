<?php

require_once "conn.php";

$filename = 'Students List Record-'.date('Y-m-d').'.csv';

$sql = "SELECT * FROM tb_student";
$result = mysqli_query($conn,$sql);

$array = array();

$file = fopen($filename,'w');
$array = array("ID","FIRST NAME","LAST NAME","MOBILE NUMBER","EMAIL","ADDRESS","CREATION DATE");
fputcsv($file, $array);

while($row = mysqli_fetch_array($result)){

    $id = $row['id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $mobile = $row['mobilenumber'];
    $email = $row['email'];
    $address = $row['address'];
    $creation = $row['creationdate'];

    $array = array($id,$firstname,$lastname,$mobile,$email,$address,$creation);
    fputcsv($file, $array);



}

fclose($file);

header("Content-Description: File Transfer");
header("Content-Disposition: Attachment; filename=$filename");
header("Content-Type: application/csv;");
readfile($filename);
unlink($filename);
exit();

?>