<?PHP
$user_name = "root";
$password = "Muaxuan179";
$database = "php-todo";
$host_name = "localhost";
// Create connection
$conn = new mysqli($host_name, $user_name, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get all table names
$query = "SHOW TABLES";
$result = $conn->query($query);

// Fetch table names
if ($result->num_rows > 0) {
    while($row = $result->fetch_row()) {
        echo "Table: " . $row[0] . "<br>";
    }
} else {
    echo "0 tables found";
}

// Close connection
$conn->close();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo Apps</title>
</head>
<body>
    minh dep trai
</body>
</html>
