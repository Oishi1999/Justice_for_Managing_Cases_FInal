<?php
    


    $fullname="";
    $err_fullname="";
	
	$lawyer_name="";
	$err_lawyer_name="";
	
    $email="";
    $err_email="";
	
    $phone="";
    $err_phone="";
	
	$Account_Number="";
	$err_Account_Number="";
	
	$Amount_No="";
	$err_Amount_No="";
	
	
	
    $gender="";
    $err_gender="";
	
    $address="";
    $err_address="";
	
    $city="";
    $err_city="";
	
    $state="";
    $err_state="";
	
    $zip="";
    $err_zip="";
   
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
		
		//lawyer_name VALIDATION
        if(empty($_POST["fullname"])){
            $err_fullname="* Full Name Required.";
            $hasError=true;
        }
        else{
            $lawyer_name=htmlspecialchars($_POST["fullname"]);
        }
       
        //EMAIL VALIDATION
        if(empty($_POST["email"])){
            $err_email="* Email Required.";
            $hasError=true;
        }
        elseif(strpos($_POST["email"],"@") && strpos($_POST["email"],".")){
            if(strpos($_POST["email"],"@") < strpos($_POST["email"],".")){
                getLawyerByEmail(htmlspecialchars($_POST["email"]));
                $email=htmlspecialchars($_POST["email"]);
            }
            else{
                $err_email="* '@' Must be before '.'.";
                $hasError=true;
            }
        }
        else{
            $err_email="* Email must contain '@' and '.'.";
            $hasError=true;
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
		
		//Account_Number VALIDATION
		 if(empty($_POST["number"])){
            $err_phone="* Account Number Required.";
            $hasError=true;
        }
       
        else{
            $Account_Number=$_POST["number"];
        }
		
		//Amount_No VALIDATION
		 if(empty($_POST["number"])){
            $err_phone="* Amount_No Required.";
            $hasError=true;
        }
       
        else{
            $Amount_No=$_POST["number"];
        }
		
		
		
        
        
        //GENDER VALIDATION
        if(isset($_POST["gender"])){
            $gender=$_POST["gender"];
        }
        else{
            $err_gender="* Gender Required.";
            $hasError=true;
        }
        //ADDRESS VALIDATION
        if(empty($_POST["address"])){
            $err_address="* Address Required.";
            $hasError=true;
        }
        else{
            $address=htmlspecialchars($_POST["address"]);
        }
        //CITY VALIDATION
        if(empty($_POST["city"])){
            $err_city="* City Required.";
            $hasError=true;
        }
        else{
            $city=htmlspecialchars($_POST["city"]);
        }
        //STATE VALIDATION
        if(empty($_POST["state"])){
            $err_state="* State Required.";
            $hasError=true;
        }
        else{
            $state=htmlspecialchars($_POST["state"]);
        }
        //ZIP VALIDATION
        if(empty($_POST["zip"])){
            $err_zip="* Zip/Postal Code Required.";
            $hasError=true;
        }
        else{
            $zip=htmlspecialchars($_POST["zip"]);
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
                header("Location: lawyer_registration.php");
            }
        }
        else{
            header("Location: lawyer_registration.php");
        }
    }

    
?>