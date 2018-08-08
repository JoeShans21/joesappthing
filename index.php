<?php
    include_once 'header.php';
?>
<?php
    if (isset($_SESSION['u_uid'])){
        echo '
<html>
    <body>
        <form action="includes/post.inc.php" method="POST">
            <input type="text" name="content">
            <input style="display:none;" name="author" value="' . $_SESSION['u_uid'] . '">
            <input type="submit" name="submit">
        </form>
    </body>
</html>
';
    }
    else {
        echo 'Not signed in<p></p>';
    }
    $sql="SELECT * FROM posts";
    include_once 'includes/dbh.inc.php';
    $result=mysqli_query($conn,$sql);
    $rowcount=mysqli_num_rows($result);
    for ($x=$rowcount; $x>=1; $x--){
        $sql2="SELECT * FROM posts WHERE ID='$x'";
        $result=mysqli_fetch_assoc(mysqli_query($conn,$sql2));
        $content=$result['Content'];
        $author=$result['Author'];
        echo $content . "<br>";
        echo $author . "<br><br>";
        
    }
?>
<?php
    include_once 'footer.php';
?>