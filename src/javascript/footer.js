(function(window, document) {

$('.social').on('click', function() {
    var url = $(this).attr('data-attr-link');
    var win = window.open(url, '_blank');
    win.focus();
});

})(this, this.document);