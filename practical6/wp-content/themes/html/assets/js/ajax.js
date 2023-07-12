jQuery (document ).ready(function() {
	var cuurrpage = 1;
    // jQuery( ".ajax_loadmore" ).on( "click", function() {
	jQuery('#loadbutton').click(function(){
            var max_num_pages = jQuery('.max').val();
            // alert(max_num_pages);
		    data = {
			'action': 'post_loadmore_ajax',
			'page': cuurrpage+1,
            'featured_posts_id' : kaushal.featured_posts_id
		}; 
		jQuery.ajax({ 
			url : kaushal.ajaxurl, 
			data : data,
			type : 'POST',
			success : function( data ){
				if(data){

					jQuery(".ajax_loadmore").append(data);
					cuurrpage++;
				if(max_num_pages == cuurrpage){
                    $("#loadbutton").hide();
                }
                } 				
			}
		});
	});	
});