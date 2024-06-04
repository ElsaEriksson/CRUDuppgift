<?php

require_once (__DIR__ . "/../utils/UrlModifier.php");
require_once (__DIR__ . "/layout/head.php");
require_once (__DIR__ . "/layout/nav.php");
require_once (__DIR__ . "/layout/bootstrapScripts.php");


$urlModifier = new UrlModifier();

layout_head("Elsas Bank");
?>

<html>

<body>

    <!-- Navigation-->
    <?php
    layout_nav();
    ?>

    <section>
        <?php
        // Kontrollera om data har skickats via POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Läs inkommande data från POST-förfrågan
            $input = file_get_contents("php://input");

            // Dekoda JSON-data
            $data = json_decode($input);

            // Kontrollera om 'products' finns i den dekodade datan
            if (isset($data->products)) {
                $products = $data->products;

                // Lag produktdata i sessionen
                $_SESSION['products'] = $products;
                echo "Products received and stored successfully.";
            } else {
                echo "No products received.";
            }
        }

        // Visa produkter från sessionen
        if (isset($_SESSION['products'])) {
            echo "<h2>Product List:</h2>";
            foreach ($_SESSION['products'] as $product) {
                echo "Product ID: " . htmlspecialchars($product->_id) . "<br>";
                echo "Product Title: " . htmlspecialchars($product->title) . "<br>";
                echo "Product Price: " . htmlspecialchars($product->price) . "<br><br>";
            }
        } else {
            echo "No products in session.";
        }
        ?>
    </section>

    <!-- Scripts-->
    <?php
    layout_bootstrapScripts();
    ?>
</body>

</html>