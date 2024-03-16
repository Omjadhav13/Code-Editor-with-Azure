<?php
@require 'connect.php';

if (isset($_POST['submit'])) {
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (!empty($email) && !empty($pass)) {
        $insert = "INSERT INTO users(username, email, password, role) VALUES('$uname', '$email', '$pass', 'user')";
        $upload = mysqli_query($con, $insert);
        if ($upload) {
            echo "successs";
            header('Location: Login.html');
            exit();
        } else {
            echo 'fail';
            header('Location: Signup.html');
            exit();
        }
    }
}
