<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
</head>
<body>
<div class="container">
<div class="more">
    <h2>Note:</h2>
    <p>You can Edit your Images here, whwn you login</p>
</div>
<form action="phpFiles/login.php" method="POST">
    <label for="#">UserName:</label>
    <input type="text" name="name">
    <label for="#">Email:</label>
    <input type="email" name="email">
    <label for="#">Password:</label>
    <input type="password" name="password">

   
    <button type="submit" name="submit">Submit</button>
</form>


</div> 

</body>
</html>