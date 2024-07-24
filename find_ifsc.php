<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "ifsc_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$bank_name = $_POST['bank_name'];
$branch_name = $_POST['branch_name'];

$sql = "SELECT ifsc_code FROM bank_details WHERE bank_name = ? AND branch_name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $bank_name, $branch_name);
$stmt->execute();
$stmt->bind_result($ifsc_code);
$stmt->fetch();
$stmt->close();

if ($ifsc_code) {
    echo "<h2>IFSC Code: $ifsc_code</h2>";
} else {
    echo "<h2>No IFSC code found for the specified bank and branch.</h2>";
}

$conn->close();
?>
