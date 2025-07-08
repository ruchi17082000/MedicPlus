<?php

$name = $_POST["fname"];

$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "user_db") or die("connection failed");
$sql = "INSERT INTO contact(name, Email, Mobile, Message) VALUES ('{$name}','{$email}','{$mobile}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: index.html");
mysqli_close($conn);
?>