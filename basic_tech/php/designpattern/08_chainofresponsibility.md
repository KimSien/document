


<?php


abstract class Base{
    public $datas="base";
    function set(Base $base){
        echo $this->datas;
        echo "から";
        echo $base->datas;
        echo "へ".PHP_EOL;
        return $this;
    }
}

class BaseA extends Base{
    function __construct(){
        $this->datas="aa";
    }
}
class BaseB extends Base{
    function __construct(){
        $this->datas="bb";
    }
}
class BaseC extends Base{
    function __construct(){
        $this->datas="cc";
    }
}




$a = new BaseA();
$b = new BaseB();
$c = new BaseC();

$a->set($b)->set($c);

?>

