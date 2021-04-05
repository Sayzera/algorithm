<?php 
$arr = [1,3,2,2,2,3,4,5,6];
/**
 * bubble sort algorithm
 */
for($i = 0; $i < count($arr); $i++ ) {
    for($j = $i+1 ; $j < count($arr); $j++) {
        if($arr[$i] < $arr[$j]) {
            /**
             * 1 > 3 
             * 1 > 2  (1.indeks) 
             * 
             * 3 > 2 
             * 1,2,3 (2.indeks) 
             * 
             * 
             *   
             */
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
echo '<pre>';
print_r($arr);
echo '<pre>';
/**
 * Output 
    [0] => 4341413
    [1] => 32131
    [2] => 12323
    [3] => 999
    [4] => 22
    [5] => 8
    [6] => 7
    [7] => 6
    [8] => 4
    [9] => 3
    [10] => 3
    [11] => 2
    [12] => 1
 */

 /**
  * Burada 10 elemanlı bir dizi objesi olsun ve bunu 
  * foreach ile okuyun 
  * html içerisinde ul li yapısını kullanarak 
  */
 $arr = [
     [
        'name' => 'Sezer',
        'surname' => 'Bölük',
        'age' => 25
     ],
     [
        'name' => '...',
        'surname' => '...',
        'age' => '...'
     ],

 ];