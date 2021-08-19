<?php

    $input = [
        [2],
        [3],
        [4, 5],
        [6, 7],
        [8]
    ];
    $flatten = [];
    foreach ($input as $temp) {
        foreach ($temp as $value) {
            array_push($flatten, $value);
        }
    }
    print_r($flatten)

?>