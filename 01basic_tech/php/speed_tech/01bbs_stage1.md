# bbs stage 1

- reference

[live cording php for bbs](http://qiita.com/mpyw/items/2c54d0ea95423bd88f60)

- time limit

15 minitu

- require skill

stage 1

- enviroment

php v5.4 ~
permission folder & text

----------------------

- used tool

html - sublimetext
css - 
php - eclipse(1mbupper) or netbeans(request jdk8) or sublime+plugin(+node)

current best editor is vs + php format code(Ctrl+D)

------------------------
## modify terms

- accept used manual,reference.
- 


----------------------

[live cording php for bbs](http://qiita.com/mpyw/items/2c54d0ea95423bd88f60)



--------------------------
## step 1 

index.html
html:5>h1{掲示板}+section>form>{名前：}input[type=text][name=names][value]+{本文:}input[type=text][name=text][value]^section>h2{投稿一覧}+p{投稿はまだありません。}



------------------------
## step2

	cording php.

problem
- php method require typing. (support tool for sublime? other?)
- 



---------------------------
/**
* read the files
*/
function readfile(){

	$file ="filename.txt";

	fopen($file,'rb');

	if($file){

		if(flock($file,LOCK_SH)){
			while(!$feof($file)){
				$buffer = fgets($file);
				print($buffer);
			}
		}

		flock($fp,LOCK_UN);

	}else{
		
		//error
	}

	fclose($file);
}


---------------------------

/**
* write the file
*/
function write(){
	

	$content = "kakikominaiyou";
	$file="filename.txt";

	fopen($file,"ab");

	if($file){

		if(flock($file,LOCK_EX)){

			if(fwrite($fp,$data)===FALSE){
				//falled
			}

			flock($file,LOCK_UN);

		}

	}else{

		//error
	}

	fclose($fp);

}



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
