<html lang="en">
    <head>
        <style>
            *{
            padding: 0px;
            margin: 0px;
        }
        header{
            position:sticky;
            top:0px;
            background-image: linear-gradient( 90deg , rgb(181, 54, 128) 100px, rgb(81, 27, 111));
            border-bottom: 4px solid rgb(48, 186, 153) ;
            padding-right:20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo{
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-decoration:none;
        }
        .logo img{
            width: 90px;
            height:60px;
            transform: scaleX(-1);
        }
        .logo h1{
            color: rgb(212, 212, 212);
            display: inline-block;
        }
        .logo h1:hover{
            text-shadow: 0px 0px 6px rgb(255, 255, 255);
            color: white;
        }
        .links{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width:250px;
        }
        .links a{
            text-decoration: none;
            color: rgb(212, 212, 212);
        }
        .links a:hover{
            text-shadow: 0px 0px 6px rgb(255, 255, 255);
            color: white;
        }
        header label{
            position: relative;
            display: none;
            right: 20px;
            width: 30px; 
            height: 47.619047px;
            box-sizing: border-box;
            transition: 1s ease;
            transition-delay: 0.2s;
            z-index: 3;
        }
        header label:hover{
            transform: rotate(720deg);
        }
        header label , header label:before, header label:after{
            background-color:#009688;
            border-radius: 3px;
        }
        header label:before, header label:after {
            content: "";
            position: absolute;
            top: 0px;
            left: 0px;
            height: 100%;
            width: 100%;
        }
        header label:before {
            transform: rotate(60deg);
            z-index: 3;
        }
        header label:after {
            transform: rotate(-60deg);
            z-index: 5;
        }
        header label img{         
            position: absolute;
            top: 8.8px ;
            left: 0px;
            width: 100%;
            z-index: 6;
        }
        header label .img2{
            display: none;
        }
        header .links2{
            position: fixed;
            top:0px;
            right:-100%;
   https://srv.buysellads.com/ads/click/x/GTND42JICK7D62QJCWSLYKQNCK7IKK7WCTAI6Z3JCY7IC2JUF6AD5K3KC6YI65QUCTBDL23LCEAIV27JC6SD4K3NHEYIKK7ICVBIPKJECTNCYBZ52K         background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            height:100%;
            z-index: 2;
        }
        .links2 div{
            position: absolute;
            right: 0px;
            top: 0px;
            background-color: black;
            width: 70%;
            height:100%;
            display: flex;
            justify-content:center;
            align-items: center;
            flex-direction: column;
        }
        .links2 div a{
            text-decoration: none;
            color: rgb(212, 212, 212);
            margin-top: 10px;
            font-size: 25px;
        }
        .links2 div a:hover{
            text-shadow: 0px 0px 6px rgb(255, 255, 255);
            border: 2px solid black;
            color: white;
        }
        @media (max-width: 700px) {
        .links {
            display: none;
        }
        header label{
           display: inline-block; 
        }
        }
        @media (min-width: 1500px) {
        header{
            padding-right: 10%;
            padding-left: calc( 10% - 20px);
        }
        }
        @media (max-width: 440px) {
        .logo img{
            width: 120px;
        }
        .logo h1{
            font-size:26px
        }
        header label{
            width: 20px; 
            height: 31.746px;
        }
        header label img{         
            position: absolute;
            top: 5.867px ;
        }
        }
        @media (max-width: 345px) {
        .logo img{
            width: 100px;
        }
        .logo h1{
            font-size:24px
        }
        header label{
            width: 15px; 
            height: 23.809px;
        }
        header label img{         
            position: absolute;
            top: 5.867px ;
        }
        }
            </style>
</head>
<body>
    <header>
        <a href="#" class="logo">
            <img src="https://1.bp.blogspot.com/-FSJpfNUfiwQ/YVmBlwUDTuI/AAAAAAAABA8/UJWwUNLmi8A-dbv_FAwXhnnOh93BsJiAgCLcBGAsYHQ/s320/logo2.png">
            <h1>Massoud-wg</h1>
        </a>
        <div class="links">
            <a href="#">Home</a>
            <a href="#">Content</a>
            <a href="#">Profile</a>
            <a href="#">About</a>
        </div>
        <input type="checkbox" id="check">
        <label for="check">
            <img src="https://1.bp.blogspot.com/-TQ6sqw09POE/YVmBmHDNLtI/AAAAAAAABBE/h2kA7cyP42gurgfw1OttA8o6-9IFWvm7wCLcBGAsYHQ/s0/menu1.png" class="img1">
            <img src="https://1.bp.blogspot.com/-7FrNzRkSTfA/YVmBmBWPd1I/AAAAAAAABBA/7ddyu0cIswgmBH3FCqUAuOnCU6Rq5bgbgCLcBGAsYHQ/s0/menu2.png" class="img2">
        </label>
        <div class="links2">
            <div>
                <a href="#">Home</a>
                <a href="#">Content</a>
                <a href="#">Profile</a>
                <a href="#">About</a>
            </div>
        </div>
    </header>
</body>
</html>