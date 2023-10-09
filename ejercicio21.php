<?php

function NumMasPopular($arr, $n) {
    $frecuencias = array();
    for ($i = 0; $i < $n; $i++) {
        $num = $arr[$i];
        if (!isset($frecuencias[$num])) {
            $frecuencias[$num] = 0;
        }
        $frecuencias[$num]++;
    }
    $max_num = null;
    $max_frecuencia = 0;
    foreach ($frecuencias as $num => $frecuencia) {
        if ($frecuencia > $max_frecuencia || ($frecuencia == $max_frecuencia && $num < $max_num)) {
            $max_num = $num;
            $max_frecuencia = $frecuencia;
        }
    }
    return $max_num;
}


echo NumMasPopular([34,31,34,77,82], 5); // Output: 34
echo NumMasPopular([22,101,102,101,102,525,88], 7); // Output: 101
echo NumMasPopular([66], 1); // Output: 66
echo NumMasPopular([14,14,2342,2342,2342], 5); // Output: 2342




?>