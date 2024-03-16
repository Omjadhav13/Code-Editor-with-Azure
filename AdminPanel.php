<?php

    @require 'connect.php';

    if(isset($_POST['submit'])){
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if(!empty($uname) || !empty($email) || !empty($pass)){
            $insert = "INSERT INTO users(username, email, password, role) VALUES('$uname', '$email', '$pass', 'user')";
            $upload = mysqli_query($con, $insert);
            if($upload){
                $msg = "User added successfully!";
            }else{
                $msg = "Could not add user.";
            }
        }else{
            $msg = "Please fill user details.";
        }
    }

    if(isset($_POST['add_admin'])){
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if(!empty($uname) || !empty($email) || !empty($pass)){
            $insert = "INSERT INTO users(username, email, password, role) VALUES('$uname', '$email', '$pass', 'admin')";
            $upload = mysqli_query($con, $insert);
            if($upload){
                $msg = "Admin added successfully!";
            }else{
                $msg = "Could not add admin.";
            }
        }else{
            $msg = "Please fill user details.";
        }
    }

    if(isset($_POST['add_htmlref'])){
        $tag = $_POST['tag'];
        $desc = $_POST['desc'];

        if(!empty($tag) || !empty($desc)){
            $insert = "INSERT INTO htmlref(tag, description) VALUES('$tag', '$desc')";
            $upload = mysqli_query($con, $insert);
            if($upload){
                $msg = "Reference added successfully!";
            }else{
                $msg = "Could not add reference.";
            }
        }else{
            $msg = "Please fill reference details.";
        }
    }

    if(isset($_POST['add_cssref'])){
        $tag = $_POST['tag'];
        $desc = $_POST['desc'];

        if(!empty($tag) || !empty($desc)){
            $insert = "INSERT INTO cssref(tag, description) VALUES('$tag', '$desc')";
            $upload = mysqli_query($con, $insert);
            if($upload){
                $msg = "Reference added successfully!";
            }else{
                $msg = "Could not add reference.";
            }
        }else{
            $msg = "Please fill reference details.";
        }
    }

    if(isset($_POST['add_jref'])){
        $meth = $_POST['meth'];
        $desc = $_POST['desc'];

        if(!empty($meth) || !empty($desc)){
            $insert = "INSERT INTO jsref(method, description) VALUES('$meth', '$desc')";
            $upload = mysqli_query($con, $insert);
            if($upload){
                $msg = "Reference added successfully!";
            }else{
                $msg = "Could not add reference.";
            }
        }else{
            $msg = "Please fill reference details.";
        }
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        mysqli_query($con, "DELETE FROM users WHERE id=$id");
        header('Location: AdminPanel.php');
        exit();
    }

    if(isset($_GET['deletehref'])){
        $id = $_GET['deletehref'];
        mysqli_query($con, "DELETE FROM htmlref WHERE id=$id");
        header('Location: AdminPanel.php');
        exit();
    }

    if(isset($_GET['deletecref'])){
        $id = $_GET['deletecref'];
        mysqli_query($con, "DELETE FROM cssref WHERE id=$id");
        header('Location: AdminPanel.php');
        exit();
    }

    if(isset($_GET['deletejref'])){
        $id = $_GET['deletejref'];
        mysqli_query($con, "DELETE FROM jsref WHERE id=$id");
        header('Location: AdminPanel.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="css/AdminPanel.css">
</head>
<body>
    <div class="header">
			<a href="index.php"><img src="images/kode-logo.svg" alt="Logo" class="logo" /></a>
            <p>Admin</p>
			<a href="index.php">Home</a>
	</div>

    <div class="main">
        <div id="sidebar">
            <header>
            <a href="#">Navigation</a>
            </header>
            <ul class="nav">
            <li>
                <a href="#upanel">
                User
                </a>
            </li>
            <li>
                <a href="#apanel">
                Admin
                </a>
            </li>
            <li>
                <a href="#hpanel">
                Html Reference Table
                </a>
            </li>
            <li>
                <a href="#cpanel">
                CSS Reference Table
                </a>
            </li>
            <li>
                <a href="#jpanel">
                Js Reference Table
                </a>
            </li>
            </ul>
        </div>

        <div class="content">

            <?php
                if(isset($msg)){
                        echo '<span class="message">'.$msg.'</span>';
                }
            ?>
            <!--Add User-->
            <div id="upanel"></div>
            <div class="add_user_div">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="add_user">
                    <h3>Add New User</h3>
                    <div class="input-control">
                        <label for="username-input">Username</label><br>
                        <input
                            type="text"
                            name="username"
                            id="username-input"
                            placeholder="Enter username"
                        />
                    </div>
                    <div class="input-control">
                        <label for="email-input">Email</label><br>
                        <input
                            type="text"
                            name="email"
                            id="email-input"
                            placeholder="Enter email address"
                        />
                    </div>
                    <div class="input-control">
                        <label for="password-input">Password</label><br>
                        <input
                            type="password"
                            name="pass"
                            id="password-input"
                            placeholder="Enter password"
                        />
                    </div>
                    <button class="adduser-btn" type="submit" name="submit">Add User</button>
                </form>
            </div>            

            <div class="container-fluid">
                <h1>Users</h1>
                
                <?php
                
                $select = mysqli_query($con, "SELECT * FROM users WHERE role='user'");

                ?>

                <div class="users-display">
                    <table class="users-table">

                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>User Type</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>

                        <?php
                        
                        while($row = mysqli_fetch_assoc($select)){
                        
                        ?>

                        <tr>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['role']; ?></td>
                            <td>
                            <a href="user_update.php?edit=<?php echo $row['id']; ?>"><button class="btn">Edit</button></a><br>
                            <a href="AdminPanel.php?delete=<?php echo $row['id']; ?>"><button class="del btn">Delete</button></a>
                            </td>
                        </tr>

                        <?php }; ?>

                    </table>
                </div>
            </div>

            <!--Add Admin-->
            <div id="apanel"></div>
            <div class="add_user_div">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="add_user">
                    <h3>Add New Admin</h3>
                    <div class="input-control">
                        <label for="username-input">Username</label><br>
                        <input
                            type="text"
                            name="username"
                            id="username-input"
                            placeholder="Enter username"
                        />
                    </div>
                    <div class="input-control">
                        <label for="email-input">Email</label><br>
                        <input
                            type="text"
                            name="email"
                            id="email-input"
                            placeholder="Enter email address"
                        />
                    </div>
                    <div class="input-control">
                        <label for="password-input">Password</label><br>
                        <input
                            type="password"
                            name="pass"
                            id="password-input"
                            placeholder="Enter password"
                        />
                    </div>
                    <button class="adduser-btn" type="submit" name="add_admin">Add Admin</button>
                </form>
            </div>            

            <div class="container-fluid">
                <h1>Admin</h1>
                
                <?php
                
                $select = mysqli_query($con, "SELECT * FROM users WHERE role='admin'");

                ?>

                <div class="users-display">
                    <table class="users-table">

                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>User Type</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>

                        <?php
                        
                        while($row = mysqli_fetch_assoc($select)){
                        
                        ?>

                        <tr>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['role']; ?></td>
                            <td>
                            <a href="user_update.php?edit=<?php echo $row['id']; ?>"><button class="btn">Edit</button></a><br>
                            <a href="AdminPanel.php?delete=<?php echo $row['id']; ?>"><button class="del btn">Delete</button></a>
                            </td>
                        </tr>

                        <?php }; ?>

                    </table>
                </div>
            </div>

            <!--Add Html Ref-->
            <div id="hpanel"></div>
            <div class="add_user_div">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="add_user">
                    <h3>Add New Reference</h3>
                    <div class="input-control">
                        <label for="tag-input">Tag</label><br>
                        <input
                            type="text"
                            name="tag"
                            id="tag-input"
                            placeholder="Enter tag"
                        />
                    </div>
                    <div class="input-control">
                        <label for="desc-input">Description</label><br>
                        <input
                            type="text"
                            name="desc"
                            id="desc-input"
                            placeholder="Enter description"
                        />
                    </div>
                    <button class="adduser-btn" type="submit" name="add_htmlref">Add Reference</button>
                </form>
            </div>            

            <div class="container-fluid">
                <h1>Html Reference</h1>
                
                <?php
                
                $select = mysqli_query($con, "SELECT * FROM htmlref");

                ?>

                <div class="users-display">
                    <table class="users-table">

                        <thead>
                            <tr>
                                <th>Tag</th>
                                <th>Description</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>

                        <?php
                        
                        while($row = mysqli_fetch_assoc($select)){
                        
                        ?>

                        <tr>
                            <td>&lt;<?php echo $row['tag']; ?>&gt;</td>
                            <td><?php echo $row['description']; ?></td>
                            <td>
                            <a href="html_ref_update.php?edit=<?php echo $row['id']; ?>"><button class="btn">Edit</button></a><br>
                            <a href="AdminPanel.php?deletehref=<?php echo $row['id']; ?>"><button class="del btn">Delete</button></a>
                            </td>
                        </tr>

                        <?php }; ?>
                    </table>
                </div>
            </div>

            <!--Add CSS Ref-->
            <div id="cpanel"></div>
            <div class="add_user_div">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="add_user">
                    <h3>Add New Reference</h3>
                    <div class="input-control">
                        <label for="tag-input">Tag</label><br>
                        <input
                            type="text"
                            name="tag"
                            id="tag-input"
                            placeholder="Enter tag"
                        />
                    </div>
                    <div class="input-control">
                        <label for="desc-input">Description</label><br>
                        <input
                            type="text"
                            name="desc"
                            id="desc-input"
                            placeholder="Enter description"
                        />
                    </div>
                    <button class="adduser-btn" type="submit" name="add_cssref">Add Reference</button>
                </form>
            </div>            

            <div class="container-fluid">
                <h1>Css Reference</h1>
                
                <?php
                
                $select = mysqli_query($con, "SELECT * FROM cssref");

                ?>

                <div class="users-display">
                    <table class="users-table">

                        <thead>
                            <tr>
                                <th>Tag</th>
                                <th>Description</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>

                        <?php
                        
                        while($row = mysqli_fetch_assoc($select)){
                        
                        ?>

                        <tr>
                            <td><?php echo $row['tag']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td>
                            <a href="html_ref_update.php?edit=<?php echo $row['id']; ?>"><button class="btn">Edit</button></a><br>
                            <a href="AdminPanel.php?deletecref=<?php echo $row['id']; ?>"><button class="del btn">Delete</button></a>
                            </td>
                        </tr>

                        <?php }; ?>
                    </table>
                </div>
            </div>
            
            <!--Add Js Ref-->
            <div id="jpanel"></div>
            <div class="add_user_div">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="add_user">
                    <h3>Add New Reference</h3>
                    <div class="input-control">
                        <label for="meth-input">Method</label><br>
                        <input
                            type="text"
                            name="meth"
                            id="meth-input"
                            placeholder="Enter method"
                        />
                    </div>
                    <div class="input-control">
                        <label for="desc-input">Description</label><br>
                        <input
                            type="text"
                            name="desc"
                            id="desc-input"
                            placeholder="Enter description"
                        />
                    </div>
                    <button class="adduser-btn" type="submit" name="add_jref">Add Reference</button>
                </form>
            </div>            

            <div class="container-fluid">
                <h1>Js Reference</h1>
                
                <?php
                
                $select = mysqli_query($con, "SELECT * FROM jsref");

                ?>

                <div class="users-display">
                    <table class="users-table">

                        <thead>
                            <tr>
                                <th>Method</th>
                                <th>Description</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>

                        <?php
                        
                        while($row = mysqli_fetch_assoc($select)){
                        
                        ?>

                        <tr>
                            <td><?php echo $row['method']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td>
                            <a href="js_ref_update.php?edit=<?php echo $row['id']; ?>"><button class="btn">Edit</button></a><br>
                            <a href="AdminPanel.php?delete=<?php echo $row['id']; ?>"><button class="del btn">Delete</button></a>
                            </td>
                        </tr>

                        <?php }; ?>

                    </table>
                </div>
            </div>

        </div>
    </div>
</body>
</html>