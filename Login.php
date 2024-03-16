<?php
@require 'connect.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $role = $_POST['user-type'];

    if (!empty($email) && !empty($pass)) {
        if($role=='user') {
            $select = "SELECT * FROM users WHERE email='$email' AND password='$pass' AND role='$role'";
            $query = mysqli_query($con, $select);
            $count = mysqli_num_rows($query);
            if ($count > 0) {
                echo "<script>alert('Login Success');</script>";

                setcookie("email", $email, time() + (86400 * 30), "/"); // 30 days
                setcookie("role", $role, time() + (86400 * 30), "/"); // 30 days

                header('Location: index.php');
                exit();
            } else {
                echo "<script>alert('Login Unsuccessful');</script>";
                header('Location: Login.html');
                exit();
            }
        } else {
            $select = "SELECT * FROM users WHERE email='$email' AND password='$pass' AND role='$role'";
            $query = mysqli_query($con, $select);
            $count = mysqli_num_rows($query);
            if ($count > 0) {
                echo "<script>alert('Login Success');</script>";

                setcookie("email", $email, time() + (86400 * 30), "/"); // 30 days
                setcookie("role", $role, time() + (86400 * 30), "/"); // 30 days

                header('Location: AdminPanel.php');
                exit();
            } else {
                echo "<script>alert('Login Unsuccessful');</script>";
                header('Location: Login.html');
                exit();
            }
        }
    }
}
