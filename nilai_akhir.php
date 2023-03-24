<?php

// Meminta input nilai Matematika
echo "Masukkan nilai Matematika: ";
$nilai_matematika = readline();

// Meminta input nilai Fisika
echo "Masukkan nilai Fisika: ";
$nilai_fisika = readline();

// Meminta input nilai Biologi
echo "Masukkan nilai Biologi: ";
$nilai_biologi = readline();

// Menghitung nilai rata-rata
$nilai_rata_rata = ($nilai_matematika + $nilai_fisika + $nilai_biologi) / 3;

// Menampilkan nilai rata-rata
echo "Nilai rata-rata: " . $nilai_rata_rata . "\n";

// Memeriksa apakah Dani lulus atau tidak
if ($nilai_rata_rata >= 60) {
    echo "Dani lulus.";
} else {
    echo "Dani tidak lulus.";
}

?>
