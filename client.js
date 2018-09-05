// initializing socket, connection to server
var socket = io.connect('https://joes-chat-app.herokuapp.com/');
socket.on('connect', function(data) {

});

// listener for 'thread' event, which updates messages
socket.on('thread', function(data, user) {
  $('#thread').prepend('<center><li class="msg"><xmp>' + data + '</xmp><br><xmp>' + user + '</xmp></li></center><br>');
});
socket.on('newuserserver', function(username) {
  $('#thread').prepend('<center><li class="msg"><xmp>'+username+' has joined the server<br>Server</xmp></li></center><br>');
});
socket.on('sendbackuser', function(thing){
  console.log(thing);
});
// prevents form from submitting and sends a message to server
function submit(){
  var message = $('#message').val();
  if (message!=="" && message.length<100){
    socket.emit('messages', message, user);
    reset();
    return false;
  }
  else {
    alert('fuck you');
  }
}
function reset() {
  var message=document.getElementById('message');
  var submitbutton=document.getElementById('submitbutton');
  message.value="";
  message.disabled="true";
  submitbutton.disabled="true";
  setTimeout(function(){
    message.disabled=false;
    submitbutton.disabled=false;
  }, 5000)
}
$( document ).ready(function() {
  	socket.emit('getmessages');
});
