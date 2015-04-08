<html>
<head>
<title>tampil data</title>
</head>
<body>
<h3>Pilih Data yang akan di hapus atau di edit.</h3>
<h5>Untuk melihat detail data, silahkan klik pada data.</h5>
<?php
// menyisipkan file (langkah 1 dan 2 terpenuhi)
include("mysql_connect.php");
// perintah sql untuk menampilkan record nama dari tabel
// buku telp (langkah 3 terpenuhi)
$query = "SELECT id,nama FROM bukutamu";
// menjalankan perintah sql diatas
$result = mysql_query($query, $link);
// mengambil record dari hasil perintah sql diatas (langkah
// 4 terpenuhi)
while($row = mysql_fetch_row($result)) {
echo"<a href=\"detail.php?id=$row[0]\">$row[1]</a><br>";
}
?>
<br>
<b>hapus data</b><br>
<b>update data</a></b><br>
<b><a href='phpmysqlcoba.php'>depan</a></b><br>
</body>