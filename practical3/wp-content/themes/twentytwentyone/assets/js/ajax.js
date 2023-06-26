jQuery (document ).ready(function() {
	var cuurrpage = 1;
	jQuery('.loadmore').click(function(){

		    data = {
			'action': 'post_loadmore_ajax',
			'page': cuurrpage+1
		}; 
		
		jQuery.ajax({ 
			url : kaushal.ajaxurl, 
			data : data,
			type : 'POST',
			success : function( data ){
				if(data){

					jQuery(".ajax_loadmore").append(data);
					cuurrpage++;
				}
				
			}
		});
	});	
});



//////

jQuery(function(jQuery){ // use jQuery code inside this to avoid "jQuery is not defined" error
	jQuery('.loadmore').click(function(){
 
		var button = jQuery(this),
		    data = {
			'action': 'post_loadmore_ajax',
			// 'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
			// 'page' : misha_loadmore_params.current_page
		};
 
		jQuery.ajax({ // you can also use jQuery.post here
			url : kaushal.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) { 
					button.text( 'More posts' ).prev().before(data); // insert new posts
					misha_loadmore_params.current_page++;
 
					if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page ) 
						button.remove(); // if last page, remove the button
 
					// you can also fire the "post-load" event here if you use a plugin that requires it
					// jQuery( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	});
});