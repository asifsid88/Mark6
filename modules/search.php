<div id="mark6-search-page" class="pure-g">
        <?php
                foreach($catalog as $product) {
                    echo '<div class="pure-u-1 pure-u-md-1-6 mark6-catalog-product">
                            <div class="mark6-catalog-product-img">
                                <img class="pure-img" src="' . $product["image"]["url"] . '" alt="' . $product["image"]["altText"] . '" title="' . $product["image"]["altText"] . '" />
                                <div class="mark6-catalog-product-img-hover">';

                    $i=0;
                    foreach($product["size"] as $size) {
                        echo '<div class="size" data-attr-size-value="' . $i++ . '" data-attr-productId="' . $product["productId"] . '">' . $size . '</div>';
                    }

                    echo '</div>
                            </div>

                            <div class="mark6-catalog-product-name">'
                                . $product["name"]
                                . '<br/>'
                                . '<div class="mark6-catalog-product-price">' . $product["price"]["mrp"]
                                . '</div>'
                            . '</div>
                          </div>';
                }
                ?>
</div>