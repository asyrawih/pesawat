<?php
    session_start();
    if ($_SESSION['user'] === null ) {
        header("Location:../auth/login.php");
    }

?>
<html>
<head>
<title>Penginputan Data Pesawat</title>
    <link rel="stylesheet" href="style.css">
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
<form class="bg-info" action="proses_simpan.php" method="post" name="pesawat" id="tiket">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="10">
<div class="f-center"><h1>Penginputan Data Pesawat</h1></div>
<tr>
      <td class="td-title">Nomor Reservasi</td>
      <td>:</td>
      <td><input class="form-control" type="text" name="nomor_reservasi"></td>
</tr>
<tr>
      <td class="td-title">Nama Pemesan</td>
      <td>:</td>
      <td><input class="form-control" type="text" name="nama_pemesan"></td>
</tr>
<tr>
      <td class="td-title">Tujuan</td>
      <td>:</td>
      <td><select class="form-control" name="tujuan" id="tujuan">
        <option value="Yogyakarta">Yogyakarta</option>
        <option value="Singapura">Singapura</option>
        <option value="Hongkong">Hongkong</option>
      </select></td>
</tr>
<tr>
      <td class="td-title" style="padding-top:0px;">Jenis Tiket</td>
      <td></td>
      <td>
        <p>
          <label>
            <input type="radio" name="jenis_tiket" value="reguler" id="jenis_tiket">Reguler</label>
          <br>
          <label>
            <input type="radio" name="jenis_tiket" value="promosi" id="jenis_tiket">Promosi</label>
          <br>
        </p>
      </td>
</tr>
</table>
<div class="submit">
<button type="submit" id="button">SIMPAN</button>
<button type="reset" id="button2">RESET</button>
<a href="auth/logout.php" id="button2" style="padding-left: 10rem ; ">Logout</a>
</div>
<br>
</form>
</body>
</html>
