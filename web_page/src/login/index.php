<?php
session_start(); // Start the session

$host = 'db';
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$dbname = 'ctf';

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = '';
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Error-Based SQL Injection Vulnerability
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = @$conn->query($sql);

    if (!$result) {
        $message = 'Error in SQL query: ' . $conn->error;
    }
    elseif ($result->num_rows > 0) {
        $_SESSION['authenticated'] = true; // Set session variable
        $conn->close(); // Close the connection before redirecting
        header("Location: success_page.php"); // Redirect to the success page
        exit;
    } else {
        $message = 'Login Failed';
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chakravyuha Login</title>
    <style>
        body {
            font-family: 'Tolkien', sans-serif;
            background-image: url('loginpage.webp');
            background-size: cover;
            color: #fff;
            text-align: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .login-container {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        h1 {
            color: #FFD700; /* Gold color */
            text-shadow: 2px 2px #000;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type=text], input[type=password] {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 200px;
        }
        input[type=submit] {
            background-color: #0f00f0; /* Green color */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 220px;
        }
        input[type=submit]:hover {
            background-color: #0f00ff; /* Dark green color */
        }
        p {
            color: #FFD700;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Chakravyuh</h1>
        <form method="post" action="index.php">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" value="Chakravyuha Samaptam">
        </form>
<!--needed key : /key2.txt -->
        <p><?php echo $message; ?></p>
    </div>
</body>
</html>
