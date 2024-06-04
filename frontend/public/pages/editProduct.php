<?php
require_once ("public/utils/UrlModifier.php");
require_once ("public/pages/layout/head.php");
require_once ("public/pages/layout/nav.php");
require_once ("public/pages/layout/bootstrapScripts.php");

$urlModifier = new UrlModifier();

layout_head("Elsas Bank");
?>

<html>

<body>

    <!-- Navigation-->
    <?php
    layout_nav();
    ?>

    <!-- Section-->
    <section class="py-5">
        <p>Tjo</p>
    </section>

    <!-- Scripts-->
    <?php
    layout_bootstrapScripts();
    ?>
</body>

</html>