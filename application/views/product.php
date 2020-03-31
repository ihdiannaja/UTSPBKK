
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<main>
    <div class="product-details-wrapper pt-100 pb-14 pt-sm-58">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20 slider-arrow-style slider-arrow-style__style-2">
                                    <div class="pro-large-img img-zoom" id="img1">
                                        <img src="<?php echo base_url() . $pimg ?>" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des pt-md-98 pt-sm-58">
                                    <h3><?php echo $pn ?></h3>
                                    <div class="pricebox">
                                        <span class="regular-price">Rp. <strong><?php echo $psp ?></strong></span>
                                        <span class="old-price"><del>Rp. <?php echo $prp ?></del></span>
                                    </div>
                                    <p><?php echo $psd ?></p>
                                
                                    <?php echo form_open('products/addtocart/'); ?>
                                        <div class="quantity-cart-box d-flex align-items-center mb-24">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="hidden" name="op" value="<?php echo $psp ?>">
                                                    <input type="hidden" name="pid" value="<?php echo $id ?>">
                                                    <input type="hidden" name="cid" value="<?php echo $cid ?>">
                                                    <input id="oq" type="text" name="oq" value="1">
                                                </div>
                                            </div>
                                            <div class="product-btn product-btn__color">
                                                <button type="submit"><i class="ion-bag"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="availability mb-20">
                                        <h5>Availability:</h5>
                                        <span><?php if ($psq > 100) {
                                        	echo 'In Stock';
                                        } elseif ($psq < 100 && $psq > 0) {
                                        	echo 'Only '.$psq.' left';
                                        } else {
                                        	echo '<i class="text-red">Out of Stock</i>';
                                        } ?></span>
                                    </div>
                                    <div class="share-icon">
                                        <h5>share:</h5>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                    <!-- product details reviews start -->
                    <div class="product-details-reviews pt-98 pt-sm-58">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="tab_one">
                                            <div class="tab-one">
                                                <?php echo $pld ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- product details reviews end --> 
                    
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-wrapper pt-md-16 pb-md-86 pb-sm-44">
                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <div class="sidebar-title">
                                <h3>shop</h3>
                            </div>
                            <div class="sidebar-body">
                                <ul class="sidebar-category">
                                    <?php foreach ($categories as $cat) {
                                    ?>
                                    <li><a href="<?php echo base_url('category/'.$cat->cn); ?>"><?php echo $cat->cn ?></a></li>
                                    <?php
                                    } ?>
                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>