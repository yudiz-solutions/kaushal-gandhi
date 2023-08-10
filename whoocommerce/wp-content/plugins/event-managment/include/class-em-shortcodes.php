<?php 

class Em_Shortcode{


    public function __construct(){
        add_shortcode('event_registration_from',array($this,'em_render_event_registration_from'));
       
    }
    

    public function em_render_event_registration_from(){
        ob_start();
        ?>   
        <h2>Submit Form</h2>  
        <form action="" method="post" enctype="multipart/form-data">
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" required><br><br>
            
            <label for="content">Content:</label><br>
            <textarea id="content" name="content" rows="4" cols="50" required></textarea><br><br>
            
            <label for="image">Image:</label><br>
            <input type="file" id="image" name="image" accept="image/*" required><br><br>
            
            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date" required><br><br>
            
            <input type="submit"  name="event_registration" value="Submit">
        </form> 
        
    <?php
        return ob_get_clean();
    }
}