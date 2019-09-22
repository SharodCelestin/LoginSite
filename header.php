<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="nav-header-main">
            <a class="header-logo" href="index.php">
                <img src="img/logo.png" alt="logo">
            </a>
            <ul>
                <li><a href="index.php">Home</a><li>
                <li><a href="#">Halloween</a><li>
                <li><a href="#">Thanksgiving</a><li>
                <li><a href="#">Christmas</a><li>
                <li><a href="#">Profile</a><li>
                <li><a href="#">Profile</a><li>
            </ul>
            </nav>
            <div class="header-login">
            <?php
                if(isset($_SESSION['userId'])){
                    echo '<form action="includes/logout.inc.php" method="post">;
                    <button type="submit" name="logout-submit">Logout</button>;
                </form>';
                }
                else{
                    echo '<form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/Email">
                    <input type="password" name="pw" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                </form><a href="signup.php" class="header-signup">SignUp</a>';
                }
            ?>
                
                
            </div>
        </nav>
</body>

<header>

</header>
</html>