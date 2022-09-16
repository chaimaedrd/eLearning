<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>eLearning</title>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>

<style>
*{
    margin: 0;
    padding: 0;
    font-family: "poppins" , sans-serif;
    box-sizing: border-box;
}
/* Start Header */
.header{
    /* height:100vh; */
    width:100%;
    padding: 0 8%;
    background: white;
    position: relative;
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
 .logo{
    width:140px;
    font-size:20px;
 }
 .logo span{
    color:#ff3d00;
 }
 .nav-links{
    padding:28px 0;
 }
 .nav-links li{
    display:inline-block;
    margin: 0 15px;
    position: relative; 
 }
 .nav-links li a{
    text-decoration:none;
    color:black;
    padding:5px 0;
    position: relative;
 }
 .nav-links li a:after{
    content: '';
    background: #ff3d00;  /*the orange of the line after nav */
    width:0;
    height: 2px;
    position: absolute;
    bottom: 0;
    left: 0;
    transition: width 0.5s;
 }
 .nav-links li a:hover::after{
    width:100%;

 }
 .btn{
    background: #ff3d00;
    color:black;
    padding: 10px 30px;
    border-radius: 3px;
    cursor: pointer;
 }
 .btn:hover{
    background: black;
    color:#ff3d00;
    transition: 0.3s;
 }
 .sub-menu{
    display:none;

 }
 .nav-links li:hover .sub-menu{
    display:block;
    position:absolute;
    left:0;
    top:100%;
    background-color: white;

 }
 .nav-links li:hover .sub-menu ul{
    display:block;
    margin:10px;
 }
 .nav-links li:hover .sub-menu ul li{
    width:150px;
    padding:10px;

 }
 /* End Header */
/* Start Footer */
.footer{
    position:fixed;
    bottom:0px;
    width:100%;
    background:#ff3d00;
}
.main-content{
    display:flex;
}
.main-content .box{
    flex-basis:50%;
    padding:10px 20px;

}
.box h2{
    font-size: 1.125rem;
    font-weight: 600;
    text-transform:uppercase;
}
.box .content{
    margin: 20px 0 0 0;
}
.left .content p{
    text-align:justify;
}
.left .content .social{
    margin: 20px 0 0 0;
}
.left .content .social a{
    padding: 0 2px;
}
.left .content .social a span{
    height: 40px;
    width: 40px;
    background: #932503;
    line-height: 40px;
    text-align:center;
    font-size:18px;
    border-radius:5px;
    transition: 0.3s;
    color:black;
}
.left .content .social a span:hover{
    background:black;
    color:#ff3d00;
}
/* End Footer */
</style>

</html>