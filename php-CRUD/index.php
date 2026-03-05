
<?php
include "config.php";
$query = mysqli_query($connect, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operation with PHP</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <div class="container">
        <h1>User List</h1>
        <a href="add.php">Add USer</a>
        <table>
           
            <tr>
                <th>NO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>

            </tr>
            <?php
            $no = 1;
            while($users = mysqli_fetch_assoc($query)):?>
            
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $users['name']; ?></td>
                    <td><?php echo $users['email']; ?></td>
                    <td><?php echo $users['phone']; ?></td>
                    <td><?php echo $users['address']; ?></td>
                    <td>
                        <a href="edit.php?Id=<?php echo $users['Id']; ?>">Edit</a>
                        <a href="action.php?Id=<?php echo $users['Id']; ?>
                        " class="btn-delete " onclick="return confirm('Are you sure you want to delete this user?')"
                        >Delete</a>
                    </td>
                </tr>
             <?php endwhile; ?>
           
        </table>
    </div>
</body>
</html>