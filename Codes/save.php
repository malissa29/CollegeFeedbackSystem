<?php


$saveTable=$_POST['saveTable'];
echo ("HI");
if($saveTable==0)
{
echo "HI";
$name=$_POST['name'];
$punctuality=(int)$_POST['punctuality'];
$knowledge=(int)$_POST['knowledge'];
$efficiency=(int)$_POST['efficiency'];
echo $efficiency;
$con=mysqli_connect('localhost','root','','feedback','3306');
$sql=mysqli_query($con,"INSERT INTO save (name,punctuality,efficiency,knowledge)
VALUES ('$name','$punctuality','$efficiency','$knowledge')") or die(mysqli_error($this->db_link));
echo (mysql_errno());
}
else if($saveTable==1)
{
 
$category=$_POST['category'];
$grade=(int)$_POST['grade'];

$con=mysqli_connect('localhost','root','','feedback','3306');
$sql=mysqli_query($con,"INSERT INTO canteensave (category,grade)
VALUES ('$category','$grade')");
}
else
{
  $category=$_POST['category'];
$grade=(int)$_POST['grade'];

$con=mysqli_connect('localhost','root','','feedback','3306');
$sql=mysqli_query($con,"INSERT INTO librarysave (category,grade)
VALUES ('$category','$grade')");
}

/* if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
} */

echo "1 record added";
mysqli_close($con);
echo "Success";


?>