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
$className =$_POST['className'];
$dept =$_POST['dept'];
$division =$_POST['division'];
//$division =($_GET['division']);
 $con=  mysqli_connect("localhost","root","","feedback","3306");
     $teacherName=array();
echo "<table border=1px id=\"tt\"  class=\"TFtable\">
 <tr >

<th>Name</th>
<th>Punctuality</th>
<th>Efficiency</th>
<th>Knowledge</th>
</tr> ";
 $query=  mysql_query("SELECT DISTINCT name FROM feedback.teacher_list WHERE (class='$className' AND dept='$dept') AND division ='$division'") or die(mysql_errno());
 while($row = mysql_fetch_array($query))
{
  $teacherName=$row[0];
 
 $queryTwo=mysql_query("SELECT AVG(punctuality),AVG(efficiency),AVG(knowledge) FROM feedback.save WHERE name='$teacherName'") or die(mysql_errno());

while($rowTwo = mysql_fetch_array($queryTwo))
{
echo "<tr>";
echo "<td>" . $teacherName . "</td>";
echo "<td>" . $rowTwo[0] . "</td>";
echo "<td> " . $rowTwo[1] . "</td>";
echo "<td>  " . $rowTwo[2] . "</td>";

}
}

echo "</table>";


?>