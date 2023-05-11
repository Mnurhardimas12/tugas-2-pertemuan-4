<?php
function isPrime($num){
    // Jika bilangan adalah 1 atau 0, maka bukan prima
    if ($num < 2) {
        return false;
    }

    // Cek bilangan prima
    for ($i = 2; $i <= sqrt($num); $i++){
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Input angka maksimal dari user
$maxNumber = (int) readline("Masukkan angka maksimal: ");

// Menampilkan deret bilangan prima
echo "Bilangan prima kurang dari atau sama dengan $maxNumber adalah: ";
for ($i = 2; $i <= $maxNumber; $i++){
    if (isPrime($i)){
        echo $i . " ";
    }
}
?>
