<?php
$conn = mysqli_connect("localhost","root","","streamlineacademy");

$result = mysqli_query($conn,"SELECT * FROM fees");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Fee Record</title>

<style>

body{
    font-family:Arial;
    background:#f4f6f9;
    margin:0;
    padding:20px;
}

.container{
    width:95%;
    margin:auto;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,.2);
}

h2{
    text-align:center;
    color:#0B2D70;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

table th{
    background:#0B2D70;
    color:white;
    padding:12px;
}

table td{
    border:1px solid #ddd;
    padding:10px;
    text-align:center;
}

tr:nth-child(even){
    background:#f2f2f2;
}

</style>

</head>

<body>

<div class="container">

<h2>Student Fee Records</h2>

<table>

<tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Student Name</th>
    <th>Course</th>
    <th>Fee Month</th>
    <th>Amount</th>
    <th>Payment Date</th>
    <th>Status</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['student_id']; ?></td>
<td><?php echo $row['student_name']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><?php echo $row['fee_month']; ?></td>
<td><?php echo $row['amount']; ?></td>
<td><?php echo $row['payment_date']; ?></td>
<td><?php echo $row['status']; ?></td>

</tr>

<?php
}
?>

</table>

</div>

</body>
</html>