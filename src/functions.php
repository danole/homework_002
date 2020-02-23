<?php

function task1($array,$true=false)
{
    if ($true==false) {
        foreach ($array as $item) {
            echo "<p>" . $item . "</p>";
        }
    } else {
        foreach ($array as $item) {
            echo $item;
        }
    }
};

function task2($operation)
{
    $args=func_get_args();
    $result=$args[1];

    for ($i = 2; $i < count($args);$i++) {
        if ($operation=='+'){
            $result += $args[$i];
        } else if ($operation=='-'){
            $result -= $args[$i];
        } else if ($operation=='*'){
            $result *= $args[$i];
        } else if ($operation=='/'){
            $result /= $args[$i];
        }
    }

    echo $result;

}

