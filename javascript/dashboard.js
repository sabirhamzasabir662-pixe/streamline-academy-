// ================================
// Stream Line Academy Dashboard JS
// ================================

// Highlight Sidebar Menu
const menuItems = document.querySelectorAll(".sidebar > ul > li");

menuItems.forEach(item => {
    item.addEventListener("click", function () {
        menuItems.forEach(i => i.classList.remove("active"));
        this.classList.add("active");
    });
});

// Search Box
const search = document.querySelector(".search input");

if (search) {
    search.addEventListener("keyup", function () {
        console.log("Searching:", this.value);
    });
}

// Notification
const bell = document.querySelector(".fa-bell");

if (bell) {
    bell.addEventListener("click", function () {
        alert("No new notifications.");
    });
}

// Messages
const message = document.querySelector(".fa-envelope");

if (message) {
    message.addEventListener("click", function () {
        alert("No new messages.");
    });
}

// Logout
const logout = document.querySelector(".logout");

if (logout) {
    logout.addEventListener("click", function () {

        if (confirm("Are you sure you want to logout?")) {
            window.location.href = "index.html";
        }

    });
}

// Card Animation
const cards = document.querySelectorAll(".card");

cards.forEach(card => {

    card.addEventListener("mouseenter", function () {
        this.style.transform = "translateY(-8px)";
    });

    card.addEventListener("mouseleave", function () {
        this.style.transform = "translateY(0)";
    });

});

// Welcome Message
window.onload = function () {

    const hour = new Date().getHours();

    let greeting = "";

    if (hour < 12) {
        greeting = "Good Morning ☀️";
    } else if (hour < 18) {
        greeting = "Good Afternoon 🌤️";
    } else {
        greeting = "Good Evening 🌙";
    }

    console.log(greeting);
};

// ================================
// Students Dropdown
// ================================

function toggleStudents() {

    event.stopPropagation();

    const menu = document.getElementById("studentMenu");
    const arrow = document.getElementById("studentArrow");

    menu.classList.toggle("show");
    arrow.classList.toggle("rotate");
}
// =======================================
// Teacher Dropsown
//========================================
function toggleTeachers() {

    event.stopPropagation();

    const menu = document.getElementById("teacherMenu");
    const arrow = document.getElementById("teacherArrow");

    menu.classList.toggle("show");
    arrow.classList.toggle("rotate");
}
//Course Dropsown//
function toggleCourses() {

    document.getElementById("courseMenu").classList.toggle("show");

    document.getElementById("courseArrow").classList.toggle("rotate");

}

// ================================
// Attendance Dropdown
// ================================

function toggleAttendance() {

    event.stopPropagation();

    const menu = document.getElementById("attendanceMenu");
    const arrow = document.getElementById("attendanceArrow");

    menu.classList.toggle("show");
    arrow.classList.toggle("rotate");

}
function toggleFee() {
    document.getElementById("feeMenu").classList.toggle("show");
}