

<form role="form" method ="post">
	<!-- <input typ	e="text" name="username" id="username" placeholder="Enter Your Username"><br> -->
	<input type="text" name="password" id="password" placeholder="Enter Your Old Password"><br>
	<input type="text" name="newpass" id="newpass" placeholder="Enter Your New Password"><br>
	<input type="text" name="confirmpassword" id="confirmpassword" placeholder="Enter Confirm Password"><br>
	<span id='message'></span>
	<input type="hidden" id="edit_password_id">
	<button id="edit_password" style="background-color:#008000">Submit</button>
</form>
       
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$('#newpass, #confirmpassword').on('keyup', function () {
 	 if ($('#newpass').val() == $('#confirmpassword').val()) {
    		$('#message').html('Matching').css('color', 'green');
  	 } else 
   		 $('#message').html('Not Matching').css('color', 'red');
	});
</script>
