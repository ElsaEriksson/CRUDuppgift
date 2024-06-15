<?php

function functions_createProductForm()
{
    $imageURLs = include ('imageUrls.php');
    ?>
    <section class="container--newProductForm">
        <h3>Create new product</h3>
        <form class="newProductForm" id="productForm">
            <label for="titleInput">Title</label>
            <input type="text" id="titleInput" name="title" required>
            <label for="description">Description</label>
            <input type="text" id="descriptionInput" name="description" required>
            <label for="priceInput">Price</label>
            <input type="number" id="priceInput" name="price" required>
            <div class="custom-select-wrapper">
                <div class="custom-select">
                    <div class="custom-select-trigger">Select Image</div>
                    <div class="custom-options">
                        <?php foreach ($imageURLs as $url): ?>
                            <span class="custom-option" data-value="<?php echo $url; ?>"
                                style="background-image: url('<?php echo $url; ?>');"></span>
                        <?php endforeach; ?>
                    </div>
                    <input type="hidden" name="imageSelections" id="selectImage">
                </div>
                <div id="imagePreview" class="image-preview"></div>
                <button type="submit" class="createButton">Create</button>
        </form>
    </section>

    <script src="/dist/public/ts/chooseImage.js"></script>
    <script src="/dist/public/ts/postRequest.js"></script>
    <script src="/dist/public/ts/initializeProductForm.js"></script>

    <?php
}
?>