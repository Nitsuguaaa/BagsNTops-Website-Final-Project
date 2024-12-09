<?php
session_start();
require('./db_functions.php');
require('./pw_functions.php');

header('Content-Type: application/json'); // Ensure the response is JSON
ob_clean(); // Clean any previous output

if (!isset($_POST['userEmail'], $_POST['userPassword'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

$userEmail = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);
$userPassword = $_POST['userPassword'];

try {
    $userEmail = mysqli_real_escape_string($dbConnection, $userEmail);
    $selectData = new select('accountstb');
    $result_array = $selectData->selectData('accountPassword', "WHERE accountEmail = '$userEmail'");

    if (!$result_array || count($result_array) === 0) {
        echo json_encode(['success' => false, 'message' => 'User not found']);
        exit;
    }

    $db_password = $result_array[0]['accountPassword'];

    if ($userPassword === $db_password) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid password']);
    }
} catch (Exception $e) {
    error_log('Error: ' . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Server error']);
}