<?php
// Define the allowed User-Agent string
$allowedUserAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36";

// Get the User-Agent header from the request
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Check if the User-Agent matches the allowed User-Agent
if ($userAgent === $allowedUserAgent) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chakrview Council</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('ckcounsil.webp'); /* Path to your themed background image */
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
	.download-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .download-btn:hover {
            background-color: #0056b3;
        }
        /* Additional styling as needed */
    </style>
</head>
<body>
    <div class="success-container">
        <h1>Welcome to the Chakrview Council</h1>
        <p>Namaste, Seeker of the Chakrview. You have chanced upon the concealed path that leads to profound revelations 
within our mystical realm.Only those who possess the insight of the ancient sages may discern the secrets veiled beyond. 
Prepare yourself to embark on a journey where enlightenment awaits those who tread with reverence and determination.</p>
        <p class="flag"> CTCFlag{root_chakra_muladhara} </p>
        <a href="secret.zip" class="download-btn" download>Lets go</a>
	<!-- needed key: /key1.txt-->
    </div>
</body>
</html>
<?php
} else {
    // Redirect to a custom 403 Forbidden page
    header("HTTP/1.1 403 Forbidden");
    include("custom_403.php");
    exit;
}
?>
