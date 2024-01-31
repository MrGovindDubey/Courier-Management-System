<!-- datalist.php -->

<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header('location: ../login.php');
    exit();
}

include('../dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Your Page Title</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
        }

        .admintitle {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .admintitle a {
            color: #fff;
            text-decoration: none;
        }

        .table-container {
            overflow-x: auto;
            margin: 30px auto;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 0 auto;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #4b0082;
            color: #fff;
        }

        img {
            max-width: 100px;
        }

        .delete-link {
            color: #ff0000;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="admintitle">
        <div>
            <h5><a href="dashboard.php">Back To Dashboard</a></h5>
            <h5><a href="logout.php">Log Out</a></h5>
        </div>
        <h1>Search Data Information</h1>
    </div>

    <div class="table-container">
        <table>
            <tr>
                <th>No.</th>
                <th>Items Image</th>
                <th>Sender Name</th>
                <th>Receiver Name</th>
                <th>Sender Email</th>
                <th>Action</th>
            </tr>

            <?php
            $qryd = "SELECT * FROM `courier`";
            $run = mysqli_query($dbcon, $qryd);

            if (mysqli_num_rows($run) < 1) {
                echo "<tr><td colspan='6'>No record found..</td></tr>";
            } else {
                $count = 0;
                while ($data = mysqli_fetch_assoc($run)) {
                    $count++;
                    ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><img src="../dbimages/<?php echo $data['image']; ?>" alt="pic" /></td>
                        <td><?php echo $data['sname']; ?></td>
                        <td><?php echo $data['rname']; ?></td>
                        <td><?php echo $data['semail']; ?></td>
                        <td><a class="delete-link" href="datadeleted.php?bb=<?php echo $data['billno']; ?>">Delete</a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>

</html>
