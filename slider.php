<section>
    <div class="csi-slider">
        <div class="csi-banner-style">
            <div class="csi-inner">

                <div id="csi-main-slider" class="owl-carousel ">

                    <!--SLIDER ITEM 1-->
                    <?php
                    $slider = Slider::all();
                    foreach ($slider as $img) {
                        ?>
                        <div class="csi-item-common csi-item-left">

                            <div class="col-sm-12g">
                                <div class="slider-text-single">
                                    <figure>
                                        <img src="upload/slider/<?php echo $img['image_name']; ?>" alt="slider"/>
                                        <figcaption>
                                            <div class="figcaption-inner">
                                                <div class="csi-container csi-banner-content">
                                                    <div class="csi-hover-link">
                                                        <div class="csi-vertical">
                                                            <h3 class="csi-subtitle csi-zoomIn-one">Hot & Spicy</h3>
                                                            <h2 class="csi-title csi-zoomIn-two">Delicious Food</h2>
                                                            <div class="btn-area csi-zoomIn-three">
                                                                <a class="csi-btn" href="#csi-reservation">Book A Table</a>
                                                                <a class="csi-btn csi-btn-white" href="#csi-menu">Our Menu</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div> <!--//.col-->
                        </div>
                        <?php
                    }
                    ?>
                    <!--SLIDER ITEM 1 End-->



                </div> <!--//.csi-main-slider-->
                <!-- //.CONTAINER -->
            </div>
            <!-- //.INNER -->
        </div>
    </div>
</section>