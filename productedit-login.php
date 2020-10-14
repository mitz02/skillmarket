<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sellproductform.css">
    <title>edit-product</title>
</head>
<body>
    <div class="container">
    <div class="form">
        <h2>Login</h2>
        <p>login to edit(delete or add) product picture</p>
   <form action="product-edit.php" method = "POST">
   <label>User Name :</label>
   <input type="text"name = "name">

   <label>Email :</label>
   <input type="email" name = "email">
   <label>Password :</label>
   <input type="password" name = "password">


   <button type="submit" name = "submit">Submit</button>
   </form>
    </div>
</body>
</html>