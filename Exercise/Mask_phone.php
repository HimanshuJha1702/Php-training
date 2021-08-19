<?php
    $input = "9876543210";
    $output = array();
    for($i=0;$i<10;$i=$i+1)
    {
        if($input[$i]>1 && $input[$i]<8)
            $output[$i] = "*";
        else
            $output[$i] = $input[$i];
    }
    print_r($output);
?>
