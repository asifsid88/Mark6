<div id="mark6-tabs-panel">
<?php
        $fileData = file_get_contents('models/tabs.json');
        $tabs = json_decode($fileData, true);
        $i=1;
        foreach($tabs as $tab) {
            echo '<div id="tab' . $i . '" class="mark6-tabs">' . $tab["title"] . '</div>';
            $i++;
        }
        ?>
</div>

<div id="mark6-tabs-content-panel">
    <?php
            $i=1;
            foreach($tabs as $tab) {
                echo '<div id="tab' . $i . '-content" class="mark6-tabs-content">
                        <div class="pure-g mark6-product-grid">';

                if($tab["title"] == strtolower("e-store")) {
                    echo '<div id="mark6-estores">';
                    foreach($tab["content"] as $content) {
                        echo '<div class="mark6-estore">
                                <img class="mark6-estore-img" src="' . $content["imageUrl"] . '" />
                            </div>';
                    }
                    echo '</div>';

                    $i++;
                } else {
                    foreach($tab["content"] as $content) {
                        echo '<div class="pure-u-1 pure-u-md-1-6 mark6-product">
                                <div class="mark6-product-img">
                                    <img class="pure-img" src="' . $content["imageUrl"] . '" alt="' . $content["altText"] . '" title="' . $content["altText"] . '" />
                                </div>';

                        if($content["buttonText"] != "") {
                            echo '<div class="mark6-product-readmore-button" data-attr-link="' . $content["linkUrl"] . '">' . $content["buttonText"] . '</div>';
                        }
                        echo '</div>';
                    }

                    $i++;
                }

                echo '</div></div>';
            }
            ?>
</div>

<script type="text/javascript">
$('.mark6-product-readmore-button').on('click', function() {
    var url = $(this).attr('data-attr-link');
    window.location.href = url;
});
</script>