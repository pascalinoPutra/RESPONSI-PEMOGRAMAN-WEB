<?php
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$alamat     = $_POST['alamat'];
$gender     = $_POST['gender'];
$saran      = $_POST['saran'];

echo "<center><font color=blue>DATA ANDA BERHASIL DIREKAM<br>TERIMA KASIH SUDAH MENGISI FORM WEB INI <3</center> <br>";
$fp = fopen("file.txt", "a+");
fputs($fp, "$nama|$alamat|$email|$gender|$saran\n");
fclose($fp);

echo "<a href=formweb.php><center> → → klik tulisan ini untuk kembali ke semula ← ← </center></a><br>";
