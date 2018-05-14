


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
$className =$_POST['username'];
$dept =$_POST['password'];
$division =$_POST['info'];
//$division =($_GET['division']);
 $con=  mysqli_connect("localhost","root","","feedback","3306");
     

 $query=  mysql_query("SELECT * FROM feedback.teacher_list WHERE (class='$className' AND dept='$dept') AND division ='$division'") or die(mysql_errno());
 


 echo "<table border=1px id=\"tt\"  class=\"TFtable\">
 <tr >
<th>id</th>
<th>Name</th>
<th>Punctuality</th>
<th>Efficiency</th>
<th>Knowledge</th>
</tr> ";

while($row = mysql_fetch_array($query))
{
   
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "<td>" . $row[1] . "</td>";
echo "<td>  <input id=\"remark \" type=\"text\"/></td>";
echo "<td>  <input id=\"remark \" type=\"text\"/></td>";
echo "<td>  <input id=\"remark \" type=\"text\"/> </td>";
}
echo "</table>";


?>