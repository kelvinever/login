<?php
include "include/details.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="ke.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <form action="userpage.php" method="post">
        <h2>instagram</h2> 
            <input type="text" name="username" id="" placeholder="phone number, Username, or email" class="inputs" >
            <input type="password" name="password" placeholder="Password" class="inputs">
            <div class="p-btn">
                <button type="submit" name="register" class="submit">login in</button>
                <p>forget password?</p>
</div>
        </form>
        <div class="checkbox2">

<g>Do you have an account? <a>signup</a></g>
</div>
    </section>
    
   <?= $detailsError; ?>
    
</body>
</html>