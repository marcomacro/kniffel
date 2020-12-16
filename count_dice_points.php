<?php

function count_ones($dices){
    $result = 0;
    foreach ($dices as $value){
        if ($value == 1) $result += 1;
    }
    return $result;
}

function count_twos($dices){
    $result = 0;
    foreach ($dices as $value){
        if ($value == 2) $result += 2;
    }
    return $result;
}

function count_threes($dices){
    $result = 0;
    foreach ($dices as $value){
        if ($value == 3) $result += 3;
    }
    return $result;
}

function count_fours($dices){
    $result = 0;
    foreach ($dices as $value){
        if ($value == 4) $result += 4;
    }
    return $result;
}

function count_fives($dices){
    $result = 0;
    foreach ($dices as $value){
        if ($value == 5) $result += 5;
    }
    return $result;
}

function count_sixs($dices){
    $result = 0;
    foreach ($dices as $value){
        if ($value == 6) $result += 6;
    }
    return $result;
}

?>