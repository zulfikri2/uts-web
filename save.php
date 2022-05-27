<?php
if (isset($_POST['simpan'])) {
    require_once('config.php');
    $merk = $_POST['merk'];
    $tipe = $_POST['tipe'] == '' ? 0 : $_POST['tipe'];
    $tahun = $_POST['tahun'] == '' ? 0 : $_POST['tahun'];

    $sql = "INSERT INTO dat SET merk='$merk', tipe='$tipe', tahun='$tahun'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal disimpan');</script>";
        echo "<script>location='index.php';</script>";
        // var_dump($sql);
    }
}
