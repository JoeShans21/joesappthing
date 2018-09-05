<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="iconthing_sUC_icon.ico" />
    <title>Joe's Chat App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
	<script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
</head> 
<body>
<header style="background-color:gray; position:relative; margin-top:-16px; margin-right:-8px; margin-left:-8px;">
    <nav>
        <div class="main-wrapper" style="height:60px; padding:0px; margin:0px;">
            <ul style="list-style: none; margin-top:20px; position:fixed;">
                <li style="display:inline; margin-right:20px; font-family: 'Times New Roman', Times, serif;">
                    <a href="../" style="color:black; text-decoration:none; font-size:20px;">Home</a>
                </li>
                <?php
                    if (isset($_SESSION['u_uid'])){
                        echo '
                        <li style="display:inline;">
                            <a style="color:black; text-decoration:none;" href="user.php?username=' . $_SESSION['u_uid'] . '">My Profile</a>
                        </li>
                        ';
                    }
                ?>
            </ul>
            <div class="nav-login" style="z-index: 10;position: absolute;right: 0;top: 23px;">
                <?php
                    if (isset($_SESSION['u_uid'])){
                        echo '<form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="submit" style="margin-right:20px;">Logout</button>
                </form>';
                    }
                    else {
                        include_once 'login.php';
                    }
                ?>
            </div>
        </div>
     </nav>
</header>