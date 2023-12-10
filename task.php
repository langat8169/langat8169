<Html>
<body>
<form action="login_process.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>
<form action="register_process.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <!-- Additional fields for name, email, etc., if needed -->

    <input type="submit" value="Register">
</form>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_username = 'your_username';
    $valid_password = 'your_password';

    if ($username === $valid_username && $password === $valid_password) {
       
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); 
        exit();
    } else {
        
        echo "Invalid username or password";
    }
}
header("Location: login.php");
exit();

session_start();
$_SESSION = [];

session_destroy();

header("Location: login.php");
exit();
?>
</body>
</html>