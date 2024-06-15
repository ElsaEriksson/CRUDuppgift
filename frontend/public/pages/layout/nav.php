<?php

function layout_nav()
{
    $isdrinkMasterPage = strpos($_SERVER['REQUEST_URI'], '/drinkMaster') !== false;

    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">CockTails</a>
        <?php
        if ($isdrinkMasterPage) {
            echo "<a class='navbar-login' href='/createProduct'><h2>+</h2></a>";
        }
        ?>
        <a class="navbar-login" href="/drinkMaster">Drink Master</a>
    </nav>

    <?php
}
?>