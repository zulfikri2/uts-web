<?php
if (isset($_POST['update'])) {
    require_once('config.php');
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $tipe = $_POST['tipe'] == '' ? 0 : $_POST['tipe'];
    $tahun = $_POST['tahun'] == '' ? 0 : $_POST['tahun'];

    $sql = "UPDATE dat SET merk='$merk', tipe='$tipe', tahun='$tahun' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal diupdate');</script>";
        echo "<script>location='index.php';</script>";
        // var_dump($sql);
    }
}
