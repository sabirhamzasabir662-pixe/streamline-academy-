<?php
$conn = mysqli_connect("localhost","root","","streamlineacademy");

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM teachers WHERE id='$id'";

    if(mysqli_query($conn, $sql))
    {
        header("Location: teacher_record.php");
        exit();
    }
    else
    {
        echo "Delete Failed!";
    }
}
?>