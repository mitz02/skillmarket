<?php
$value = "value = ".$user_name;
 
$form = '
<form action="phpFiles/more.php" method="POST">'
.'<input type="hidden" name="username" value ='.$user_name.'>'
.'<input type="hidden" name="useremail" value ='.$user_email.'>'.
'<button type="submit" name ="submit">Submit</button>'.
'</form>';


