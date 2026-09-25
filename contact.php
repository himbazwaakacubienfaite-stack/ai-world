<?php

$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$message = $_POST["message"] ?? "";

$data = "Name: " . $name . "\n";
$data .= "Email: " . $email . "\n";
$data .= "Message: " . $message . "\n";
$data .= "-------------------------\n";

file_put_contents("messages.txt", $data, FILE_APPEND);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Message Received | AI World</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <nav>

        <div class="logo"> AI World</div>

        <button class="menu-button" onclick="toggleMenu()">☰</button>

        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="generative-ai.html">Generative AI</a>
            <a href="types-ai.html">Types of AI</a>
            <a href="applications.html">Applications</a>
            <a href="benefits.html">Benefits & Challenges</a>
            <a href="about.html">About</a>
        </div>

    </nav>
</header>

<main>

    <section class="section success-section">

    <div class="success-card">

        <div class="success-icon">✓</div>

        <h1>Message Received! 🎉</h1>

        <p>
            Thank you, <?php echo htmlspecialchars($name); ?>.
        </p>

        <p>
            Your message has been received by the AI World website.
        </p>

        <a href="about.html" class="card-button">
            Back to Contact
        </a>

    </div>

    </section>

</main>

<footer>
    <p>© 2026 AI World | Himbazwa Akacu Bienfaite</p>
</footer>

</body>
</html>