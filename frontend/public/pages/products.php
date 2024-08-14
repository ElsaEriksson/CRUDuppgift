<?php
require_once(__DIR__ . "/../utils/UrlModifier.php");
require_once(__DIR__ . "/layout/head.php");
require_once(__DIR__ . "/layout/nav.php");
require_once(__DIR__ . "/layout/bootstrapScripts.php");
require_once(__DIR__ . "/../services/getProducts.php");
require_once(__DIR__ . "/../functions/showProducts.php");

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
        functions_showProducts($products);
        ?>
        <div class="container--csvButton">
            <button class="productButton" id="csvButton" onclick="downloadCSV()">CSV</button>
        </div>
    </main>

    <!-- Scripts-->
    <?php
    layout_bootstrapScripts();
    ?>

    <script>
        function downloadCSV() {
            window.location.href = "http://localhost:3000/products/export/csv";
        }
    </script>

</body>

</html>