<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Teacher</title>

    <link rel="stylesheet" href="css/teacher.css">
</head>
<body>

<div class="container">

    <h2>Add New Teacher</h2>

    <form action="save_teacher.php" method="POST" enctype="multipart/form-data">

        <div class="row">
            <label>Teacher ID</label>
            <input type="text" name="teacher_id" placeholder="Teacher ID" required>
        </div>

        <div class="row">
            <label>Profile Photo</label>
            <input type="file" name="photo" accept="image/*">
        </div>

        <div class="row">
            <label>First Name</label>
            <input type="text" name="first_name" placeholder="First Name" required>
        </div>

        <div class="row">
            <label>Last Name</label>
            <input type="text" name="last_name" placeholder="Last Name" required>
        </div>

        <div class="row">
            <label>Gender</label>

            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="Male" required> Male
                </label>

                <label>
                    <input type="radio" name="gender" value="Female"> Female
                </label>
            </div>
        </div>

        <div class="row">
            <label>Date of Birth</label>
            <input type="date" name="dob" required>
        </div>

        <div class="row">
            <label>Phone Number</label>
            <input type="tel" name="phone" placeholder="Phone Number" required>
        </div>

        <div class="row">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="row">
            <label>Address</label>
            <textarea name="address" rows="3" placeholder="Address"></textarea>
        </div>

        <div class="row">
            <label>Joining Date</label>
            <input type="date" name="joining_date" required>
        </div>

        <div class="row">
            <label>Department</label>

            <select name="department" required>
                <option value="">Select Department</option>
                <option>Science</option>
                <option>Computer Science</option>
                <option>Mathematics</option>
                <option>English</option>
                <option>Physics</option>
                <option>Chemistry</option>
            </select>
        </div>

        <div class="row">
            <label>Subject</label>

            <select name="subject" required>
                <option value="">Select Subject</option>
                <option>Mathematics</option>
                <option>Physics</option>
                <option>Chemistry</option>
                <option>English</option>
                <option>Computer Science</option>
            </select>
        </div>

        <div class="row">
            <label>Qualification</label>
            <input type="text" name="qualification" placeholder="Qualification" required>
        </div>

        <div class="row">
            <label>Experience</label>
            <input type="text" name="experience" placeholder="Experience (e.g. 5 Years)">
        </div>

        <div class="row">
            <label>Salary</label>
            <input type="number" name="salary" placeholder="Salary" required>
        </div>

        <div class="row">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username" required>
        </div>

        <div class="row">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <div class="row">
            <label>Status</label>

            <div class="radio">
                <label>
                    <input type="radio" name="status" value="Active" checked> Active
                </label>

                <label>
                    <input type="radio" name="status" value="Inactive"> Inactive
                </label>
            </div>
        </div>

        <div class="buttons">
            <button type="submit">Save Teacher</button>
            <button type="reset">Reset</button>
        </div>

    </form>

</div>

</body>
</html>