<div id="mark6-search-page" class="pure-g">
        <?php
                foreach($catalog as $product) {
                    echo '<div class="pure-u-1 pure-u-md-1-6 mark6-catalog-product">
                            <div class="mark6-catalog-product-img">
                                <img class="pure-img" src="' . $product["image"]["url"] . '" alt="' . $product["image"]["altText"] . '" title="' . $product["image"]["altText"] . '" />
                            </div>
                          </div>';
                }
                ?>
</div>