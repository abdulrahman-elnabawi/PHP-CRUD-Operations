<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Wrapper">
        <div class="Form-Wrapper">
            <h1>Add User</h1>
            <form method="post" action="action.php">
                <input type="text" name="name" placeholder="name" required>
                <input type="email" name="email" placeholder="email" required>
                <input type="text" name="phone" placeholder="phone" required>
                <textarea name="address" placeholder="address" required></textarea>
                <div class="btn-box">
                    <button type="submit" class="btn"name="add">Submit</button>
                    <a href="index.php" class="btn">Back</a>
                </div>
            </form>
            
        </div>
    </div>
</body>
</html>