<?php

class Em_Public
{
    public function __construct()
    {


        add_action('init', array($this, 'em_event_registration'));
    }

    public function em_event_registration()
    {

        if (isset($_POST['event_registration'])) {

            $title = isset($_POST['title']) ? $_POST['title'] : '';
            $content = isset($_POST['content']) ? $_POST['content'] : '';
            $date = isset($_POST['date']) ? $_POST['date'] : '';


            $post_data =  array(
                'post_title' => $title,
                'post_type' => 'event',
                'post_content' => $content,
                'post_status' => 'publish'
            );


            $id = wp_insert_post($post_data);
            if ($id) {
                update_post_meta($id, 'event_date', $date);

                $upload = wp_upload_bits($_FILES["image"]["name"], null, file_get_contents($_FILES["image"]["tmp_name"]));


                $filename = $upload['file'];
                $uploaddir = wp_upload_dir();


                $uploadfile = $uploaddir['basedir'] . '/' . 'custom-uploads' . '/';

                move_uploaded_file($filename, $uploadfile);  // (file name , designation)

                $wp_filetype = wp_check_filetype($filename, null);
                $attachment = array(
                    'post_mime_type' => $wp_filetype['type'],
                    'post_title' => sanitize_file_name($filename),
                    'post_content' => '',
                    'post_status' => 'inherit'
                );
                $attach_id = wp_insert_attachment($attachment, $filename, $id);
                require_once(ABSPATH . 'wp-admin/includes/image.php');
                $attach_data = wp_generate_attachment_metadata($attach_id, $filename);

                wp_update_attachment_metadata($attach_id, $attach_data);
                set_post_thumbnail($id, $attach_id);  // set post thumnail (featured image) for the given post
                wp_redirect(home_url('/thank-you/'));
                die;
            }


            // Inser post code here

        }
    }
}
