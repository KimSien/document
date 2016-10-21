


# binary tree sort

## check the precondition

- if need the base array adjust sort program is scrach?
- or touch array size is bigger?

## memo



serch num:5
array liset 6,3,653,45,2,100,55

step 1
sort array list

step 2 
enviroment while loop
use low,high variable

step 3
while check point of middle

check devide front array > serch num?

	-> yes choise 



## code

```
<?php

class Search {

    /*
    * 二分探索を行う
    *
    * @return  探索値と一致する探索要素のキー、一致がなければNULL
    */
    function binarySearch($targetArr, $searchNum) {

        $low       = 0;
        $high      = count($targetArr) -1;

        while ($low < $high) {

            $mid = ($low + $high) / 2;

            if ($targetArr[$mid] == $searchNum) {
                return $mid;
            }

            if ($targetArr[$mid] < $searchNum) {
                $low  = $mid + 1;
            } else {
                $high = $mid;
            }
        }

        return NULL;
    }
}

    //検索値
    $searchNum    = 5;

    //検索対象要素
    $targetArr    = array(38, 72, 93, 41, 5, 18, 35, 86, 49, 17, 73, 782, 190);
    sort($targetArr);

    $mid = Search::binarySearch($targetArr, $searchNum);

    if ($mid === NULL) {
        echo "探索の該当はありません";
    } else {
        echo "探索結果は".$targetArr[$mid]."です";
    }

```




