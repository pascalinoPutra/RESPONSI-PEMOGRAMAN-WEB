<?php
echo "<head><title>OUTPUT DARI DATA YANG SUDAH DI INPUT</title></head>";
$fp = fopen("file.txt", "r");
// echo "<table border=0>";

echo "<center>";
echo "<a href = formweb.php>→ → klik tulisan ini untuk kembali ke semula ← ←</a><br></br>";
echo "<table border=2 align=center>";
echo "<tr>";
echo "<td>  Tanggal </td>";
echo "<td>  Nama </td>";
echo "<td>  Alamat &nbsp&nbsp&nbsp</td>";
echo "<td>  Email &nbsp</td>";
echo "<td>  Gender &nbsp&nbsp&nbsp</td>";
echo "<td>  Komentar &nbsp&nbsp&nbsp</td>";
echo "</tr>";
while ($isi = fgets($fp, 1000)) {
    $pisah = explode("|", $isi);
    echo "<tr>";
    echo "<td>";
    echo date('d-m-Y');
    echo "</td>";
    echo "<td>  $pisah[0]  </td>";
    echo "<td>  $pisah[1]  </td>";
    echo "<td>  $pisah[2]  </td>";
    echo "<td>  $pisah[3]  </td>";
    echo "<td>  $pisah[4]  </td>";
    echo "</tr>";
}
echo "</table></center>";
