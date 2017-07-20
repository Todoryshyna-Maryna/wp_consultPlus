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
});