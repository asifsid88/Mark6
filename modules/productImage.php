<div class="pure-g">
    <div class="pure-u-1 pure-u-md-3-24 mark6-product-page-thumbnail">
        <div class="pure-g">
            <?php
                    foreach($product["thumbnail"] as $img) {
                        echo '<div class="pure-u-1"><img class="pure-img mark6-thumbnail-img" src="' . $img . '" /></div>';
                    }
                    ?>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-21-24 mark6-product-page-product">
        <?php
                $img = $product["thumbnail"][0];
                echo '<div class="pure-u-1"><img class="pure-img" id="mark6-product-detail-img" src="' . $img . '" /></div>';
                ?>
    </div>

    <div class="pure-u-1 pure-u-md-3-24 mark6-product-page-mobile-thumbnail">
        <div class="pure-g">
            <?php
                    foreach($product["thumbnail"] as $img) {
                        echo '<div class="pure-u-1-6"><img class="pure-img mark6-thumbnail-img" src="' . $img . '" /></div>';
                    }
                    ?>
        </div>
    </div>
</div>