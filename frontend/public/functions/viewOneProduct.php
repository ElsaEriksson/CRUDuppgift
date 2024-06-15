<?php
function functions_viewOneProduct($products)
{
    $id = $_GET['id'] ?? null;

    if (!empty($products)) {
        foreach ($products as $product) {
            if ($product->id == $id) {
                ?>
                <div class="container--viewOneProduct">
                    <div class="container--imageOneProduct"><img src=<?php echo $product->img ?> alt=""></div>
                    <div class="productInfo">
                        <h2 class="productTitle">
                            <span id="viewTitle"><?php echo htmlspecialchars($product->title); ?></span>
                            <input type="text" id="editTitle" value="<?php echo htmlspecialchars($product->title); ?>"
                                style="display:none;">
                        </h2>
                        <p>
                            <span id="viewDescription"><?php echo htmlspecialchars($product->description); ?></span>
                            <textarea id="editDescription"
                                style="display:none;"><?php echo htmlspecialchars($product->description); ?></textarea>
                        </p>
                        <p>
                            <span id="viewPrice"><?php echo htmlspecialchars($product->price); ?> kr</span>
                            <input type="number" id="editPrice" value="<?php echo htmlspecialchars($product->price); ?>"
                                style="display:none;">
                        </p>
                        <div class="container--buttonsOneProduct">
                            <div id="defaultButtons">
                                <button class="productButton" id="productDeleteButton"
                                    onclick="deleteOneProduct('<?php echo ($product->id) ?>')">Delete</button>
                                <div>
                                    <button class="productButton" id="productBackButton"
                                        onclick="window.location.href='/drinkMaster'">Back</button>
                                    <button class="productButton" id="productEditButton" onclick="toggleEditMode()">Edit</button>
                                </div>
                            </div>
                            <div id="editButtons" style="display: none;">
                                <button class="productButton" id="productCancelButton" onclick="toggleEditMode()">Cancel</button>
                                <button class="productButton" id="productSaveButton"
                                    onclick="saveChangesFromPut('<?php echo ($product->id) ?>')">Save</button>

                            </div>
                        </div>
                    </div>
                </div>

                <script src="/dist/public/ts/toggleEditMode.js"></script>
                <script src="/dist/public/ts/saveChangesFromPut.js"></script>
                <script src="/dist/public/ts/deleteOneProduct.js"></script>
                <?php
            }
        }
    }
}
?>