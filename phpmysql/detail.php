<html>
<head>
<title>detail data</title>
</head>
<body>
<h3>Detail Data</h3>
<?php
// menyisipkan file
include("mysql_connect.php");
// perintah sql untuk menampilkan record nama dari tabel
// buku telp
$query = "SELECT * FROM bukutamu ";
$query.= "WHERE id = ".$_GET['id'];
// menjalankan perintah sql diatas
$result = mysql_query($query, $link);
// mengambil record dari hasil perintah sql diatas
$row = mysql_fetch_row($result);
echo"<b>No ID </b>: $row[0]<br>\n";
echo"<b>Nama </b>: $row[1]<br>\n";
echo"<b>Email </b>:$row[2]<br><br>\n";
?>
<a href='list.php'>kembali</a>
</body>
</html>