<?php 
    get_header('bong');
    global $post,$comment;
    $short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
    $rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
    $id = $post->ID;
    $product = new WC_Product_Variable( $id ); 
	$post_thumbnail_id = $product->get_image_id();
 
   
?>

      <!-- inner page banner -->
      <div id="inner_banner" class="section inner_banner_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="title-holder">
                        <div class="title-holder-cell text-left">
                           <h1 class="page-title">Shop Detail</h1>
                           <ol class="breadcrumb">
                              <li><a href="index.html">Home</a></li>
                              <li class="active">Shop Detail</li>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end inner page banner -->
      <!-- section -->
      <div class="section padding_layout_1 product_detail">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-lg-6 col-md-12">
                        <div class="product_detail_feature_img hizoom hi2">
                           <div class="hizoom hi2"><img src="<?=wp_get_attachment_url( $post_thumbnail_id, true );?>" alt="#"/></div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12 product_detail_side detail_style1">
                        <div class="product-heading">
                           <h2><?=the_title( '<h1 class="product_title entry-title">', '</h1>' );?></h2>
                    
                        </div>
                     
                        <div class="product-detail-side"> <span><del>$1800</del></span><span class="new-price">$1500</span> <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="review">(5 customer review)</span> </div>
                        <div class="detail-contant">
                           <?=$short_description?>
                              <span class="stock">2 in stock</span> 
                           </p>
                           <form class="cart" method="get" action="<?=site_url()?>/cart">
                                <div class="quantity">
                                    <input step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number" name="qnt"/>
                                    <input name="add-to-cart" type="hidden" value="<?=$product->get_id()?>">
                                </div>
                                <button type="submit" class="btn sqaure_bt" style="margin-top: 0;">Add to cart</button>
                              
                           </form>
                          
                        </div>
                        <div class="share-post">
                           <a href="#" class="share-text">Share</a>
                           <ul class="social_icons">
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="tab_bar_section">
                              <ul class="nav nav-tabs" role="tablist">
                                 <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
                                 <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Reviews (2)</a> </li>
                              </ul>
                              <!-- Tab panes -->
                              <div class="tab-content">
                                 <div id="description" class="tab-pane active">
                                    <div class="product_desc">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum elit. Morbi eu arcu ipsum. Aliquam lobortis accumsan quam ac convallis. 
                                          Fusce elit mauris, aliquet at odio vel, convallis vehicula nisi. Morbi vitae porttitor dolor. Integer eget metus sem. Nam venenatis mauris vel leo pulvinar, 
                                          id rutrum dui varius. Nunc ac varius quam, non convallis magna. Donec suscipit commodo dapibus.<br/>
                                          <br/>
                                          Vestibulum et ullamcorper ligula. Morbi bibendum tempor rutrum. 
                                          Pelle tesque auctor purus id molestie ornare.Donec eu lobortis risus. Pellentesque sed aliquam lorem. Praesent pulvinar lorem vel mauris ultrices posuere. 
                                          Phasellus elit ex, gravida a semper ut, venenatis vitae diam. Nullam eget leo massa. Aenean eu consequat arcu, vitae scelerisque quam. Suspendisse risus turpis, 
                                          pharetra a finibus vitae, lobortis et mi.
                                       </p>
                                    </div>
                                 </div>
                                 <div id="reviews" class="tab-pane fade">
                                    <div class="product_review">
                                       <h3>Reviews (2)</h3>
                                       <div class="commant-text row">
                                          <div class="col-lg-2 col-md-2 col-sm-4">
                                             <div class="profile"> <img class="img-responsive" src="<?=get_template_directory_uri()?>/images/layout_img/client1.png" alt="#"/> </div>
                                          </div>
                                          <div class="col-lg-10 col-md-10 col-sm-8">
                                             <h5>Lara jack</h5>
                                             <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                             <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                             <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance. 
                                                The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet.. 
                                             </p>
                                          </div>
                                       </div>
                                       <div class="commant-text row">
                                          <div class="col-lg-2 col-md-2 col-sm-4">
                                             <div class="profile"> <img class="img-responsive" src="<?=get_template_directory_uri()?>/images/layout_img/client2.png" alt="#"/> </div>
                                          </div>
                                          <div class="col-lg-10 col-md-10 col-sm-8">
                                             <h5>Liana hussy</h5>
                                             <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                                             <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                             <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="full review_bt_section">
                                                <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a> </div>
                                             </div>
                                             <div class="full">
                                                <div id="collapseExample" class="full collapse commant_box">
                                                   <form accept-charset="UTF-8"  method="post">
                                                      <input id="ratings-hidden" name="rating" type="hidden"/>
                                                      <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." required=""></textarea>
                                                      <div class="full_bt center">
                                                         <button class="btn sqaure_bt" type="submit">Save</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main_heading text_align_left" style="margin-bottom: 25px;">
                              <h3>Related products</h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
						<div class="products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="<?=get_template_directory_uri()?>/images/products1.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>

                                <div class="shop-btn">
                                    <a href="products-details.html" class="default-btn">Shop Now</a>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">Ceramic Tea</a>
                                </h3>
                                <span>$60.00</span>
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
					
					<div class="col-lg-3 col-md-6">
						<div class="products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="<?=get_template_directory_uri()?>/images/products2.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>

                                <div class="shop-btn">
                                    <a href="products-details.html" class="default-btn">Shop Now</a>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">Flower Vase</a>
                                </h3>
                                <span>$60.00</span>
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
					
					<div class="col-lg-3 col-md-6">
						<div class="products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="<?=get_template_directory_uri()?>/images/products3.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>

                                <div class="shop-btn">
                                    <a href="products-details.html" class="default-btn">Shop Now</a>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">Ceramic Bowl</a>
                                </h3>
                                <span>$60.00</span>
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
					
					<div class="col-lg-3 col-md-6">
						<div class="products-item">
                            <div class="image">
                                <a href="products-details.html">
                                    <img src="<?=get_template_directory_uri()?>/images/products4.jpg" alt="image">
                                </a>

                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-regular fa-heart"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="new">
                                    <span>New</span>
                                </div>

                                <div class="shop-btn">
                                    <a href="products-details.html" class="default-btn">Shop Now</a>
                                </div>
                            </div>

                            <div class="content">
                                <h3>
                                    <a href="products-details.html">HandCraft Candle</a>
                                </h3>
                                <span>$60.00</span>
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
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->



<?php 
    get_footer('bong');
?>