<?php

// Connect the DB
$servername = "localhost";
$username = "root";
$password = "";
$DBname = "motion";

$conn = mysqli_connect($servername,$username,$password,$DBname);


$sql = "SELECT direction FROM movements ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the last value
    $row = $result->fetch_assoc();
    $last_value = $row['direction'];
} else {
    $last_value = "No records found";
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Last Value</title>
</head>
<body>
<?php echo $last_value; ?>
</body>
</html>
