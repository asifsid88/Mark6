(function(window, document) {

$('.mark6-thumbnail-img').on('hover', function(e) {
    var hoverImg = $(this).attr('src');
    var currentImg = $('#mark6-product-detail-img').attr('src');
    if(currentImg != hoverImg) {
        $('#mark6-product-detail-img').attr('src', hoverImg);
    }
});

})(this, this.document);