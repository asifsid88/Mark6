<link rel="stylesheet" type="text/css" href="src/css/search-page.css" />

<?php
        $fileName = "catalog";
        $fileData = file_get_contents('models/' . $fileName . '.json');
        $catalog = json_decode($fileData, true);
        ?>

<div id="mark6-main-container-wrapper">
    <div id="mark6-main-container">
        <?php include('modules/search.php'); ?>
        <?php include('modules/footer.php'); ?>
    </div>
</div>

<script type="text/javascript" src="src/javascript/search-page.js"></script>