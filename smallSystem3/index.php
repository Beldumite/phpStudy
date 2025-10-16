<?php

$mahasiswa = [
    "IPK" => 3.6,
    "Pendapatan" => 3500000,
    "Rekomendasi" => true,
    "Prestasi" => true,
];

$eligibilitas = 0;

if ($mahasiswa["IPK"] > 3.5) {
    if ($mahasiswa["IPK"] >= 3.9) {
        $eligibilitas += 30; //ini nested ifnya 
    } else $eligibilitas += 20;
}

if ($mahasiswa["Pendapatan"] < 5000000) {
    $eligibilitas += 30;
}

if ($mahasiswa["Prestasi"]) {
    $eligibilitas += 30;
}

if ($mahasiswa["Rekomendasi"]) {
    $eligibilitas += 10;
}
echo $eligibilitas;

if ($eligibilitas > 80) {
    echo "Kamu Eligible";
} else {
    echo "Kamu Tidak Eligible";
}
?>
