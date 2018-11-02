<!doctype html>
<html>
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>3dchat-3dchat</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style>
.grid-container {
  display: grid;
  height: 100%;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
  grid-gap: 1px 1px;
  grid-template-areas: "chat chat chat chat textbox textbox" "chat chat chat chat textbox textbox" "chat chat chat chat textbox textbox" "chat chat chat chat textbox textbox" "chatbox chatbox chatbox chatbox textbox textbox";
}

.chatbox { grid-area: chatbox; }

.textbox { grid-area: textbox; }

.chat { grid-area: chat; }
</style>
<?php

//Database connection
include("dbconnection.php");

//Declare variables
$Username = "Steffan";
$Password = "";
$Points = (1 + 10) * 2;
$Avatar = 1;

//Select data from db
$mysqli = NEW MySQLi ($host,$user,$pass,$db);
$result = $mysqli->query("SELECT * FROM MyGuests") or die($mysqli->error);
?>

<link href="css/grid-layout.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>


<body>
<!-- Grid container start -->
<div class="lt_grid-container">
  <div class="lt_chatbox">

<b>Points:</b><?php echo $Points ?>
</div>
<!-- Div ChatBox Start -->
 <div class="lt_chat">
<div class "">
<div class="room">
<div class="avatar"><br>
  <br>
  <br>
 
  <center>
<h5><?php 
  // Echo Username under avatar  
  echo $Username ?></h5>
	  
 </center>
<!-- Jquery Movement In ChatBox -->
</div>

<!-- Movement System First Colum -->
<div style="position:absolute; top:320px; left:20px;" class="chair">
</div>
<div style="position:absolute; top:340px; left:50px;" class="chair">
</div>
<div style="position:absolute; top:350px; left:80px;" class="chair">
</div>
<div style="position:absolute; top:365px; left:120px;" class="chair">
</div>
<div style="position:absolute; top:380px; left:150px;" class="chair">
</div>
<div style="position:absolute; top:400px; left:180px;" class="chair">
</div>
<div style="position:absolute; top:410px; left:220px;" class="chair">
</div>
<div style="position:absolute; top:430px; left:250px;" class="chair">
</div>
<!-- Movement System Second Colum -->
<div style="position:absolute; top:300px; left:55px;" class="chair">
</div>
<div style="position:absolute; top:320px; left:85px;" class="chair">
</div>
<div style="position:absolute; top:335px; left:120px;" class="chair">
</div>
<div style="position:absolute; top:345px; left:150px;" class="chair">
</div>
<div style="position:absolute; top:365px; left:180px;" class="chair">
</div>
<div style="position:absolute; top:385px; left:215px;" class="chair">
</div>
<div style="position:absolute; top:400px; left:245px;" class="chair">
</div>
<div style="position:absolute; top:410px; left:275px;" class="chair">
</div>
<!-- Movement System Third Colum -->
<div style="position:absolute; top:280px; left:85px;" class="chair">
</div>
<div style="position:absolute; top:300px; left:110px;" class="chair">
</div>
<div style="position:absolute; top:310px; left:150px;" class="chair">
</div>
<div style="position:absolute; top:335px; left:180px;" class="chair">
</div>
<div style="position:absolute; top:350px; left:215px;" class="chair">
</div>
<div style="position:absolute; top:365px; left:245px;" class="chair">
</div>
<div style="position:absolute; top:380px; left:280px;" class="chair">
</div>
<div style="position:absolute; top:400px; left:310px;" class="chair">
</div>
<!-- Movement System Fourth Colum -->
<div style="position:absolute; top:260px; left:120px;" class="chair">
</div>
<div style="position:absolute; top:245px; left:160px;" class="chair">
</div>
<div style="position:absolute; top:230px; left:190px;" class="chair">
</div>
<div style="position:absolute; top:215px; left:220px;" class="chair">
</div>
<div style="position:absolute; top:190px; left:250px;" class="chair">
</div>
<div style="position:absolute; top:175px; left:280px;" class="chair">
</div>
<div style="position:absolute; top:170px; left:310px;" class="chair">
</div>
<div style="position:absolute; top:155px; left:350px;" class="chair">
</div>
<div style="position:absolute; top:140px; left:380px" class="chair">
</div>
<div style="position:absolute; top:120px; left:410px" class="chair">
</div>

<!-- Movement System the last 10 rows vertical -->
<div style="position:absolute; top:270px; left:180px;" class="chair">
</div>
<div style="position:absolute; top:255px; left:160px;" class="chair">
</div>
<div style="position:absolute; top:240px; left:190px;" class="chair">
</div>
<div style="position:absolute; top:225px; left:220px;" class="chair">
</div>
<div style="position:absolute; top:210px; left:250px;" class="chair">
</div>
<div style="position:absolute; top:195px; left:280px;" class="chair">
</div>
<div style="position:absolute; top:180px; left:310px;" class="chair">
</div>
<div style="position:absolute; top:165px; left:330px;" class="chair">
</div>


<!-- ChatBox End-->
</div>
<br><p>
<!-- Chat TextBox Start-->
  <div class="lt_textbox">
  

<form class="chatbox" style="position:absolute; top:490px; left:0px;box-shadow: 5px 2px 2px gray;">
<input style="border-color: black;height:30px;font-size: 18px;" size="78" type="text" name="" value="" placeholder="Say hello to the world">
</form>
</div>
<!-- Side menu after text chatbox-->
  <div style="position:absolute; left:750px;top:480px;" class="lt_sidemenu">
<h3>Wallet - Infomation - Chatbox</h3>
</div>
</div>
</div>
</div>
</div>
<!--<iframe style="position:absolute; left:300;" src="http://jj2.dyndns.dk:3000/">

</frame> --> 
<script src="jquery-1.7.2.min.js"></script>
<script src="jquery-ui.js"></script>
<script src="java.js"></script>
<script type="text/javascript">
jQuery(".chair").click(function(){
    jQuery(".avatar").appendTo(jQuery(this));
});
</script>
</div>
</body>
</html>
