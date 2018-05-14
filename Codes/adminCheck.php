<?php
sleep(1);
$con=  mysqli_connect("localhost","root","","atm","3306");
         $username = $_POST['username'];
         $password = $_POST['password'];
         $query=  mysql_query("SELECT * FROM atm.admin_table where name='$username' AND pin='$password'");
         $row=  mysql_fetch_array($query);
        
       if(!empty($row['name']) and !empty($row['pin']))
        {
           echo "success";
        } 
		


?>