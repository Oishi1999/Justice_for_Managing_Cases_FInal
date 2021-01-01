<?php
require_once '../controllers/client_payment_rocket_controller.php';
    
?>
<html>
    <head>
        <title>Payment  Via Bkash</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../styles/lawyer_styles.css">
        <link rel="icon" href="../assets/favicon_all_logo.png">
    </head>
    <body>
        <center>
		<form action="" method="POST" enctype="multipart/form-data" onsubmit="return registrationValidation()" style="padding:20px;">
                <table>
                    <tr>
                        <td style="padding:20px;"><img src="../assets/rocket.png"; width="380" height="480"></td>
                        <td align="center">
                            <div class="card border-success mb3 dropshadow">
                                <div class="card-header">Payment  Via Bkash</div>
                                <div class="card-body">
                                    <table>
                                        
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Full Name: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="fullname" id="fullname" placeholder="Full Name" value="<?php echo $fullname; ?>"><span id="err_fullname" style="color:red;"><?php echo $err_fullname;?></span></td>
                                        </tr>
										
										<tr>
                                            <td align="left" style="padding-bottom:10px;">Lawyer Name: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="lawyer_name" id="lawyer_name" placeholder="lawyer_name" value="<?php echo $lawyer_name; ?>"><span id="err_lawyer_name" style="color:red;"><?php echo $err_lawyer_name;?></span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Email: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" onkeyup="isTakenEmail(this.value)" type="text" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>"><span id="err_email" style="color:red;"><?php echo $err_email;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Phone: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" onkeyup="isTakenPhone(this.value)" type="number" name="phone" id="phone" placeholder="Phone Number" value="<?php echo $phone; ?>"><span id="err_phone" style="color:red;"><?php echo $err_phone;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Account Number </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="number" name="Account_Number" id="Account_Number" placeholder="Number"><span id="Account_Number" style="color:red;"><?php echo $err_Account_Number;?></span></td>
                                        </tr>
										
										<tr>
                                            <td align="left" style="padding-bottom:10px;">Amount No </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="number" name="Amount_No" id="Amount_No" placeholder="Number"><span id="Amount_No" style="color:red;"><?php echo $err_Amount_No;?></span></td>
                                        </tr>
                                       
                                       
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Gender: </td>
                                            <td align="left" style="padding-bottom:10px;">
                                                <input type="radio" name="gender" id="gender_male" value="Male"> Male
                                                <input type="radio" name="gender" id="gender_female" value="Female"> Female
                                                <span id="err_gender" style="color:red;"><?php echo $err_gender;?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Address: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="address" id="address" placeholder="Address"><span id="err_address" style="color:red;"><?php echo $err_address;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">City: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="city" id="city" placeholder="City"><span id="err_city" style="color:red;"><?php echo $err_city;?></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">State: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="state" id="state" placeholder="State"><span id="err_state" style="color:red;"><?php echo $err_state;?></span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="padding-bottom:20px;" colspan="2" align="center"><a href="Client_Payment_online.php"><U>Already paid</U></a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><input class="btn btn-outline-success" type="submit" name="reg_button" value="Pay"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>