<?php
// Start session
session_start();

// Regenerate session ID to prevent session fixation
if (!isset($_SESSION['user_id'])) {
    session_regenerate_id(true);
}

// Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
    // Log unauthorized access attempt
    error_log("Unauthorized access attempt on " . date("Y-m-d H:i:s"));
    header("location: index.php");
    exit();
}

$session_id = $_SESSION['user_id'];
?>
