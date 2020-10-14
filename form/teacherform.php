<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/teacherform.css">
    <title>create-account</title>
</head>
<body>
  
    <div class="header">
    <h3>CREATE  TEACHER ACCOUNT</h3>
      <p>Create an account with skill MArket let's find student for you.</p>
    </div>
    <div class="container">
     <form action="../phpFiles/teachersigup.php" method="POST">
       <div class="div">
       <div class="div1">
         <label>Name:</label>
         <input type="text"  name="name">
         <label>Email:</label>
         <input type="email" name="email">
         <label>Phone No:</label>
         <input type="text" name="phone">
         <label>State:</label>
         <input type="text" name="state">
       </div>
       <div class="div2">
       <label>Town:</label>
         <input type="text" name="city">
         <label>Skill:</label>
         <input type="text" name="skill">
         <label>Password:</label>
         <input type="password" name="password">
         <label>Comfirm:</label>
         <input type="password"  name="comfirm">
       </div>
       </div>
         
        <button type="submit" name="submit">Submit</button> 
     </form>
    </div>
  
</body>
</html>