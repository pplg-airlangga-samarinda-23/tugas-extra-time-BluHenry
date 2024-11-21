<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Table dashboard tugas </title>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    </head>
    <body>  
        <?php
            (include "Koneksi.php");
            $query = "select * from dashboard";
            $user = $koneksi->query($query);
        ?>


<?php
// Proses login
$error = ""; // Variabel untuk menyimpan pesan error

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $error = "Username dan password harus diisi!";
    } else {
        // Jika username dan password diisi, redirect ke dashboard
        header("Location: dashboard.php");
        exit();
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
                <div class="input"> 
                    <input class="User" type="text" name="username" placeholder="Username"> <br>
                    <input class="password" type="text" name="password" placeholder="Password"> <br>
                    <button class="Login"> Login </button> <br>
                    <a href="#">Lupa password?</a>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>