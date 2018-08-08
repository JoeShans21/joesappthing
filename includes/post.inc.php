<?php
session_start();
include_once 'dbh.inc.php';

if (isset($_POST['submit'])){
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $author = $_SESSION['u_uid'];

    $sql = "INSERT INTO posts (Content, Author, isDeleted) VALUES ('$content', '$author', 'n');";
    mysqli_query($conn, $sql);
    header("Location: ../?post=success");
    exit();
}
else {
    header("Location: ../?post=error");
    exit();
}