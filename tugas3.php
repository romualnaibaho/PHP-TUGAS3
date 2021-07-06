<?php

    $jarak = 360;
    $kecepatan = 90;

    $waktu = $jarak / $kecepatan;
    $waktu_per_menit = $waktu * 60;

    echo ("
        <p>Jarak kota A - Z = ".$jarak." Km</p>
        <p>Kecepatan motor = ".$kecepatan." Km/Jam</p>
        <p>Waktu tempuh = ?</p>
        <p>Jawaban : ".$waktu_per_menit." Menit</p>
    ");

?>