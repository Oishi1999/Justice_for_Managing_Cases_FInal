<?php
require_once '..\controllers\client_Add_lawyer_controller.php';
$lawyer=lawyerinfo();

?>
<html>
<head>
    <title>Lawyer Lists</title>
	
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
     
	 <div class="Schedule">
	 <form action="" method="post">
	     <table>
		 <tr>
		 <td <td align="right" id="registration-box-style">
		  <center><h3 style="color:Green;">Lawyer Lists</h3></center>
		 </td>
		 </tr>
		 
		 
		 <table class="table">
  <thead>
    <tr>
      <th scope="col">Full_Name </th>
      <th scope="col">User_Name</th>
      <th scope="col">Email</th>
      <th scope="col">NID</th>
	  <th scope="col">Gender</th>
	   <th scope="col">Address</th>
      <th scope="col">Phone_Number</th>
	  <th scope="col">Catagory</th>
	  	  <th scope="col">Action</th>
	  
    </tr>
  </thead>
  <tbody>
   <?php
       
      for($i=0 ;$i<count($lawyer);$i++){
        echo "<tr>";
        echo "<td>".$lawyer[$i]["Full_Name"]."</td>";
        echo "<td>".$lawyer[$i]["User_Name"]."</td>";
        echo "<td>".$lawyer[$i]["Email"]."</td>";
        echo "<td>".$lawyer[$i]["NID"]."</td>";
        echo "<td>".$lawyer[$i]["Phone_Number"]."</td>";
        echo "<td>".$lawyer[$i]["Gender"]."</td>";
		 echo "<td>".$lawyer[$i]["Address"]."</td>";
        echo "<td>".$lawyer[$i]["Catagory"]."</td>";
     echo "<td></td>";
        echo '<td><a href="?parem=add&amp;id='.$lawyer[$i]["User_Name"].'" class="btn btn-primary">Add</td>';

        echo "</tr>";

      }

      ?>
    
  </tbody>
</table>
		 
		 
		 
		 
		 
		 
		 </table>
		  <h5><a href='client_information.php'>Go back</a></h5>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 </form>






</html>