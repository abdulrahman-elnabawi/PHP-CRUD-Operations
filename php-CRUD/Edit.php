  <?php
include "config.php";
$Id = isset($_GET["Id"]) ;
$query = mysqli_query($connect, "SELECT * FROM users WHERE Id = $Id");
$users = mysqli_fetch_assoc($query);
?> 
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Wrapper">
        <div class="Form-Wrapper">
            <h1>Edit User</h1>
            <form method="post" action="action.php?id=<?php echo $users['Id']; ?>">
                <input type="text" name="name" placeholder="name" value="<?=$users['name']?>" required>
                <input type="email" name="email" placeholder="email"value="<?=$users['email']?>" required>
                <input type="text" name="phone" placeholder="phone" value="<?=$users['phone']?>" required>
                <textarea name="address" placeholder="address" required><?=$users['address']?></textarea>
                <div class="btn-box">
                    <button type="submit" class="btn"name="Update">Submit</button>
                    <a href="index.php" class="btn">Update</a>
                </div>
            </form>
            
        </div>
    </div> 
</body>
</html>