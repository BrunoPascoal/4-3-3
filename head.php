<?php
if(isset($_POST['sair'])) {
	session_destroy();
	header("location: login.php");
	exit();
}
?>

<style>
	.navbar-nav > li{
	  padding-left:20px;
	  padding-right:20px;
	}
	
	#fasesBolaParada > a > span {
		display:none;
		cursor:pointer;
		color: red;
	}
	
	#fasesBolaParada > a:hover > span {
		display: inline-block;
	}
	
	.border {
		-webkit-box-shadow:inset 0px 0px 0px 5px black;
		-moz-box-shadow:inset 0px 0px 0px 5px black;
		box-shadow:inset 0px 0px 0px 5px black;
	}
	
	.dropdown-menu {
		height: auto;
		max-height: 300px;
		overflow-x: hidden;
	}

	.tableBckImg
	{
		border:3px solid black;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		background:url(field.jpg);
		background-repeat:no-repeat;
		background-size:100% 100%;
		width:100%;
		border-collapse:collapse;
	}
	
	#tableJogadores th {
		width:2000px;
		padding:4px;
		color: white;
		text-align: center;
	}
	
	.highlight
	{
		border:1px solid black;
		background-color: rgba(0, 220, 55, 0.5);
		cursor:pointer;
		-o-transition:.2s;
		-ms-transition:.2s;
		-moz-transition:.2s;
		-webkit-transition:.2s;
		transition:.2s;
	}
	
	.idPlayer, .idBola {cursor:pointer;}
	
	.highlight:hover
	{
		background-color: rgba(0, 220, 55, 1);
	}
	
	.dropdown .dropdown-menu {
		min-width: 100%;
		text-align: center;
	}
	
	.current{
		background-color: green !important; 
		border-color: black !important;
	}
	
	.players{
		display:inline-block;
		cursor:pointer;
	}
	
	
</style>
 <title>4-3-3</title>
 <link rel="shortcut icon" href="logo.png" />
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
	<img src="logo.png" width="30" height="30" alt="" />
	4-3-3
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	<ul class="navbar-nav mr-auto navbar-right mt-2 mt-lg-0">
	  <li class="nav-item active" id="home">
		<a class="nav-link" href="home.php"><i class="fa fa-home"></i> Home</a>
	  </li>
	  <li class="nav-item" id="editor">
		<a class="nav-link" href="editor.php"><i class="fa fa-edit"></i> Editor</a>
	  </li>
	  <li class="nav-item" id="player">
		<a class="nav-link" href="player.php"><i class="fa fa-caret-square-o-right"></i> Player</a>
	  </li>
	</ul>
	<form class="form-inline" method="post" action="">
	  <button class="btn btn-danger" type="submit" name="sair" ><i class="fa fa-close"></i> Sair</button>
	</form>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>