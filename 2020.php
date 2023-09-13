<?php
require_once('connection.php');

$label = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'];

for ($bulan = 1; $bulan < 13; $bulan++) {
    $query  = mysqli_query($conn, "SELECT avg(jumlah) as jml from p_stunting where MONTH(tgl_kasus) = $bulan And YEAR(tgl_kasus) = 2020");
    $row    = $query->fetch_array();
    $thn2020[] =  $row['jml'];

    json_encode($thn2020);
}


?>