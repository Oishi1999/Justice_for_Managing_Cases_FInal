<?php
    


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
	
	$Bank_name="";
	$err_Bank_name="";
	
    $phone="";
    $err_phone="";
	
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
		
		
		
		//Bank_name VALIDATION
        if(empty($_POST["Bank_name"])){
            $err_err_Bank_name="* Bank Name Required.";
            $hasError=true;
        }
        else{
            $Bank_name_name=htmlspecialchars($_POST["Bank_name"]);
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
            setcookie($cookie_name, $cookie_value, time()+360, "/");
            $isHttps=(isset($_SERVER['HTTPS']))?"https://":"http://";
            $confLink=$isHttps.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."?pp=".rawurlencode($pp)."&fullname=".rawurlencode($fullname)."&username=".rawurlencode($username)."&email=".rawurlencode($email)."&phone=".rawurlencode($phone)."&pass=".rawurlencode($pass)."&nid=".rawurlencode($nid)."&dob=".rawurlencode($dob)."&gender=".rawurlencode($gender)."&address=".rawurlencode($address)."&city=".rawurlencode($city)."&state=".$state."&zip=".rawurlencode($zip)."&unid=".rawurlencode($cookie_value)."&confirm=true";
            sendConfEmail($username, $email, $confLink);
            header("Location: lawyer_confirmation_page.php");
        }
    }
    if(isset($_GET["confirm"])){
        if(isset($_COOKIE[$cookie_name])){
            if(strcmp($_COOKIE[$cookie_name],$_GET["unid"])==0){
                unset($_COOKIE[$cookie_name]);
                setcookie($cookie_name, null, -1, '/'); 
                addLawyer($_GET["pp"], $_GET["fullname"], $_GET["username"], $_GET["email"], $_GET["phone"], $_GET["pass"], $_GET["nid"], $_GET["dob"], $_GET["gender"], $_GET["address"], $_GET["city"], $_GET["state"], $_GET["zip"]);
                header("Location: lawyer_successfull_signup.php");
            }
            else{
                header("Location: client_registration.php");
            }
        }
        
    }

    
?>