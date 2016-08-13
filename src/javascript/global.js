(function (window, document) {
function fadeProduct(element) {
    $('.mark6-product').stop();
    [].forEach.call(
        document.querySelectorAll('.mark6-product'),
        function(el) {
            if(el === element) {
                $(el).fadeTo("fast", 1.0);
            } else {
                $(el).fadeTo("slow", 0.6);
            }
        }
    );
}

function showProduct() {
    $('.mark6-product').stop();
    $('.mark6-product').fadeTo("fast", 1.0);
}

$('.mark6-product').on('click mouseover', function (e) {
    fadeProduct(this);
});

$('.mark6-product-grid').on('mouseleave', function (e) {
    showProduct();
});

})(this, this.document);