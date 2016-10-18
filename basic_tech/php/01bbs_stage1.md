# bbs stage 1

----------------------

- used tool

html - sublimetext
css - 
php - eclipse(1mbupper) or netbeans(request jdk8) or sublime+plugin(+node)

----------------------

[live cording php for bbs](http://qiita.com/mpyw/items/2c54d0ea95423bd88f60)


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



