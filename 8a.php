<?php
	if(isset($_POST['res'])){
	$res=$_POST['display'];
		$res=eval('return'.$res.';');
		}
	?>
	<html>
	<head>
	<title>simple calculator using PHP-Web lab Program</title>
	<style>
	input{
			background-color:#af4c7a;
			border:none;
			color:white;
			width:100%;
			padding:15px 32px;
			text-allign:center;
			text-decoration-none;
			display:inline-block;
			font-size=15px;
			}
			</style>
			</head>
			<body>
			<center>
			<form name="calculator" method="post">
			<table>
			<tr>
			<td colspan="4">
			<input type="text"name="dispaly"value="<?php if(isset($res)){echo $res;}?>">
			</td>
			</tr>
			<tr>
			<td><input type="button"value="1"onclick="calculator.dispaly.value+='1'"></td>
			<td><input type="button"value="2"onclick="calculator.dispaly.value+='2'"></td>
			<td><input type="button"value="3"onclick="calculator.dispaly.value+='3'"></td>
			<td><input type="button"value="+"onclick="calculator.dispaly.value+='+'"></td>
			</tr>
			<tr>
			<td><input type="button"value="4"onclick="calculator.dispaly.value+='4'"></td>
			<td><input type="button"value="5"onclick="calculator.dispaly.value+='5'"></td>
			<td><input type="button"value="6"onclick="calculator.dispaly.value+='6'"></td>
			<td><input type="button"value="-"onclick="calculator.dispaly.value+='-'"></td>
			</tr>
			<tr>
			<td><input type="button"value="7"onclick="calculator.dispaly.value+='7'"></td>
			<td><input type="button"value="8"onclick="calculator.dispaly.value+='8'"></td>
			<td><input type="button"value="9"onclick="calculator.dispaly.value+='9'"></td>
			<td><input type="button"value="*"onclick="calculator.dispaly.value+='*'"></td>
			</tr>
			<tr>
			<td><input type="button"value="c"onclick="calculator.dispaly.value+='c'"></td>
			<td><input type="button"value="0"onclick="calculator.dispaly.value+='0'"></td>
			<td><input type="submit"value="="name="res"></td>
			<td><input type="button"value="/"onclick="calculator.dispaly.value+='/'"></td>
			</tr>
			</table>
			</form>
			</center>
			</body>
			
	