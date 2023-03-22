<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" href="style.css"/>
 </head>
<body>
    <div class="container">
    <div class="main">
        <form method="GET" action="proses.php" id="form">
            <h2>BIODATA</h2>
            <hr/>
            <ltd>Nama :</td>
            <input type="text" name="fnama" id="fnama" placeholder="Masukan Nama" />

            <label>NIM :</label>
            <input type="text" name="nim" id="nim" placeholder="Masukan NIM" />

            <label>Alamat :</label>
            <input type="text" name="lalamat" id="lalamat" placeholder="Masukan Alamat" />

            <label>No. Telepon :</label>
            <input type="text" name="notlp" id="notlp" placeholder="Masukan Nomor Telepon" />

            <p>
            <label>Jenis Kelamin : </label>
                <input type="radio" name="jeniskelamin" value="laki-laki">Laki-Laki
                <input type="radio" name="jeniskelamin" value="perempuan">Perempuan
            </p>

            <p>
            <label>Agama : </label>
                <input type="radio" name="Agama" value="Islam">Islam
                <input type="radio" name="Agama" value="Hindu">Hindu
                <input type="radio" name="Agama" value="Budha">Budha
                <input type="radio" name="Agama" value="Kristen">Kristen
                <input type="radio" name="Agama" value="Katholik">Katholik
            </p>

        <input type="submit" name="submit" id="submit" value="Save">
</form>
    
    </div>

 </body>
</html>