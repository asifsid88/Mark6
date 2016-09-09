(function(window, document) {

$('.mark6-catalog-product').on('click', function() {
    var productId = $(this).attr('data-attr-productId');
    var url = '/product.php?pid=' + productId;

    window.location.href = url;
});

})(this, this.document);