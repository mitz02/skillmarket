<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/teacherform.css">
    <title>create-account</title>
</head>
<body>

      
  <div class = "header">
            <h3>CREATE STUDENT ACCOUNT</h3>
          <p>Create an account with skill MArket to connect to the best, among the best teacher!.</p>
         
        </div>
        
        
        <div class="container">
         <form action="../phpFiles/signup.php" method="POST">
           <div class="div">
           <div class="div1">
           <label>Name: </label>
             <input type="text" name="name">
             <label>Email: </label>
             <input type="email" name="email">
             <label>Phone No: </label>
             <input type="text" name="phone">
             <label>State: </label>
             <input type="text" name="state">
             
           </div>
             <div class="div2">
             <label>Town: </label>
             <input type="text" name="city">
             <input type="text" name="learn" style = "margin-top:10px" placeholder="What you want to learn..">
             <label>Password: </label>
             <input type="password" name="password">
             <label>Comfirm password: </label>
             <input type="password" name="comfirm">
             </div>
             </div>
            <button type="submit" name ="submit">Submit</button> 
         </form>

  </div>  
</body>
</html>