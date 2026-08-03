<?php
$conn = mysqli_connect("localhost","root","","streamlineacademy");

if(!$conn){
    die("Database Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM courses";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Course Record</title>

<style>

body{
    margin:0;
    padding:20px;
    font-family:Arial, Helvetica, sans-serif;
    background:#f4f7fc;
}

h2{
    text-align:center;
    color:#0B2D70;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

table,th,td{
    border:1px solid #ddd;
}

th{
    background:#0B2D70;
    color:white;
    padding:12px;
}

td{
    padding:10px;
    text-align:center;
}

tr:nth-child(even){
    background:#f2f2f2;
}

</style>

</head>
<body>

<h2>Course Record</h2>

<table>

<tr>
    <th>ID</th>
    <th>Course Name</th>
    <th>Status</th>
    <th>Duration</th>
    <th>Class Timing</th>
    <th>Start Date</th>
    <th>Chapter Number</th>
    <th>Course Fee</th>
    <th>Instructor</th>
    <th>Course Description</th>
</tr>
<?php

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
?>

<tr>

    <td><?php echo $row['course_id']; ?></td>

    <td><?php echo $row['course_name']; ?></td>

    <td><?php echo $row['course_status']; ?></td>

    <td><?php echo $row['duration']; ?></td>

    <td><?php echo $row['class_timing']; ?></td>

    <td><?php echo $row['start_date']; ?></td>

    <td><?php echo $row['chapter_number']; ?></td>

    <td><?php echo $row['course_fee']; ?></td>

     <td><?php echo $row['instructor_name']; ?></td>

     <td><?php echo $row['Course_Description']; ?></td>

</tr>

<?php
    }
}
else
{
?>

<tr>
   <<td colspan="10">No Course Found</td>
</tr>

<?php
}
?>

</table>

</body>
</html>