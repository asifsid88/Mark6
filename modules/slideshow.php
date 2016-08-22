<link rel="stylesheet" type="text/css" href="src/css/slideshow.css" media="all" />

<div class="slider_container">
    <div class="flexslider">
        <ul class="slides">
            <?php
                    $fileData = file_get_contents('models/slideshow.json');
                    $slideshowData = json_decode($fileData, true);
                    foreach($slideshowData as $slideshow) {
                        echo '<li>
                                <a href="#"><img src="' . $slideshow["imageUrl"] . '" alt="' . $slideshow["altText"] . '" title="' . $slideshow["altText"] . '" /></a>
                                <div class="flex-caption">
                                    <div class="caption_title_line">
                                        <h2>' . $slideshow["caption"]["title"] . '</h2>
                                        <p>' . $slideshow["caption"]["description"] . '</p>
                                    </div>
                                </div>
                            </li>';
                    }
                    ?>
        </ul>
    </div>
</div>

<script type="text/javascript" src="src/javascript/slideshow.js"></script>