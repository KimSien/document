

<?php
// quick sort
$arry = array(9,2,8,3,7,4,6,5,1);
$length = count($arry);

q_sort($arry,0,$length-1);

function q_sort(&$arr,$left,$right){
  if($left>=$right){
    return;
  }
  $key = (int) ($left+$right)/2;
  $pivot = $arr[$key];
  $i = $left;
  $j = $right;

  while($i<=$j){
  
    while($arr[$i]<$pivot){
      $i++;
    }
  
    while($arr[$j]>$pivot){
      $j--;
    }
  
    if($i<=$j){//一度交換すると$i>$jとなる場合があるので、その場合は交換しない
      $tmp = $arr[$i];
      $arr[$i] = $arr[$j];
      $arr[$j] = $tmp;
      $i++;
      $j--;
    }
  
  }
  
  q_sort($arr,$left,$j);
  q_sort($arr,$i,$right);
}

//画面表示
for($i=0;$i<$length;$i++){
  echo $arry[$i];
  //出力結果は123456789
}
?>
