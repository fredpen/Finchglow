<?php

/** Given a sorted array of distinct integers and a target value
return the index if the target is found. 
If not, return the index where it would be if it were inserted in order
 */

function findIndex(array $arr, int $target)
{
    if (!in_array($target, $arr)) {
        $arr[] = $target;
        sort($arr);
    }

    return array_search($target, $arr);
}


// test samples
echo findIndex([1, 2, 6, 3, 4, 5], 1);
echo findIndex([1, 2, 6, 3, 4, 5], 7);
