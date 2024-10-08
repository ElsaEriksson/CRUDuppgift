<?php
require_once (__DIR__ . "/../utils/UrlModifier.php");
require_once (__DIR__ . "/layout/head.php");
require_once (__DIR__ . "/layout/nav.php");
require_once (__DIR__ . "/layout/bootstrapScripts.php");
require_once (__DIR__ . "/../functions/viewOneProduct.php");
require_once (__DIR__ . "/../services/getProducts.php");


$urlModifier = new UrlModifier();

layout_head("Elsas Bank");
?>

<html>

<body>

    <!-- Navigation-->
    <?php
    layout_nav();
    ?>

    <!-- Main-->
    <main>
        <?php
        functions_viewOneProduct($products);
        ?>
    </main>

    <!-- Scripts-->
    <?php
    layout_bootstrapScripts();
    ?>


</body>

</html>