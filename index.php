<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Table dashboard tugas </title>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    </head>
    <body> 


<?php

session_start();
include "Koneksi.php";
// Proses login
$error = ""; // Variabel untuk menyimpan pesan error

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $error = "email dan password harus diisi!";
    } else {
        $query = "select * from user WHERE email = '$email'";

        $user = $koneksi->query($query)->fetch_assoc();

        if($user['password'] == $password){
            $_SESSION['login'] = true;
            header('Location: dashboard.php');
        }else {
            echo "<script>alert('Gagal Login')</script>";
        }
        // header("Location: dashboard.php");

    }
}
?>


        <div class="container">
            <div class="Border">
                <div class="halaman-kosong"> </div>
            </div>
            <div class="LoginForm">
                <div class="BorderEmpty">
                    <div class="EmptyBox"> </div> 
                </div>
                <form class="input" method="POST"> 
                    <input class="User" type="email" name="email" placeholder="Email"> <br>
                    <input class="password" type="text" name="password" placeholder="Password"> <br>
                    <button class="Login"> Login </button> <br>
                    <a href="#">Lupa password?</a>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>