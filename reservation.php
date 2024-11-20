<?php
// Database credentials
$servername = "localhost";
$username = "root";  // default username for MySQL in WAMP
$password = "";      // default password for MySQL in WAMP
$dbname = "reserve"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $reservation_date = $_POST['reservation_date'];
    $reservation_time = $_POST['reservation_time'];
    $message = $_POST['message'];
    $special_requests = $_POST['special_requests'];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO form (name, email, age, phone, gender, reservation_date, reservation_time, message, special_requests)
            VALUES ('$name', '$email', '$age', '$phone', '$gender', '$reservation_date', '$reservation_time', '$message', '$special_requests')";

    if ($conn->query($sql) === TRUE) {
        // Success: Redirect to homepage with pop-up message
        echo "<script>
                alert('Reservation successful!');
                window.location.href = 'index.html';  // Redirect to homepage
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
