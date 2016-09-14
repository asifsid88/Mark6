(function(window, document) {

$('.mark6-thumbnail-img').on('hover', function(e) {
    var hoverImg = $(this).attr('src');
    var currentImg = $('#mark6-product-detail-img').attr('src');
    if(currentImg != hoverImg) {
        $('#mark6-product-detail-img').attr('src', hoverImg);
    }
});

$('.mark6-marketplace').on('click', function() {
    var url = $(this).attr('data-attr-link');
    var shopUrls = url.split(";");
    var selectedSize = $('.size-selected').attr('data-attr-size-value');

    var shopUrl = shopUrls[selectedSize] == null || shopUrls[selectedSize] == "undefined" ? shopUrls[0] : shopUrls[selectedSize];

    var win = window.open(shopUrl, '_blank');
    win.focus();
});

$('.size').on('click', function() {
    $('.size').removeClass('size-selected');
    $(this).addClass('size-selected');
});

})(this, this.document);