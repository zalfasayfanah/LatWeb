<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT ME</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f0e6;
            color: #4d3e33;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #fff3e0;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
            color: #5c4438;
            font-size: 2em;
        }

        hr {
            border: none;
            height: 2px;
            background-color: #8b5e3c;
            margin: 0 auto;
            width: 80%;
        }

        nav {
            background-color: #e8d6c1;
            text-align: center;
            padding: 12px 0;
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
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }

        h2 {
            color: #7b5e47;
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
            background-color: #fffdf9;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
        }

        table, th, td {
            border: 1px solid #c9b6a2;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #e8d6c1;
            color: #5c4438;
        }

        td {
            color: #4d3e33;
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

    <div class="content">
        <h2>Data Mahasiswa Informatika 2023 kelas B</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Zalfaulislam Sayfanah</td>
                <td>C2C023074</td>
                <td>Aktif</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Fera Kusuma Astuti</td>
                <td>C2C023047</td>
                <td>Aktif</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Rinanta Indra Dewi</td>
                <td>C2C023062</td>
                <td>Aktif</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Monika Evanya Kade</td>
                <td>C2C023066</td>
                <td>Aktif</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Fida Atiyah</td>
                <td>C2C023048</td>
                <td>Aktif</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Nesya Meilita Andari</td>
                <td>C2C023054</td>
                <td>Aktif</td>
            </tr>
            
        </table>

        <h2>Latihan</h2>
        <table>
            <tr>
                <th colspan="3">Bulan</th>
            </tr>
            <tr>
                <td>Januari</td>
                <td>Maret</td>
                <td>Mei</td>
            </tr>
        </table>

        <h2>Tugas</h2>
        <table>
            <tr>
                <th rowspan="2">Nama</th>
                <th colspan="3">Nilai</th>
            </tr>
            <tr>
                <td>UTS</td>
                <td>UAS</td>
                <td>Tugas</td>
            </tr>
            <tr>
                <td>Zalfa</td>
                <td>80</td>
                <td>90</td>
                <td>100</td>
            </tr>
        </table>
    </div>

    <footer>
        &copy; 2025 LatWeb | Dibuat oleh Zalfaulislam Sayfanah
    </footer>
</body>
</html>
