
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Student Fee</title>

<style>

body{
    font-family:Arial;
    background:#f4f6f9;
    margin:0;
}

.container{
    width:700px;
    margin:40px auto;
    background:#fff;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 15px rgba(0,0,0,.2);
}

h2{
    text-align:center;
    color:#0B2D70;
    margin-bottom:20px;
}

label{
    display:block;
    margin-top:15px;
    font-weight:bold;
}

input,select{
    width:100%;
    padding:12px;
    margin-top:5px;
    border:1px solid #ccc;
    border-radius:6px;
    box-sizing:border-box;
}

button{
    margin-top:25px;
    width:100%;
    padding:14px;
    border:none;
    background:#0B2D70;
    color:white;
    font-size:18px;
    border-radius:6px;
    cursor:pointer;
}

button:hover{
    background:#17439b;
}

</style>

</head>
<body>

<div class="container">

<h2>Student Fee Form</h2>

<form method="POST">

<label>Student ID</label>
<input type="text" name="student_id" required>

<label>Student Name</label>
<input type="text" name="student_name" required>

<label>Course</label>
<input type="text" name="course" required>

<label>Fee Month</label>
<input type="month" name="fee_month" required>

<label>Fee Amount</label>
<input type="number" name="amount" required>

<label>Payment Date</label>
<input type="date" name="payment_date" required>

<label>Status</label>

<select name="status">
<option>Paid</option>
<option>Unpaid</option>
</select>

<button type="submit" name="save_fee">
Save Fee
</button>

</form>

</div>

</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "streamlineacademy");

if(isset($_POST['save_fee']))
{
    $student_id = $_POST['student_id'];
    $student_name = $_POST['student_name'];
    $course = $_POST['course'];
    $fee_month = $_POST['fee_month'];
    $amount = $_POST['amount'];
    $payment_date = $_POST['payment_date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO fees
    (student_id, student_name, course, fee_month, amount, payment_date, status)
    VALUES
    ('$student_id','$student_name','$course','$fee_month','$amount','$payment_date','$status')";

    mysqli_query($conn,$sql);

    echo "<script>alert('Fee Added Successfully');</script>";
}
?>