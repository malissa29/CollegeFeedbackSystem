<style type="text/css">
	.TFtable{
		width:100%; 
		border-collapse:collapse; 
	}
	.TFtable td{ 
		padding:7px; border:#4e95f4 1px solid;
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
   $canteenArray=array("Quality","Quantity","Hygiene","Price","Hospitality","Staff");
   $arrlength=count($canteenArray);
echo "<table border=1px id=\"tt\"  class=\"TFtable\">
 <tr >
<th>Category</th>
<th>Grade</th>
</tr> ";

 for($x=0;$x<$arrlength;$x++) {
 	$temp=$canteenArray[$x];
  $queryTwo=mysql_query("SELECT AVG(grade) FROM feedback.canteensave WHERE category='$temp'") or die(mysql_errno());

while($rowTwo = mysql_fetch_array($queryTwo))
{
echo "<tr>";
echo "<td>" . $canteenArray[$x] . "</td>";
echo "<td>" . $rowTwo[0] . "</td>";


}
}

echo "</table>";


?>