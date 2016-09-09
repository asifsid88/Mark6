(function(window, document) {

$('.mark6-catalog-product').on('click', function() {
    var productId = $(this).attr('data-attr-productId');
    var url = '/product.php?pid=' + productId;

    window.location.href = url;
});

$('.mark6-catalog-product-img').on('mouseover', function() {
    $(this).children('.mark6-catalog-product-img-hover').css('display', 'block');
});

$('.mark6-catalog-product-img').on('mouseout', function() {
    $(this).children('.mark6-catalog-product-img-hover').css('display', 'none');
});

})(this, this.document);