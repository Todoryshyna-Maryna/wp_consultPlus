/**
 * Created by im on 7/13/17.
 */

var $j = jQuery.noConflict();
$j(document).ready(function () {
    $j('.grid').isotope({
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

$j(document).ready(function () {
    $j('.grid-projects').isotope({
        itemSelector: '.grid-projects-item',
        layoutMode: 'masonry',
        masonry: {
            gutter: 25,
            columnWidth: '.projects-page_post'
        }
    })
})