<?php
if(isset($_GET['fnama']))
{
$fnama = $_GET['fnama'];
$lalamat = $_GET['lalamat'];
$jeniskelamin = $_GET['jeniskelamin'];
$prodi = $_GET['prodi'];
$Komentar = $_GET['Komentar'];

echo "<span class='success'> Dengan <b>METODE GET</b></span><br/>";
echo "Nama : ".$fnama."<br/>";
echo "Alamat : ".$lalamat."<br/>";
echo "Jenis Kelamin : ".$jeniskelamin."<br/>";
echo "Program Studi : ".$prodi."<br/>";
echo "Komentar : ".$Komentar."<br/>";

echo "hobi:</br>";
if (!empty($_GET['cekhobi'])){
foreach ($_GET['cekhobi'] as $selected){
echo $selected."</br>";

$simpan = mysqli_query($koneksi, "INSERT INTO Identitas(nama,alamat,jeniskelamin,prodi,komentar) VALUES ('$fnama', '$lalamat', '$jeniskelamin', '$prodi', $Komentar )");

}
} 
}

?>