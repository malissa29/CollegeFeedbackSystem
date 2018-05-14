


<style type="text/css">
	.TFtable{
		width:60%; 
		border-collapse:collapse; 
	}
	.TFtable td{ 
		padding:7px; border:#4e95f4 1px solid;
		text-align: center;
	}
	
	.TFtable tr{
		background: #b8d1f3;
	}
	
	.TFtable tr:nth-child(odd){ 
		background: #b8d1f3;
	}
	
	.TFtable tr:nth-child(even){
		background: #dae5f4;
	}
</style>



<?php

 $con=  mysqli_connect("localhost","root","","feedback","3306");
     

 $query=  mysql_query("SELECT * FROM feedback.library") or die(mysql_errno());
 


 echo "<table border=1px id=\"tt\"  class=\"TFtable\">
 <tr >
<th>id</th>
<th>Category</th>
<th>Grade</th>


</tr> ";

while($row = mysql_fetch_array($query))
{
   
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "<td>" . $row[1] . "</td>";
echo "<td>  <input type=\"text\"/></td>";


}
echo "</table>";


?>