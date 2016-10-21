# template pattern



# 

[*](http://d.hatena.ne.jp/shimooka/20141212/1418363698)

	for example.

	contents text change to object.

	base php class -> abstract class ***
	base php method -> protected abstract function ***
	and call this method public method.

	extends class this.




# code

```

<?php

abstract class tempBase{
	
	function __construct(){}

	private $data;

	function prints(){
		$this->printTemplate();
	}

	// after implements
	protected abstract function printTemplate();

}

class tempEx extends tempBase{
	
	function tempEx(){
		$this->data = "tempex extends tempBase";
	}

	// template implements
	protected function printTemplate(){

		echo $this->data;
	}

}

$tempex = new tempEx();
$tempex->prints();

?>

```
