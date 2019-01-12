<?php

/*
*  Video About :    Solution of Coding Challenge Named "Target Sum By 2".
*  Challenger  :    Hitesh Chaudhary via youtube challenge series.
*  Name        :    Bhushan Gaykawad
*  Link        :    https://www.youtube.com/watch?v=HJxQUDaNOgI
*  Problem     :    In a given one-dimentional array which is having integers (positive, negative ie. not float or double) as elements,
*                   find the pair of elements whos sum will be another given integer.
*  Ex.         :    We have an array having [ 4, 5, 12, -2, 8, 9 ] and the given sum is 10,
*                   then we have to find pair whos sum is 10. By observing these elements we can simply say [ 12, -2 ].
*  Conditions  :    We want optimized code.
*/

// to solve this problem the first approach

$given = [ 4, 5, 12, -2, 8, 9 ];
echo '<pre> given '; print_r($given); echo '</pre>';

$output = 10;
$total_given_elements = sizeof($given);
echo '<pre> total given '; print_r($total_given_elements); echo '</pre>';

 $count = 1;
 for ($x = 0; $x < $total_given_elements; $x++) {
     for ($j = $count; $j < $total_given_elements ; $j++) {

         // echo $x . ' ' . $count . '<br>';
         
         if ($given[$x] + $given[$count] === $output) {
             echo 'Pair found: [ ' . $given[$x] . ' , ' . $given[$count] . ' ]<br>';
         } else {
             //    echo 'not required [ ' . $given[$x] . ' , ' . $given[$count] . ' ]<br>';
         }
         $count++;
     }
     //$count = $x + 1;
     $count = $x + 2;
 }


// approach two

 $left = 0;
 $right = $total_given_elements - 1;
 echo '<pre> Left '; print_r($left); echo '</pre>';
 echo '<pre> Right '; print_r($right); echo '</pre>';

  for ($z = 0; $z < $total_given_elements; $z++) {
      //  echo 'left right : ' . $left . ' , ' . $right . ' <br>';
      if ($given[$left] + $given[$right] > $output) {
          // echo 'more than '. $output .' [ ' . $given[$left] . ' , ' . $given[$right] . ' ]<br>';
          $right--;
      } elseif ($given[$left] + $given[$right] === $output) {
          echo 'Pair found: [ ' . $given[$left] . ' , ' . $given[$right] . ' ]<br>';
          $right--;
          $left++;
      } else {
          // echo 'less than '. $output .' [ ' . $given[$left] . ' , ' . $given[$right] . ' ]<br>';
          $left++;
      }
      if ($left > $right) {
          break;
      }
  }
