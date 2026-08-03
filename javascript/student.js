// ================================
// Stream Line Academy
// Student Admission Form
// ================================

// Auto Generate Student ID
window.onload = function () {

    const idField = document.getElementById("studentId");

    if(idField){

        const randomId = "STD" + Math.floor(1000 + Math.random() * 9000);

        idField.value = randomId;

    }

};

// Photo Preview
const photo = document.getElementById("photo");

const preview = document.getElementById("preview");

if(photo){

    photo.addEventListener("change", function(){

        const file = this.files[0];

        if(file){

            preview.src = URL.createObjectURL(file);

        }

    });

}

// Save Button
function saveStudent(){

    alert("Student Saved Successfully!");

}

// Update Button
function updateStudent(){

    alert("Student Updated Successfully!");

}

// Delete Button
function deleteStudent(){

    let check = confirm("Delete this student?");

    if(check){

        alert("Student Deleted.");

    }

}

// Reset Form
function resetForm(){

    document.getElementById("studentForm").reset();

}

// Print Form
function printForm(){

    window.print();

}

// Back Dashboard
function backDashboard(){

    window.location.href="dashboard.html";

}