$(window).load(function() {
    var ulHeight = $('ul.slides').height() + 'px';
    $('#mark6-main-container-wrapper').css('top', ulHeight);
    $('.slider_container').attr('style','-webkit-filter: none; -o-filter: none; -moz-filter: none; -ms-filter: none');
});

(function (window, document) {
var WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':'resize';

function setMark6MainContainerWrapperTop() {
    var ulHeight = $('ul.slides').height() + 'px';
    $('#mark6-main-container-wrapper').css('top', ulHeight);
};

window.addEventListener(WINDOW_CHANGE_EVENT, setMark6MainContainerWrapperTop);
})(this, this.document);