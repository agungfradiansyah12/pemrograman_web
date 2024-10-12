<?php
// $input = $_POST['input'];
// $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

// $email = $_POST['email'];
// if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     echo "Email: $email";

// } else {
//     echo "Email tidak valid";
// }

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $email = $_POST["email"];
    // $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    echo "Nama: $input";
    echo "<br>";

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email: $email";
    } else {
        echo "Email tidak valid";
    }

    
}
?>

