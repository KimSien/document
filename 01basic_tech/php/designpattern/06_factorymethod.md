
# factory method

[read file expand ?](http://d.hatena.ne.jp/tksthdnr/20100217/1266422836)


# simple code sample

```

<?php

abstract class Peaple{
	public $Ss;

	public function GetS(){
		echo $this->Ss;	
	}
}


class Man extends Peaple{

	function __construct()
	{
		$this->Ss="i am man";		
	}

}

class Woman extends Peaple{

	function __construct()
	{
		$this->Ss="i am woman";		
	}
	
}


class CreatePeaple{
	
	function createP($peaple_sex){
		if($peaple_sex == "man"){
			return new man();
		}elseif($peaple_sex == "woman"){
			return new Woman();
		}
	}

}


$peaples = new CreatePeaple();
$human = $peaples->createP("woman");
$human->GetS();



?>

```





