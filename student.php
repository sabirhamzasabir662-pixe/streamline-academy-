<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Admission Form</title>

<link rel="stylesheet" href="css/student.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>

<div class="container">

    <div class="header">

        <div class="logo">
            <i class="fa-solid fa-graduation-cap"></i>
            <div>
                <h1>Stream Line Academy</h1>
                <p>Student Admission Form</p>
            </div>
        </div>

    </div>

<form action="save_student.php" method="POST" enctype="multipart/form-data">

<div class="top">

<div class="left">

<div class="input-box">
<label>Joining Date</label>
<input type="date" name="joining_date" required>
</div>

<div class="input-box">
<label>Student ID</label>
<input type="text" name="student_id" placeholder="Enter Student ID" required>
</div>

</div>

<div class="photo">

<label>Student Photo</label>

<div class="photo-box">
<input type="file" name="photo" required>
</div>

</div>

</div>

<div class="row">

<div class="input-box">
<label>Student Name</label>
<input type="text" name="student_name" required>
</div>

<div class="input-box">
<label>Surname</label>
<input type="text" name="surname">
</div>

</div>

<div class="row">

<div class="input-box">
<label>Date of Birth</label>
<input type="date" name="dob">
</div>

<div class="input-box">
<label>Blood Group</label>

<select name="blood_group">

<option value="">Select</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>
<option>O+</option>
<option>O-</option>

</select>

</div>

</div>

<div class="row">

<div class="input-box">
<label>Nationality</label>
<input type="text" name="nationality">
</div>

<div class="input-box">
<label>Gender</label>

<select name="gender">
<option value="">Select</option>
<option>Male</option>
<option>Female</option>
</select>

</div>

</div>

<div class="row">

<div class="input-box">
<label>Guardian Name</label>
<input type="text" name="guardian_name">
</div>

<div class="input-box">
<label>Occupation</label>
<input type="text" name="occupation">
</div>

</div>

<div class="row">

<div class="input-box">
<label>CNIC</label>
<input type="text" name="cnic">
</div>

<div class="input-box">
<label>Contact Number</label>
<input type="text" name="contact">
</div>

</div>

<div class="row">

<div class="input-box">
<label>Mother Tongue</label>
<input type="text" name="mother_tongue">
</div>

<div class="input-box">
<label>Previous Institute</label>
<input type="text" name="previous_institute">
</div>

</div>

<div class="input-box full">

<label>Address</label>

<textarea name="address" rows="4"></textarea>

</div>

<h2 class="section-title">Parents Details</h2>

<div class="row">

<div class="input-box">
<label>Father Name</label>
<input type="text" name="father_name">
</div>

<div class="input-box">
<label>Occupation</label>
<input type="text" name="father_occupation">
</div>

</div>

<div class="row">

<div class="input-box">
<label>Education</label>
<input type="text" name="education">
</div>

<div class="input-box">
<label>Signature</label>
<input type="text" name="signature">
</div>

</div>

<div class="declaration">

<p>

I declare that the above information is true to the best of my knowledge.

</p>

</div>

<div class="buttons">

<button type="submit" name="save">

<i class="fa-solid fa-floppy-disk"></i>

Save Student

</button>

<button type="reset">

<i class="fa-solid fa-rotate-left"></i>

Clear

</button>

</div>

</form>

</div>

<!-- JavaScript -->
<script src="javascript/student.js"></script>

</body>
</html>