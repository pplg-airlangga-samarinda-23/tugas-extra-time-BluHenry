<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $databases = "dashboard";

    $koneksi = new mysqli($host, $username, $password, $databases);

    if ($koneksi -> connect_error){
        print "koneksi nya error Buangsa-";
    }
?>