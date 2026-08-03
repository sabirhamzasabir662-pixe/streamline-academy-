<?php
include("database.php");

$result = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>

    <style>
        body{
            font-family:Arial,sans-serif;
            background:#f4f4f4;
            padding:20px;
        }

        h2{
            text-align:center;
            color:#0B2D70;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:#fff;
        }

        th,td{
            border:1px solid #ddd;
            padding:10px;
            text-align:center;
        }

        th{
            background:#0B2D70;
            color:#fff;
        }

        tr:nth-child(even){
            background:#f2f2f2;
        }

        img{
            width:60px;
            height:60px;
            border-radius:5px;
        }
    </style>

</head>
<body>

<h2>Student Records</h2>

<table>

<tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Joining Date</th>
    <th>Contact</th>
    <th>Photo</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['student_id']; ?></td>

<td><?php echo $row['student_name']; ?></td>

<td><?php echo $row['surname']; ?></td>

<td><?php echo $row['joining_date']; ?></td>

<td><?php echo $row['contact']; ?></td>

<td>
<?php
if(!empty($row['photo'])){
?>
<img src="uploads/<?php echo $row['photo']; ?>">
<?php
}else{
echo "No Photo";
}
?>
</td>

</tr>

<?php } ?>

</table>

</body>
</html>