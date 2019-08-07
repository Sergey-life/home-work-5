<?php
/*function arProgresive($start, $step, $and) {
  if ()
}
 arProgresive(3, 5, 20);
*/
/* * *
 * Арифметическая прогрессия
 *
 * @param $a1 - первый член прогрессии
 * @param $d - Разность
 * @Param $n - номер члена прогрессии
 * В нашем случае $n обязательно должен быть инициализирован "1"
 *
 * @param $max - максимальное значение прогрессии
 */

function progression ($start, $step, $n, $max) {
    $val = $start + (($n - 1) * $step);
    $n++;
    echo "<br>".$val;

    if ($val < $max - $step) {
        progression($start, $step, $n, $max);
    }
}
progression(3, 5,1,20);