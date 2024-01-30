<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../index.php');
}

?>
<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            width: 80%;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: auto;
            margin-right: auto;
            font-weight: bold;
            border-spacing: 5px 5px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            animation: fadeInUp 1s ease;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #28a745;
            color: #fff;
            font-size: 24px;
        }

        td {
            font-size: 18px;
        }

        h3 {
            margin-top: 20px;
            font-size: 24px;
            text-align: center;
            animation: fadeInUp 1s ease;
        }

        ol {
            list-style-type: none;
            padding: 0;
        }

        li {
            font-size: 18px;
            margin-bottom: 10px;
            animation: fadeInUp 1s ease;
        }
    </style>
</head>

<body>
    <table class="animate__animated animate__fadeInUp">
        <tr>
            <th>Weight in Kg</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>0-1</td>
            <td>120</td>
        </tr>
        <tr>
            <td>1-2</td>
            <td>200</td>
        </tr>
        <tr>
            <td>2-4</td>
            <td>250</td>
        </tr>
        <tr>
            <td>4-5</td>
            <td>300</td>
        </tr>
        <tr>
            <td>5-7</td>
            <td>400</td>
        </tr>
        <tr>
            <td>7-above</td>
            <td>500</td>
        </tr>
    </table>
    <h3 class="animate__animated animate__fadeInUp">As per your courier's weight, pay the amount on:</h3>
    <div class="animate__animated animate__fadeInUp">
        <ol>
            <li>UPI: abcd@sbi.com</li>
            <li>GPay: 6362786223</li>
            <li>PhnPay: 3565656555</li>
        </ol>
    </div>
</body>

</html>
