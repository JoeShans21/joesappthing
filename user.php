<?php
    include_once 'header.php';
?>
<?php
    include_once 'includes/dbh.inc.php';
    $username=$_GET['username'];
    $sql="SELECT * FROM users WHERE user_uid='" . $username ."'";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $first=$row['user_first'];
    $last=$row['user_last'];
    $email=$row['user_email'];
?>
<html>
    <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <h1>
        <?php
            echo $first . " " . $last;
        ?>
    </h1>
    <p>Username:
        <?php
            echo $username;
        ?>
    </p>
    <p>Email:
        <?php
            echo $email;
        ?>
    </p>
    <p>
        <?php
            $path = 'accounts/jshans21/pfp';
            $files = scandir($path);
            echo "<img src='" . "accounts/" . $_SESSION['u_uid'] . "/pfp/" . $files[2] . "'>";
        ?>
    </p>
</html>