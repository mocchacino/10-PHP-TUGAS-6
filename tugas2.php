<?php
    $jambu = 15000;
    $kardus = 2000;
    $jambu_per_kardus = 5;
    $avail_kardus = 6;

    $hasil = ($kardus * $avail_kardus) + ($avail_kardus * $jambu_per_kardus * $jambu);

    echo "
    ========================================<br/>
    Harga Jambu = Rp $jambu /Kg <br/>
    Harga Kardus = Rp $kardus /pcs <br/>
    Total Penjualan (Dus dan Jambu) = Rp $hasil <br/>
    ========================================
    ";
?>