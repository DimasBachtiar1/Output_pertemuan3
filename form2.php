<?php
echo "Create Profile Succes";
echo "<br>";
echo "WELCOME BROTHER !! <br>";
echo "<br>";

$nama = $_POST["name"];
echo "Nama : ". $nama;
echo "<br>";

$nim = $_POST["nim"];
echo "NIM : ". $nim;
echo "<br>";

$fakultas = $_POST["fakultas"];
echo "Fakultas : ". $fakultas;
echo "<br>";

$prodi = $_POST["prodi"];
echo "Prodi : ". $prodi;
echo "<br>";

session_start();
$_SESSION["tampilkan_nama"]=$nama;
$_SESSION["tampilkan_nim"]=$nim;
$_SESSION["tampilkan_fakultas"]=$fakultas;
$_SESSION["tampilkan_prodi"]=$prodi;

?>