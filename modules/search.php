<div id="mark6-search-page" class="pure-g">
        <?php
                foreach($catalog as $product) {
                    echo '<div class="pure-u-1 pure-u-md-1-6 mark6-catalog-product" data-attr-productId="' . $product["productId"] . '">
                            <div class="mark6-catalog-product-img">
                                <img class="pure-img" src="' . $product["image"]["url"] . '" alt="' . $product["image"]["altText"] . '" title="' . $product["image"]["altText"] . '" />
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

<script type="text/javascript">
$('.mark6-catalog-product').on('click', function() {
    var productId = $(this).attr('data-attr-productId');
    var url = '/product.php?pid=' + productId + '&test=1';

    window.location.href = url;
});
</script>