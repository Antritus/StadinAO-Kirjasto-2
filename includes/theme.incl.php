<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once("config.php");

    if (isset($_POST['mode'])) {
        $darkMode = filter_var($_POST['mode'], FILTER_VALIDATE_BOOLEAN);
        $_SESSION['dark_mode'] = $darkMode;

        // TODO -> Save saved mode to account

        echo json_encode(['success' => true, 'dark_mode' => $darkMode]);
        exit;
    }

    // Respond with an error if mode is not provided
    echo json_encode(['success' => false, 'message' => 'Mode not set']);
    exit;
}
