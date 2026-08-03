<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Level | Stream Line Academy</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f7fc;
        }

        .header{
            background:#0B2D70;
            color:white;
            padding:20px;
            text-align:center;
        }

        .container{
            width:90%;
            max-width:900px;
            margin:40px auto;
        }

        .card{
            background:white;
            border-radius:10px;
            box-shadow:0 5px 15px rgba(0,0,0,.2);
            padding:30px;
        }

        .card h2{
            text-align:center;
            color:#0B2D70;
            margin-bottom:30px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table td{
            padding:15px;
            border-bottom:1px solid #ddd;
            vertical-align:top;
        }

        table td:first-child{
            width:35%;
            font-weight:bold;
            color:#0B2D70;
        }

        input,
        textarea,
        select{
            width:100%;
            padding:10px;
            border:1px solid #ccc;
            border-radius:5px;
            font-size:15px;
        }

        textarea{
            resize:vertical;
        }

        .buttons{
            margin-top:30px;
            text-align:center;
        }

        .btn{
            display:inline-block;
            text-decoration:none;
            padding:12px 25px;
            margin:10px;
            color:white;
            border:none;
            border-radius:6px;
            font-size:16px;
            cursor:pointer;
        }

        .save{
            background:#28a745;
        }
        .Download{
            background:#28a745;

        }

        .back{
            background:#dc3545;
        }

        .btn:hover{
            opacity:.9;
        }

    </style>

</head>
<body>

<div class="header">
    <h1>Stream Line Academy</h1>
    <p>Advanced Level Course Form</p>
</div>

<div class="container">

<div class="card">

<form action="save_course.php" method="POST">

<h2><i class="fa-solid fa-book-open"></i> Advanced Level</h2>

<table>

<tr>
<td>Course Name</td>
<td>
<input type="text" name="course_name" placeholder="Enter Course Name" required>
</td>
</tr>

<tr>
<td>Course Description</td>
<td>
<textarea name="course_description" rows="4" placeholder="Enter Course Description" required></textarea>
</td>
</tr>

<tr>
<td>Duration</td>
<td>
<input type="text" name="duration" placeholder="2 Months" required>
</td>
</tr>

<tr>
<td>Instructor Name</td>
<td>
<input type="text" name="instructor_name" placeholder="Enter Instructor Name" required>
</td>
</tr>

<tr>
<td>Class Timing</td>
<td>
<input type="text" name="class_timing" placeholder="4:00 PM - 6:00 PM" required>
</td>
</tr>

<tr>
<td>Course Fee</td>
<td>
<input type="number" name="course_fee" placeholder="8000" required>
</td>
</tr>

<tr>
<td>Start Date</td>
<td>
<input type="date" name="start_date" required>
</td>
</tr>

<tr>
<td> Chapter Number</td>
<td>
<input type="number" name="chapter_number" placeholder="32" required>
</td>
</tr>

<tr>
<td>Course Status</td>
<td>
<select name="course_status" required>
<option value="">Select Status</option>
<option value="Available">Available (Open)</option>
<option value="Closed">Closed</option>
<option value="Coming Soon">Coming Soon</option>
</select>
</td>
</tr>

</table>

<div class="buttons">

    <button type="submit" class="btn save">
        <i class="fa-solid fa-floppy-disk"></i>
        Save Course
    </button>

    <a href="Intermediate_Syllabus.pdf" class="btn Download" download>
        <i class="fa-solid fa-download"></i>
        Download Syllabus
    </a>

    <a href="dashboard.html" class="btn back">
        <i class="fa-solid fa-arrow-left"></i>
        Back
    </a>

</div>

</form>

</div>

</div>

</body>
</html>