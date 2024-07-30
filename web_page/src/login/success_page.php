<?php
session_start(); // Start the session

// Check if the session variable is set
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Redirect to login page if not authenticated
    header("Location: login.php");
    exit;
}

// Unset the session variable to prevent re-access without logging in again
unset($_SESSION['authenticated']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chakrview Success</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('success.webp'); /* Path to your themed background image */
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .success-container {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            width: 700px;
        }
        h1 {
            color: #FFD700; /* Gold color */
            text-shadow: 2px 2px #000;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            margin-top: 20px;
        }
        .flag {
            margin-top: 20px;
            font-size: 1.5em;
            color: #4169e1;
        }
        .home-link {
            display: block;
            margin-top: 20px;
            font-size: 1.2em;
            color: #FFD700;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <h1>Welcome, Noble Seeker!</h1>
        <p>Congratulations, O Knowledge Seeker! By mastering the art of SQL injection, you have unlocked the gateway to the Chakrview's inner sanctum. Here, amidst the echoes of ancient wisdom, your journey towards the Amrit continues. Gather your insights and proceed with vigilance, for greater challenges await on the path to ultimate enlightenment.</p>
        <div class="flag">CTCFlag{sacral_chakra_svadhisthana}</div>
	<!-- <a href="./usernames.txt" download="usernames.txt" class="home-link">Arjun</a> -->
     </div>
</body>
</html>
