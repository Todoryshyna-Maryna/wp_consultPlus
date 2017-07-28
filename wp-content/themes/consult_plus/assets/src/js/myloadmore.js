
jQuery(function($){
    $('.misha_loadmore').click(function(){

        var button = $(this),
            data = {
                'action': 'loadmore',
                'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
                'page' : misha_loadmore_params.current_page
            };

        $.ajax({
            url : misha_loadmore_params.ajaxurl, // AJAX handler
            data : data,
            type : 'POST',
            dataType: 'html',
            beforeSend : function ( xhr ) {
                button.text('Loading...'); // change the button text, you can also add a preloader image
            },
            success : function( data ){
                if( data ) {
                    button.text( 'More posts' ).prev().before(data); // insert new posts
                    misha_loadmore_params.current_page++;

                    // $.each(data);
                    // $('div.m-container.grid').append(data);
                    $(document).ready(function () {
                        var $content = $(data);
                        $grid.append( $content ).isotope( 'appended', $content );

                    })

                    if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page )
                        button.remove(); // if last page, remove the button
                } else {
                    button.remove(); // if no data, remove the button as well
                }
            }

        });
    });
});