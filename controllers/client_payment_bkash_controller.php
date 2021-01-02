<?php

 require_once '../models/db_conn.php';
    
    $fullname="";
    $err_fullname="";
	
	$ID="";
    $err_ID="";
	
    $email="";
    $err_email="";
	
	$due="";
	$err_due="";
	
    $phone="";
    $err_phone="";
	
	$Account_Number="";
	$err_Account_Number="";
	
	$balance="";
	$err_balance="";
	
	$paid="";
	$err_paid="";
	
	$due_date="";
	$err_due_date="";
	
	$payment_date="";
	$err_payment_date="";
	
	$payer_id="";
	$err_payer_id="";
	
	$receiver_id="";
	$err_receiver_id="";
	
    $address="";
    $err_address="";
	
  
    $hasError=false;
    if(isset($_POST["reg_button"])){
       
        //FULLNAME VALIDATION
        if(empty($_POST["fullname"])){
            $err_fullname="* Full Name Required.";
            $hasError=true;
        }
        else{
            $fullname=htmlspecialchars($_POST["fullname"]);
			
        }
		
		//ID VALIDATION
        if(empty($_POST["ID"])){
            $err_phone="* ID Number Required.";
            $hasError=true;
        }
        
        else{
            $ID=$_POST["ID"];
        }
		
		//Due VALIDATION
        if(empty($_POST["due"])){
            $err_due="* due balance Required.";
            $hasError=true;
        }
        
        else{
            $due=$_POST["due"];
        }
		
		//Balance VALIDATION
        if(empty($_POST["balance"])){
            $err_balance="* balance Required.";
            $hasError=true;
        }
        
        else{
            $balance=$_POST["balance"];
        }
		
			//Paid  VALIDATION
        if(empty($_POST["paid"])){
            $err_paid="* paid Required.";
            $hasError=true;
        }
        
        else{
            $paid=$_POST["paid"];
        }
		
		//Due Date VALIDATION
        if(empty($_POST["due_date"])){
            $err_due_date="* due date Required.";
            $hasError=true;
        }
        
        else{
            $due_date=$_POST["due_date"];
        }
		
		//Payment Date VALIDATION
        if(empty($_POST["payment_date"])){
            $err_payment_date="* payment date Required.";
            $hasError=true;
        }
        
        else{
            $payment_date=$_POST["payment_date"];
        }
		
		//Payer ID VALIDATION
        if(empty($_POST["payer_id"])){
            $err_payer_id="* payer id Required.";
            $hasError=true;
        }
        
        else{
            $payer_id=$_POST["payer_id"];
        }
		
		//Receiver ID VALIDATION
        if(empty($_POST["receiver_id"])){
            $err_receiver_id="* receiver id Required.";
            $hasError=true;
        }
        
        else{
            $receiver_id=$_POST["receiver_id"];
        }
		
		
		
		
        //PHONE VALIDATION
        if(empty($_POST["phone"])){
            $err_phone="* Phone Number Required.";
            $hasError=true;
        }
        elseif(strlen($_POST["phone"])!=11){
            $err_phone="* Phone Number Must be 11 Digits.";
            $hasError=true;
        }
        else{
            $phone=$_POST["phone"];
        }
		
	
		
       
        //ADDRESS VALIDATION
        if(empty($_POST["address"])){
            $err_address="* Address Required.";
            $hasError=true;
        }
        else{
            $address=htmlspecialchars($_POST["address"]);
        }
		
	if(!$hasError){
			 addpayment($fullname,$ID,$email,$Account_Number,$balance,$paid,$due_date,$payment_date,$payer_id,$receiver_id,$address);
		 echo  "Successfully Registered";
		 
		 
		 }
		 
			
    	}
		function addpayment($fullname,$ID,$email,$Account_Number,$balance,$paid,$due_date,$payment_date,$payer_id,$receiver_id,$address)
		{
			//$reg_pass = md5($reg_pass);
			$query ="INSERT INTO payments VALUES('$fullname',NULL,'$email','$Account_Number','$balance','$paid','$due_date','$payment_date','$payer_id','$receiver_id','$address','client')";
			doNoQuery($query);
		
		}
      
       
        

       
    
?>