<!DOCTYPE html>
<html>
<head>
<style>
body
	{
		margin: 0px;
	}
.b_color{
	background-color:#00bfff;
}
.oto_button{
	background-color:#00bfff;
	border:none;
	color:white;
	padding:none;
	text-align:center;
	text-decoration:none;
	display:inline-block;
	font-size:16px;
	margin:none;
	cursor:pointer;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #00bfff;
}

li {
    float: left;
    border-right:none;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #00bfff;
}
.nav
		{
			font-size:16px;
			font-family: sans-serif;
		}
.home {
    background-color: #00bfff;
	font-family: cursive;
	font-size:22px;
}
div
	{
		position: fixed;
		width: 100%;
	}
img 
	{
		border-radius: 50%;
	}
</style>
</head>
<body>
<?php
		session_start();
		if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="logged"){?>
<div>
<ul>
    <li><a class="home" href="/ProjectV1.3/AfterSignInPage/AfterSignInPage.php">&emsp; &ensp; &ensp; &ensp; &ensp; &ensp;>> Exchangeportal&emsp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;</a></li>
	<li style="float:right"><a class="nav" href="/ProjectV1.3/AfterSignInPage/LogOut.php"><b>↑</b>Log out</a></li>
	</ul>
</div>
</br></br></br><br><br><br>
<div align="center">
	<img style="width:170px; height: 170px" src="/ProjectV1.3/AfterSignUpPage/<?php echo $_SESSION["pic"];?>">
</div>
<?php
		}
		else{
			echo "Unauthorized Login!!";
		}?>
</body>
</html>