<?php 

function searchPosition($nums, $target) {
    $length = count($nums);
    for ($i = 0; $i < $length; $i++) {
        if ($nums[$i] >= $target) {
            return $i;
        }
    }
    return $length;
}


$nums = [1, 3, 2, 6];
$target = 7;
echo searchPosition($nums, $target);

?>