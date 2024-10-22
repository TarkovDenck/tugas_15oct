<?php
/* Soal : 
 * 1 + 3 + 5 + 7 + 9 + 11 + 13 + 15 + 17 + 19 = ...
 * Rumus Deret Aritmatika :
 * Sn = 1/2*n(a+Un)
 * Sn   : Jumlah n suku pertama
 * n    : banyaknya suku
 * a    : suku pertama
 * Un   : suku terakhir
 */
$n = 10;    // jumlah suku dari 1 ke 19
$a = 1;     // suku pertama
$un = 19;   // suku terakhir

$sum = ($n / 2) * ($a + $un);
echo "Perhitungan menggunakan rumus $sum" . PHP_EOL;

echo "Perhitungan menggunakan for loop" . PHP_EOL;
$sum = 0;
for ($i = 1; $i <= 19; $i += 2){
    echo $i . ($i != 19 ? " + " : " = ");
    $sum += $i;
}
echo $sum . PHP_EOL;
?>