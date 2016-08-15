<div id="mark6-tabs-panel">
<?php
        $str = file_get_contents('models/tabs.json');
        $tabs = json_decode($str, true);
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

                foreach($tab["content"] as $content) {
                    echo '<div class="pure-u-1 pure-u-md-1-6 mark6-product">
                                <div class="mark6-product-img">
                                    <img class="pure-img" src="' . $content["imageUrl"] . '" alt="' . $content["altText"] . '" />
                                </div>
                                <div class="mark6-product-readmore-button">' . $content["buttonText"] . '</div>
                            </div>';
                }

                $i++;
                echo '</div></div>';
            }
            ?>
</div>