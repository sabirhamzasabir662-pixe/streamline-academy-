<?php
$conn = mysqli_connect("localhost", "root", "", "streamlineacademy");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM teachers");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher Records</title>
    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
            padding:20px;
        }
        table{
            width:100%;
            border-collapse:collapse;
            background:#fff;
        }
        th,td{
            border:1px solid #ccc;
            padding:10px;
            text-align:center;
        }
        th{
            background:#0B2D70;
            color:white;
        }
    </style>
</head>
<body>

<h2>Teacher Records</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Department</th>
        <th>Subject</th>
        <th>Status</th>
         <th>Action</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)){ ?>

    <tr>
        <td><?php echo $row['teacher_id']; ?></td>
        <td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['department']; ?></td>
        <td><?php echo $row['subject']; ?></td>
        <td><?php echo $row['status']; ?></td>
    </tr>


    <td>
    <a href="delete_teacher.php?id=<?php echo $row['id']; ?>"
       onclick="return confirm('Are you sure you want to delete this teacher?');">
       Delete
    </a>
</td>

    <?php } ?>

</table>

</body>
</html>