<?php
session_start();

include_once('db_functions.php');
include_once('pw_functions.php');

// Ensure the user input is validated before querying the database
if (!isset($_POST['loginEmail'], $_POST['loginPassword'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

$userEmail = filter_var($_POST['loginEmail'], FILTER_SANITIZE_EMAIL);
$userPassword = $_POST['loginPassword'];

// Query the database for the password associated with the email
$selectData = new select('accountstb');
$result = $selectData->selectData('accountPassword, accountId', "WHERE accountEmail = '{$userEmail}'");

$passwordChecker = new passwordGeneration();
$userId = $result[0]['accountId'];
$correctPassword = $passwordChecker->decodePassword($userPassword, $result[0]['accountId']);

if (!$result || count($result) === 0) {
    echo json_encode(['success' => false, 'message' => 'User not found']);
    exit;
}

$db_password = $result[0]['accountPassword'];

// Clean up the output buffer and set the content type to JSON
ob_clean();
header('Content-Type: application/json');

// Dummy check for demonstration
if ($correctPassword) {
    $_SESSION["loggedIn"] = "yes";
    $_SESSION["currentAccount"] = $userId;
    echo json_encode(['success' => true, 'message' => 'Login successful']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid password']);
}

exit;