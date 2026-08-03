<?php
include "database.php";

if(isset($_POST['save']))
{
    $student_id = $_POST['student_id'];
    $student_name = $_POST['student_name'];
    $surname = $_POST['surname'];
    $joining_date = $_POST['joining_date'];
    $dob = $_POST['dob'];
    $blood_group = $_POST['blood_group'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $guardian_name = $_POST['guardian_name'];
    $occupation = $_POST['occupation'];
    $cnic = $_POST['cnic'];
    $contact = $_POST['contact'];
    $mother_tongue = $_POST['mother_tongue'];
    $previous_institute = $_POST['previous_institute'];
    $address = $_POST['address'];
    $father_name = $_POST['father_name'];
    $father_occupation = $_POST['father_occupation'];
    $education = $_POST['education'];
    $signature = $_POST['signature'];

    // Upload Photo
    $photo = $_FILES['photo']['name'];
    $temp = $_FILES['photo']['tmp_name'];

    $folder = "uploads/";

    if(!file_exists($folder))
    {
        mkdir($folder);
    }

    move_uploaded_file($temp, $folder.$photo);

    $sql = "INSERT INTO students
    (
        student_id,
        student_name,
        surname,
        joining_date,
        dob,
        blood_group,
        nationality,
        gender,
        guardian_name,
        occupation,
        cnic,
        contact,
        mother_tongue,
        previous_institute,
        address,
        father_name,
        father_occupation,
        education,
        signature,
        photo
    )

    VALUES
    (
        '$student_id',
        '$student_name',
        '$surname',
        '$joining_date',
        '$dob',
        '$blood_group',
        '$nationality',
        '$gender',
        '$guardian_name',
        '$occupation',
        '$cnic',
        '$contact',
        '$mother_tongue',
        '$previous_institute',
        '$address',
        '$father_name',
        '$father_occupation',
        '$education',
        '$signature',
        '$photo'
    )";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Student Saved Successfully');
        window.location='view_students.php';
        </script>";
    }
    else
    {
        echo mysqli_error($conn);
    }
}
?>