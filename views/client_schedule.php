<?php
require_once '..\controllers\client_schedule_controller.php';
$schedule=scheduleinfo();


?>
<html>
  <head>
  <title>Schedule</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
     
	 <div class="Schedule">
	 <form action="" method="post">
	     <table>
		 <tr>
		 <td <td align="right" id="registration-box-style">
		  <center><h3 style="color:Green;">Schedule</h3></center>
		 </td>
		 </tr>
		 
		 
		 <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial_No</th>
      <th scope="col">Lawyer_Name</th>
      <th scope="col">Metting_Time</th>
      <th scope="col">Hearing_time</th>
    </tr>
  </thead>
  <tbody>
    <?php
       
      for($i=0 ;$i<count($schedule);$i++){
        echo "<tr>";
        echo "<td>".$schedule[$i]["Serial_No"]."</td>";
        echo "<td>".$schedule[$i]["Lawyer_Name"]."</td>";
        echo "<td>".$schedule[$i]["Metting_Time"]."</td>";
        echo "<td>".$schedule[$i]["Hearing_time"]."</td>";
       
     echo "<td></td>";
        //echo '<td><a href="?parem=add&amp;id='.$lawyer[$i]["Serial_No"].'" class="btn btn-primary">Add</td>';

        echo "</tr>";

      }

      ?>
  </tbody>
</table>
		 
		 
		 
		 
		 
		 
		 </table>
		  <h5><a href='client_information.php'>Go back</a></h5>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 </form>






</html>