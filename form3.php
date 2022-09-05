<?php
    session_start();
    echo "Nama : ";
    echo $_SESSION["tampilkan_nama"];
    echo "<br>";

    echo "NIM : ";
    echo $_SESSION["tampilkan_nim"];
    echo "<br>";

    echo "Fakultas : ";
    echo $_SESSION["tampilkan_fakultas"];
    echo "<br>";

    echo "Prodi : ";
    echo $_SESSION["tampilkan_prodi"];
    echo "<br>";
?>