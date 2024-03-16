<?php

    @require 'connect.php';

    $id = $_GET['edit'];

    if(isset($_POST['submit'])){
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if(!empty($uname) || !empty($email) || !empty($pass)){
            $update = "UPDATE `users` SET `username`='$uname',`email`='$email',`password`='$pass' WHERE id=$id";
            $upload = mysqli_query($con, $update);
            if($upload){
                $msg = "Updated successfully!";
            }else{
                $msg = "Could not add user.";
            }
        }else{
            $msg = "Please fill user details.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>

    <link rel="stylesheet" href="css/AdminPanel.css">
</head>
<body>
    <?php
        if(isset($msg)){
                echo '<span class="message">'.$msg.'</span>';
        }
    ?>
    <div class="upd-form">
        <div class="_user_div">

            <?php
                $select = mysqli_query($con, "SELECT * FROM users WHERE id=$id");
                while($row = mysqli_fetch_assoc($select)){
            ?>

            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="add_user">
                <h3>Add New User</h3>
                <div class="input-control">
                    <label for="username-input">Username</label><br>
                    <input
                        type="text"
                        name="username"
                        id="username-input"
                        placeholder="Enter username"
                        value=<?php echo $row['username']; ?>
                    />
                </div>
                <div class="input-control">
                    <label for="email-input">Email</label><br>
                    <input
                        type="text"
                        name="email"
                        id="email-input"
                        placeholder="Enter email address"
                        value=<?php echo $row['email']; ?>
                    />
                </div>
                <div class="input-control">
                    <label for="password-input">Password</label><br>
                    <input
                        type="password"
                        name="pass"
                        id="password-input"
                        placeholder="Enter password"
                        value=<?php echo $row['password']; ?>
                    />
                </div>
                <button class="adduser-btn" type="submit" name="submit">Update</button><br>
                <a href="AdminPanel.php" class="back-btn">Go Back</a>
            </form>
            <?php }; ?>
        </div>
    </div>
</body>
</html>