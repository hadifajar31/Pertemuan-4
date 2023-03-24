<?php
// inisialisasi dua bilangan awal
$prev = 0;
$curr = 1;

// menampilkan angka fibonacci dari 1 hingga 20
echo "Deret Fibonacci dari 1 hingga 20: ";
for ($i = 1; $i <= 20; $i++) 
{
    echo $curr . " ";
    $next = $prev + $curr;
    $prev = $curr;
    $curr = $next;
}
?>
