<?php
    include_once 'header.php';
?>
<?php

include_once 'includes/dbh.inc.php';
$sql="SELECT * FROM posts;";
$result=mysqli_query($conn, $sql);
$rows=mysqli_num_rows($result);
for ($x = 1; $x <= $rows; $x++) {
    $sql="SELECT * FROM posts WHERE ID='" . $x ."'";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $content=htmlspecialchars($row['Content']);
    $author=$row['Author'];
    echo "<div style='border-radius:10px; background-color:gray; width:70%; text-align:center;'><p>" . $content . "</p><a href='user.php?username=" . $author . "'>" . $author . "</a></div>";
}
?>
<?php
    include_once 'footer.php';
?>