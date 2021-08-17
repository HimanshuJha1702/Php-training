<?php

    $input =  ["snake_case", "camel_case"];
    $output = [];

    foreach ($input as $value) {
        $value_list = explode("_", $value);
        $temp_ans = "";
        $temp_ans .= $value_list[0];
        for($i=1; $i<count($value_list);$i++ ) {
            $temp_ans .= ucfirst($value_list[$i]);;
        }
        array_push($output, $temp_ans);
    }
    print_r($output)
?>