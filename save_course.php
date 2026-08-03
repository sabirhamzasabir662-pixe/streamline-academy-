<?php

// Database Connection
$conn = mysqli_connect("localhost", "root", "", "streamlineacademy");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Get Form Data
$course_name = $_POST['course_name'];
$duration = $_POST['duration'];
$course_fee = $_POST['course_fee'];
$instructor_name = $_POST['instructor_name'];
$start_date = $_POST['start_date'];
$class_timing = $_POST['class_timing'];
$chapter_number = $_POST['chapter_number'];
$course_status = $_POST['course_status'];
$course_description = $_POST['course_Description'];

// Insert Data
$sql = "INSERT INTO courses
(course_name, duration, course_fee, instructor_name, start_date, class_timing, chapter_number, course_status, Course_Description)
VALUES
('$course_name','$duration','$course_fee','$instructor_name','$start_date','$class_timing','$chapter_number','$course_status','$course_description')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Course Saved Successfully!');
        window.location='course_record.php';
    </script>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>