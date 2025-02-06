<?php
session_start();

// Include database connection
require_once("../db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data and sanitize inputs
    $jobtitle = trim(mysqli_real_escape_string($conn, $_POST['jobtitle']));
    $joblink = trim(mysqli_real_escape_string($conn, $_POST['joblink']));

    // Validate fields (optional but recommended)
    if (empty($jobtitle) || empty($joblink)) {
        $_SESSION['error'] = "All fields are required!";
        header("Location: create-job-post.php");
        exit();
    }

    // Insert job post into the database (without id_company)
    $sql = "INSERT INTO jobs (job_title, job_link) VALUES ('$jobtitle', '$joblink')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Job post created successfully!";
    } else {
        $_SESSION['error'] = "Error: " . $conn->error;
    }

    // Redirect back to job post page
    header("Location: my-job-post.php");
    exit();
} else {
    // Redirect if accessed directly
    header("Location: create-job-post.php");
    exit();
}
?>
