# php target stage1 bbs to txt

- reference

[live cording php for bbs](http://qiita.com/mpyw/items/2c54d0ea95423bd88f60)

- time limit

15 minitu

- require skill

stage 1

- enviroment

php v5.4 ~
permission folder & text

------------------------
## modify terms

- accept used manual,reference.
- 

------------------------
## step0 developer toole and enviroment(release stage)

problem
- win,mac,linux deference tools & server.

------------------------
## step1 

	view cording for html with emmet


index.html
html:5>h1{掲示板}+section>form>{名前：}input[type=text][name=names][value]+{本文:}input[type=text][name=text][value]^section>h2{投稿一覧}+p{投稿はまだありません。}



------------------------
## step2

	cording php.

problem
- php method require typing. (support tool for sublime? other?)
- 







------------------------
memo

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









