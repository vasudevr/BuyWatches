<?php
	require("fpdf.php");
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont("Arial","U","25");
	$pdf->Cell(0,10,"Tag Heuer Returns",0,1,"C");
	
	$firstname="";
	$firstname= $_POST["firstname"];
	
	$lastname="";
	$lastname= $_POST["lastname"];
	
	$watchname="";
	$watchname= $_POST["watchname"];
	
	$modelname="";
	$modelname= $_POST["modelnumber"];
	
	$dop="";
	$dop= $_POST["dateofpurchase"];
	
	$city="";
	$city= $_POST["city"];
	
	$email="";
	$email= $_POST["email"];
	
	$phone="";
	$phone= $_POST["contact"];
	
	$problem="";
	$problem= $_POST["problem"];
	
	$pdf->Cell(0,40,"",0,1,"C");
	$pdf->Image("images/barcode.gif",90, 30, 30);
	$pdf->SetFont("Arial","","15");
	$pdf->SetLeftMargin(65);
	$pdf->Cell(0,10,"First Name:                ".$firstname,0,1,"L");
	$pdf->Cell(0,10,"Last Name:                 ".$lastname,0,1,"L");
	$pdf->Cell(0,10,"Watch Name:             ".$watchname,0,1,"L");
	$pdf->Cell(0,10,"Watch Model:             ".$modelname,0,1,"L");
	$pdf->Cell(0,10,"Date of Purchase:      ".$dop,0,1,"L");
	$pdf->Cell(0,10,"City:                            ".$city,0,1,"L");
	$pdf->Cell(0,10,"Email ID:                     ".$email,0,1,"L");
	$pdf->Cell(0,10,"Contact Number:         ".$phone,0,1,"L");
	$pdf->Cell(0,10,"Problem Description:   ".$problem,0,0,"L");
	
	
	$pdf->Output("Returns.pdf","I");
?>