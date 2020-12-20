<?php

/*
This file is intended to count the points of the dices rolled, according to
a certain, given category (ones, twos, ... , triple, small_street, ...) and 
also validates if the condidions of that specific category were fullfilled.
*/

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

// dt.: Dreierpasch
function count_triple($dices){
    $result = 0;
    if (count_max_diced($dices)>2) {
        foreach ($dices as $value) $result += $value;
    }
    return $result;
}

// dt.: Viererpasch
function count_foursome($dices){
    $result = 0;
    if (count_max_diced($dices)>3) {
        foreach ($dices as $value) $result += $value;
    }
    return $result;
}

function count_fullhouse($dices){
    return 25;
}

function count_small_street($dices){
    return 30;
}

function count_big_street($dices){
    return 40;
}

// dt.: Kniffel
function count_yahtzee($dices){
    $result = 50;
    for ($i=1; $i<count($dices); $i++){
        if ($dices[$i] != $dices[0]) $result = 0;
    }
    return $result;
}

function count_chance($dices){
    $result = 0;
    foreach ($dices as $value){
        $result += $value;
    }
    return $result;
}

// III. helping  functions

// determines which pips had been the most and returns the amount of occurences
// intended to be used by count_triple(), count_foursome()
function count_max_diced($dices) {
    $amounts = array(0, 0, 0, 0, 0, 0);
    foreach ($dices as $value){
        $amounts[$value-1]++;
    }
    return max($amounts);
}

?>