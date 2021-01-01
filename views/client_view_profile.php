<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="../styles/client_style.css">
</head>
    <body>
	  
	  <div class="profile">
	     <form action="" method="post">
		     <table>
			 <tr>
		 <td <td align="right" id="registration-box-style">
		  <center><h3 style="color:Green;">Profile</h3></center>
		 </td>
		 </tr>
			 
			 <?php
							 
				
				$name="";
				$uname="";
				$email="";
				$phone="";
				$password="";
				$nid="";
				$birthday="";
				$gender="";
				$address="";
				
				echo "
				
			
				

				
				<tr>
				     <td>Full Name:</td>
					 
				</tr>
				<tr>
				     <td>User Name:</td>
					 
				</tr>
				<tr>
				     <td>Email:</td>
					 
				</tr>
				<tr>
				     <td>Phone:</td>
					 
				</tr>
				<tr>
				     <td>Password:</td>
					 
				</tr>
				<tr>
				     <td>NID:</td>
					 
				</tr>
				<tr>
				     <td>Birthday:</td>
					 
				</tr>
				<tr>
				     <td>Gender:</td>
					 
				</tr>
				<tr>
				     <td>Address:</td>
					 
				
					<tr>";
					?>
						<td colspan="2" align="center">
						    
							  <a href="client_Edit_Profile.php"> <input type ="button" name ="" value ="Edit Profile"></a>
						</td> 
					</tr>
			 </table>
			  <h5><a href='client_information.php'>Go back</a></h5>
		 </form>
		 </div>
    </body>

</html>

