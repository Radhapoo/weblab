<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="1">
  <style>
		@font-face {
  font-family: 'digital-7';
  src: url('digital-7.ttf');
}

body {
  color: #ffffff;
  background-color: #000000;
  font-family: 'digital-7', sans-serif;
} 
h4 {
	font-family: 'digital-7', sans-serif;
	color:white;
	font-size: 60pt;
	padding : 0px;
	}
h3 {
	font-family: 'digital-7', sans-serif;
	color:white;
	font-size: 40pt;
	padding : 0px;
	
}
	
	div {
		display:block;
		width;100%;
		padding : 300px, auto;
	}

  </style>
</head>
</html>

<?php 
	echo "<div><center>";
	echo "<h4>".date("h : i : s A")."</h4>";
	echo "<h3>".date("d / m / Y")."</h4>";
	echo "</center></div>";
?>