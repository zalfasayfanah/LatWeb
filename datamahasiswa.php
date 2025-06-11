<?php
    //echo "HELLO WORLD";
    //$nama = "Zalfa Sayfanah";

    //echo $nama;
    //mysqli_connect("localhost","username","password","nama database")
    require 'function.php';

    $query = "SELECT * FROM mahasiswa";

    $rows = query($query); //hasilya wadah2 dengan isi sesuai bagiannya
 

    //echo $result; -> tidak bisa menampilkan objek
    //var_dump($result);

    //ambil data (fetch) dari result
    // ada 4 cara:
    // 1. mysqli_fetch_row() 'numeric'
    // 2. mysqli_fetch_assoc()
    // 3. mysqli_fetch_array()
    // 4. mysqli_fetch_object()
    //while ($mhs = mysqli_fetch_assoc($result))
    //{
    //   var_dump($mhs["nama"]);
    //}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f0e6;
            margin: 0;
            padding: 0;
            color: #4d3e33;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #fff3e0;
        }

        h1 {
            margin: 0;
            font-size: 2em;
            color: #5c4438;
        }

        hr {
            border: none;
            height: 2px;
            background-color: #8b5e3c;
            margin: 10px auto;
            width: 80%;
        }

        nav {
            text-align: center;
            background-color: #e8d6c1;
            padding: 10px 0;
        }

        nav a {
            color: #5c4438;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            color: #a47e5b;
            text-decoration: underline;
        }

        .content {
            max-width: 800px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .content img {
            display: block;
            margin: 20px auto;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #7b5e47;
            margin-top: 30px;
        }

        p, ul, ol {
            line-height: 1.6;
        }

        ul, ol {
            margin-left: 20px;
        }

        ul ul, ol ul {
            list-style-type: circle;
            margin-left: 25px;
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: #e8d6c1;
            color: #6e4c37;
            font-size: 0.9em;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header>
        <h1>WEB INFORMATIKA 23</h1>
    </header>

    <hr>

    <nav>
        <a href="index.php">HOME</a> | 
        <a href="profile.php">PROFILE</a> |
        <a href="about.php">ABOUT US</a> |
        <a href="login.php">LOGIN</a> |
        <a href="datamahasiswa.php">DATA MAHASISWA</a>
    </nav>

    <h1>Data Mahasiswa</h1>

    <table border="1" cellspacing="0" cellpading="10">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>No.HP</th>
        </tr>
        <?php 
        $i = 1;
        //while ($mhs = mysqli_fetch_assoc($result))
        foreach ($rows as $mhs){ ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="image/<?= $mhs['foto'] ?>" width="80"></td>
            <td><?php echo $mhs["nama"]?></td>
            <td><?= $mhs["nim"]?></td>
            <td><?= $mhs["jurusan"]?></td>
            <td><?= $mhs["nohp"]?></td>
        </tr>
        <?php $i++;} ?>
    </table>

    <footer>
        &copy; 2025 LatWeb | Dibuat oleh Zalfaulislam Sayfanah
    </footer>
</body>
</html>
