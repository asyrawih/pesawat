<?php
// Cek login nya
session_start();
if ($_SESSION['user'] === null ) {
    header("Location:../auth/login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Proses Simpan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<br style="padding-top:50px;"/>
<div class="cont">
<p class="bg-danger f-center" style="padding: 10px;">
<?php
    // Validasi Data nya toh wkwkkw :v
    // Bingung baca nya cuk cuk
	require_once("koneksi.php");
	$nomorreservasi=$_POST['nomor_reservasi'];
	$namapemesan=$_POST['nama_pemesan'];
	$tujuan=$_POST['tujuan'];
	$tiket=$_POST['jenis_tiket'];
	$sql = "SELECT * FROM pesawat WHERE no_reservasi = '$nomorreservasi'";
    $query = $db->query($sql);
    if ($tujuan=="Yogyakarta"){$biayatujuan='350000'; $biayapokok='100000';}
	else if ($tujuan=="Singapura"){$biayatujuan='1000000'; $biayapokok='250000';}
	else if ($tujuan=="Hongkong"){$biayatujuan='2000000'; $biayapokok='250000';}

	if ($tiket=="promosi"){$potongan=0.75*$biayatujuan;}
    else {$potongan=0;}
    $total= $biayatujuan+$biayapokok - $potongan;
    if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar!</div>";
   }else {
     if(!$nomorreservasi || !$namapemesan || !$tujuan || !$tiket) {
       echo "<div align='center'>Masih ada data yang kosong!";
     } else {
       $data = "INSERT INTO pesawat VALUES ('$nomorreservasi','$namapemesan','$tujuan','$biayatujuan','$biayapokok','$potongan','$total','$tiket')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses</div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
	
?>
<br/>
<br/>
<a class="btn btn-success" href="index.php">Input Kembali</a> <a class="btn btn-info" href="tampil_data.php">Lihat Data</a>
</p>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
