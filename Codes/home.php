<?php

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Ajax Login Page with Shake Effect</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.shake.js"></script>
<script src="js/jquery-ui.js"></script>

	<script>
  var saveTable=0;
  var isSeen=true;
  var adminClicked=false;
			$(document).ready(function() {
			$("#box").css({"marginTop":"-400px"});
			$('#enter').click(function()
			{
        saveTable=0;
			var username=$("#className").val();
			var password=$("#dept").val();
			var info=$("#division").val();
		    var dataString = 'username='+username+'&password='+password+'&info='+info;
			
			if($.trim(username).length>0 && $.trim(password).length>0)
			{
			
 
			$.ajax({
            type: "POST",
            url: "getUser.php",
            data: dataString,
            cache: false,
            success: function(data){
            if(data)
            {
			$("#txtHint").hide();
			$("#tableDiv").empty();
            $("#tableDiv").append(data);
			$("#buttonDiv").empty();
		    $("#buttonDiv").append("<input type='button' class='button button-secondary' id='save' value='Save' onclick='myFunction()'/>");
        $("#resetButtonDiv").append("<input type='button' class='button button-secondaryTwo' id='reset' value='Reset' onclick='resetFunction()' />");
            }
            else
            {
             $('#box').shake();
			 $("#enter").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });
			
			}
			return false;
			});
			
				
			});
		</script>
		<script>
  $(function() {
    $( "#draggable" ).draggable();
  });
  </script>
  <script>


  </script>
		<script>
function myFunction(){
  var shouldBeSaved=true;
   
        var table = $("table tbody");
       table.find('tr').not( ":first" ).each(function (i) {
        var $tds = $(this).find('td'),
            productId = $tds.eq(0).text(),
            product = $tds.eq(1).text(),
            punctuality = $tds.eq(2).children('input').val();
       knowledge =  $tds.eq(3).children('input').val();
      if($.trim(punctuality).length===0 && $.trim(knowledge).length===0)
      {
        shouldBeSaved=false;

      }
       else
       { 
      
       }
     });
       if(shouldBeSaved===true)
       {
        saveFunction();
       }
       else
       {
        alert("Kindly fill in all the fields before saving");
       }
}

	 function saveFunction() {
   
        
        var table = $("table tbody");
       table.find('tr').not( ":first" ).each(function (i) {
        if(saveTable===0)
        {

        var $tds = $(this).find('td'),
            productId = $tds.eq(0).text(),
            product = $tds.eq(1).text(),
            punctuality = $tds.eq(2).children('input').val();
            efficiency= $tds.eq(3).children('input').val();
             knowledge =  $tds.eq(4).children('input').val();

        var dataString = 'id='+productId+'&name='+product+'&punctuality='+punctuality+'&knowledge='+knowledge+'&efficiency='+efficiency+'&saveTable='+saveTable;
			     $.ajax({
            type: "POST",
            url: "save.php",
            data: dataString,
            cache: false,
            success: function(data){
            if(data)
            {
                
            }
            else
            {
             $('#box').shake();
			 $("#enter").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
      
            }
            }
            });
         }
         else
         {
           var $tds = $(this).find('td'),
            productId = $tds.eq(0).text(),
            product = $tds.eq(1).text(),
            punctuality = $tds.eq(2).children('input').val();
       
        var dataString = 'id='+productId+'&category='+product+'&grade='+punctuality+'&saveTable='+saveTable;
           $.ajax({
            type: "POST",
            url: "save.php",
            data: dataString,
            cache: false,
            success: function(data){
            if(data)
            {
                
            }
            else
            {
             $('#box').shake();
       $("#enter").val('Login')
       $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
      
            }
            }
            });
         }
        
    });
       alert("your feedback has been saved successfully!!");
       resetFunction();


}

</script>
<script>
function facultyClick()
{  
  saveTable=0;
	var username=$("#className").val();
			var password=$("#dept").val();
			var info=$("#division").val();
		    var dataString = 'username='+username+'&password='+password+'&info='+info;
			
			if($.trim(username).length>0 && $.trim(password).length>0)
			{
			
 
			$.ajax({
            type: "POST",
            url: "getUser.php",
            data: dataString,
            cache: false,
            success: function(data){
            if(data)
            {
			$("#txtHint").hide();
			$("#tableDiv").empty();
            $("#tableDiv").append(data);
			$("#buttonDiv").empty();
		    $("#buttonDiv").append("<input type='button' class='button button-secondary' id='save' value='Save' onclick='myFunction()'/>");
               $("#resetButtonDiv").append("<input type='button' id='reset' class='button button-secondaryTwo'  value='Reset' onclick='resetFunction()' />");
            }
            else
            {
             $('#box').shake();
			 $("#enter").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });
			
			}
			return false;
}
</script>
<script>
$(document).ready(function(){
    var dataStruct;
$(".home").click(function(){
facultyClick();
});
$(".about").click(function(){
saveTable=1;
$.ajax({
            type: "POST",
            url: "canteen.php",
            data: {},
            cache: false,
            success: function(data){
            if(data)
            {
                dataStruct=data;
			$("#txtHint").hide();
			$("#tableDiv").empty();
            $("#tableDiv").append(data);
			$("#buttonDiv").empty();
            var tableHeight=$("#tableDiv").height();
            $("#buttonDiv").css("height", tableHeight); 
		    $("#buttonDiv").append("<input type='button' id='save' class='button button-secondary'  value='Save' onclick='myFunction()'/>");
             $("#resetButtonDiv").append("<input type='button' id='reset' class='button button-secondaryTwo'  value='Reset' onclick='resetFunction()'/>");
            }
            else
            {
			 $('#box').shake();
			 $("#enter").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });

});
$(".search").click(function(){
  saveTable=2;
$.ajax({
            type: "POST",
            url: "library.php",
            data: {},
            cache: false,
            success: function(data){
            if(data)
            {
			$("#txtHint").hide();
			$("#tableDiv").empty();
            $("#tableDiv").append(data);
			$("#buttonDiv").empty();
		    $("#buttonDiv").append("<input type='button' class='button button-secondary' id='save' value='Save' onclick='myFunction()'/>");
               $("#resetButtonDiv").append("<input type='button' id='reset' class='button button-secondaryTwo'  value='Reset' onclick='resetFunction()'/>");
            }
            else
            { 
             $('#box').shake();
			 $("#enter").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });
});
$(".photos").click(function(){
window.location.href = "index.php";
});

$(".rssfeed").click(function(){
  adminClicked=true;
var docHeight = $(document).height();
$("body").append("<div id='overlay'></div>");

   $("#overlay")
      .height(docHeight)
      .css({
         'opacity' : 0.7,
         'position': 'absolute',
         'top': 0,
         'left': 0,
         'background-color': 'black',
         'width': '100%',
         'z-index':'999'
         
      });


$("#box").css({'position': 'absolute', 'z-index':'1000','margin-left':'500px'});
$('body').append("<div id='box'></div>");
  $("#box").animate({  marginTop: '10%' }, 500 );
  $("h2").hide().fadeIn(1000);
  });
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
            $("body").load("adminPage.php").hide().fadeIn(1500).delay(6000);
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
 
 

 </script>
 <script type="text/javascript">
<!--
var image1=new Image()
image1.src="images/Two.jpg"
var image2=new Image()
image2.src="images/Two.jpg"

var image3=new Image()
image3.src="images/Three.jpg"
var image4=new Image()
image4.src="images/Four.jpg"
var image5=new Image()
image5.src="images/Four.jpg"
//-->
</script>
 <script>
$(document).on('keypress','input[type=text]', function (e) {
  if(!adminClicked){
       if($(this).val().length===0)
       {
         
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            alert("Please enter only numeric values");
            e.preventDefault();
         }
     }else
     {
      e.preventDefault();
     }
  }
    });
</script>
 <script>
 function resetFunction()
 {
 $('table').find('input:text').val('');
 }
 </script>
 <script>
$(document).ready(function(){
$("#showMenu").click(function(){
isSeen=!isSeen;
if(!isSeen){
$("#draggable").fadeOut(1000);
$("#showMenu").val('Show Selector');
}else{
$("#draggable").fadeIn(1000);
$("#showMenu").val('Hide Selector');
}
});
});
 </script>







 <style>
		body{
    background-color: #004756;
   }
   select{
   height:30px;
   }
   option{
   height:30px;
   }
   #draggable{
  width: 300px;
margin: 50px auto;
left: 805px;
top: 44px;
text-align: left;
padding: 20px;
background-color: #1A1B1F;
color: #333;
border: 1px solid #e5e5e5;
box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px;
position: absolute;
z-index: 1;
height: 160px;
   }
#tableDiv{
position:absolute;
left:230px;
top:15%;
width:900px;
}
#buttonDiv{
position:absolute;
left:8%;
top:7%;
width:200px;
height:30px;

}
resetButtonDiv{
    position:absolute;
left:8%;
top:7%;
width:200px;
height:30px;
}
#headerHomeDiv
{
 position: absolute;
background-color: black;
left: 0px;
width: 946px;
height: 60px;
}
 #sliderDiv
 {
  position: absolute;
width: 300px;
height: 500px;
margin-left: 776px;
top: 442px;
 }       
   </style>
</head>

<body>
<div style="position:absolute;top:5%;left:15%;width:70%;height:92%;background-color:white; box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px">
 <ul id="navigation">
            <li class="home"><a href="javascript:void(0);" onclick="menuTapped("faculty");" title="Faculty Info"><h1 style="color:white;width=50px;position:absolute;margin-left:30px;font-size:45px; margin-top:10px"><i style="position:absolute;color:white" class="fa fa-user"></i></h1></a></li>
            <li class="about"><a href="javascript:void(0);" onclick="menuTapped("canteen");" title="Canteen Info"><h1 style="color:white;width=50px;position:absolute;margin-left:30px;font-size:45px; margin-top:10px"><i style="position:absolute;color:white" class="fa fa-glass"></i></h1></a></li>
            <li class="search"><a href="javascript:void(0);" onclick="menuTapped("library");" title="Library Info"><h1 style="color:white;width=50px;position:absolute;margin-left:28px;font-size:45px; margin-top:10px"><i style="position:absolute;color:white" class="fa fa-university"></i></h1></a></li>
            <li class="photos"><a href="javascript:void(0);" onclick="menuTapped("back");" title="Back to Login"><h1 style="color:white;width=50px;position:absolute;margin-left:30px;font-size:45px; margin-top:10px"><i style="position:absolute;color:white" class="fa fa-reply-all"></i></h1></a></li>
             <li class="rssfeed"><a href="javascript:void(0);" onclick="openAdmin();" title="Admin"><h1 style="color:white;width=50px;position:absolute;margin-left:30px;font-size:45px; margin-top:10px"><i class="fa fa-line-chart"></i></h1></a></li>
   
             </ul>

             <div id="headerHomeDiv"></div>
             <h1 style="position: absolute;top: -10px;left: 40px;color:white;font-family: helevetica-light;font-weight: 30 ">FEEDBACK SYSTEM <i class="fa fa-file-text-o"></i></h1>
             <input type="button" id="showMenu" style="position: absolute;top: 14px;left: 800px;height:30px;color:white;font-family: helevetica-bold;font-weight: 50;background-color:transparent" value="Hide Selector"/>
</div>
<div id="homeMain">
<div id="draggable">
<form action="" method="post">

<select id="dept" name="dept">
<option value="">Select a Department:</option>
<option value="IT">IT</option>
<option value="CMPN">CMPN</option>
<option value="EXTC">EXTC</option>
<option value="MECH">MECH</option>
</select><br/><br/>
<select id="className" name="class" >
<option value="">Select a Class:</option>
<option value="FE">FE</option>
<option value="SE">SE</option>
<option value="TE">TE</option>
<option value="BE">BE</option>
</select><br/><br/>
<select id="division" name="division">
<option value="">Select a Division:</option>
<option value="A">A</option>
<option value="B">B</option>
</select>
<input type="submit" class="button button-primaryTwo" id="enter" value="Enter" onclick="showUser()"/>
<div id="error">

</div>	

</div>
<h1 id="h01"></h1>
</form>	
</div>

</div>
</form>
<br>
<div id="txtHint" style="position:absolute;top:200px;left:0%;width:100%;text-align:center; color:white;font-size: 35px" ><b>Table Data will be listed here.</b></div>
<div id="tableDiv"></div>
<div id="sliderDiv"> <img src="images/One.jpg" name="slide" style="width:360px;height:200px;"></div>

<script type="text/javascript">
<!--
var step=1;
function slideit () {
document.images.slide.src=eval("image"+step+".src")
if(step<5)
step++;
else
step=1;
setTimeout("slideit()",2500);
}
slideit();
//-->
</script>


<div id="buttonDiv"></div>
<div id="resetButtonDiv"></div>
 <div class="header"></div>
        <div class="scroll"></div>
       

<script type="text/javascript">
            $(function() {
                $('#navigation a').stop().animate({'marginLeft':'-85px'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
                    }
                );
            });
        </script>


        <div id="box">
<div id="headingDiv">


 <h1 style="position: absolute;top: -10px;left: 170px;color:white;font-family: helevetica-light;font-weight: 30 ">Feedback <i class="fa fa-file-text-o"></i></h1>
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


</body>
</html>