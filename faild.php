<?php

session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">

	header{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(vv.jpg);
	height: 100vh;
	background-size: cover;
	background-position: center;
}
.hi{
		padding-top: 260px;
		padding-left: 355px;
		max-width: 1200px;
	    margin-top: auto;
	    color: #fff;
	}
	.button{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,50%);
}
.btn{
	border: 1px solid #fff;
	padding: 10px 30px;
	color: #fff;
	text-decoration: none;
	transition: 0.6s ease;
}
.btn:hover{
	background-color: #fff;
	color: #000;
}

</style>
<header>

	<div class="hi">
	<h2> Login Faild Please Try Again</h2>
	</div>
	<div class="button">
	<a href="index.html" class="btn">Home</a>
	<a href="project1.html" class="btn">Try Again</a>
    </div>
    </header>
</body>
</html>
?>