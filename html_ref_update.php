<?php

    @require 'connect.php';

    $id = $_GET['edit'];

    if(isset($_POST['add_htmlref'])){
        $tag = $_POST['tag'];
        $desc = $_POST['desc'];

        if(!empty($tag) || !empty($desc)){
            $insert = "UPDATE `htmlref` SET `tag`='$tag',`description`='$desc' WHERE id = $id";
            $upload = mysqli_query($con, $insert);
            if($upload){
                $msg = "Reference update successfully!";
            }else{
                $msg = "Could not update reference.";
            }
        }else{
            $msg = "Please fill reference details.";
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
                $select = mysqli_query($con, "SELECT * FROM htmlref WHERE id=$id");
                while($row = mysqli_fetch_assoc($select)){
            ?>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="add_user">
                    <h3>Add New Reference</h3>
                    <div class="input-control">
                        <label for="tag-input">Tag</label><br>
                        <input
                            type="text"
                            name="tag"
                            id="tag-input"
                            placeholder="Enter tag"
                            value=<?php echo $row['tag']; ?>
                        />
                    </div>
                    <div class="input-control">
                        <label for="desc-input">Description</label><br>
                        <input
                            type="text"
                            name="desc"
                            id="desc-input"
                            placeholder="Enter description"
                            value=<?php echo $row['description']; ?>
                        />
                    </div>
                    <button class="adduser-btn" type="submit" name="add_htmlref">Add Reference</button><br>
                    <a href="AdminPanel.php" class="back-btn">Go Back</a>
                </form>
            <?php }; ?>
        </div>
    </div>
</body>
</html>