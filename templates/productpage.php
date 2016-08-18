<link rel="stylesheet" type="text/css" href="src/css/product-page.css" />

<?php
        $fileName = $_REQUEST["pid"];
        if(!isset($fileName)) {
            Utility::redirect();
        }

        $fileName = strtoupper($fileName);
        $fileData = file_get_contents('models/products/' . $fileName . '.json');

        if($fileData == null) {
            Utility::redirect();
        }

        $product = json_decode($fileData, true);
        ?>

<div id="mark6-main-container-wrapper">
    <div id="mark6-main-container">
        <?php include('modules/product.php'); ?>
    </div>
</div>

<script type="text/javascript" src="src/javascript/product-page-thumbnail.js"></script>
