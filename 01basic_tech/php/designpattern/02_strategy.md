# 02_strategy pattern

change of argorithm.




## code

```

<?php
interface tax{
	public function addtax();
}

class taxA implements tax{
	
	public function addtax(){
		echo "8%";
	}
}

class taxB implements tax{
	public function addtax(){
		echo "5%";
	}
}


class context{
	private $tax_strategy;

	function __construct(tax $tax){
		$this->tax_strategy = $tax;
	}

	function setStrategy(tax $tax){
		$this->tax_strategy = $tax;
	}

	function addtax(){
		$this->tax_strategy->addtax();
	}
}


$taxa= new taxA();
$tax = new context($taxa);
$tax->addtax();

$taxb = new taxB();
$tax->setStrategy($taxb);
$tax->addtax();


?>


```