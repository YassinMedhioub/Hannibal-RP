<?php
header('Content-Type: application/json');

$conn = mysqli_connect('localhost', 'root', '', 'hb_rp');
if (!$conn) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit;
}

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';


if ($name && $email && $subject && $message) {
    $sql = "INSERT INTO player_info(player_name,player_email,player_subject,player_message) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $subject, $message);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => "Your message can't be sent. Please contact us on Discord."]);
    }

    mysqli_stmt_close($stmt);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Please fill in all fields']);
}

mysqli_close($conn);
