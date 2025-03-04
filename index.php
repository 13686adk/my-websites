<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head> 

<body>
    <h3>Change Account</h3>

    <form action="includes/userupdate.inc.php" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pwd" placeholder="password">
        <input type="text" name="email" placeholder="E-Mail">
        <button>Update</button>
    </form>  
    
    <h3>Delete Account</h3>

    
    <form action="includes/userdelete.inc.php" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="pwd" placeholder="password">
        <button>Delete</button>
    </form>    

</body>

</html> 