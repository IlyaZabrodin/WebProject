<?php
  $rows = 1;
  $cols = 7;
  $id = 0;
  $login = $_POST['login'];
	  
	  $table = '<table border="1">';
	  
	  $table .= '<tr>';
	  $id = $id + 1;
	  $table .= '<td>'. 'id' .'</td>'; 
	  $table .= '<td>'. 'Login' .'</td>'; 
	  $table .= '<td>'. 'Task 1' .'</td>'; 
	  $table .= '<td>'. 'Task 2' .'</td>'; 
	  $table .= '<td>'. 'Task 3)' .'</td>'; 
	  $table .= '<td>'. 'Total' .'</td>';  
	  $table .= '</tr>';
	  for ($tr=1; $tr<=$rows; $tr++) {
		  $table .= '<tr>';
		  $table .= '<td>'. $id .'</td>'; 
	      $table .= '<td>'. $login .'</td>'; 
	      $table .= '<td>'. $t1 .'</td>'; 
	      $table .= '<td>'. $t2 .'</td>'; 
	      $table .= '<td>'. $t3 .'</td>'; 

		  $id = $id + 1;
	      $table .= '</tr>';
	  }
	  $table .= '</table>';
      echo $table;
?>