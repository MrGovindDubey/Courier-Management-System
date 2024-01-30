<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
} else {
    header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            background-image: url('../images/1920_1080.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        h1, h2, h3 {
            color: #333;
        }

        .container {
            text-align: center;
            padding: 50px;
        }

        .intro {
            font-weight: bold;
            font-size: 1.5em;
        }

        .project-name {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .group {
            font-size: 1.2em;
            color: #555;
        }

        .styled-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <?php include('header.php'); ?>
    </header>

    <div class="container">
        <div class="intro">
            <br><br><br><br>
            <h1>Courier Management Service</h1>
            <h3>The fastest courier service in India</h3>
        </div>
        
        <div class="project-info">
            <h2 class="project-name">DBMS PROJECT</h2>
            <h6 class="group">By Group 2</h6>
        </div>

        <a href="#" class="styled-button">Explore More</a>
    </div>
</body>
</html>
