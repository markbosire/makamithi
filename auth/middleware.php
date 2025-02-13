<?php
require __DIR__ . '/../config/env.php';
require __DIR__ . '/../db/db_connection.php';
function checkAuth() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if user is logged in
    if (!isset($_SESSION['user_id'])) {
        // Redirect to login page if not logged in
        header("Location: " . BASE_URL . "/auth/login.php");
        exit();
    }
}

function checkAdmin() {
    global $conn; // Assuming you have a database connection

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Check if user is logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: " . BASE_URL . "/auth/login.php");
        exit();
    }

    // Check if user is admin
    $user_id = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT role FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user['role'] !== 'admin') {
        // Redirect to a "not authorized" page or dashboard
        header("Location: " . BASE_URL . "auth/not_authorized.php");
        exit();
    }
}
?>