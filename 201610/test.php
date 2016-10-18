<?php
ini_set("display_errors",1);
?>
<!DOCTYPE html>
<html lang="en">
<title>post test</title>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>new post</h1>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="text" name="title">
		<input type="text" name="contents">
		<input type="submit">
	</form>


<?php


readfiles();

getrequests();





/**
* return string contents
*/ 
function readfiles(){
    $keijban_file = 'test.txt';

    $fp = fopen($keijban_file, 'rb');

    if ($fp){
        if (flock($fp, LOCK_SH)){
            while (!feof($fp)) {
                $buffer = fgets($fp);
                print($buffer);
            }

            flock($fp, LOCK_UN);
        }else{
            print('ファイルロックに失敗しました');
        }
    }

    fclose($fp);
}

/**
* return mixed true and false
*/
function writefiles($post){

	$personal_name=$post["title"];
	$contents=$post["contents"];

    $contents = nl2br($contents);

    $data = "<hr>";
    $data = $data."<p>投稿者:".$personal_name."</p>";
    $data = $data."<p>内容:</p>";
    $data = $data."<p>".$contents."</p>";

    $keijban_file = 'test.txt';

    $fp = fopen($keijban_file, 'ab');

    if ($fp){
        if (flock($fp, LOCK_EX)){
            if (fwrite($fp,  $data) === FALSE){
                print('ファイル書き込みに失敗しました');
            }

            flock($fp, LOCK_UN);
        }else{
            print('ファイルロックに失敗しました');
        }
    }

    fclose($fp);
}



/**
* return void
*/
function getrequests(){
	$_SERVER["REQUEST_METHOD"] == "POST" ? null :writefiles($_POST);
}

?>
</body>
</html>