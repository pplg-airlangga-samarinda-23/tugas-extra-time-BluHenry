<?php
session_start();

if($_SESSION['login'] == false){
    header('Location: index.php');

    exit();
}

require_once('koneksi.php');
$query = "select * from barang";
$result = mysqli_query($koneksi,$query)

?>



<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Table dashboard tugas </title>
        <script src="script.js"></script>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class="ContainerBoard">
            <div class="box1">
                <div class="BoxHijau"> </div>
                <div class="NavDash">
                    <nav>
                        <button> Dashboard </button> <br>
                        <button> Master Barang</button> <br>
                        <button> Receiving </button> <br>
                        <button> Issuing </button> <br>
                    </nav>
                </div>
            </div>
            <div class="BoxDash">
                <header class="head">
                    <div class="Profile">
                        <p> BluHenry </p>
                        <img src="rrsgs.png">
                    </div>
                </header>
                <div class="Table">
                    <input type="search" placeholder="Pencarian" class="search">
                    <table>
                        <thead>
                            <tr>
                            <th rowspan="2"> No </th>
                            <th rowspan="2"> Nama Barang </th>
                            <th rowspan="2"> Pengadaan </th>
                            <th rowspan="2"> stok </th>
                            <th colspan="2"> status </th>
                            </tr>
                            <tr>
                                <th> Baik </th>
                                <th> Rusak </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php

                                    while($row = mysqli_fetch_assoc($result)) {

                                ?>
                                <td> <?php echo $row['No'] ?> </td>
                                <td> <?php echo $row['Nama_barang'] ?> </td>
                                <td> <?php echo $row['Pengadaan'] ?> </td>
                                <td> <?php echo $row['stok'] ?> </td>
                                <td> <?php echo $row['Baik'] ?> </td>
                                <td> <?php echo $row['Buruk'] ?> </td>
                                
                            </tr>

                                <?php

                                    }

                                ?>
                            
                        </tbody>
                    </table>
                </div>
                <footer>
                    <p> Copyright </p>
                    <p> Versi: 10 </p>
                </footer>
            </div>
        </div>
    </body>
</html>