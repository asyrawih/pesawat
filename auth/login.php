<?php
/*
 * Fitur Login
 */
require  '../koneksi.php'  ;


session_start();
if (isset($_SESSION['user'])) {
    header("Location:../index.php");
}


if(isset($_POST['submit'])){
    // Tangkap Nilai Di Form
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Query Data nya
    $sql = "SELECT * FROM users WHERE users.username = '$username' AND users.`password` = '$password' ";
    $data = $db->query($sql)->fetch_row();
    // jika Data ada Di Temukan Passang Session User
    // Cek Data
    $cek = $db->query($sql) ;
    if( $cek  ) {
        $user = $data[0];

        session_start();
        $_SESSION['user'] = $user ;
        // Kembalikan Ke halaman utama
        header("Location:../index.php");
    }
}

?>


<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <style>
        .box{
            position:absolute;
            height:100%;
            width:100%;
            font-family:Helvetica;
            color:#fff;
            background:rgba(0,0,0,0.13);
            padding:30px 0px;
        }
        .box input:focus,.box input:active,.box button:focus,.box button:active{
            outline:none;
        }
        .box button{
            background:#742ECC;
            border:0;
            color:#fff;
            padding:10px;
            font-size:20px;
            width:330px;
            margin:20px auto;
            display:block;
            cursor:pointer;
        }
        .box button:active{
            background:#27ae60;
        }
    </style>
</head>
<body>
<form class="bg-info" action="" method="post" name="pesawat" id="tiket">
    <table width="600" border="0" align="center" cellpadding="0" cellspacing="10">
        <div class="f-center"><h1>Silakan Login untuk Masuk</h1></div>
        <tr>
            <td class="td-title">Username</td>
            <td>:</td>
            <td><input class="form-control" type="text" name="username"></td>
        </tr>
        <tr>
            <td class="td-title">Password</td>
            <td>:</td>
            <td><input class="form-control" type="password" name="password"></td>
        </tr>

    </table>
    <div class="submit">
        <button type="submit" id="button" name="submit">Login</button>
        <button type="reset" id="button2">RESET</button>
    </div>
    <br>
</form>
</body>
</html>
