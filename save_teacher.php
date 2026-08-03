<?php

$conn = mysqli_connect("localhost","root","","streamlineacademy");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$teacher_id = $_POST['teacher_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$joining_date = $_POST['joining_date'];
$department = $_POST['department'];
$subject = $_POST['subject'];
$qualification = $_POST['qualification'];
$experience = $_POST['experience'];
$salary = $_POST['salary'];
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];

$sql = "INSERT INTO teachers
(teacher_id, first_name, last_name, gender, dob, phone, email, address, joining_date, department, subject, qualification, experience, salary, username, password, status)

VALUES
('$teacher_id','$first_name','$last_name','$gender','$dob','$phone','$email','$address','$joining_date','$department','$subject','$qualification','$experience','$salary','$username','$password','$status')";

if(mysqli_query($conn,$sql)){
    echo "Teacher Saved Successfully";
}else{
    echo "Error: " . mysqli_error($conn);
}

?>