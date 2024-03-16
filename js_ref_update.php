<?php

    @require 'connect.php';

    $id = $_GET['edit'];

    if(isset($_POST['add_jref'])){
        $meth = $_POST['meth'];
        $desc = $_POST['desc'];

        if(!empty($meth) || !empty($desc)){
            $insert = "UPDATE `jsref` SET `method`='$meth',`description`='$desc' WHERE id = $id";
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
                $select = mysqli_query($con, "SELECT * FROM jsref WHERE id=$id");
                while($row = mysqli_fetch_assoc($select)){
            ?>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="add_user">
                    <h3>Add New Reference</h3>
                    <div class="input-control">
                        <label for="meth-input">Method</label><br>
                        <input
                            type="text"
                            name="meth"
                            id="meth-input"
                            placeholder="Enter meth"
                            value=<?php echo $row['method']; ?>
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
                    <button class="adduser-btn" type="submit" name="add_jref">Add Reference</button><br>
                    <a href="AdminPanel.php" class="back-btn">Go Back</a>
                </form>
            <?php }; ?>
        </div>
    </div>
</body>
</html>