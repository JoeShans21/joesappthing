<?php
	include_once 'header.php';
?>
<!DOCTYPE html>
<html>
    <body>
		<?php
			if (isset($_SESSION["u_uid"])) {
				echo '
				<center style="margin-top: 15px;">
        			<div id="send">
            			<input id="message" type="text" placeholder="Message">
                		<br>
                		<button onclick="submit()" style="text-align:center; margin-top:10px; width:100px; height:40px;" class="btn btn-primary" id="submitbutton"><span class="glyphicon glyphicon-send"></span> Send</button>
            		</div>
        		</center>
				';
			}
		?>
		
        <center><ul id="thread"></ul></center>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="https://joes-chat-app.herokuapp.com/socket.io/socket.io.js"></script>
		<script>
			function setUser() {
				var user = '<?php echo addslashes($_SESSION["u_uid"]); ?>';
			}
		</script>
		<?php
			if(isset($_SESSION["u_uid"])) {
				echo "<script>setUser()</script>";
			}
		?>
        <script src="client.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
