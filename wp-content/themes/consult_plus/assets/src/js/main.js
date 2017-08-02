/**
 * Created by im on 7/13/17.
 */

var $grid;
var $ = jQuery.noConflict();
$(document).ready(function () {
   $grid = $('.grid').isotope({
        // options
        itemSelector: '.grid-item',
        layoutMode: 'masonry',
        fitWidth: true,
        masonry: {
            gutter: 20,
            columnWidth: '.item'
        }
    });
})

$(document).ready(function () {
    $('.grid-projects').isotope({
        itemSelector: '.grid-projects-item',
        layoutMode: 'masonry',
        masonry: {
            gutter: 25,
            columnWidth: '.projects-page_post'
        }
    })
});

// $(document).ready(function () {
//     if ($('.grid-item>.entry-content>.gallery')) {
//         $('.grid-item>.entry-content>.gallery').css('display', 'none');
//     }
// })

$(document).ready(function () {
    var currentWidth = $('.m-single-post_content_text>p').width();
    if ($('.gallery-1')) {
        $('.m-single-post_content_text>p').css("marginLeft", 90 + 'px');
        $('.m-single-post_content_text>p').css("width", currentWidth - 50 + 'px');
    }
});