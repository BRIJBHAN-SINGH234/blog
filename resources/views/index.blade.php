 <x-header/>
 <?php
            if(! session()-> has('email')){ ?>
              <x-login/>
           <?php }else{ ?>
                
         
<!DOCTYPE html>
<html>


  <meta name="author" content="slmbrngdrgn">
  <meta name="description" content="Big Sippy Magic Water Homepage">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  


<!--TITLE-->
<title>Blogger</title>

<!--SHORTCUT ICON-->
<link rel="shortcut icon" href="" />

<!--META TAGS-->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 

<!--PLUGIN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <style>
	  html {
scroll-behavior: smooth;
}
:root{
scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
scrollbar-width: thin !important;
}
::-webkit-scrollbar {
height: 12px;
width: 8px;
background: #000;
}
::-webkit-scrollbar-thumb {
background: gray;
-webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
}
::-webkit-scrollbar-corner {
background: #000;
}
body{
margin:0;
overflow-x:hidden;
font-family: 'Ubuntu', sans-serif;
}








/*DEFAULT*/
.title{
font-weight:900;
}

.sub-title{
font-weight:500;
}

a,li,button,i{
text-decoration:none;
list-style:none;
outline:none !important;
transition:0.5s;
}

p,h1,h2,h3,h4,h5,h6,.title,.sub-title{
line-height:1.6em;
letter-spacing:0.08em;
}

table{
border-collapse:collapse;
width:100%;
}

table td{
width:50%;
}

.sections,table td{
position:relative;
}

em{
font-style:normal;
color:#ec4613;
}

.title_header{
width:70%;
margin:5vh auto;
text-align:center;
}

.btn1,.btn2{
text-align:center;
color:#fff;
border-radius:5px;
padding:20px;
display:block;
margin:4vh 0;
}

.btn1{
padding:10px;
background:transparent;
border:1px solid #1e1e1e;
color:#1e1e1e;
margin:2vh 0;
font-size:13px;
width:100px;
}

.btn1:hover{
background:#1e1e1e;
color:#fff;
}

.btn2{
background:#ec4613;
border:0;
margin:10vh auto;
width:auto;
padding:10px;
}

img{
width:100%;
margin:auto;
height:auto;
}


@media (max-width:920px){
table td{
display:block;
width:100%;
}
}









/*ANIMATION*/
.animate {
-webkit-animation: animatezoom 0.6s;
animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
from {-webkit-transform: scale(0)} 
to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
from {transform: scale(0)} 
to {transform: scale(1)}
}
.inline-photo {
opacity: 0;
transform: translateY(4em) rotateZ(-0deg);
transition: transform 4s .25s cubic-bezier(0,1,.3,1),opacity .3s .25s ease-out;
will-change: transform, opacity;
}
.inline-photo.is-visible {
opacity: 1;
transform: rotateZ(-0deg);
}
.inline-photo2 {
opacity: 0;
transform: translateX(-15em) rotateZ(-0deg);
transition: transform 4s .25s cubic-bezier(0,1,.3,1),opacity .3s .25s ease-out;
will-change: transform, opacity;
}
.inline-photo2.is-visible2 {
opacity: 1;
transform: rotateZ(-0deg);
}
.inline-photo3 {
opacity: 0;
transform: translateX(15em) rotateZ(-0deg);
transition: transform 4s .25s cubic-bezier(0,1,.3,1),opacity .3s .25s ease-out;
will-change: transform, opacity;
}
.inline-photo3.is-visible3 {
opacity: 1;
transform: rotateZ(-0deg);
}
@-webkit-keyframes fadeInFromNone {
0% {
display: none;
opacity: 0;
}

1% {
display: block;
opacity: 0;
}

100% {
display: block;
opacity: 1;
}
}

@-moz-keyframes fadeInFromNone {
0% {
display: none;
opacity: 0;
}

1% {
display: block;
opacity: 0;
}

100% {
display: block;
opacity: 1;
}
}

@-o-keyframes fadeInFromNone {
0% {
display: none;
opacity: 0;
}

1% {
display: block;
opacity: 0;
}

100% {
display: block;
opacity: 1;
}
}

@keyframes fadeInFromNone {
0% {
display: none;
opacity: 0;
}

1% {
display: block;
opacity: 0;
}

100% {
display: block;
opacity: 1;
}
}


















/*TOP NAVIGATION*/


.topnav {
overflow: hidden;
background-color: #333;
width:80%;
margin:auto; 
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
transition:0.5s;
font-family: 'Ubuntu Condensed', sans-serif;
}

.topnav a {
float: left;
display: block;
color: #f2f2f2;
text-align: center;
padding: 24px 16px;
margin:auto 1rem;
text-decoration: none;
font-size: 17px;
position:relative;
}

.logo{
width:40px;
position:absolute;
top:1rem;
}

#icon{
float:right;
}

#active{
display:flex;
font-weight:bold;
font-family: 'Lobster', cursive;
}

#active:hover{
color:#fff;
}

.topnav .icon {
display: none;
}

.dropdown {
float: left;
overflow: hidden;
}

.dropdown .dropbtn {
font-size: 17px;    
border: none;
outline: none;
color: white;
padding: 24px 16px;
background-color: inherit;
font-family: inherit;
margin:auto 1rem;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
border-top:2px solid #ec4613;
}

.dropdown-content a {
float: none;
color: black;
padding: 8px 16px;
margin:auto 0rem;
text-decoration: none;
display: block;
text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
color: #ec4613;
}

.dropdown-content a:hover {
background-color: #ddd;
color: black;
}

.dropdown:hover .dropdown-content {
display: block;
}

@media screen and (max-width: 920px) {
.logo{
width:20px;
position:static;
}
.dropdown .dropbtn {
padding: 14px 16px;
}
.topnav a:not(:first-child), .dropdown .dropbtn {
display: none;
}
.topnav a.icon {
float: right;
display: block;
}
#active{
display:none;
}
}

@media screen and (max-width: 920px) {
.topnav.responsive {position: relative;}
.topnav.responsive .icon {
position: absolute;
right: 0;
top: 0;
}
.topnav.responsive a {
float: none;
display: block;
text-align: left;
padding: 14px 16px;
}
.topnav.responsive .dropdown {float: none;}
.topnav.responsive .dropdown-content {position: relative;}
.topnav.responsive .dropdown .dropbtn {
display: block;
width: 100%;
text-align: left;
}
}








/*BANNER*/
.banner{
width:100%;
max-height:80vh;
height:80vh;
background-color:#040205;
overflow:hidden;
position:relative;
}

.banner .slideshow{
width:100%;
height:100%;
position:relative;
}

.banner .slideshow .overlay{
background-color:rgba(1,1,1,0.5);
width:100%;
height:100%;
position:absolute;
top:0;
z-index:1;
}

.banner .slideshow .mySlides{
width:100%;
height:100%;
object-fit:cover;
object-position:center;
-webkit-animation: fadeInFromNone 0.5s ease-out;
-moz-animation: fadeInFromNone 0.5s ease-out;
-o-animation: fadeInFromNone 0.5s ease-out;
animation: fadeInFromNone 0.5s ease-out;
}

#ourclients {
display: block;
margin-left: auto;
margin-right: auto;
padding-bottom:30px;
height:80px;
z-index:2;
position:absolute;
bottom:5vh;
overflow:hidden;
}
#ourclients .clients-wrap {
display: block;
width: 95%;
margin: 0 auto;
overflow: hidden;
}
#ourclients .clients-wrap ul {
display: block;
list-style: none;
position: relative;
margin-left: auto;
margin-right: auto;
}
#ourclients .clients-wrap ul li {
display: block;
float: left;
position: relative;
width: 29%;
height: 100px;
line-height: 100px;
text-align: center;
color:#fff;
}
#ourclients .clients-wrap ul li h4{
padding:0 20px;
}
#ourclients .clients-wrap ul li img {
vertical-align: middle;
max-width: 100%;
width:150px;
max-height: 100%;
-webkit-transition: 0 linear left;
-moz-transition: 0 linear left;
transition: 0 linear left;
}
#ourclients h3{
border-bottom:2px solid #3399ff;
width:150px;
padding:10px;
}

@media (max-width:620px){
#ourclients .clients-wrap ul li {
 width:20%;   
}
#ourclients .clients-wrap ul li h4{
padding:0 20px;
font-size:13px;
}
}








/*CONTAINER*/

.container td{
vertical-align:top;
}
.container{
margin:10vh auto;
}


.container td{
vertical-align:top;
}

.container td:nth-child(1){
width:60%;
}

.container .cards{
padding:0rem;
width:90%;
margin:auto;
}

.container .cards .card{
background-color:#f3f3f3;
display:flex;
height:40vh;
width:100%;
overflow:hidden;
margin:5vh 0;
transition:0.5s;
}

.container .cards .card:hover{
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
}

.container .cards .card .author{
width:70%;height:100%;
position:relative;
overflow:hidden;
}

.container .cards .card .author .tag{
position:absolute;
top:0;
left:0;
padding:10px;
text-align:center;
color:#fff;
background:#ec4613;
font-size:12px;
}

.container .cards .card img{
width:100%;
height:100%;
object-fit:cover;
}

.container .cards .card .content{
padding:0.5rem 1rem;
}

.container .cards .card .content p{
font-size:13px;
color:rgba(1,1,1,0.7);
}

.container .cards .card .content .line-1{
font-size:12px;
}

.container .cards .card .content .line-1 span:not(:nth-child(odd)){
margin:0 20px;
}

.container .cards .card .content .line-1 .fa{
color:#ec4613;
}

.container .right_cards{
position: sticky;
position: -webkit-sticky;
top:100px;
}

.container .cards .right_card{
height:20vh;
}

.container .cards .right_card .content{
padding:0.2rem 1rem;
}

.container .cards .right_card .content a{
font-weight:400;
color:#000;
display:block;
margin:1rem 0;
}

.container .cards .right_card .content a:hover{
color:#ec4613;
}


@media (max-width:920px){
.container td:nth-child(1){
width:100%;
}
.container .cards .card{
display:block;
height:auto;
}
.container .cards .card .author{
width:100%;height:100%;
}
.container .right_cards .right_card{
display:flex;
}
.container .cards .right_card .content a{
font-size:12px;
margin:0.5rem 0;
}
.container .right_cards .right_card .author{
width:70%;height:100%;
margin:auto;
}
.container .right_cards .right_card .author img{
width:100%;height:100% !important;
margin:auto;
}
}

/*ROLL BACK*/
.roll_back{
position:fixed;
bottom:20px;
right:20px;
display:flex;
align-items:center;
justify-content:center;
color:#000;
background:#fff;
border:2px solid #ec4613;
border-radius:5px;
padding:5px 10px;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
z-index:9;
display:none;
}

.roll_back:hover{
background:#ec4613;
color:#fff;
}

  </style>


</head>
<body>
<!--TOP NAVIGATION-->







<!--BANNER-->
<div class="banner" id="banner">
<div class="slideshow">
<div class="overlay"></div>
<img class="mySlides" src="https://i.ibb.co/y5P8bDW/slide-1.jpg">
<img class="mySlides" src="https://i.ibb.co/WHLFx3Q/slide-2.jpg">
<img class="mySlides" src="https://i.ibb.co/QFFxwTN/slide-3.jpg">
</div>
<div id="ourclients">
<div class="clients-wrap">
<ul id="clientlogo" class="clearfix">
<li>
<h4>1Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
</li>
<li>
<h4>2Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
</li>
<li>
<h4>3Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
</li>
<li>
<h4>4Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
</li>
<li>
<h4>5Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
</li>
<li>
<h4>6Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
</li>
</ul>
</div>
</div>
</div>





<!--CONTAINER-->
<div class="container" id="container">
<table>
<tr>
<td>
<div class="cards">
<h2>RECENT POSTS</h2>
<!--CARD BEGINING-->
<div class="card">
<section class="author">
<img src="https://i.ibb.co/V216nQZ/01.webp" alt="">
<span class="tag">PROGRAMMING</span>
</section>
<section class="content">
<h4>What is Language Translator and its Types? </h4>
<div class="line-1">
<span><i class="fa fa-user"></i> TEQUILA</span>
<span><i class="fa fa-clock-o"></i> OCTOBER 15, 2021</span>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="" class="btn1">READ MORE</a>
</section>
</div>
<!--CARD ENDS-->

<!--CARD ENDS-->
<button class="btn2">Load More</button>
</div>
</td>




<td>
<div class="cards right_cards">
<h2>POPULAR POSTS</h2>
<!--CARD BEGINING-->
<div class="card right_card">
<section class="author">
<img src="https://i.ibb.co/V216nQZ/01.webp" alt="">
</section>
<section class="content">
<a href="#">What is Language Translator and its Types? Differences between Compiler and Interpreter</a>
<div class="line-1">
<span><i class="fa fa-clock-o"></i> OCTOBER 15, 2021</span>
</div>
</section>
</div>
<!--CARD ENDS-->
<!--CARD BEGINING-->
<div class="card right_card">
<section class="author">
<img src="https://i.ibb.co/V216nQZ/01.webp" alt="">
</section>
<section class="content">
<a href="#">What is Language Translator and its Types? Differences between Compiler and Interpreter</a>
<div class="line-1">
<span><i class="fa fa-clock-o"></i> OCTOBER 15, 2021</span>
</div>
</section>
</div>
<!--CARD ENDS-->
<!--CARD BEGINING-->
<div class="card right_card">
<section class="author">
<img src="https://i.ibb.co/V216nQZ/01.webp" alt="">
</section>
<section class="content">
<a href="#">What is Language Translator and its Types? Differences between Compiler and Interpreter</a>
<div class="line-1">
<span><i class="fa fa-clock-o"></i> OCTOBER 15, 2021</span>
</div>
</section>
</div>
<!--CARD ENDS-->
<!--CARD BEGINING-->
<div class="card right_card">
<section class="author">
<img src="https://i.ibb.co/V216nQZ/01.webp" alt="">
</section>
<section class="content">
<a href="#">What is Language Translator and its Types? Differences between Compiler and Interpreter</a>
<div class="line-1">
<span><i class="fa fa-clock-o"></i> OCTOBER 15, 2021</span>
</div>
</section>
</div>
<!--CARD ENDS-->
</div>
</td>
</tr>
</table>
</div>






<!--FOOTER-->








<!--ROLL BACK-->
<a href="#" class="roll_back animate" id="roll_back"><i class="fa fa-angle-up"></i></a>



<!--JAVASCRIPT
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/loader.js"></script>
-->
<script>
  //TOP NAVIGATION
function NavBar() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
x.className += " responsive";
} else {
x.className = "topnav";
}
}
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
document.getElementById("myTopnav").style.width = "100%";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "0%";
document.getElementById("roll_back").style.display = "block";
} else {
document.getElementById("myTopnav").style.width = "80%";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "2rem";
document.getElementById("roll_back").style.display = "none";
}
}















//SLIDE SHOW
var myIndex = 0;
carousel();
function carousel() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";  
}
myIndex++;
if (myIndex > x.length) {myIndex = 1}    
x[myIndex-1].style.display = "block";  
setTimeout(carousel, 5000); // Change image every 2 seconds
}














//INTERNET SPEED DETECT
var imageAddr = "images/slide_1.jpg"; 
var downloadSize = 289059;
function ShowProgressMessage(msg) {
if (console) {
if (typeof msg == "string") {
console.log(msg);
} else {
for (var i = 0; i < msg.length; i++) {
console.log(msg[i]);
}
}
}
}
function InitiateSpeedDetection() {
ShowProgressMessage("Please wait...");
window.setTimeout(MeasureConnectionSpeed, 1);
};    
if (window.addEventListener) {
window.addEventListener('load', InitiateSpeedDetection, false);
} else if (window.attachEvent) {
window.attachEvent('onload', InitiateSpeedDetection);
}
function MeasureConnectionSpeed() {
var startTime, endTime;
var download = new Image();
download.onload = function () {
endTime = (new Date()).getTime();
showResults();
}
download.onerror = function (err, msg) {
ShowProgressMessage("Invalid image, or error downloading");
}
startTime = (new Date()).getTime();
var cacheBuster = "?nnn=" + startTime;
download.src = imageAddr + cacheBuster;
function showResults() {
var duration = (endTime - startTime) / 1000;
var bitsLoaded = downloadSize * 8;
var speedBps = (bitsLoaded / duration).toFixed(2);
var speedKbps = (speedBps / 1024).toFixed(2);
var speedMbps = (speedKbps / 1024).toFixed(0);
if(speedMbps<="1"){
document.getElementById("banner").style.display='none';
document.getElementById("container").style.marginTop='20vh';
}
}
}








$(function() {
var $clientslider = $('#clientlogo');
var clients = $clientslider.children().length;
var clientwidth = (clients * 220); 
$clientslider.css('width', clientwidth);
var rotating = true;
var clientspeed = 1800;
var seeclients = setInterval(rotateClients, clientspeed);
$(document).on({
mouseenter: function() {
rotating = false;
},
mouseleave: function() {
rotating = true;
}
}, '#ourclients');
function rotateClients() {
if (rotating != false) {
var $first = $('#clientlogo li:first');
$first.animate({
'margin-left': '-33%'
}, 2000, function() {
$first.remove().css({
'margin-left': '0px'
});
$('#clientlogo li:last').after($first);
});
}
}
});
</script>
</html>
 <?php  } ?>
<x-footer/>