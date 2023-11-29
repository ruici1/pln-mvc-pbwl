<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-color: #87CEEB; /* Warna latar belakang biru langit */
        }

        a {
            text-decoration: none;
        }

        .container {
            width: 300px;
            margin: auto;
            margin-top: 100px;
        }

        h2 {
            text-align: center;
        }

        .login-form {
            padding: 20px;
            background-color: #DCDCDC;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        .btn {
            background-color: #7FFFD4;
            color: #000000;
            border: none;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        .error {
            color: #e53935;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
    <title>Login Sistem</title>
</head>
<body>
    <div class="container">
        <h2>Login Sistem</h2>

        <form action="<?php echo URL; ?>/login/proses" method="post" class="login-form">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="email" name="email" placeholder="Email" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Login" class="btn"></td>
                </tr>
            </table>
        </form>

        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == false) { ?>
            <div class="error">
                Login tidak ditemukan
            </div>
        <?php } ?>
    </div>
</body>
</html>
