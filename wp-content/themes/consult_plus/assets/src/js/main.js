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