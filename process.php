<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $phone = htmlspecialchars($_POST['phone']);

    echo "<style>
            body { font-family: Arial, sans-serif; background-color: #f9f9f9; text-align: center; padding: 20px; }
            .result { background: #fff; padding: 20px; border-radius: 8px; display: inline-block; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
            a { display: inline-block; margin-top: 15px; text-decoration: none; color: #4CAF50; }
          </style>";

    echo "<div class='result'>";
    echo "<h2>Thank You for Submitting!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>City:</strong> $city</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<a href='index.html'>Go Back</a>";
    echo "</div>";
}
?>