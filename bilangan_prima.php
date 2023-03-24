<?php
// menerima input dari pengguna
$n = readline("Masukkan angka: ");

// menampilkan deret bilangan prima kurang dari atau sama dengan angka yang dimasukkan
echo "Deret bilangan prima kurang dari atau sama dengan $n: ";
for ($i = 2; $i <= $n; $i++) 
{
    $is_prime = true;
    for ($j = 2; $j < $i; $j++) 
    {
        if ($i % $j == 0) 
        {
            $is_prime = false;
            break;
        }
    }
    if ($is_prime) 
    {
        echo $i . " ";
    }
}
?>