<?php
// process_form.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $regIdNumber = $_POST["reg-id-number"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $dniNiePassportNumber = $_POST["dni-nie-passport-number"];
    $termsAndConditions = isset($_POST["terms-and-conditions"]) ? $_POST["terms-and-conditions"] : "No";
    $linkValidDuration = $_POST["link-valid-duration"];

    // Perform any necessary validation or processing here

    // For demonstration purposes, you can echo the received data
    echo "Reg/ID Number: $regIdNumber<br>";
    echo "Name: $name<br>";
    echo "Surname: $surname<br>";
    echo "DNI/NIE/Passport Number: $dniNiePassportNumber<br>";
    echo "Agree to Terms and Conditions: $termsAndConditions<br>";
    echo "Link Valid Duration: $linkValidDuration hours<br>";
} else {
    // Handle invalid requests
    echo "Invalid request";
}
?>
