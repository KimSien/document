

---------------------------------------------

# Visitor simple 01

```

<?php
interface Base{

}

class A implements Base{
    public $Data="class A no Data";

    function assept(Visit $visitor){
        $visitor->visitbase($this);
    }
}


class Visit{
    public $v_data;
    function visitbase(Base $a){
        $this->v_data = $a->Data;
    }
    function putdata(){
        echo $this->v_data;
    }
}



$a = new A();
$visit = new Visit();

$a->assept($visit);

$visit->putdata();

?>

```

---------------------------------------------





---------------------------------------------

# Visitor simple 02

```

<?php

interface Base{

}

class A implements Base{
    public $Data="class A no Data";

    function assept(Visit $visitor){
        $visitor->visitbase($this);
    }
}





interface Visit{
public function visitbase(Base $a);
}

class VisitA implements Visit{
    public $v_data;
    function visitbase(Base $a){
        $this->v_data = $a->Data;
    }
    function putdata(){
        echo $this->v_data;
    }
}

class VisitB implements Visit{
    public $v_data;
    function visitbase(Base $a){
        $this->v_data = $a->Data;
    }
    function putdata(){
        echo PHP_EOL."prefix add ".$this->v_data;
    }
}


// a
$a = new A();
    $visitA = new VisitA();
$a->assept($visitA);
    $visitA->putdata();

// b
//$a = new A();
    $visitB = new VisitB();
$a->assept($visitB);
    $visitB->putdata();
    
?>
    
    
    

```

---------------------------------------------




