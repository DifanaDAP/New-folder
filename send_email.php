<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email tujuan
    $to = "ddtfzn@gmail.com"; // Ganti dengan email Anda

    // Subjek email
    $emailSubject = "New Contact Form Submission: $subject";

    // Isi email
    $emailBody = "
        Name: $fullName\n
        Email: $email\n
        Mobile: $mobile\n
        Message:\n$message
    ";

    // Header email
    $headers = "From: $email";

    // Kirim email
    if (mail($to, $emailSubject, $emailBody, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request";
}
?>
