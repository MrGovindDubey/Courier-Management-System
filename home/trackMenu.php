<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../login.php');
}
?>
<?php include('header.php'); ?>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4; /* Professional background color */
    }

    table {
        width: 80%;
        margin: 30px auto;
        font-weight: bold;
        border-spacing: 5px 5px;
        border-collapse: collapse;
        overflow-x: auto;
        background-color: white; /* Background color for the table */
        border-radius: 10px; /* Optional: Add rounded corners */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle box shadow */
    }

    th {
        background-color: #4CAF50;
        color: white;
        font-size: 18px;
        padding: 10px; /* Optional: Increase padding for a cleaner look */
    }

    td {
        text-align: center;
        padding: 10px; /* Optional: Increase padding for a cleaner look */
    }

    img {
        max-width: 100px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    a {
        text-decoration: none;
        color: #333;
        padding: 8px 12px;
        border-radius: 3px;
        transition: background-color 0.3s, color 0.3s;
    }

    a:hover {
        background-color: #4CAF50;
        color: white;
    }
</style>

<div>
    <table>
        <tr>
            <th>No.</th>
            <th>Item's Image</th>
            <th>Sender Name</th>
            <th>Receiver Name</th>
            <th>Receiver Email</th>
            <th>Action</th>
        </tr>

        <?php
        include('../dbconnection.php');

        $email = $_SESSION['emm'];

        $qryy = "SELECT * FROM `courier` WHERE `semail`='$email'";
        $run = mysqli_query($dbcon, $qryy);

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
                    <td><?php echo $data['remail']; ?></td>
                    <td>
                        <a href="updationtable.php?sid=<?php echo $data['c_id']; ?>">Edit</a> ||
                        <a href="deletecourier.php?bb=<?php echo $data['billno']; ?>">Delete</a> ||
                        <a href="status.php?sidd=<?php echo $data['c_id']; ?>">CheckStatus</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</div>
