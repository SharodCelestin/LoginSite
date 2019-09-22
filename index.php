<?php
define("GREETING", "Hello friend, you're logged in!");
define("FAREWELL", "Logging Out... See you next time!");

require "header.php";
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php
                if(isset($_SESSION['userId'])){
                    echo '<p class="login-status"> Hello friend, you logged in!</p>';
                }
                else{
                   echo '<p class="login-status"> Logging Out... See you next time!</p>';

                }
            ?>
        </section>
    </div>
</main>

<?php>
require "footer.php";
?>