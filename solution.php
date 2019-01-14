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

class Solution
{
    public function twoSum($given, $target)
    {
        if (sizeof($given) < 2) {
            echo 'Operation could not be done';
            return false;
        }
        $checker = []; // space complexity O(n)
        //we are only accessing elements in array once, so time complexity O(n)
        for ($i=0; $i < sizeof($given); $i++) {
            $difference = $target - $given[$i]; // 10 - 4 = 6
                if (key_exists($difference, $checker)) { // map functions so O(1)
                    echo 'Pair found: ' . $difference . ',' . $given[$i] . '<br>';
                }
            $checker[$given[$i]] = $i;
            //     $checker[$i] = $given[$i];
                //     echo '<pre>';
                //     print_r($checker);
                //     echo '</pre><br>';
        }
    }
}


$given = [  ];
$sol = new Solution();
$sol->twoSum($given, 6);
