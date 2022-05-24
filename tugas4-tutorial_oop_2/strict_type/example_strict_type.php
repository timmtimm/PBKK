<?php declare(strict_types = 1);

function tambah(int $a, float $b): float {
    return $a + $b;
};

var_dump(tambah(9, 5.3)); // 9 + 5.3 = 14.3
