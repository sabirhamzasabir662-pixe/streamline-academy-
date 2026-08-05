<?php

$conn = mysqli_connect("localhost", "root", "", "streamlineacademy");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {

    $id = intval($_GET['id']);

    $sql = "DELETE FROM students WHERE id = $id";

    if (mysqli_query($conn, $sql)) {

        echo "<script>
                alert('Student Deleted Successfully!');
               window.location.href='student.php';
              </script>";

    } else {

        echo "Error deleting student: " . mysqli_error($conn);

    }

} else {

    echo "Student ID is missing.";

}

mysqli_close($conn);
?>