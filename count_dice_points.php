<?php

// I. upper block

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

// II. lower block

// Dreierpasch
function triple($dices){
    $result = 0;
    if (maximum_diced($dices)>2) {
        foreach ($dices as $value) $result += $value;
    }
    return $result;
}

// Viererpasch
function foursome($dices){
    $result = 0;
    if (maximum_diced($dices)>3) {
        foreach ($dices as $value) $result += $value;
    }
    return $result;
}

function fullhouse($dices){
    return 25;
}

function small_street($dices){
    return 30;
}

function big_street($dices){
    return 40;
}

function yahtzee($dices){
    $result = 50;
    for ($i=1; $i<count($dices); $i++){
        if ($dices[$i] != $dices[0]) $result = 0;
    }
    return $result;
}
 
function chance($dices){
    $result = 0;
    foreach ($dices as $value){
        $result += $value;
    }
    return $result;
}

function maximum_diced($dices) {
    $amounts = array(0, 0, 0, 0, 0, 0);
    foreach ($dices as $value){
        $amounts[$value-1]++;
    }
    return max($amounts);
}

?>