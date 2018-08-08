<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fakebook</title>
    <style>
        #myprofile {
            font-size:16px;
            border:none; 
            display:inline; 
            margin-right:20px; 
            background-color:inherit;
            font-family: "Times New Roman", Times, serif;
        }
        #myprofile:hover{
            cursor:pointer;
        }
        #headerpfp{
            max-height: 40px;
        }
    </style>
    <script src="script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="https://vignette.wikia.nocookie.net/hover/images/d/dd/Facebook-icon.png/revision/latest/scale-to-width-down/480?cb=20161108221833">
</head> 
<body>
<header style="background-color:gray; position:relative; margin-top:-16px; margin-right:-8px; margin-left:-8px;">
    <nav>
        <div class="main-wrapper" style= "height:60px; padding:0px; margin:0px;">
            <ul style="list-style: none; margin-top:20px; position:fixed;">
                <li style="display:inline; margin-right:20px; font-family: "Times New Roman", Times, serif;">
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
            <div class="nav-login" style="position: absolute;z-index: 10;right: 0;top: 23px;">
                <?php
                    if (isset($_SESSION['u_uid'])){
                        $path = 'accounts/' . $_SESSION['u_uid'] . '/pfp';
                        $files = scandir($path);
                        echo '<form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="submit" style="margin-right:10px;display:inline;">Logout</button>
                </form>';
                        if (isset($files[2]))
                            echo "<img id='headerpfp' style='display:inline;' src='accounts/jshans21/pfp/" . $files[2] . "'/>";
                        else {
                            echo "No profile picture";
                        }
                    }
                    else {
                        include_once 'login.php';
                    }
                ?>
            </div>
        </div>
     </nav>
</header>