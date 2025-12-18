<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];

    $sql = "INSERT INTO students (name, email, course)
            VALUES ('$name', '$email', '$course')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration Successful <br>";
        echo "<a href='index.html'>Go Back</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
