(function(window, document) {

$('.mark6-catalog-product-img').on('mouseover', function() {
    $(this).children('.mark6-catalog-product-img-hover').css('display', 'block');
});

$('.mark6-catalog-product-img').on('mouseout', function() {
    $(this).children('.mark6-catalog-product-img-hover').css('display', 'none');
});

$('.size').on('click', function() {
    var productId = $(this).attr('data-attr-productId');
    var sizeId = $(this).attr('data-attr-size-value');
    var url = '/product.php?pid=' + productId + '&size=' + sizeId;

    window.location.href = url;
});

})(this, this.document);