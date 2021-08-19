<?php

function make_gallery ($folder_name) {

    $dirname = "images/$folder_name/";
    $img = glob($dirname."*.jpg");

    foreach ($img as $img) {
        $path_parts = pathinfo($img);
        if (!empty($path_parts['filename'])) 
            $exif_description = $path_parts['filename'];
            
        ?>
        
    <div class="responsive-gallery">

    <div class="gallery">

    <a href="<?php echo $img; ?>" class="big">
        <img src ="<?php echo $img; ?>" alt="<?php echo $exif_description; ?>" title="<?php echo $exif_description; ?>" />
    </a>

</div>

</div>

        <?php   

    }


}

?>