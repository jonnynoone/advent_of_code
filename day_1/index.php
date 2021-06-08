<?php

$list = array(
    "1721",
    "979",
    "366",
    "299",
    "675",
    "1456"
);

function addTwoNumbers($list) {
    $count = sizeof($list);

    for($i = 0; $i < $count; $i++) {
        echo "\n $list[$i] \n";

        
    }

    // return $count * 100;
}

echo addTwoNumbers($list);