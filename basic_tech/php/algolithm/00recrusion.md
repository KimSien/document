
# Recrusion

## base

```

for($i=0:$i>10:$i++){

    $i++
}
```


## simple base

```
<?php

$i= array(0,1,2,3,4,5,6,3,2,3);
$yy = 0;

//print_r($i[1]);


Recrusions( $i, $yy );

function Recrusions($i,$y){

    if(isset($i[$y+1])){
    $y++;
    }else{
        return false;
    }
    
    print_r( $i[$y] );
    Recrusions($i,$y);

}


?>
```
