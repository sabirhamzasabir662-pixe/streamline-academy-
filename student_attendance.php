<?php
$conn = mysqli_connect("localhost","root","","streamlineacademy");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn,"SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Attendance</title>

<style>

body{
    font-family:Arial,sans-serif;
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

.date-box{
    margin-bottom:20px;
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

button{
    margin-top:20px;
    background:#0B2D70;
    color:white;
    padding:12px 25px;
    border:none;
    border-radius:5px;
    cursor:pointer;
    font-size:16px;
}

button:hover{
    background:#08306f;
}

</style>

</head>
<body>

<div class="container">

<h2>Student Attendance</h2>

<form action="save_student_attendance.php" method="POST">

<div class="date-box">
<label><b>Attendance Date:</b></label>

<input type="date"
name="attendance_date"
value="<?php echo date('Y-m-d'); ?>"
required>

</div>

<table>

<tr>

<th>Student ID</th>
<th>Student Name</th>
<th>Attendance</th>

</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td>

<?php echo $row['student_id']; ?>

</td>

<td>

<?php echo $row['student_name']." ".$row['surname']; ?>

</td>

<td>

<label>

<input
type="radio"
name="attendance[<?php echo $row['student_id'];?>]"
value="Present"
required>

Present

</label>

&nbsp;&nbsp;&nbsp;

<label>

<input
type="radio"
name="attendance[<?php echo $row['student_id'];?>]"
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