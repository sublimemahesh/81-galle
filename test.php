<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Galle My Bungalow| Gallery </title>
        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!--Color Switcher Mockup-->
        <link href="css/color-switcher-design.css" rel="stylesheet">

        <!--Color Themes-->
        <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    </head>
    <body>
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>
            <!-- Main Header-->
            <?php include './header-index.php' ?>
            <!--End Main Header -->
            <!--Page Title-->
            <?php
            $BANNER = Banner::all();
            foreach ($BANNER as $key => $banner) {
                ?>
                <section class="page-title" style="background-image:url(./upload/banner/<?php echo $banner['image_name']; ?>)">
                    <div class="auto-container">
                        <h1>Galle My Bungalow Gallery </h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </section>
                <?php
            }
            ?>
            <!--End Page Title-->
            <!--Gallery Page Section-->
            <section class="gallery-page-section">
                <div class="auto-container">
                    <!--Sec Title-->
                    <!--MixitUp Galery-->
                    <div class="mixitup-gallery">
                        <div class="auto-container">
                            <!--Filter-->
                            <div class="filters text-center clearfix">
                                <ul class="filter-tabs filter-btns clearfix">
                                    <li class="active filter" data-role="button" data-filter="all"><a>All</a></li>
                                    <?php
                                    foreach (PhotoAlbum::all()as $key => $album) {
                                        ?>
                                        <li class="filter" data-role="button" data-filter=".album_<?php echo $album['id']; ?>" id="album_<?php echo $album['id']; ?>"><a><?php echo $album['title']; ?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-list row clearfix">
                            <!--Gallery Block Five-->
                            <?php
                            foreach (AlbumPhoto::all()as $key => $photo) {
                                ?>
                                <div class="gallery-block-five col-md-4 col-sm-6 col-xs-12 mix all album_<?php echo $photo['album']; ?>">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <img src="upload/photo-album/gallery/<?php echo $photo['image_name']; ?>" alt="">
                                            <!--Overlay Box-->
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <a href="images/Room 1/1.jpg" data-fancybox="images" data-caption="" class="link"><span class="icon flaticon-plus"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="btn-box text-center">
                        <div class="btn-box">
                            <a href="" class="theme-btn btn-style-two">Load More</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Gallery Page Section-->
            <!--Main Footer-->
            <?php include './footer.php'; ?>
        </div>
        <!--End pagewrapper-->
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
        <!-- Color Palate / Color Switcher -->
        <div class="color-palate">
            <div class="color-trigger">
                <i class="fa fa-gear"></i>
            </div>
            <div class="color-palate-head">
                <h6>Choose Your Color</h6>
            </div>
            <div class="various-color clearfix">
                <div class="colors-list">
                    <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
                    <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
                    <span class="palate pink-color" data-theme-file="css/color-themes/pink-theme.css"></span>
                    <span class="palate navy-color" data-theme-file="css/color-themes/navy-theme.css"></span>
                    <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
                    <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
                    <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
                    <span class="palate red-color" data-theme-file="css/color-themes/red-theme.css"></span>
                </div>
            </div>

            <div class="palate-foo">
                <span>You can easily change and switch the colors.</span>
            </div>

        </div>
        <!-- /.End Of Color Palate -->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/mixitup.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/script.js"></script>
        <!--Color Switcher-->
        <script src="js/color-settings.js"></script>
    </body>
</html>

