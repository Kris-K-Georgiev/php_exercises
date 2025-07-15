<?php
    $users = [
        'user' => 'pass'
    ];

    $message = '';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (isset($users[$username]) && $users[$username] === $password){
        $message = 'Welcome';
    } else{
        $message = 'Invalid username or password';
    }

    }      
?>

<html>
    <title>Exercise 5</title>
       <link rel="stylesheet" href="style.css">
    <body>

    <form method="post">
        Username: <input type="text" name="username" required placeholder="Enter Username">
        <br>
        Password: <input type="password" name="password" required placeholder="Enter Password">
        <br>
        <input type="submit" value="Login">
    </form>

        <?php if ($message): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>

    </body>
</html>