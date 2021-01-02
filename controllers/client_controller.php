<?php
   require_once '../models/db_conn.php';
    $reg_pp="";
    $err_reg_pp="";
	
    $reg_fullname="";
    $err_reg_fullname="";
	
    $reg_username="";
    $err_reg_username="";
	
    $reg_email="";
    $err_reg_email="";
	
    $reg_phone="";
    $err_reg_phone="";
	
    $reg_pass="";
    $err_reg_pass="";
	
    $reg_cpass="";
    $err_reg_cpass="";
	
    $reg_pass="";
    $err_reg_pass="";
	
    $reg_cpass="";
    $err_reg_cpass="";
	
    $reg_nid="";
    $err_reg_nid="";
	
    $reg_dob="";
    $err_reg_dob="";
	
    $reg_gender="";
    $err_reg_gender="";
	
	$reg_address="";
	$err_reg_address="";
	
	
    $reg_city="";
    $err_reg_city="";
    $reg_state="";
    $err_reg_state="";
    $reg_zip="";
    $err_reg_zip="";
    $hasError=false;
    if(isset($_POST["reg_button"])){
        //PROFILE PIC VALIDATION
        if(!isset($_POST["reg_pp"])){
            $err_reg_pp="Select a Profile Picture";
            $hasError=true;
        }
        else{
            $reg_pp=htmlspecialchars($_POST["reg_pp"]);
        }
        //FULLNAME VALIDATION
        if(empty($_POST["reg_fullname"])){
            $err_reg_fullname="Full Name Required";
            $hasError=true;
        }
        else{
            $reg_fullname=htmlspecialchars($_POST["reg_fullname"]);
        }
        //USERNAME VALIDATION
         if(empty($_POST["reg_username"])){
            $err_username="* User Name Required.";
            $hasError=true;
        }
        elseif(strpos($_POST["reg_username"]," ")!=false && strlen($_POST["reg_username"])<8){
            $err_username="* Username Cannot Contain Spaces and Must Be >8 Characters.";
            $hasError=true;
        }
        else{
            $reg_username=htmlspecialchars($_POST["reg_username"]);
        }
        //EMAIL VALIDATION
          if(empty($_POST["reg_email"])){
            $err_email="* Email Required.";
            $hasError=true;
        }
        elseif(strpos($_POST["reg_email"],"@") && strpos($_POST["reg_email"],".")){
            if(strpos($_POST["reg_email"],"@") < strpos($_POST["reg_email"],".")){
                getLawyerByEmail(htmlspecialchars($_POST["reg_email"]));
                $reg_email=htmlspecialchars($_POST["reg_email"]);
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
        if(empty($_POST["reg_phone"])){
            $err_reg_phone="Phone Number Required";
            $hasError=true;
        }
        elseif(strlen($_POST["reg_phone"])!=11){
            $err_reg_phone="Phone Number Must be 11 Digits";
            $hasError=true;
        }
        else{
            $reg_phone=$_POST["reg_phone"];
        }
        //PASSWORD VALIDATION
         if(empty($_POST["reg_pass"])){
            $err_pass="* Password Required.";
            $hasError=true;
        }
        elseif(strlen($_POST["reg_pass"])<5){
            $err_pass="* Password must be >=5 characters.";
            $hasError=true;
        }
        elseif(!strpos($_POST['reg_pass'], "1") && !strpos($_POST['reg_pass'], "2") && !strpos($_POST['reg_pass'], "3") && !strpos($_POST['pass'], "4")
            && !strpos($_POST['reg_pass'], "5") && !strpos($_POST['reg_pass'], "6") && !strpos($_POST['reg_pass'], "7") && !strpos($_POST['pass'], "8")
            && !strpos($_POST['reg_pass'], "9") && !strpos($_POST['reg_pass'], "0")) {
            $err_pass="* Password must have 1 numeric.";
            $hasError=true;
        }
        elseif(strcmp(strtoupper($_POST["reg_pass"]),$_POST["reg_pass"])==0 && strcmp(strtolower($_POST["reg_pass"]),$_POST["pass"])==0){
            $err_pass="* Password must contain 1 Upper and Lowercase letter.";
            $hasError=true;
        }
        elseif(strpos($_POST["reg_pass"],"#")==false && strpos($_POST["reg_pass"],"!")==false){
            $err_pass="* Password must contain '#' or '!'.";
            $hasError=true;
        }
        elseif(empty($_POST["reg_cpass"])){
            $err_cpass="* Confirmed Password Required.";
            $hasError=true;
        }
        elseif(strcmp($_POST["reg_cpass"],$_POST["pass"])!=0){
            $err_cpass="* Password and Confirm Password must be same.";
            $hasError=true;
        }
        else{
            $reg_pass=md5(htmlspecialchars($_POST["reg_pass"]));
        }
        //NID VALIDATION
        if(empty($_POST["reg_nid"])){
            $err_reg_nid="NID Required";
            $hasError=true;
        }
        else{
            $reg_nid=htmlspecialchars($_POST["reg_nid"]);
        }
        //DATE OF BIRTH VALIDATION
        if(!isset($_POST["reg_dob"])){
            $err_reg_dob="Birthday Required";
            $hasError=true;
        }
        else{
            $reg_dob=$_POST["reg_dob"];
        }
        //GENDER VALIDATION
         if(isset($_POST["reg_gender"])){
            $reg_gender=$_POST["reg_gender"];
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
            $reg_address=htmlspecialchars($_POST["address"]);
        }
        //CITY VALIDATION
        if(empty($_POST["city"])){
            $err_city="* City Required.";
            $hasError=true;
        }
        else{
            $reg_city=htmlspecialchars($_POST["city"]);
        }
        //STATE VALIDATION
        if(empty($_POST["state"])){
            $err_state="* State Required.";
            $hasError=true;
        }
        else{
            $reg_state=htmlspecialchars($_POST["state"]);
        }
        //ZIP VALIDATION
        if(empty($_POST["zip"])){
            $err_zip="* Zip/Postal Code Required.";
            $hasError=true;
        }
        else{
            $reg_zip=htmlspecialchars($_POST["zip"]);
        }
         if(!$hasError){
			 addclient($reg_fullname,$reg_username,$reg_email,$reg_phone,$reg_pass,$reg_nid,$reg_dob,$reg_gender,$reg_address,$reg_city,$reg_state,$reg_zip);
		 echo  "Successfully Registered";
		 
		 
		 }
		 
			
    	}
		function addclient($reg_fullname,$reg_username,$reg_email,$reg_phone,$reg_pass,$reg_nid,$reg_dob,$reg_gender,$reg_address,$reg_city,$reg_state,$reg_zip)
		{
			//$reg_pass = md5($reg_pass);
			$query ="INSERT INTO users VALUES(NULL,NULL,'$reg_fullname','$reg_username','$reg_email','$reg_phone','$reg_pass','$reg_nid','$reg_dob','$reg_gender','$reg_address','$reg_city','$reg_state','$reg_zip','client')";
			doNoQuery($query);
		
		}
      
      
?>
