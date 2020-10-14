<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sellproductform.css">
    <title>sell-product</title>
</head>
<body>
   <div class="form">
    <h2>CREATE ACCOUNT</h2>
   <form action="phpFiles/sellproduct.php" method = "POST">
   <label>User Name :</label>
   <input type="text"name = "name">

   <label>Email :</label>
   <input type="email" name = "email">

   <label>State :</label>
   <input type="text" name = "state">

   <label>Town :</label>
   <input type="text" name = "town">

   <label>Password :</label>
   <input type="password" name = "password">
   <label>comfirm password :</label>
   <input type="password" name = "comfirm">

   <button type="submit" name = "submit">Submit</button>
   </form>

   <div class="edit">
       <a href="productedit-login.php">Edit Products</a>
   </div>
   </div> 
</body>
</html>