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
    

    <div class="logo">
                <a href="index.php"><img class="responsive" src="images/background_UNESCO.png" alt="s"  /></a>
            </div>

            <div class="top-title">
                <h2>World Heritage Sites</h2>
            </div>

        <div class="header">
            <div class="menu-header">
            
            <i class="fa fa-bars"></i>

            <div class="menu-content">
                <ul>
                    <li><a class="nav" href='index.php'>Home</a></li>
                    <li><a class="nav" href='#'>Random</a></li>
                    <li><a class="nav dropbtn" href='#'>Gallery <i class="fa fa-chevron-down"></i></a>
                        <ul class="dropdown">
                            <li><a class="nav" href="index.php?page=africa">Africa</a></li>
                            <li><a class="nav" href="index.php?page=asia">Asia</a></li>
                            <li><a class="nav" href="#">Europe</a></li>
                            <li><a class="nav" href="#">North America</a></li>
                            <li><a class="nav" href="#">Oceania</a></li>
                            <li><a class="nav" href="#">South America</a></li>

                        
                        </ul>
                    
                    
                    </li>
                    <li><a class="nav" href='index.php?page=links'>Links</a></li>
                    <li><a class="nav" href='#'>UNESCO</a></li>
                    <li><a class="nav" href='#'>Contact</a></li>

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
       

        <div class="box footer">
            CC Woo-Jin Jeon 2021
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
