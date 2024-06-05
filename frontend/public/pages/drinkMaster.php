<?php
require_once ("public/utils/UrlModifier.php");
require_once ("public/pages/layout/head.php");
require_once ("public/pages/layout/nav.php");
require_once ("public/pages/layout/bootstrapScripts.php");
require_once (__DIR__ . "/../functions/getProducts.php");

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
        functions_getProducts($products);
        ?>
    </main>

    <!-- Scripts-->
    <?php
    layout_bootstrapScripts();
    ?>
</body>

</html>