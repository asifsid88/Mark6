<div id="mark6-product-description-wrapper">
    <div id="mark6-product-title"><?php
            echo $product["name"];
        ?></div>
    <!-- Commenting Price
    <div id="mark6-product-price"><?php
            echo 'Rs. ' . $product["price"]["mrp"];
            ?></div>
    -->
    <div id="mark6-product-size-wrapper">
        <div id="select-size" class="float-left">Select Size</div>
        <div class="float-right"><span id="not-sure">Not sure? </span><span id="size-chart-link">See Size Chart </span></div>
    </div>
    <div class="clear-both"></div>
    <div class="size-wrapper">
    <?php
            $i=0;
            foreach($product["size"] as $size) {
                echo '<div class="size" data-attr-value="' . $i++ . '">' . $size . '</div>';
            }
            ?>
    </div>
    <div id="mark6-marketplaces">
        <?php
                /**
                    Values in shopUrl should be of format
                    S;M;L;XL
                    0 1 2 3

                    if any particular size doesn't exists then make it empty
                */
                echo '<div class="shop-now-text">Shop Now</div>';
                foreach($product["marketPlace"] as $marketPlace) {
                    if($marketPlace["isEnabled"]) {
                        $imgUrl = "src/img/marketplace/" . strtolower($marketPlace["name"]) . ".jpg";

                        echo '<div class="mark6-marketplace-wrapper">
                              <div class="mark6-marketplace float-left" data-attr-link="' . $marketPlace["shopUrl"] . '">
                                <img class="mark6-marketplace-img" src="' . $imgUrl . '" />
                              </div>

                              <div class="marketplace-price">
                                    <span class="mrp">@ Rs.<strike>' . $product["mrp"] . '</strike></span>
                                    <span class="selling-price"> ' . $marketPlace["price"] . '</span>
                                    <span class="offer">(' . $marketPlace["offer"] . '% Off)</span>
                              </div>';
                        echo '</div>';

                        echo '<div class="clear-both"></div>';
                    }
                }
                ?>
    </div>
    <div id="mark6-product-style-code" class="heading">Style Code</div>
    <div id="mark6-product-style-code-desc" class="desc"><?php
            echo $product["productId"];
            ?></div>
    <div id="mark6-product-details" class="heading">Product Details</div>
    <div id="mark6-product-details-desc" class="desc"><?php
            echo $product["description"];
            ?></div>
    <div id="mark6-material" class="heading">Material & Care</div>
    <div id="mark6-material-desc" class="desc"><?php
            echo $product["material"];
            ?></div>
</div>
<?php include('modules/sizeChart.php'); ?>