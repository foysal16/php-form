<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['full_name'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $businessName = $_POST['business_name'];
    $numRooms = $_POST['total_rooms'];

    // Compose the email message
    $to = 'foysalahammed07@gmail.com'; // Replace with your email address
    $subject = 'New Demo Request';
    $message = "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Business/Hotel Name: $businessName\n";
    $message .= "Total Rooms: $numRooms\n";

    // Send email using mail() function
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your request has been submitted successfully.";
    } else {
        echo "Oops! Something went wrong and we couldn't process your request.";
    }
} else {
    // Handle invalid request method (e.g., GET request)
    echo "Invalid request method.";
}
?>
