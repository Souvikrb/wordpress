<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );


do_action( 'woocommerce_before_main_content' );

?>


<?php
if ( woocommerce_product_loop() ) {

	
	do_action( 'woocommerce_before_shop_loop' );
    woocommerce_product_loop_start();
    ?>
    <div class="row">
    <?php

       
        
        if ( wc_get_loop_prop( 'total' ) ) {
            while ( have_posts() ) { 
                the_post(); 
                $featured_img = get_the_post_thumbnail_url(get_the_ID(),'full');
                ?>

<div class="col-lg-3 col-md-6">
						<div class="products-item">
                            <div class="image">
                                <a href="<?=get_permalink()?>">
                                    <img src="<?=$featured_img?>" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <form class="cart" id="cart-form<?=get_the_ID()?>" method="get" action="<?=site_url()?>/cart">
                                        <input  name="quantity" value="1"  size="4" type="hidden" />
                                        <input name="add-to-cart" type="hidden" value="<?=get_the_ID()?>">
                                            <a href="javascript:void(0)" onclick="$('#cart-form<?=get_the_ID()?>').submit();">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </a>
                                        </form>
                                    </li>
                                    <!-- <li>
                                        <a href="#">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </li> -->
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>

                                <div class="shop-btn">
                                    <a href="<?=get_permalink()?>" class="default-btn">Shop Now</a>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="<?=get_permalink()?>"><?=get_the_title()?></a>
                                </h3>
                                <span><?=$product->get_price_html();?></span>
                                <ul class="star-list">
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                       <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                       <i class="fa-solid fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
					</div>
                
            <?php }
        } 

        
    ?>
    </div>
    <?php
    woocommerce_product_loop_end();
	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
