<?php
// Input nilai dari user
$nilaiMatematika = (int) readline("Masukkan nilai Matematika: ");
$nilaiFisika = (int) readline("Masukkan nilai Fisika: ");
$nilaiBiologi = (int) readline("Masukkan nilai Biologi: ");

// Menghitung nilai rata-rata
$rataRata = ($nilaiMatematika + $nilaiFisika + $nilaiBiologi) / 3;

// Menampilkan nilai rata-rata
echo "Nilai rata-rata = " . $rataRata . "\n";

// Percabangan if untuk menentukan apakah Dani lulus atau tidak
if ($rataRata >= 60){
    echo "Dani lulus!";
} else {
    echo "Dani tidak lulus.";
}
?>
