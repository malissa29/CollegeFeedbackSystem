<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<title>Card Deck Drop Down List Demo</title>
<style>
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}

ol,
ul { list-style: none; }

body {
  background-color: #F2EFE9;
  overflow: visible;
  padding-top: 40px;
  font-family: helvetica, arial, sans-serif;
  font-size: 1em;
}

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

#wrapper {
  width: 680px;
  margin: 20px auto;
  height: 1000px;
}

h1 {
  font-size: 2.5em;
  text-align: center;
  font-weight: bold;
  margin-bottom: 10px;
  line-height: 1.4em;
  color: #4e6a6a;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.8);
  font-family: helvetica, arial, sans-serif;
}

h1 span { font-weight: lighter; }

.card-drop {
  max-width: 300px;
  position: relative;
  margin: 0 auto;
  top:34px;
  left: 323px;
  -webkit-perspective: 800px;
  -moz-perspective: 800px;
  -ms-perspective: 800px;
  -o-perspective: 800px;
  perspective: 800px;
}

.card-drop a {
  display: block;
  width: 100%;
  background-color: salmon;
  padding: 20px 0 20px 20px;
  height: 60px;
  text-decoration: none;
  color: #fff;
  background-color: #5f8181;
  border-bottom: 1px solid #4e6a6a;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

.card-drop a i {
  display: inline-block;
  width: 20px;
}

.card-drop > a.toggle {
  position: relative;
  z-index: 300;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  -o-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transform-origin: 50% 0%;
  -moz-transform-origin: 50% 0%;
  -ms-transform-origin: 50% 0%;
  -o-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  -webkit-transition: 0.1s linear;
  -moz-transition: 0.1s linear;
  -o-transition: 0.1s linear;
  transition: 0.1s linear;
  background-color: #729797;
}

.card-drop > a.toggle:active {
  -webkit-transform: rotateX(60deg);
  -moz-transform: rotateX(60deg);
  -ms-transform: rotateX(60deg);
  -o-transform: rotateX(60deg);
  transform: rotateX(60deg);
}

.card-drop > a.toggle.active:before { content: "\f0d8"; }

.card-drop > a.toggle:before {
  border-left: 1px solid #4E6A6A;
  color: #344646;
  content: "";
  display: block;
  font-family: 'FontAwesome';
  font-size: 1.3em;
  height: 59px;
  line-height: 60px;
  position: absolute;
  right: 0;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
  top: 0;
  width: 60px;
}

.card-drop ul {
  position: absolute;
  height: 100%;
  top: 0;
  display: block;
  width: 100%;
}

.card-drop ul li {
  margin: 0 auto;
  -webkit-transition: all, 0.3s ease-out;
  -moz-transition: all, 0.3s ease-out;
  -o-transition: all, 0.3s ease-out;
  transition: all, 0.3s ease-out;
  position: absolute;
  top: 0;
  z-index: 0;
  width: 100%;
}

.card-drop ul li a:hover {
  background-color: #6a9090;
  color: #dce5e5;
}

.card-drop ul li.active a {
  color: #95b1b1;
  background-color: #547272;
  cursor: default;
}

.card-drop ul li.closed a:hover {
  cursor: default;
  background-color: #5f8181;
}
#headerHomeDiv
{
 position: absolute;
background-color: black;
left: 0px;
width: 946px;
height: 60px;
}
#tableDiv{
position:absolute;
left:230px;
top:15%;
width:900px;
}
#selectDiv{
position:absolute;
left:230px;
top:0%;
width:400px;
height:200px;
}
#dept{
    position: absolute;
width: 120px;
margin-top: 110px;
margin-left: 150px;
height: 35px;
}
#className{
    position: absolute;
width: 120px;
margin-top: 110px;
height: 35px;
}
#division{
    position: absolute;
width: 120px;
margin-top: 110px;
margin-left: 302px;
height: 35px;
}
    body{
    background-color: #004756;
   }
</style>

<script>
var isSeen=true;
$(".faculty").click(function(){
    $("#tableDiv").empty();
   var arr = [
  {val : 'IT', text: 'IT'},
  {val : 'CMPN', text: 'CMPN'},
  {val : 'EXTC', text: 'EXTC'}
];

var sel = $('<select>').attr('id','dept').appendTo('#selectDiv');
$(arr).each(function() {
 sel.append($("<option>").attr('value',this.val).text(this.text));
});

var arr_one = [
  {val : 'FE', text: 'FE'},
  {val : 'SE', text: 'SE'},
  {val : 'TE', text: 'TE'},
    {val : 'BE', text: 'BE'}
];

var sel = $('<select>').attr('id','className').appendTo('#selectDiv');
$(arr_one).each(function() {
 sel.append($("<option>").attr('value',this.val).text(this.text));
});
var arr_two = [
  {val : 'A', text: 'A'},
  {val : 'B', text: 'B'},
];

var sel = $('<select>').attr('id','division').appendTo('#selectDiv');
$(arr_two).each(function() {
 sel.append($("<option>").attr('value',this.val).text(this.text));
});

 $("#selectDiv").append("<input type='button' style='position:absolute; margin-top:175px;margin-left:0px' class='button button-secondary' id='go' value='go' onclick='go()'/>");

});
$(".canteen").click(function(){

$("#selectDiv").empty();
$.ajax({
            type: "POST",
            url: "canteenAdmin.php",
            data: {},
            cache: false,
            success: function(data){
            if(data)
            {
           
            $("#tableDiv").empty();
            $("#tableDiv").append(data);
            
            }
            else
            {
            
            }
            }
            });

});
$(".library").click(function(){
$("#selectDiv").empty();
$.ajax({
            type: "POST",
            url: "libraryAdmin.php",
            data: {},
            cache: false,
            success: function(data){
            if(data)
            {
           
            $("#tableDiv").empty();
            $("#tableDiv").append(data);
            
            }
            else
            {
            
            }
            }
            });

});


</script>
<script >

function go()
{           
            $("#go").hide();

            var className=$("#className").val();
            var dept=$("#dept").val();
            var division=$("#division").val();
           
            var dataString = 'className='+className+'&dept='+dept+'&division='+division;
        
           $(selectDiv).empty();
            $.ajax({
            type: "POST",
            url: "facultyAdmin.php",
            data: dataString,
            cache: false,
            success: function(data){
            if(data)
            {
           
            $("#tableDiv").empty();
            $("#tableDiv").append(data);
            
            }
            else
            {
            
            }
            }
            });
        
}


</script>
<script>
$(document).ready(function(){
$("#showMenu").click(function(){
isSeen=!isSeen;
if(!isSeen){
$(".card-drop").fadeOut(1000);
$("#showMenu").val('Show Selector');
}else{
$(".card-drop").fadeIn(1000);
$("#showMenu").val('Hide Selector');
}
});

$("#exit").click(function(){
 $("body").load("home.php").hide().fadeIn(1500).delay(6000);
});
});
 </script>

</head>

<body>
<div id="mainDiv" style="position:absolute;top:5%;left:15%;width:70%;height:92%;background-color:white; box-shadow: rgba(200,200,200,0.7) 0 4px 10px -1px">
 

             <div id="headerHomeDiv"></div>
             <h1 style="position: absolute;top:0px;left: 40px;color:white;font-family: helevetica-light;font-weight: 30 ">FEEDBACK SYSTEM ADMIN <i class="fa fa-file-text-o"></i></h1>
             <input type="button" id="showMenu" style="position: absolute;top: 14px;left: 800px;height:30px;color:white;font-family: helevetica-bold;font-weight: 50;background-color:transparent" value="Hide Selector"/>
            <input type="button" id="exit" style="position: absolute;top: 14px;left: 700px;height:30px;color:white;font-family: helevetica-bold;font-weight: 50;background-color:transparent" value="Go Back"/>

            </div>
             <div id="selectDiv"></div>
            <div id="tableDiv"></div>
<div id="wrapper">
 
  <div class="card-drop"> <a class='toggle' href="#"> <i class='fa fabars'></i> <span class='label-active'>Category</span> </a>
    <ul>
      <li class='active'> <a data-label="Select Category" href="#"><i class='fa fabars'></i>Select Category</a> </li>
      <li class='faculty'> <a data-label="Faculty" href="javascript:void(0);"  onclick="menuTapped("faculty");"><i class='fa fa-html5'></i> Faculty</a> </li>
      <li class='canteen'> <a data-label="Canteen" href="javascript:void(0);"  onclick="menuTapped("faculty");"><i class='fa fa-css3'></i> Canteen</a> </li>
      <li class='library'> <a data-label="Library" href="javascript:void(0);"  onclick="menuTapped("faculty");"><i class='fa fa-linux'></i> Library</a> </li>
     </ul>
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>

$(document).ready(function(){
  (function($){
  //Author: Brady Sammons
  //URL: www.bradysammons.com
    /* -------------------------------------------------------- */ 
    /*  //set Global variables
    /* -------------------------------------------------------- */ 
    var cards = $(".card-drop"),
        toggler = cards.find(".toggle"),
        links = cards.find("ul>li>a"),
        li = links.parent('li'),
        count = links.length,
        width = links.outerWidth();

console.info(count);

console.info(width);
console.info(toggler);
console.info(links);
console.info(li);
console.info(cards );

        //set z-Index of drop Items
        links.parent("li").each(function(i){
            $(this).css("z-index" , count - i); //invert the index values
        });

        //set top margins & widths of li elements
        function setClosed(){
            li.each(function(index){
                 $(this).css("top" , index *2)
                                              
                        .css("width" , width - index *20)
                        .css("margin-left" , (index*20)/2)
                                                .css("margin-left" , (index*20)/2);
            });
                       
            li.addClass('closed');
            toggler.removeClass("active");
        }
        setClosed();

    /* -------------------------------------------------------- */ 
    /*  Toggler Click handler
    /* -------------------------------------------------------- */ 
    toggler.on("mousedown" , function(){
        var $this = $(this); //cache $(this)
        //if the menu is active:
               console.info(this);
        if($this.is(".active")){
            setClosed();
        }else{
            //if the menu is un-active:
            $this.addClass("active");
            li.removeClass('closed');
            //set top margins
            li.each(function(index){
                 $(this).css("top" , 60 * (index + 1))
                        .css("width" ,"70%")
                        .css("margin-left" , "40px");
            });
        }
    });

    /* -------------------------------------------------------- */ 
    /*  Links Click handler
    /* -------------------------------------------------------- */ 
    links.on("click" , function(e){
        var $this = $(this),
            label = $this.data("label");
            icon = $this.children("i").attr("class");
            
            li.removeClass('active');
        if($this.parent("li").is("active")){
            $this.parent('li').removeClass("active");
        }else{
            $this.parent("li").addClass("active");
        }
        toggler.children("span").text(label);
        toggler.children("i").removeClass().addClass(icon);
        setClosed();
        e.preventDefault;
    });

})(jQuery);
}); 
</script>


</body>
</html>
