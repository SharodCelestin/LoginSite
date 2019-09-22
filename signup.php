<?php
define("GREETING", "Hello friend, you're logged in!");
define("FAREWELL", "Logging Out... See you next time!");

require "header.php";
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Do You Wish to Sign Up?</h1>
            <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class="signuperror"> Fill in all fields!</p>';
                }
                else if($_GET['error'] == "invaliduidmail"){
                    echo '<p class="signuperror"> Invalid username nad email!</p>';
                }
                if($_GET['error'] == "invaliduid"){
                    echo '<p class="signuperror"> Invalid username!</p>';
                }
                if($_GET['error'] == "invalidmail"){
                    echo '<p class="signuperror"> Invalid email!</p>';
                }
                if($_GET['error'] == "passwordcheck"){
                    echo '<p class="signuperror"> Your passwords do not match!</p>';
                }
                if($_GET['error'] == "useraken"){
                    echo '<p class="signuperror">That username is already taken!</p>';
                }
            }
            else if($_GET['signup'] == "success"){
                echo '<p class="signupsuccess">Sign Up Successful!</p>';
            }
            ?>
            <form class="form-signup" action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="Email">
                <input type="password" name="pw" placeholder="Password">
                <input type="password" name="pw-repeat" placeholder="Re-enter Password">
                <button type="submit" name="signup-submit">Sign Up</button> 
            </form>
        </section>
    </div>
</main>

<?php>
require "footer.php";
?>