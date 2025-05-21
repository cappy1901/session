<?php
/******************************************************
Nama file : session1.php
Halaman ini merupakan halaman contoh penciptaan session. Perintah session_start() harus ditaruh diperintah pertama
tanpa spasi di depannya. Perintah session_start() harus ada pada setiap halaman yang berhubungan dengan session
******************************************************/
session_start();
if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //Periksa login
    if ($user == "mahasiswa" && $pass == "@Mahasiswa") {
        //menciptakan session
        $_SESSION['login'] = $user;
        //menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session2.php'> di sini (session2.php)</a> 
        untuk menuju ke halaman pemeriksaan session ";
    }
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Silahkan Login ...</title>
</head>
<body>
<h2>Silahkan Login...</h2>
<form action="" method="post">
Username : <input type="text" name="user"/><br/>
Password : <input type="password" name="pass"/><br/>
<input type="submit" name="Login" value="Log In"/>
</form>
</body>
</html>
<?php } ?>