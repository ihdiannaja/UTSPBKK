
<!-- slider area start -->
<div class="hero-area">
    <div class="hero-slider-active slider-arrow-style slick-dot-style hero-dot">
        <div class="hero-single-slide hero-1 d-flex align-items-center" style="background-image: url(assets/image/bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="slider-content">
                            <h1>Elzara Online Shopping</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-single-slide hero-1 d-flex align-items-center" style="background-image: url(assets/image/bg2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="slider-content">
                            <h1>Temukan Batik favoritmu disini</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider area end -->

<!-- banner feature start -->
<div class="banner-feature-area bg-navy-blue pt-62 pb-60 pt-sm-56 pb-sm-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="banner-single-feature text-center mb-sm-30">
                    <i class="ion-paper-airplane"></i>
                    <h4>FREE SHIPPING & DELIVERY</h4>
                    <p>We’re one of the furniture online retailers, who offer free of charge delivery</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="banner-single-feature text-center mb-sm-30">
                    <i class="ion-ios-time-outline"></i>
                    <h4>365-DAY HOME TRIAL</h4>
                    <p>Our unique return policy will allow you to return furniture for almost a year</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="banner-single-feature text-center mb-sm-30">
                    <i class="ion-trophy"></i>
                    <h4>LIFETIME WARRANTY</h4>
                    <p>Purchasing furniture with us comes with warranty, than anyone else offers!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner feature end -->

<!-- feature category area start -->
<div class="feature-category-area pt-96 pb-14 pt-md-114 pt-sm-54 pb-sm-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-menu-one mb-58">
                    <ul class="nav justify-content-center">
                        <li>
                            <a class="active" data-toggle="tab" href="#tab_one">For Men</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab_two">For Women</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab_three">For Kids</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content text-center">
                    <div class="tab-pane fade show active" id="tab_one">
                        <div class="row feature-category-carousel slick-arrow-style spt">
                            <?php foreach ($forMen as $prod) { ?>
                            <div class="col">
                                <div class="product-item mb-20">
                                    <div class="product-thumb">
                                        <a href="<?php echo base_url('products/').$prod->id ?>">
                                            <img src="<?php echo $prod->pimg ?>" alt="product image">
                                        </a>
                                    </div>
                                    <div class="product-description text-center">
                                        <div class="product-name">
                                            <h3><a href="<?php echo base_url('products/').$prod->id ?>"><?php echo $prod->pn ?></a></h3>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">Rs. <?php echo $prod->psp ?></span>
                                            <span class="old-price"><del>Rs. <?php echo $prod->prp ?></del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_two">
                        <div class="row feature-category-carousel slick-arrow-style spt">

                            <?php foreach ($forWomen as $prod) { ?>
                            <div class="col">
                                <div class="product-item mb-20">
                                    <div class="product-thumb">
                                        <a href="<?php echo base_url('products/').$prod->id ?>">
                                            <img src="<?php echo $prod->pimg ?>" alt="product image">
                                        </a>
                                    </div>
                                    <div class="product-description text-center">
                                        <div class="product-name">
                                            <h3><a href="<?php echo base_url('products/').$prod->id ?>"><?php echo $prod->pn ?></a></h3>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">Rs. <?php echo $prod->psp ?></span>
                                            <span class="old-price"><del>Rs. <?php echo $prod->prp ?></del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature category area end -->



