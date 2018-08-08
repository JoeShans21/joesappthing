<?php
    include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <form action="includes/signup.inc.php" method="POST">
            <div style="text-align:center; width:300px; margin:0 auto; position: relative; position: absolute; top: 30%; left: 42%;">
                <p><br></p>
                <h2>Sign Up</h2>
                <input type="text" name="first" placeholder="Firstname"><br><br>
                <input type="text" name="last" placeholder="Lastname"><br><br>
                <input type="text" name="email" placeholder="Email"><br><br>
                <input type="text" name="uid" placeholder="Username"><br><br>
                <input type="password" name="pwd" placeholder="Password"><br><br>
                <button type="submit" name="submit">Sign Up</button>
                <p><br></p>
            </div>
        </form>
    </div>
</section>
    
<?php
    include_once 'footer.php';
?>