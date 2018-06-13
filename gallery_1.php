<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="description" content="Taxi Grabber - HTML Template">
        <meta name="author" content="Coffeecream Themes, info@coffeecream.eu">
        <title>Taxi Grabber - HTML Template</title>
        <link rel="shortcut icon" href="images/favicon.png">
        <link href="lightbox/css/lightbox.css" rel="stylesheet" type="text/css"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet">

        <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
        <link href="css/light.css" rel="stylesheet" type="text/css"/>
        <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>




<!--        <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/C55B900D-718B-464C-B840-9B201EC9C97B/main.js" charset="UTF-8"></script></head>
        -->    <body>

        <?php include './header.php'; ?>
        <!--        header close-->
        <?php include './half-slider.php'; ?>

        <!--gallery-->
        <section id="gallery">
            <div class="container">
                <div class="gallery">
                    <a href="images/images/image1.jpg" class="big"><img src="images/images/thumbs/thumb1.jpg" alt="" title="Beautiful Image" /></a>
                    <a href="images/images/image2.jpg"><img src="images/images/thumbs/thumb2.jpg" alt="" title=""/></a>
                    <a href="images/images/image3.jpg"><img src="images/images/thumbs/thumb3.jpg" alt="" title="Beautiful Image"/></a>
                    <a href="images/images/image4.jpg"><img src="images/images/thumbs/thumb4.jpg" alt="" title=""/></a>
                    <div class="clear"></div>

                    <a href="images/images/image5.jpg"><img src="images/images/thumbs/thumb5.jpg" alt="" title=""/></a>
                    <a href="images/images/image6.jpg"><img src="images/images/thumbs/thumb6.jpg" alt="" title=""/></a>
                    <a href="images/images/image7.jpg" class="big"><img src="images/images/thumbs/thumb7.jpg" alt="" title=""/></a>
                    <a href="images/images/image8.jpg"><img src="images/images/thumbs/thumb8.jpg" alt="" title=""/></a>
                    <div class="clear"></div>

                    <a href="images/images/image9.jpg" class="big"><img src="images/images/thumbs/thumb9.jpg" alt="" title=""/></a>
                    <a href="images/images/image10.jpg"><img src="images/images/thumbs/thumb10.jpg" alt="" title=""/></a>
                    <a href="images/images/image11.jpg"><img src="images/images/thumbs/thumb11.jpg" alt="" title=""/></a>
                    <a href="images/images/image12.jpg"><img src="images/images/thumbs/thumb12.jpg" alt="" title=""/></a>
                    <div class="clear"></div>
                </div>
            </div>
        </section>
        <!--gallery close-->

        <!--footer strat-->
        <?php include './footer.php'; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/picker.js"></script>
        <script src="js/picker.date.js"></script>
        <script src="js/picker.time.js"></script>
        <script src="js/uber-google-maps.min.js"></script>
        <script src="js/settings.js"></script>

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript">/* <![CDATA[ */(function (d, s, a, i, j, r, l, m, t) {
                try {
                    l = d.getElementsByTagName('a');
                    t = d.createElement('textarea');
                    for (i = 0; l.length - i; i++) {
                        try {
                            a = l[i].href;
                            s = a.indexOf('/cdn-cgi/l/email-protection');
                            m = a.length;
                            if (a && s > -1 && m > 28) {
                                j = 28 + s;
                                s = '';
                                if (j < m) {
                                    r = '0x' + a.substr(j, 2) | 0;
                                    for (j += 2; j < m && a.charAt(j) != 'X'; j += 2)
                                        s += '%' + ('0' + ('0x' + a.substr(j, 2) ^ r).toString(16)).slice(-2);
                                    j++;
                                    s = decodeURIComponent(s) + a.substr(j, m - j)
                                }
                                t.innerHTML = s.replace(/</g, '&lt;').replace(/>/g, '&gt;');
                                l[i].href = 'mailto:' + t.value
                            }
                        } catch (e) {
                        }
                    }
                } catch (e) {
                }
            })(document);/* ]]> */</script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="js/simple-lightbox.min.js" type="text/javascript"></script>
        <!--light box script-->
        <script>
                    $(function () {
                        var $gallery = $('.gallery a').simpleLightbox();

                        $gallery.on('show.simplelightbox', function () {
                            console.log('Requested for showing');
                        })
                                .on('shown.simplelightbox', function () {
                                    console.log('Shown');
                                })
                                .on('close.simplelightbox', function () {
                                    console.log('Requested for closing');
                                })
                                .on('closed.simplelightbox', function () {
                                    console.log('Closed');
                                })
                                .on('change.simplelightbox', function () {
                                    console.log('Requested for change');
                                })
                                .on('next.simplelightbox', function () {
                                    console.log('Requested for next');
                                })
                                .on('prev.simplelightbox', function () {
                                    console.log('Requested for prev');
                                })
                                .on('nextImageLoaded.simplelightbox', function () {
                                    console.log('Next image loaded');
                                })
                                .on('prevImageLoaded.simplelightbox', function () {
                                    console.log('Prev image loaded');
                                })
                                .on('changed.simplelightbox', function () {
                                    console.log('Image changed');
                                })
                                .on('nextDone.simplelightbox', function () {
                                    console.log('Image changed to next');
                                })
                                .on('prevDone.simplelightbox', function () {
                                    console.log('Image changed to prev');
                                })
                                .on('error.simplelightbox', function (e) {
                                    console.log('No image found, go to the next/prev');
                                    console.log(e);
                                });
                    });
        </script>

    </body>
</html>