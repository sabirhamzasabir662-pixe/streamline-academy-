<?php
$conn = mysqli_connect("localhost","root","","streamlineacademy");

if(isset($_POST['save_fee']))
{
    $student_id = $_POST['student_id'];
    $student_name = $_POST['student_name'];
    $course = $_POST['course_name'];
    $fee_month = $_POST['fee_month'];
    $amount = $_POST['amount'];
    $payment_date = $_POST['payment_date'];
    $status = "Paid";
    $payment_method = $_POST['payment_method'];
    $remarks = $_POST['remarks'];

   $sql = "INSERT INTO fees
(student_id, student_name, course, fee_month, amount, payment_date, status)
VALUES
('$student_id', '$student_name', '$course', '$fee_month', '$amount', '$payment_date', '$status')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
                alert('Fee Added Successfully!');
                window.location='fee_record.php';
              </script>";
    }
    else
    {
        echo "Error : ".mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Fee</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Poppins,Arial,sans-serif;
}

body{
    background:#f4f6f9;
}

.container{
    width:700px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,.15);
}

h2{
    text-align:center;
    color:#0B2D70;
    margin-bottom:25px;
}

.form-group{
    margin-bottom:15px;
}

label{
    display:block;
    font-weight:bold;
    margin-bottom:5px;
}

input,select,textarea{

    width:100%;
    padding:10px;
    border:1px solid #ccc;
    border-radius:6px;
    outline:none;
}

textarea{
    resize:none;
}

button{

    width:100%;
    padding:12px;
    border:none;
    background:#0B2D70;
    color:white;
    font-size:17px;
    border-radius:6px;
    cursor:pointer;
}

button:hover{
    background:#1749b3;
}

</style>

</head>

<body>

<div class="container">

<h2>Add Student Fee</h2>

<form method="POST">

<div class="form-group">
<label>Student ID</label>
<input type="text" name="student_id" required>
</div>

<div class="form-group">
<label>Student Name</label>
<input type="text" name="student_name" required>
</div>

<div class="form-group">
<label>Course</label>
<input type="text" name="course_name" required>
</div>

<div class="form-group">
<label>Fee Month</label>
<input type="month" name="fee_month" required>
</div>

<div class="form-group">
<label>Fee Amount</label>
<input type="number" name="amount" required>
</div>

<div class="form-group">
<label>Payment Date</label>
<input type="date" name="payment_date" required>
</div>

<div class="form-group">
<label>Payment Method</label>

<select name="payment_method">

<option>Cash</option>
<option>Bank</option>
<option>EasyPaisa</option>
<option>JazzCash</option>

</select>

</div>

<div class="form-group">

<label>Remarks</label>

<textarea name="remarks"></textarea>

</div>

<button type="submit" name="save_fee">
Save Fee
</button>

</form>

</div>

</body>
</html>