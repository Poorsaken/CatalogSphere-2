
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    asdasd
</body>
</html>

<?php 
session_start();
include('./classes/database.php');

// Ensure database connection
Database::connectDB();
global $con;

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: loginform.php?error=username is required!");
        exit();
    } elseif (empty($password)) {
        header("Location: loginform.php?error=password is required!");
        exit();
    }

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM tbl_login WHERE username = :username";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // Assuming passwords are stored hashed, verify the password
        if ($row['username'] === $username && $row['password'] === $password) { // Replace with password_verify if password is hashed
            echo "Logged in!";

            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: welcome.php");
            exit();


        } else {
            header("Location: index.php?error=Incorrect usernamae or password");
            exit();
        }
    } else {
        header("Location: loginform.php?error=Incorrect usrname or password");
        exit();
    }



} else {
    header("Location: loginform.php");
    exit();
}
?>
