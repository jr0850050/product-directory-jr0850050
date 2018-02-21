var classHighlight = 'highlight';
var $thumbs = $('.thumbnail').click(function(e) {
    e.preventDefault();
    $thumbs.removeClass(classHighlight);
    $(this).addClass(classHighlight);
});
