<?php
$conn = mysqli_connect("localhost","root","","streamlineacademy");

$result = mysqli_query($conn,"SELECT * FROM teachers");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Teacher Attendance</title>

<style>
body{
    font-family:Arial, sans-serif;
    background:#f4f6f9;
    margin:0;
    padding:20px;
}

.container{
    width:90%;
    margin:auto;
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

table th,
table td{
    border:1px solid #ddd;
    padding:12px;
    text-align:center;
}

table th{
    background:#0B2D70;
    color:white;
}

input[type=checkbox]{
    width:22px;
    height:22px;
    cursor:pointer;
}

button{
    margin-top:20px;
    background:#0B2D70;
    color:white;
    padding:12px 25px;
    border:none;
    cursor:pointer;
    border-radius:5px;
    font-size:16px;
}

button:hover{
    background:#08306f;
}
</style>

</head>
<body>

<div class="container">

<h2>Teacher Attendance</h2>

<form action="save_teacher_attendance.php" method="POST">

<table>

<tr>
<th>ID</th>
<th>Teacher Name</th>
<th>Attendance</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>

<td><?php echo $row['teacher_id']; ?></td>

<td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
<td>

<label>
<input type="radio"
name="attendance[<?php echo $row['id']; ?>]"
value="Present" required>
Present</label>

&nbsp;&nbsp;

<label>
<input type="radio"
name="attendance[<?php echo $row['id']; ?>]"
value="Absent">
Absent
</label>

</td>

</tr>

<?php
}
?>

</table>

<button type="submit">
Save Attendance
</button>

</form>

</div>

</body>
</html>