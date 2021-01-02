<?php
require_once '..\controllers\client_About_Case_controller.php';
$cases=casesrinfo();

?>

<html>
<head>
    <title>Case  Information</title>
	
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
     
	 <div class="Schedule">
	 <form action="" method="post">
	     <table>
		 <tr>
		 <td <td align="right" id="registration-box-style">
		  <center><h3 style="color:Green;">Case  Information</h3></center>
		 </td>
		 </tr>
		 
		 
		 <table class="table">
  <thead>
    <tr>
      <th scope="col">id </th>
      <th scope="col">case_title</th>
      <th scope="col">case_description</th>
      <th scope="col">date_added</th>
	  <th scope="col">hearing_date</th>
      <th scope="col">client_id</th>
	  <th scope="col">judge_id</th>
	  <th scope="col">lawyer_id</th>
	  	 
	  
    </tr>
  </thead>
  <tbody>
   <?php
       
      for($i=0 ;$i<count($cases);$i++){
        echo "<tr>";
        echo "<td>".$cases[$i]["id"]."</td>";
        echo "<td>".$cases[$i]["case_title"]."</td>";
        echo "<td>".$cases[$i]["case_description"]."</td>";
        echo "<td>".$cases[$i]["date_added"]."</td>";
        echo "<td>".$cases[$i]["hearing_date"]."</td>";
		echo "<td>".$cases[$i]["client_id"]."</td>";
        echo "<td>".$cases[$i]["judge_id"]."</td>";
		echo "<td>".$cases[$i]["lawyer_id"]."</td>";
     echo "<td></td>";
        //echo '<td><a href="?parem=add&amp;id='.$cases[$i]["User_Name"].'" class="btn btn-primary">Add</td>';

        echo "</tr>";

      }

      ?>
    
  </tbody>
</table>
	 
		 </table>
		  <h5><a href='client_information.php'>Go back</a></h5>
	 
	 </form>

</html>