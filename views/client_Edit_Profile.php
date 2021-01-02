<?php
       include_once"../controllers/client_Edit_profile_controller.php";

?>

<<html>
    <head>
        <title>Edit Profile</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
	    
		<div class="Editprofile">
        <center>
		<form  action="" method="POST" onsubmit="return registrationValidation();">
            <table>
                    <tr >
                        <td><img src="../assets/justicelogo.png"; width="380" height="480"></td>
						
                        <td align="right" id="registration-box-style">
						
                            <center><h4 style="color:Green;">Edit - Profile</h4></center>
							
                            <label for="profile">Profile Picture: </label><input type="file" name="reg_pp"  id="pp" accept="image/*"><span id="err_pp" style="color:red;">*<?php echo $err_reg_pp;?></span><br><br>
							
                            <label for="fullname">Full Name: </label><input type="text" name="reg_fullname" id="reg_fullname" placeholder="Full Name" value="<?php echo $reg_fullname; ?>"><span id="err_reg_fullname" style="color:red;">*<?php echo $err_reg_fullname;?></span><br><br>
                            
							<label for="username">User Name: </label><input type="text" name="reg_username" id="reg_username" placeholder="User Name" value="<?php echo $reg_username; ?>"><span id="err_reg_username" style="color:red;">*<?php echo $err_reg_username;?></span><br><br>
                            
							<label for="email">Email: </label><input type="text" name="reg_email" id="reg_email" placeholder="Email" value="<?php echo $reg_email; ?>"><span id="err_reg_email" style="color:red;">*<?php echo $err_reg_email;?></span><br><br>
                            
							<label for="phone">Phone: </label><input type="number" name="reg_phone" id="reg_phone" placeholder="Phone Number" value="<?php echo $reg_phone; ?>"><span id="err_reg_phone" style="color:red;">*<?php echo $err_reg_phone;?></span><br><br>
                            
							<label for="password">Password: </label><input type="password" name="reg_pass" id="reg_pass" placeholder="Password"><span id="err_reg_pass" style="color:red;">*<?php echo $err_reg_pass;?></span><br><br>
                            
							<label for="confirm_password">Confirm Password: </label><input type="password" name="reg_cpass" id="reg_cpass" placeholder="Confirm Password"><span id="err_reg_cpass" style="color:red;">*<?php echo $err_reg_cpass;?></span><br><br>
                            
							<label for="nid">NID: </label><input type="number" name="reg_nid" id="reg_nid" placeholder="NID" value="<?php echo $reg_nid; ?>"><span id="err_reg_nid" style="color:red;">*<?php echo $err_reg_nid;?></span><br><br>
                            
							<label for="birthday">Birthday: </label><input type="date" name="reg_dob" id="reg_dob"><span id="err_reg_dob" style="color:red;">*<?php echo $err_reg_dob;?></span><br><br>
                            
							<label for="gender">Gender: </label><input type="radio" name="reg_gender" id="gender_male" value="Male"> Male
                            
							<input type="radio" name="reg_gender" id="gender_female" value="Female"> Female<span id="err_reg_gender" style="color:red;">*<?php echo $err_reg_gender;?></span><br><br>
                            
							<label for ="address">Address: </label><input type="text" name="reg_address" id="reg_address" placeholder="Address"><span id="err_reg_address" style="color:red;">*<?php echo $err_reg_address;?></span><br><br>
							
							<label for ="city">City: </label><input type="text" name="city" id="reg_city" placeholder="City"><span id="err_reg_city" style="color:red;">*<?php echo $err_reg_city;?></span><br><br>
                            
							<label for ="state">State:<input type="text" name="state" id ="reg_state" placeholder="State"><span id="err_reg_state" style="color:red;">*<?php echo $err_reg_state;?></span><br><br>
                            
							<label for ="zip/postal">Zip/Postal:<input type="text" name="zip" id="reg_zip" placeholder="postal/Zip-Code"><span id="err_reg_zip" style="color:red;">*<?php echo $err_reg_zip;?></span><br><br>
                            
							<a href="../views/landing.php"><u>Already uptaded!go to login</u></a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" class="button" name="reg_button"value="Uptade"><br><br>
                        </td>

                    </tr>
                </table>
            </form>
        </center>
		<script src="../scripts/client_Edit_Profile.js"></script>
		
    </body>
</html>
