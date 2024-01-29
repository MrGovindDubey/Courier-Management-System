<?php
require_once "dbconnection.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $fullname = $_POST['name'];
    $phn = $_POST['ph'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        $qry = "INSERT INTO `users` (`email`, `name`, `pnumber`) VALUES ('$email', '$fullname', '$phn')";
        $run = mysqli_query($dbcon, $qry);

        if ($run == true) {
            $psqry = "INSERT INTO `login` (`email`, `password`, `u_id`) VALUES ('$email', '$password',LAST_INSERT_ID() )";
            $psrun = mysqli_query($dbcon, $psqry);
            ?>
            <script>
                alert('Registration Successfully :)');
                window.open('index.php', '_self');
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert('Password mismatched!!');
        </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/brr.png');
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }

        h2 {
            color: green;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
        }

        .btn-danger {
            background-color: #d9534f;
            border-color: #d9534f;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        hr {
            margin-top: 40px;
        }

        .notice {
            font-style: italic;
            font-size: 12px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Register</h2>
                <p>Please fill this form to create an account.</p>
                <form action="test.php" method="post">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Num.</label>
                        <input type="number" name="ph" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-danger btn-block" value="Register">
                    </div>
                    <p>Already have an account? <a href="index.php" style="color: red;">Login here</a>.</p>
                </form>
            </div>
        </div>
        <hr>
        <p class="notice">Notice: If the email Id is registered before, it will not respond. In this case, reset your password or register with a different email Id.</p>
    </div>
</body>

</html>
