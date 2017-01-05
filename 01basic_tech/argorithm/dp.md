# DP / Dynamic Programing

thinking to lerning of dp curriculum.

# Index
- 1 used DP to increase speed for math of fibonacci number 
- 2 original/ principle understanding of dp.


-------------
# 1 used DP to increase speed for math of fibonacci number 

    動的計画法でフィボナッチ数列の計算を速くする。

[dp by node](http://yosuke-furukawa.hatenablog.com/entry/20120120/1327056359)

fibonacchi number

0 1 1 2 3 5 ・・・


--------------
# 2 original/ principle understanding of dp.

    動的計画法の原理的な理解

step 1

- point : changing to abridgement of math?
- temporary value+

```
<?php
// Here your code !
$s="";
for($y=0;$y<11;$y++){
    
    for($i=0;$i<11;$i++){
        echo $i;
    }
}
?>
```



step 2

```
<?php
// Here your code !
$s="";
for($y=0;$y<11;$y++){
    

    if(!isset($i)){
    for($i=0;$i<11;$i++){
        $s .= $i;
    }
        echo $s;
    }else{
        echo $s;
    }
    
}
?>
```




