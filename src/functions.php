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

function task3($arg1,$arg2){

    if (is_int($arg1) && is_int($arg2)) {
        ?>
        <table style='border: 1px solid black'>
            <?php for ($i = 1; $i <= $arg1; $i++): ?>
                <tr style='border: 1px solid black'>
                    <?php for ($j = 1; $j <= $arg2; $j++): ?>
                        <td style='border: 1px solid black'>
                            <?php echo $i * $j; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
                <br>
            <?php endfor; ?>
        </table>
        <?php
    } else{
        echo "Вы ввели не число или не целое число";
    }
}

