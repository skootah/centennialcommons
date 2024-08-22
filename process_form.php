<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptcha_secret = 'your_secret_key';
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Verify the CAPTCHA response
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        // CAPTCHA validation failed
        echo 'Please complete the CAPTCHA';
    } else {
        // CAPTCHA validated successfully
        // Process the form data
    }
}
?>
