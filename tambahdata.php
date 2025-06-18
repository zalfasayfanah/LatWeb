<?php

    require 'function.php';
    $koneksi = mysqli_connect("localhost:3307","root","","latweb");
    if(isset($_POST["submit"]))
    {
        tambahmahasiswa($_POST);

        

        if(mysqli_affected_rows($koneksi)>0)
        {
            echo "
            <script>
                alert('Berhasil!');
                document.location.href = 'datamahasiswa.php';
            </script>
            ";
        }
        else
        {
           echo "
            <script>
                alert('Gagal!');
                document.location.href = 'datamahasiswa.php';
            </script>
            ";
            mysqli_error($koneksi);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="name" placeholder="Nama Lengkap*"required/><br>
        <label for="nim">NIM: </label>
        <input type="text" name="nim" id="nim" /><br>
        <label for="jurusan">Jurusan: </label>
        <input type="text" name="jurusan" id="jurusan" required/><br>
        <label for="nohp">No Hp: </label>
        <input type="text" name="nohp" id="nohp" /><br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>
</html>