<?php
function closestToZero(array $ts)
{
    $result = 0;
    if (!empty($ts)) {
        $result = $ts[0];
        for($i = 1; $i < count ($ts) ; $i ++) {
            if(abs($result) > abs($ts[$i]) or (abs($result) == abs($ts[$i]) and $ts[$i] > $result)) {
                $result = $ts[$i];
            }
        }
    }
    return $result;
}
?>
