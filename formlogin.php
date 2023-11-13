<?php
include "ceklogin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/AdminLTE.min.css" rel="stylesheet">
    <link href="assets/images/logo.png" type="image/x-icon" rel="shortcut icon">
    <title>Login Luxury</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #b8c6db, #f5f7fa); /* Luxurious gradient background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            width: 400px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.9);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #333;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s forwards 0.2s;
        }

        .user-box {
            position: relative;
            margin-bottom: 30px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s forwards 0.4s;
        }

        .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #555;
            border: none;
            border-bottom: 2px solid #555;
            background: transparent;
            outline: none;
            transition: border-bottom-color 0.3s;
        }

        .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #555;
            pointer-events: none;
            transition: 0.5s;
        }

        .user-box input:focus ~ label,
        .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #6c757d;
            font-size: 12px;
        }

        form button {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: 0.5s;
            letter-spacing: 4px;
            background: linear-gradient(135deg, #6c757d, #495057); /* Gradient background */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s forwards 0.6s;
        }

        form button:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        form button span {
            position: absolute;
            display: block;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>
    <form method="post">
        <div class="user-box">
            <input type="text" name="username"  required>
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password"  required>
            <label>Password</label>
        </div>
        <button type="submit" name="login"  ><span></span>Masuk</button>
        <br>
        <br>
        <?php
        if (!empty($error)) {
            echo '<div class="alert bg-danger text-center" role="alert">' . $error . '</div>';
        }
        ?>
    </div>
    </form>
</div>

        

    <script src="assets/js/jQuery-2.1.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>