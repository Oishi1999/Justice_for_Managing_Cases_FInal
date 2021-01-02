<?php
require_once '../controllers/client_payment_bank_controller.php';
    
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
                        <td style="padding:20px;"><img src="../assets/bank.png"; width="380" height="480"></td>
                        <td align="center">
                            <div class="card border-success mb3 dropshadow">
                                <div class="card-header">Payment  Via Bank</div>
                                <div class="card-body">
                                    <table>
									
									 <tr>
                                            <td align="left" style="padding-bottom:10px;">Full Name: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="fullname" id="fullname" placeholder="Full Name" value="<?php echo $fullname; ?>"><span id="err_fullname" style="color:red;"><?php echo $err_fullname;?></span></td>
                                        </tr>
										
										<tr>
                                            <td align="left" style="padding-bottom:10px;">ID: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="number" name="ID" id="ID" placeholder="ID Number" value="<?php echo $ID; ?>"><span id="err_ID" style="color:red;"><?php echo $err_ID;?></span></td>
                                        </tr>
										
										<tr>
                                            <td align="left" style="padding-bottom:10px;">Due: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="number" name="due" id="due" placeholder="due balance" value="<?php echo $due; ?>"><span id="err_due" style="color:red;"><?php echo $err_due;?></span></td>
                                        </tr>
										
										
										<tr>
                                            <td align="left" style="padding-bottom:10px;">Balance: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="number" name="balance" id="balance" placeholder="balance" value="<?php echo $due; ?>"><span id="err_balance" style="color:red;"><?php echo $err_balance;?></span></td>
                                        </tr>
										
										<tr>
                                            <td align="left" style="padding-bottom:10px;">Paid: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="number" name="paid" id="paid" placeholder="paid" value="<?php echo $paid; ?>"><span id="err_paid" style="color:red;"><?php echo $err_paid;?></span></td>
                                        </tr>
										
										<tr>
                                            <td align="left" style="padding-bottom:10px;">Due Date: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="number" name="due_date" id="due_date" placeholder="due_date" value="<?php echo $due_date; ?>"><span id="err_due_date" style="color:red;"><?php echo $err_due_date;?></span></td>
                                        </tr>
										
										<tr>
                                            <td align="left" style="padding-bottom:10px;">Payment Date: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="number" name="payment_date" id="payment_date" placeholder="payment_date" value="<?php echo $payment_date; ?>"><span id="err_payment_date" style="color:red;"><?php echo $err_payment_date;?></span></td>
                                        </tr>
										
										
										<tr>
                                            <td align="left" style="padding-bottom:10px;">Payer ID: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="number" name="payer_id" id="payer_id" placeholder="payer id" value="<?php echo $payer_id; ?>"><span id="err_payer_id" style="color:red;"><?php echo $err_payer_id;?></span></td>
                                        </tr>
										
										<tr>
                                            <td align="left" style="padding-bottom:10px;">Receiver ID: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="number" name="receiver_id" id="receiver_id" placeholder="receiver id" value="<?php echo $receiver_id; ?>"><span id="err_receiver_id" style="color:red;"><?php echo $err_receiver_id;?></span></td>
                                        </tr>
										
										
										
										<tr>
                                            <td align="left" style="padding-bottom:10px;">Bank Name: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="Bank_name" id="Bank_name" placeholder="Bank_name" value="<?php echo $Bank_name; ?>"><span id="err_Bank_name" style="color:red;"><?php echo $err_Bank_name;?></span></td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td align="left" style="padding-bottom:10px;">Phone: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" onkeyup="isTakenPhone(this.value)" type="number" name="phone" id="phone" placeholder="Phone Number" value="<?php echo $phone; ?>"><span id="err_phone" style="color:red;"><?php echo $err_phone;?></span></td>
                                        </tr>
                                        
                                            <td align="left" style="padding-bottom:10px;">Address: </td>
                                            <td align="left" style="padding-bottom:10px;"><input class="form-control" type="text" name="address" id="address" placeholder="Address"><span id="err_address" style="color:red;"><?php echo $err_address;?></span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td style="padding-bottom:20px;" colspan="2" align="center"><a href="client_payment.php"><U>Already paid</U></a></td>
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