<?php
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>ECHO</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.shake.js"></script>
	<script>
	var username=$("#username").val();
	var password=$("#password").val();
	$(document).ready(function(){
	$("#box").css({"marginTop":"-200px"});
	$("#box").animate({  marginTop: '20%' }, 500 );
	$("h2").hide().fadeIn(1000);
	});
	       $(document).ready(function() {


			
			$('#login').click(function()
			{
			var username=$("#username").val();
			var password=$("#password").val();
		    var dataString = 'username='+username+'&password='+password;
			if($.trim(username).length>0 && $.trim(password).length>0)
			{
			
 
			$.ajax({
            type: "POST",
            url: "ajaxLogin.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Trying...');},
            success: function(data){
            if(data)
            {
            $("body").load("home.php").hide().fadeIn(1500).delay(60);
            }
            else
            {
             $('#box').shake();
             $(".info").hide();
			 $("#login").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });
			
			}
			return false;
			});
			
				
			});

	       $(document).ready(function(){
             $("#username").keyup(function(){
             	if($("#password").val().length==0 || $("#username").val().length==0)
             	{
             		 $(".info").fadeIn(300);
             	}
             	else
             	{
             		$(".info").fadeOut(300);
             	}
              $("#error").html("");
             });
	       });
	        $(document).ready(function(){
             $("#password").keyup(function(){
             	if($("#username").val().length==0 || $("#password").val().length==0 )
             	{
             		 $(".info").fadeIn(300);
             	}
             	else
             	{
             		$(".info").fadeOut(300);
             	}
             $("#error").html("");
             });
	       });

	        function checkText(){
             if($.trim(username).length>0 && $.trim(password).length>0)
             {
             	$(".info").fadeOut(300);
             }
	       	}
		</script>
		
        <style>
		body{
    background-color: #004756;
    
   }

.info{
	color: red;
margin-top: 235px;
margin-left: 24px;
}

   </style>


</head>

<body>
<div id="main">
 <!-- <img style="top:50px; position:absolute" src="images/logo.jpg" width="80px" height="80px"></img> -->

<div id="box">
<div id="headingDiv">


 <h1 style="position: absolute;top: -10px;left: 142px;color:white;font-family: helevetica-light;font-weight: 30 ">Feedback <i class="fa fa-file-text-o"></i></h1>
 <p class="info">Kindly fill in your username and password</p>

</div>

<form action="" method="post">

<!-- <label>Username</label>  -->

<input type="text" name="username" class="input" autocomplete="off" id="username" placeholder="Username"/>
<label></label>
<input type="password" name="password" class="input" autocomplete="off" id="password" placeholder="Password"/><br/>
<input type="submit" class="button button-primary" value="Log In" id="login"/> 
<span class='msg'></span> 

<div id="error">

</div>	

</div>
</form>	
</div>

</div>
</body>
</html>