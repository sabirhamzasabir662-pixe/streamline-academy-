<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Salary</title>

    <link rel="stylesheet" href="css/Teacher.css">

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            margin:0;
            padding:20px;
        }

        .container{
            width:90%;
            margin:auto;
            background:#fff;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h2{
            text-align:center;
            color:black;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table th, table td{
            border:1px solid #ddd;
            padding:10px;
            text-align:center;
        }

        table th{
            background:#0B2D70;
            color:white;
        }
    </style>
</head>
<body>

<div class="container">

<h2>Teacher Salary Records</h2>

<table>

<tr>
    <th>Teacher ID</th>
    <th>Name</th>
    <th>Department</th>
    <th>Salary</th>
</tr>

<?php

$conn = mysqli_connect("localhost","root","","streamlineacademy");

$result = mysqli_query($conn,"SELECT teacher_id, first_name, last_name, department, salary FROM teachers");

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['teacher_id']; ?></td>

<td><?php echo $row['first_name']." ".$row['last_name']; ?></td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['salary']; ?></td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>