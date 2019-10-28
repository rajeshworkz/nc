<?php include './includes/header.php' ?>
    <?php include './includes/nav.php' ?>

        <section class="body">

            <section class="hero-slider">
                <div class="owl-carousel  image owl-theme">
                    <div class="sliderItem">
                        <div class="sliderBg">

                            <div class="d-none d-lg-block"> <img class="desktop" src="common/images/temp1.png"> </div>
                            <div class="d-none d-sm-block d-lg-none"><img class="tablet" src="common/images/tab.png"> </div>
                            <div class="d-block d-sm-none"><img class="mobile" src="common/images/mob.png"> </div>

                        </div>
                        <div class="sliderInfo">
                            <div class="container">
                                <div class="right content">
                                    <h3 class="main-color">Life is complicated.</h3>
                                    <p>Eating healthy doesn’t have to be.
                                        <br> From the creators of nutrient extraction comes Next level cooking.</p>
                                    <a href="#" class="btn btn-nutri-1">Buy Now</a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </section>

            <?php include './includes/value.php' ?>
                <?php include './includes/hero-slider.php' ?>

                    <section class="reviews">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="content">
                                        <h3 class="main-color">Reviews.</h3>

                                        <p>
                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris eget dignissim nisl. Aenean vitae consequat ante.
                                        </p>

                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <div class="row">
                                        <!--<div class="col-md-2"></div>            -->
                                        <div class="col-sm-12 col-lg-8 m-auto">

                                            <ul id="tabsJustified" class="row nav nav-tabs">
                                                <li class="nav-item col-4 p-xs-0">
                                                    <a href="" data-target="#tab1" data-toggle="tab" class="nav-link">
                                                        <img src="common/images/gulfnews@2x.png">
                                                    </a>
                                                </li>
                                                <li class="nav-item  col-4 p-xs-0">
                                                    <a href="" data-target="#tab2" data-toggle="tab" class="nav-link active">
                                                        <img src="common/images/womenshealth@2x.png">
                                                    </a>
                                                </li>
                                                <li class="nav-item  col-4 p-xs-0">
                                                    <a href="" data-target="#tab3" data-toggle="tab" class="nav-link">
                                                        <img src="common/images/national@2x.png">

                                                    </a>
                                                </li>
                                            </ul>

                                            <hr/>

                                        </div>
                                        <!--<div class="col-md-2"></div>            -->

                                    </div>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane  fade" id="tab1">

                                            <?php include './includes/reviews.php' ?>

                                        </div>
                                        <div class="tab-pane fade active show" id="tab2">

                                            <?php include './includes/reviews.php' ?>

                                        </div>
                                        <div class="tab-pane fade" id="tab3">

                                            <?php include './includes/reviews.php' ?>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </section>

                    <?php include './includes/box-menu.php' ?>

                        <?php include './includes/instagramfeeds.php' ?>

        </section>

        <?php include './includes/footer.php' ?>