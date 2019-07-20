<?php
include "connection.php";
?>

<html>

<head>
    <title>No. 7 - Dumbways test</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <style>
        .page {
            margin-top: 20px;
            padding: 24px;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        .mt-30 {
            margin-top: 30px;
        }

        select {
            max-width: 250px;
        }
    </style>
</head>

<body>
    <div class="page">
        <div class="container">
            <table class="tabel table-bordered table-">
                <tr>
                    <td>ID</td>
                    <td>Full Name</td>
                    <td>City</td>
                    <td>Phone Number</td>
                    <td>Address</td>
                    <td>Last Education</td>
                    <td>Religion</td>
                    <td>Hobby</td>
                    <td>#</td>
                </tr>
                <?php while ($row = $data->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['full_name']; ?>
                        </td>
                        <td>
                            <?php echo $row['city']; ?>
                        </td>
                        <td>
                            <?php echo $row['phone_number']; ?>
                        </td>
                        <td>
                            <?php echo $row['address']; ?>
                        </td>
                        <td>
                            <?php echo $row['last_education']; ?>
                        </td>
                        <td>
                            <?php echo $row['religion']; ?>
                        </td>
                        <td>
                            <?php echo $row['hobby']; ?>
                        </td>
                        <td>
                            <a href="form.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">UPDATE</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>