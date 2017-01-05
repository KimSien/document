<?php
ini_set("display_errors",1);
?>
10:05

<!DOCTYPE html>
<html lang="jp">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>title</h1>

	<form action="" method="post">
		<input type="text" name="title">
		<input type="text" name="contents">
		<input type="submit">
	</form>
	<div>contents list</div>

<?php
// const,array
$filename = "test.txt";

// function
getpostdata();
//writingtext();

echo readingtext();

/**
* return string contents text
*/
function readingtext(){

$buffer = "";
$fp = fopen($filename,"rb");

	if($fp){
		if(flock($fp,LOCK_SH)){

			while(!feof($fp)){
			$buffer .= fget($fp);
			}
		flock($fp,LOCK_UN);

		}else{
			//error
		}
	}
	
fclose($filename);
return $buffer;
}



/**
* return void
*/
function getpostdata(){
	$_SERVER["server_request"] == "post" ? writingtext($_POST) : null ;	
}

/**
* return mixed true and false
*/
function writingtext($post){
$mixed = false;
$title=$post["title"];
$contents = $post["contents"];

$savetext = "<hr><p>"+$title + $contents + "</p>";

$fp = fopen($filename,"ab");
	
	if($fp){
		if(flock($fp,LOCK_EX)){

			if(fwrite($fp,$savetext)=== FALSE){
			flock($fp,LOCK_UN);
			$mixed = true;
			}else{
			//error
			}

		}
	}

fclose($filename);
return $mixed;
}

?>
</body>
</html>