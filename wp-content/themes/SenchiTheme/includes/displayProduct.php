<?php require_once 'productData.php';?>
<?php foreach($product as $product_name => $image_collection): ?>
    <div class="product">
        <div class="product-image-container">
            <?php foreach($image_collection as $image): ?>
                <img class="product-image <?=$product_name?>" src=<?=$image;?> alt="product <?=$product_name;?>">
            <?php endforeach;?>
        </div>
        <p><?=$product_name;?></p>
        <div class="button-container">
            <button onclick="changeSlide(-1, '<?=$product_name;?>')">
                <i class="fas fa-arrow-left"></i>
            </button>
            <button onclick="changeSlide(1, '<?=$product_name;?>')">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
<?php endforeach;?>