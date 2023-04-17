<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.4.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

    <!-- end inner page banner -->
    <div class="section padding_layout_1 Shopping_cart_section shopping-cart" >
         <div class="container">
            <div class="row">
               <div class="col-sm-12 col-md-12">
                  <div class="product-table">
                     <table class="table">
                        <thead>
                           <tr>
                              <th>Product</th>
                              <th>Quantity</th>
                              <th class="text-center">Price</th>
                              <th class="text-center">Total</th>
                              <th> </th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php 
                              foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                                 $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                                 $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                                 $thumbnail_url = get_the_post_thumbnail_url($product_id);
                                 if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                    $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                           ?>
                           <tr>
                              <td class="col-sm-8 col-md-6">
                                 <div class="media">
                                    
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?=$thumbnail_url?>" alt="#"/></a>
                                    <div class="media-body">
                                       <h4 class="media-heading"><a href="#"><?=$_product->get_name()?></a></h4>
                                       <span>Status: </span><span class="text-success">In Stock</span> 
                                    </div>
                                 </div>
                              </td>
                              <td class="col-sm-1 col-md-1" style="text-align: center">
                                 <p class="price_table"><?=$cart_item['quantity']?></p>
                              
                              </td>
                              <td class="col-sm-1 col-md-1 text-center">
                                 <p class="price_table">
                                    <?php
                                       echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                    ?>
                                 </p>
                              </td>
                              <td class="col-sm-1 col-md-1 text-center">
                                 <p class="price_table">
                                 <?php
                                    echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                 ?>
                                 </p>
                              </td>
                              <td class="col-sm-1 col-md-1">
							  <?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove bt_main" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-trash"></i>&nbsp;Remove</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
							
							  </td>
                           </tr>
                           
                           <?php 
                                 }
                              }
                           ?>
                        </tbody>
                     </table>
                     <!-- <table class="table">
                        <tbody>
                           <tr class="cart-form">
                              <td class="actions">
                                 <div class="coupon">
                                    <input name="coupon_code" class="input-text" id="coupon_code" placeholder="Coupon code" type="text"/>
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit"/>
                                 </div>
                                 <input class="button" name="update_cart" value="Update cart" disabled="" type="submit"/>
                              </td>
                           </tr>
                        </tbody>
                     </table> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->



<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<div class="cart-collaterals">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
	?>
</div>


