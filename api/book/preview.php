<?php
global $conn;

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    $_id = filter_input(INPUT_POST, "book_id", FILTER_SANITIZE_NUMBER_INT)
        ?? filter_input(INPUT_GET, "book_id", FILTER_SANITIZE_NUMBER_INT);

    if (!$_id) {
        $_id = "preview";
    }

    require_once "../database_config.php";

    $stmt = $conn->prepare("SELECT * FROM books WHERE book_id = ?");
    $stmt->bind_param("i", $_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $img = $row['preview'] ?? "preview";
    } else {
        $img = "preview";
    }

    header("Content-Type: image/jpeg");
    readfile("../../bapi/book/$img.jpg");
    exit;
}
