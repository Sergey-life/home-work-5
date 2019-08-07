<?php
function fast ($number, $x) {
    if ($x == 1) {
        return $number;
    }
    if ($x == 0) {
        return 1;
    }
    return $number * fast ($number, $x - 1);
}
    echo pow(4, 5);