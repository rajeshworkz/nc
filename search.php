<?php include './includes/header.php' ?>
    <?php include './includes/nav.php' ?>

        <section class="m-0">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb nutri-breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="main-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-result">
                            <h5>suggested</h5>
                            <p>Smart Pro</p>
                            <hr>

                        </div>

                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12 m-auto">

                        <div class="row nutri-tabs">
                            <!--<div class="col-md-2"></div>            -->
                            <div class="col-md-12 pl-5 pr-5">

                                <ul id="tabsJustified" class="row nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="" data-target="#tab1" data-toggle="tab" class="nav-link active pl-0">
                                                        All Results <span>(12)</span>
                                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">
                                                        Products <span>(4)</span>
                                                    </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="" data-target="#tab3" data-toggle="tab" class="nav-link">
                                                   Recipes <span>(4)</span>
                                                    </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="" data-target="#tab4" data-toggle="tab" class="nav-link">
                                                        Getting Started <span>(4)</span>
                                                    </a>
                                    </li>

                                </ul>

                            </div>
                            <!--<div class="col-md-2"></div>            -->

                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane  fade active show" id="tab1">
                                <div class="search-tabs">
                                    <h4>Products.</h4>
                                <div class="row">
                                    <?php include './includes/product-4.php' ?>
                                        <?php include './includes/product-4.php' ?>
                                            <?php include './includes/product-4.php' ?>
                                                <?php include './includes/product-4.php' ?>
                                </div>

                                <?php include 'includes/pagination.php' ?>
                                </div>
                                 <div class="search-tabs">
                                     <h4>Recipes.</h4>
                                    <div class="row">
                                        <?php include 'includes/recipes-4.php' ?>
                                            <?php include 'includes/recipes-4.php' ?>
                                                <?php include 'includes/recipes-4.php' ?>
                                                    <?php include 'includes/recipes-4.php' ?>

                                    </div>
                                    <?php include 'includes/pagination.php' ?>
                                </div>
                                 <div class="search-tabs">
                                       <h4>Getting started.</h4>
                                        <div class="row">

                                            <?php include 'includes/video.php' ?>
                                                <?php include 'includes/video.php' ?>
                                                    <?php include 'includes/video.php' ?>
                                                        <?php include 'includes/video.php' ?>

                                        </div>
                                        <?php include 'includes/pagination.php' ?>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab2">
                                 <div class="search-tabs">
                                <div class="row">
                                    <?php include './includes/product-4.php' ?>
                                        <?php include './includes/product-4.php' ?>
                                            <?php include './includes/product-4.php' ?>
                                                <?php include './includes/product-4.php' ?>
                                </div>
                                <?php include 'includes/pagination.php' ?>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="tab3">
                                 <div class="search-tabs">
                                <div class="row">
                                    <?php include 'includes/recipes-4.php' ?>
                                        <?php include 'includes/recipes-4.php' ?>
                                            <?php include 'includes/recipes-4.php' ?>
                                                <?php include 'includes/recipes-4.php' ?>

                                </div>
                                <?php include 'includes/pagination.php' ?>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="tab4">
                                 <div class="search-tabs">
                                <div class="row">

                                    <?php include 'includes/video.php' ?>
                                        <?php include 'includes/video.php' ?>
                                            <?php include 'includes/video.php' ?>
                                                <?php include 'includes/video.php' ?>

                                </div>
                                <?php include 'includes/pagination.php' ?>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <?php include './includes/footer.php' ?>