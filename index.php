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

    <div class="content">
        <img src="foto1.jpg" width="230px" alt="Foto Utama" />

        <h3>Life Update</h3>
        <p>
            <b>ALLOOO ini <i>first trial web</i> yang sangat-sangat random.</b> Matkul pemograman web di lab B.704. 
            gatau mau nulis apa tapi <u>semoga matkul ini bisa cepet pahaammm</u> tulisannya aneh ga jelas dan ga beraturan, 
            pokoknya ini web uji coba.
            <br><br>
            <strong>Nama:</strong> Zalfaulislam Sayfanah <br>
            <strong>NIM:</strong> C2C023074 <br>
            <strong>Semester:</strong> 4 <br>
            <strong>Alamat:</strong> Jl. Kelapa Sawit II, Tembalang <br>
        </p>

        <h3>Best Food Here!</h3>
        <ul>
            <li>Tahuu Cmpurr. Plis ini enak bangettt</li>
            <li>Rendangg + Naspaddd,, Beh bikin Laperr</li>
        </ul>

        <h3>Best Beverage Here!</h3>
        <p>
            Dari sekian banyak minuman yang uda pernah aku minum,, ada beberapa minuman yang menuurutku bener-bener worth it antara harga dan rasaanya:
        </p>
        <ol>
            <li>Matcha Latte
                <ul>
                    <li>Matchaa creamy</li>
                    <li>Matcha mILKY</li>
                </ul>
            </li>
            <li>Red Velvet
                <ul>
                    <li>velvet creamyy</li>
                </ul>
            </li>
            <li>Oat Milk
                <ul>
                    <li>oatt sideee caramel</li>
                    <li>oat side coklatt</li>
                </ul>
            </li>
            <li>Jus Alpukat
                <ul>
                    <li>alpukaatt mentegaa</li>
                    <li>alpukaatt plus coklatt</li>
                </ul>
            </li>
        </ol>
    </div>

    <footer>
        &copy; 2025 LatWeb | Dibuat oleh Zalfaulislam Sayfanah
    </footer>
</body>
</html>
