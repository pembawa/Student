<?php

    require_once "conn.php";
    require_once "PDF FOLDER/fpdf.php";


    $result = "SELECT * FROM tb_student ORDER by id";
    $sql = $conn->query($result);

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',12);
    while($row = $sql->fetch_object()){
        $id = $row->id;
        $firstname = $row->firstname;
        $lastname = $row->lastname;
        $mobilenumber = $row->mobilenumber;
        $email = $row->email;
        $address = $row->address;


        $pdf->Cell(20,10,$id,1);
        $pdf->Cell(40,10,$firstname,1);
        $pdf->Cell(80,10,$lastname,1);
        $pdf->Cell(40,10,$mobilenumber,1);
        $pdf->Cell(200,10,$email,1);
        $pdf->Cell(200,10,$address,1);
        $pdf->Ln();
    }

    $pdf->Output();

    ?>