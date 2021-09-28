<?php require_once 'productData.php';?>
<?php foreach($product as $product_name => $image_collection): ?>
    <div class="product">
        <?php foreach($image_collection as $image): ?>
            <img class="product-image <?=$product_name?>" src=<?=$image;?> alt="product <?=$product_name;?>">
        <?php endforeach;?>
        <p><?=$product_name;?></p>
        <button onclick="prevSlide(-1, <?=$product_name;?>)"></button>
        <button onclick="nextSlide(1, <?=$product_name;?>)"></button>
    </div>
<?php endforeach;?>