<!DOCTYPE html>
<html lang="en">
<title>post test</title>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>new post</h1>
	<form action="" acttion="" method="post">
		<input type="text" name="title">
		<input type="text" name="contents">
		<input type="submit">
	</form>


<?php


readfile();

getrequest();



/**
* return void
*/
function getrequest(){
	$array = $_SERVER("REQUEST_METHOD")=="POST":writefile($_POST):null;
}

/**
* return string contents
*/ 
function readfile(){
//
}

/**
* return mixed true and false
*/
function writefile($post){

	$name=$post["name"];

}

?>
</body>
</html>