<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER | INFORMATIKA</title>
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
        }

        .form-container {
            max-width: 600px;
            background-color: #fffdf9;
            margin: 30px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        form label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            color: #5c4438;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="password"],
        form input[type="number"],
        form input[type="date"],
        form input[type="color"],
        form input[type="file"],
        form select,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #d2bfa5;
            border-radius: 6px;
            background-color: #fefaf6;
        }

        form textarea {
            resize: vertical;
            height: 80px;
        }

        .radio-group,
        .checkbox-group {
            margin-top: 10px;
        }

        .radio-group label,
        .checkbox-group label {
            font-weight: normal;
            margin-right: 15px;
        }

        form input[type="submit"] {
            margin-top: 25px;
            padding: 12px 20px;
            background-color: #a47e5b;
            border: none;
            color: white;
            font-size: 1em;
            border-radius: 6px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #8b5e3c;
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: #e8d6c1;
            color: #6e4c37;
            font-size: 0.9em;
            margin-top: 40px;
        }

        .inline-group {
            display: flex;
            gap: 15px;
            margin-top: 10px;
            flex-wrap: wrap;
        }

        .inline-group label {
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: normal;
        }

    </style>
</head>
<body>

    <header>
        <h1>REGISTRASI</h1>
    </header>

    <div class="form-container">
        <form action="login.php" method="post" enctype="multipart/form-data">
            <label for="namalengkap">Nama Lengkap:</label>
            <input type="text" id="namalengkap" name="namalengkap" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" min="1">

            <label for="tanggal">Tanggal Lahir:</label>
            <input type="date" id="tanggal" name="tanggal">

            <label for="warna">Warna Favorit:</label>
            <input type="color" id="warna" name="warna">

            <label for="foto">Foto Profil:</label>
            <input type="file" id="foto" name="foto">

            <label>Jenis Kelamin:</label>
            
            <div class="inline-group">
                <label><input type="radio" name="jeniskelamin" value="Laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan</label>
            </div>

            <label>Hobi:</label>
            <div class="inline-group">
                <label><input type="checkbox" name="hobi[]" value="Membaca"> Membaca</label>
                <label><input type="checkbox" name="hobi[]" value="Traveling"> Traveling</label>
                <label><input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga</label>
            </div>

            <label for="negara">Pilihan Negara:</label>
            <select id="negara" name="negara" required>
                <option value="">- Pilih Negara -</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
                <option value="Indonesia">Indonesia</option>
            </select>

            <label for="biografi">Biografi Singkat:</label>
            <textarea id="biografi" name="biografi"></textarea>

            <div class="checkbox-group">
                <input type="checkbox" id="ingat" name="ingat" value="1">
                <label for="ingat">Ingatkan saya!</label>
            </div>

            <input type="submit" value="Registrasi">
        </form>
    </div>

    <footer>
        &copy; 2025 Registrasi Web Informatika | Dibuat oleh Zalfa
    </footer>

</body>
</html>
