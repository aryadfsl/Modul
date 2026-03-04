<?php
session_start();

$_SESSION['username'] = "Arya";
$_SESSION['role']     = "Administrator";

echo "Halo, " . $_SESSION['username'];

session_destroy();
?>

<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === "arya" && $password === "123") {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = "Administrator";

    if (isset($_POST['remember'])) {
        setcookie('username', $username, time() + 3600, "/");
    }

    header("Location: ../index.php");
    exit();
} else {
    echo "Login Gagal";
}
?>
