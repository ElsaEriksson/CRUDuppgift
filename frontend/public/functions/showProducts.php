<?php
function functions_showProducts($products)
{
    $isdrinkMasterPage = strpos($_SERVER['REQUEST_URI'], '/drinkMaster') !== false;
    ?>
    <div class="container--cocktailCards">
        <?php
        if (!empty($products)) {
            foreach ($products as $product) {
                echo "<section class='cocktailCard'>";
                echo "<div class='container--image'><img src='" . htmlspecialchars($product->img) . "' alt='" . htmlspecialchars($product->title) . "' width='100'></div>";
                echo "<h5 class='cocktailName'>" . htmlspecialchars($product->title) . "</h5>";
                echo "<p>" . htmlspecialchars($product->description) . "</p>";
                echo "<p>" . htmlspecialchars($product->price) . " kr</p>";
                if ($isdrinkMasterPage) {
                    echo "<section class='container--Editlink'><a class='editLink' href='editProduct?id=" . htmlspecialchars($product->id) . "'>Edit</a></section>";
                }
                echo "</section>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found</td></tr>";
        } ?>
    </div>
    <?php
} ?>