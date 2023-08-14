jQuery(document).ready(function($) {
    // Handle delete action
    $('.delete-post').click(function(e) {
        e.preventDefault();
        
        if (confirm('Are you sure you want to delete this post?')) {
            var postId = $(this).data('post-id');
            
            $.ajax({
                type: 'POST',
                url: customAjax.ajaxurl,
                data: {
                    action: 'delete_custom_post',
                    post_id: postId,
                },
                success: function(response) {
                    // Remove the deleted row from the table
                    $('#post-' + postId).remove();
                },
            });
        }
    });
});