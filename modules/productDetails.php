<div id="mark6-product-description-wrapper">
    <div id="mark6-product-title"><?php
            echo $product["title"];
        ?></div>
    <div id="mark6-product-price"><?php
            echo $product["price"]["mrp"];
            ?></div>
    <div id="mark6-product-size-wrapper">
        <div id="select-size" class="float-left">Select Size</div>
        <div class="float-right"><span id="not-sure">Not sure? </span><span id="size-chart-link">See Size Chart </span></div>
    </div>
    <div class="clear-both"></div>
    <div class="size-wrapper">
    <?php
            foreach($product["size"] as $size) {
                echo '<div class="size">' . $size . '</div>';
            }
            ?>
    </div>
    <div id="mark6-marketplaces">
        <?php
                foreach($product["marketPlace"] as $marketPlace) {
                    echo '<div>' . $marketPlace["name"] . '</div>';
                }
                ?>
    </div>
    <div id="mark6-product-details" class="heading">Product Details</div>
    <div id="mark6-product-details-desc" class="desc"><?php
            echo $product["description"];
            ?></div>
    <div id="mark6-material" class="heading">Material & Care</div>
    <div id="mark6-material-desc" class="desc"><?php
            echo $product["material"];
            ?></div>
</div>