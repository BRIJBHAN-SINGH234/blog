<html lang="en">
    <head>
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
header{
position:fixed;
/* top:2rem; */
top:0;
width:100%;
z-index:9;
transition:0.5s;
}

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
<header id="header">
<div class="topnav" id="myTopnav">
<a href="#"><img class="logo" src="https://i.ibb.co/ZH11dmd/logo.png" alt=""></a>
<a id="active">Blogger</a>
<a href="home">HOME</a>
<div class="dropdown">
<button class="dropbtn"> CATEGORY
<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-content animate">
<a href="#">NETWORKING</a>
<a href="#">WEB DEVELOPMENT</a>
<a href="#">ETHICAL HACKING</a>
<a href="#">HARDWARE</a>
</div>
</div> 
<a href="#about">CONTACT</a>
<a href="footer">ABOUT</a>
<a href="#about" style="float:right;padding: 24px 2px;"><i class="fa fa-search"></i></a>

 <?php
            if(session()-> has('email')){ ?>
             <a href="logout" style="float:right;padding: 24px 2px;">logout</a>
          <?php  }else{ ?>
                <a href="user_login" style="float:right;padding: 24px 2px;">login</a>
          <?php  } ?>
             
<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
</div>
</header>
    <!-- <header>
        <a href="#" class="logo">
            <img src="https://1.bp.blogspot.com/-FSJpfNUfiwQ/YVmBlwUDTuI/AAAAAAAABA8/UJWwUNLmi8A-dbv_FAwXhnnOh93BsJiAgCLcBGAsYHQ/s320/logo2.png">
            <h1>Massoud-wg</h1>
        </a>
        <div class="links">
            <a href="home">Home</a>
            <a href="#">Content</a>
            <a href="#">Profile</a>
            <a href="#">About</a>
        
          <?php
            if(session()-> has('email')){ ?>
             <a href="logout">log-out</a>
          <?php  }else{ ?>
                <a href="user_login">log-in</a>
          <?php  } ?>
             
        </div>
        <input type="checkbox" id="check">
        <label for="check">
            <img src="https://1.bp.blogspot.com/-TQ6sqw09POE/YVmBmHDNLtI/AAAAAAAABBE/h2kA7cyP42gurgfw1OttA8o6-9IFWvm7wCLcBGAsYHQ/s0/menu1.png" class="img1">
            <img src="https://1.bp.blogspot.com/-7FrNzRkSTfA/YVmBmBWPd1I/AAAAAAAABBA/7ddyu0cIswgmBH3FCqUAuOnCU6Rq5bgbgCLcBGAsYHQ/s0/menu2.png" class="img2">
        </label>
        <div class="links2">
            <div>
                <a href="home">Home</a>
                <a href="#">Content</a>
                <a href="#">Profile</a>
                <a href="#">About</a>
            </div>
        </div> -->
    </header>
</body>
</html>