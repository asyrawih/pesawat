<?php
session_start();
if ($_SESSION['user'] === null ) {
    header("Location:../auth/login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Tampil Penginputan Data Pesawat</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
table{background-color:#996;padding:0px;width:100%;}
td{background-color:#066;color:#fff;padding:5px;}
</style>
</head>
<body>
<div class="cont" style="margin="10px auto 0">
<div class="bg-danger f-center" style="padding: 10px;">
<div class="f-center"><h1>Tampil Penginputan Data Pesawat</h1></div>

<?php
require_once("koneksi.php");
$sql="select*from pesawat";
$hasil=mysqli_query($db,$sql);
//$query= $db->query($sql);
while ($row=mysqli_fetch_array($hasil)){
$noreservasi=$row['no_reservasi'];
$namapemesan=$row['nama_pemesan'];
$tujuan=$row['tujuan'];
$biayatujuan=$row['biaya_tujuan'];
$biayapokok=$row['biaya_pokok'];
$potongan=$row['potongan'];
$total=$row['total'];
$tiket=$row['jenis_tiket'];
echo "tes:".$noreservasi;
?>
<table>
<tr>
<td>Nomor Reservasi</td><td> :</td><td> <?php echo $noreservasi; ?></td>
</tr>
<tr>
<td>Nama Pemesan</td><td> :</td><td><?php echo $namapemesan; ?></td>
</tr>
<tr>
<td>Tujuan</td><td> :</td><td> <?php echo $tujuan; ?></td>
</tr>
<tr>
<td>Jenis Tiket</td><td> :</td><td><?php echo $tiket; ?></td>
</tr>
<tr>
<td>Biaya Tujuan</td><td> :</td><td><?php echo $biayatujuan; ?></td>
</tr>
<tr>
<td>Biaya Pokok</td><td> :</td><td><?php echo $biayapokok; ?></td>
</tr>
<tr>
<td>Potongan</td><td> :</td><td><?php echo $potongan; ?></td>
</tr>
<tr>
<td>Total</td><td> :</td><td><?php echo $total; ?></td>
</tr><br>
<?php
}
?>
</table>
<br/><a class="btn btn-primary" href="index.php">Input Data Lagi</a>
</div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
