<?php 

include "config.php";
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    mysqli_query($connect, "INSERT INTO users(name,email,phone,address) VALUES ('$name','$email','$phone','$address')");
  header("Location: index.php");
  exit;
}
if (isset($_POST['Update'])) {
    $Id = $_GET['Id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    mysqli_query($connect, "UPDATE users SET name='$name', email='$email', phone='$phone', address='$address' WHERE Id=$Id");
  header("Location: index.php");
  exit;
}
if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];

    mysqli_query($connect, "DELETE FROM users WHERE Id=$Id");
  header("Location: index.php");
  exit;
}
?>

 