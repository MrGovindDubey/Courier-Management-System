<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Courier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .success-message {
            color: #008000;
            font-weight: bold;
        }

        .alert-box {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            include('../dbconnection.php');
            $billno = $_REQUEST['bb'];

            $qry = "DELETE FROM `courier` WHERE `billno`='$billno'";
            $run = mysqli_query($dbcon, $qry);

            if ($run == true) {
                echo '<div class="alert-box">Courier Deleted Successfully :)</div>';
        ?>
                <script>
                    setTimeout(function () {
                        window.open('deletedata.php', '_self');
                    }, 2000);
                </script>
        <?php
            }
        ?>
        <p class="success-message">Redirecting...</p>
        <a href="deletedata.php" class="button">Go back</a>
    </div>
</body>
</html>
