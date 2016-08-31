<div id="mark6-product-description-wrapper">
    <div id="mark6-product-title"><?php
            echo $product["name"];
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
                    if($marketPlace["isEnabled"]) {
                        $imgUrl = "src/img/marketplace/" . strtolower($marketPlace["name"]) . ".jpg";
                        echo '<div class="mark6-marketplace" data-attr-link="' . $marketPlace["shopUrl"] . '">
                                <img class="mark6-marketplace-img" src="' . $imgUrl . '" />
                              </div>';
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

<script type="text/javascript">
$('.mark6-marketplace').on('click', function() {
    var url = $(this).attr('data-attr-link');
    var win = window.open(url, '_blank');
    win.focus();
});
</script>
