<!doctype html>
<html>
<?php
$title = 'Registration';

include 'header.php';

echo "
<h2>Sign up for a user account today!</h2><br><br> 

<form method = 'post' action='register.php'>

Username: <input type='text' name='user'><br>
Password: <input type='password' name='password1'><br>
Confirm Password: <input type='password' name='password2'><br><br>

First Name: <input type='text' name='fName'><br>
Last Name: <input type='text' name='lname'><br><br>
<input type='submit' value='submit'>

</form>

";


include 'footer.php';
?>
</html>