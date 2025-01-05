<?php

//register
include "database.php";

$register_massage = "";

if(isset($_POST["register"])){
    $username = $_POST["nama"];
    $password = $_POST["sandi"];

        $sql = "INSERT INTO users (username, password) VALUES
        ('$username', '$password')";
        
        if($db->query($sql)) {
            $register_massage = "Akun berhasil dibuat, silahkan login";
        } else {
            $register_massage = "Data gagal dibuat, silahkan coba lagi";
        }
}

    //login

    $login_massage="";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password='$password' ";

        $result = $db->query($sql);

        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
  
            header("location: dashboard.php");
            
      } else {
        $login_massage = "Akun tidak ditemukan, cek kembali";
    }
        $db->close();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link rel="icon" href="icon baru.png" type="image/png" style="width: 160px;border-radius: 10px;">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
            background-image: url("pesantren.jpeg");
            background-size: cover;
        }

        .container {
            width: 100%;
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .container i {
            margin-left: 90px;
            font-size : 13px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .toggle-link {
            text-align: center;
            margin-top: 15px;
        }

        .toggle-link a {
            color: #007BFF;
            text-decoration: none;
            font-size: 14px;
        }

        .toggle-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container" id="form-container">
        <form action="index.php" method="POST" id="login-form">
            <h1>Login</h1>
            <i> <?= $register_massage ?> </i>
            <i> <?= $login_massage ?> </i>
            <br>
            <br>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <button name="login" type="submit">Login</button>
            </div>
            <div class="toggle-link">
                <a href="#" onclick="toggleForm('register')">Don't have an account? Register</a>
            </div>
        </form>

        <form action="index.php" method="POST" id="register-form" style="display: none;">
            <h1>Register</h1>
            <div class="form-group">
                <label for="register-name">Name</label>
                <input type="text" name="nama" id="register-name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="register-password">Password</label>
                <input type="password" name="sandi" id="register-password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <button name="register" type="submit">Register</button>
            </div>
            <div class="toggle-link">
                <a href="#" onclick="toggleForm('login')">Already have an account? Login</a>
            </div>
        </form>
    </div>

    <script>
        function toggleForm(formType) {
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');

            if (formType === 'login') {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
            } else {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
            }
        }
    </script>
</body>
</html>
