<?php

    $tabungan = 150000;
    $bunga = 12.5;

    $hasil = ($tabungan * $bunga) + $tabungan;

    echo ("
        <p>Tabungan Awal = Rp ".$tabungan."</p>
        <p>Bunga Setahun = ".$bunga." %</p>
        <p>Total Tabungan Setahun = ?</p>
        <p>Jawaban : Rp ".$hasil."</p>
    ");

?>