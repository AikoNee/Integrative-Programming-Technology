<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    
    <div class="container">

     <?php 

if(isset($_GET['params'])){
    if(!empty($_GET['params'])){
    echo $_GET['params'] ;    
   }
} 
?>
        <form method="post">
            <input name="username" placeholder="Username" type="text" ><br>
            <input name="password" placeholder="Password" type="password" ><br>
            <input type="submit" value="Register" class="login_button" formaction="../Controller/register.php">
            <input type="submit" value="Login" class="login_button" formaction="../Controller/login.php">
        </form>

  
    </div>

</body>
</html>