<?php
// Inisialisasi dua bilangan pertama
$prevNum = 0;
$currNum = 1;

// Menampilkan angka fibonacci dari 1 hingga 20
echo "Angka Fibonacci dari 1 hingga 20 adalah: ";
for ($i = 1; $i <= 20; $i++){
    echo $currNum . " ";

    // Menghitung bilangan fibonacci berikutnya
    $nextNum = $prevNum + $currNum;

    // Memperbarui nilai bilangan sebelumnya dan saat ini
    $prevNum = $currNum;
    $currNum = $nextNum;

    // Percabangan if untuk menghentikan perulangan jika sudah mencapai angka 20
    if ($currNum > 20){
        break;
    }
}
?>
