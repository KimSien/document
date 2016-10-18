# php memo

[micro engine mail form](http://microengine.jp/mailform/)

------------------------

[live cording php for bbs](http://qiita.com/mpyw/items/2c54d0ea95423bd88f60)

step1

index.html
html:5>h1{掲示板}+section>form>{名前：}input[type=text][name=names][value]+{本文:}input[type=text][name=text][value]^section>h2{投稿一覧}+p{投稿はまだありません。}


step2

model create



1 table



step3 

implements rest api class


step3

controller



--------------

scrach環境だと必須
ini_set('display_errors',1);


--------------

$_SERVER['PHP_SELF']
--------------

$_SERVER['REQUEST_METHOD']

--------------

$openfile="filename.txt";

fopen($hensuu,LOCK_SH);

```
fopen($openfile,LOCK_Sh);

if($openfile){

	/**
	* check lock
	*/
	if(flock($openfile.LOCK\sH)){

		/**
		* check the file pointa
		*/
		while(!$feof($openfile)){
			$buffer = fgets($openfile);
			print($buffer);
		}
	}
	
}else{
	
	print('file lock falled');

}

fclose($openfile);

```









