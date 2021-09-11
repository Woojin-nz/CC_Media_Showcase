<!DOCTYPE HTML>
<?php
    include("functions.php");

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Creative Commons Showcase">
    <meta name="keywords" content="Creative Commons, images, gallery, World heritage sites">
    <meta name="author" content="Woo-jin Jeon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>World Heritage Sites</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/simple-lightbox.css"> 
    <link rel="stylesheet" href="css/gallery.css">


    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/layout.css"> 
    <link rel="stylesheet" href="css/navigation.css"> 

    <!-- Link to JQuery -->
    <script src="js/j_query_min.js"></script>

    
</head>
    
<body>
    
    <div class="wrapper">
    


            <div class="top-title">
                <h2><a class="text-decoration" href="index.php" style="color: white">World Heritage Sites</a></h2>
            </div>

        <div class="header">
            <div class="menu-header">
            
            <i class="fa fa-bars"></i>

            <div class="menu-content">
                <ul>
                    <li><a class="text-decoration" href="index.php?page=africa" style="color: white">Africa</a></li>
                    <li><a class="text-decoration" href="index.php?page=asia" style="color: white">Asia</a></li>
                    <li><a class="text-decoration" href="index.php?page=europe"style="color: white">Europe</a></li>
                    <li><a class="text-decoration" href="#" style="color: white">North America</a></li>
                    <li><a class="text-decoration" href="#" style="color: white">Oceania</a></li>
                    <li><a class="text-decoration" href="#" style="color: white">South America</a></li>
        
                </ul>

            </div>

            </div>
        </div>

        <?php
       if (!isset($_REQUEST['page'])) {
           include("home.php");
       }

       else{
           $page=preg_replace('/[^0-9a-zA-Z]-/','',$_REQUEST['page']);
           include("$page.php");
       }
       ?>
       

        <div class="footer">
            <div class="menu-footer">
            <a class="text-decoration" href='index.php?page=CC' style="color: white">Creative Commons</a>     
            <a class="text-decoration" href='index.php?page=links' style="color: white">Links</a>
            <a class="text-decoration" href='#' style="color: white">UNESCO</a>
            <a class="text-decoration" href='#' style="color: white">Contact</a>
            <p>CC Woo-Jin Jeon 2021</p>
            </div>

        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper  -->
<script>
    $('.dropbtn').click(function()
        {
            $('.dropdown').toggleClass('display');
        }
    )

    // Make navigation button clickable

    $('.fa-bars').click(function()
    {
        $('.menu-content').toggle();
    })


</script>

<script src="js\simple-lightbox.min.js"></script>

<script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
</script>

</body>        
