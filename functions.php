<?php
function make_gallery ($folder_name) {

    $dirname = "images/$folder_name/";
    $img = glob($dirname."*.jpg");

    foreach ($img as $img) {
        $path_parts = pathinfo($img);
        if (!empty($path_parts['filename'])) 
            $exif_description = $path_parts['filename'];
            
        @$exif = exif_read_data($img, 0, true);
        foreach ($exif as $key => $section) {
            foreach ($section as $name => $val) {
                if($key =='IFD0' and $name =='Title'){
                    $val = mb_convert_encoding($val, "UTF-8","byte2le");
                    $val = preg_replace ('/{^A-Za-z0-9\- ()]/', '', $val);
                    $title = substr("$val",0, -1);
                    

                
                }
            }
        }
    
        ?>
        
    <div class="responsive-gallery">

    <div class="gallery">

    <a href="<?php echo $img; ?>" class="big">
        <img src ="<?php echo $img; ?>" alt="<?php echo $exif_description; ?>" title="<?php echo $exif_description; ?>  <br /><br /> <?php echo $title; ?>" />
    </a>

</div>

</div>

        <?php   

    }


}

?>