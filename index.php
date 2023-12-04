<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "care";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Validate the inputs (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($phone)) {
        echo "Please fill in all fields.";
    } else {
        // Connect to the website (replace 'http://example.com' with the actual website URL)
        $website_url = 'http://example.com';

        // Redirect to the website
        header("Location: $website_url");
        exit();
    }
}
?>

<h2>Contact Us</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email"><br><br>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone"><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
