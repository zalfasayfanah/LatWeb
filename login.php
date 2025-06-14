<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | INFORMATIKA</title>
    <style>
        /* ...CSS tetap sama seperti yang Anda buat... */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f0e6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fffaf3;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #4d3e33;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #5e4d42;
            font-weight: 500;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #d4c5b2;
            border-radius: 6px;
            margin-bottom: 15px;
            background-color: #fff;
            color: #4a4034;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #bfa58a;
            outline: none;
        }

        .remember {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .remember input[type="checkbox"] {
            margin-right: 8px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #c7a17a;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #a47e5b;
        }

        p {
            text-align: center;
            margin-top: 15px;
            color: #5c4b3a;
        }

        a {
            color: #a47e5b;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>LOGIN</h1>
        <form id="loginForm" action="login.php" method="post" enctype="multipart/form-data">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <div class="remember">
                <input type="checkbox" name="ingat" value="1" id="remember">
                <label for="remember">Ingatkan saya!</label>
            </div>

            <input type="submit" value="Login">
        </form>
        <p>Belum punya akun? <a href="register.php">Daftar</a></p>
    </div>

    <script>
        // Ambil elemen form login berdasarkan ID
        const form = document.getElementById('loginForm');

        // Tambahkan event listener saat form disubmit
        form.addEventListener('submit', function (event) {
            // Ambil nilai email dan password dari input
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();

            // Validasi email tidak boleh kosong dan harus mengandung '@'
            if (!email || !email.includes('@')) {
                alert('Masukkan email yang valid!');
                event.preventDefault(); // Mencegah form terkirim
                return;
            }

            // Validasi password minimal 6 karakter
            if (password.length < 6) {
                alert('Password minimal 6 karakter!');
                event.preventDefault(); // Mencegah form terkirim
                return;
            }

            // Jika validasi lolos, form akan terkirim
        });
    </script>
</body>
</html>
