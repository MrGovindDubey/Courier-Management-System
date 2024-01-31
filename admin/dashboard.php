<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../path/to/your/style.css"> <!-- Include your external style sheet if needed -->
    <title>Admin Dashboard</title>
    <style>
        body {
            background-image: url('../images/5.png');
            background-size: cover;
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }

        .admintitle {
            background-color: #333;
            padding: 15px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            position: relative;
            overflow: hidden;
        }

        .admintitle a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .admintitle a:hover {
            color: #f9829b;
        }

        .admintitle a::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #f9829b;
            transition: width 0.3s ease;
        }

        .admintitle a:hover::after {
            width: 100%;
        }

        .admintitle h1 {
            text-shadow: 0.1em 0.1em 0.15em #f9829b;
            margin-bottom: 20px;
        }

        .button-container {
            margin-top: 240px;
            display: flex;
            justify-content: center;
        }

        .admin-button {
            background-color: #f9829b;
            color: #fff;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .admin-button:hover {
            background-color: #333;
        }

        .logout-btn {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .logout-btn:hover {
            color: #f9829b;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['uid'])) {
        $adminName = $_SESSION['admin_name'];
        echo "<div class='admintitle'>";
        echo "<div>";
        echo "<h5><a href='../index.php'>LoginAsUser</a></h5>";
        echo "<h5><a href='logout.php' class='logout-btn'>LogOut</a></h5>";
        echo "</div>";
        echo "<h1>Welcome to the admin Dashboard , $adminName!</h1>";
        echo "</div>";
    } else {
        header('location: ../login.php');
    }

    // Include any other necessary PHP files
    // include('head.php');
    ?>

    <div class="button-container">
        <a href="deletedata.php" class="admin-button">Delete Data</a>
        <a href="deleteusers.php" class="admin-button">Delete Users</a>
    </div>
</body>

</html>
