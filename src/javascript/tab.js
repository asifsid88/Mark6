(function (window, document) {

function toggleActiveClass(element) {
    $('.mark6-tabs').removeClass('mark6-tabs-active');
    $(element).addClass('mark6-tabs-active');
}

function openTab(element) {
    toggleActiveClass(element);
    var tabContentId = '#' + $(element).attr('id') + '-content';

    $('.mark6-tabs-content').addClass('hide');
    $('.mark6-tabs-content').removeClass('show');

    $(tabContentId).removeClass('hide');
    $(tabContentId).addClass('show');
}

$('.mark6-tabs').on('click', function (e) {
    openTab(this);
});

$('#tab1').trigger('click');

})(this, this.document);