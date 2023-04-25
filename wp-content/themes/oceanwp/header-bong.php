<!DOCTYPE html><html lang="en">
<head><meta charset="utf-8"/>

      <!-- basic -->
      
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="viewport" content="initial-scale=1, maximum-scale=1"/>
      <!-- site metas -->
      <title>OngBong</title>
      <meta name="keywords" content=""/>
      <meta name="description" content=""/>
      <meta name="author" content=""/>
      <!-- site icons -->
      <link rel="icon" href="<?=get_template_directory_uri()?>/images/fevicon/fevicon.png" type="image/gif"/>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap.min.css"/>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      <!-- Site css -->
      <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/style.css"/>
      <!-- responsive css -->
      <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/responsive.css"/>
      <!-- colors css -->
      <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/colors1.css"/>
      <!-- custom css -->
      <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/custom.css"/>
      <!-- wow Animation css -->
      <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/animate.css"/>
      
  </head>
   <body id="default_theme" class="home_1">
      <!-- loader -->
      <div class="bg_load"> <img class="loader_animation" src="<?=get_template_directory_uri()?>/images/loaders/loader_1.png" alt="#"/> </div>
      <!-- end loader -->
      <!-- header -->
      <header id="default_header" class="header_style_1">
         <!-- header top -->
         <div class="header_top">
            <div class="container">
               <div class="row">
                  <div class="col-md-9 col-lg-9">
                     <div class="full">
                        <div class="topbar-left">
                           <ul class="list-inline">
                              <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">540 Lorem Ipsum New York, AB 90218</span> </li>
                              <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="#"><span class="__cf_email__">ongbong@gmail.com</span></a></span> </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-lg-3 right_section_header_top">
                     <div class="float-right">
                        <div class="social_icon">
                           <ul class="list-inline">
                              <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                              <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                              <li><a class="fa fa-twitter" href="https://twitter.com/" title="Twitter" target="_blank"></a></li>
                              <li><a class="fa fa-linkedin" href="https://www.linkedin.com/" title="LinkedIn" target="_blank"></a></li>
                              <li><a class="fa fa-instagram" href="https://www.instagram.com/" title="Instagram" target="_blank"></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header top -->
         <!-- header bottom -->
         <div class="header_bottom">
            <div class="container">
               <div class="header-top">
                  <a href="<?=site_url()?>" class="header-logo"><img src="<?=get_template_directory_uri()?>/images/logos/logo.png" alt="logo"/></a>
				  <div class="header-search">
					   <form class="search-global" method="GET">
						  <input name="s" type="text" placeholder="search"  class="search-global__input"/>
						  <button class="search-global__btn"><i class="fa fa-search"></i></button>
					   </form>
				  </div>
				  
				  <div class="header-right">
					<a href="<?=site_url()?>/cart"><span class="cart-num">2</span><i class="fa-solid fa-cart-shopping"></i></a>
					<a href="<?=site_url()?>/cart"><i class="fa-regular fa-heart"></i></a>
					<a href="<?=site_url()?>/my-account"><i class="fa-regular fa-user"></i></a>
				  </div>
               </div>
            </div>
			<div class="main-nav">
				<div class="menu_side">
					<div id="navbar_menu">
						<?php 
							$args = array(
								'theme_location'=>'primary',
								'menu'=>'navbar-nav',
								'container'=>'ul',
								'menu_class'=>'first-ul',
							);
		
						?>
						<?=wp_nav_menu($args)?> 

					   <!-- <ul class="first-ul">
						  <li>
							 <a class="active" href="index.html">Home</a>
						  </li>
						  <li>
							 <a href="shop.html">Ceramic</a>
							 <ul>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="privacy_policy.html">Privacy Policy</a></li>
								<li><a href="service.html">Service</a></li>
								<li><a href="service_detail.html">Service Details</a></li>
								<li><a href="shop.html">Shop</a></li>
								<li><a href="shop_detail.html">Service Details</a></li>
								<li><a href="term_condition.html">Terms & Condition</a></li>
							 </ul>
						  </li>
						  <li>
							 <a href="shop.html">Dokra</a>
							 <ul>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="privacy_policy.html">Privacy Policy</a></li>
								<li><a href="service.html">Service</a></li>
								<li><a href="service_detail.html">Service Details</a></li>
								<li><a href="shop.html">Shop</a></li>
								<li><a href="shop_detail.html">Service Details</a></li>
								<li><a href="term_condition.html">Terms & Condition</a></li>
							 </ul>
						  </li>
						  <li>
							 <a href="shop.html">Terakota</a>
							 <ul>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="privacy_policy.html">Privacy Policy</a></li>
								<li><a href="service.html">Service</a></li>
								<li><a href="service_detail.html">Service Details</a></li>
								<li><a href="shop.html">Shop</a></li>
								<li><a href="shop_detail.html">Service Details</a></li>
								<li><a href="term_condition.html">Terms & Condition</a></li>
							 </ul>
						  </li>
						  <li>
							 <a href="shop.html">Tribal store </a>
							 <ul>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="privacy_policy.html">Privacy Policy</a></li>
								<li><a href="service.html">Service</a></li>
								<li><a href="service_detail.html">Service Details</a></li>
								<li><a href="shop.html">Shop</a></li>
								<li><a href="shop_detail.html">Service Details</a></li>
								<li><a href="term_condition.html">Terms & Condition</a></li>
							 </ul>
						  </li>
						  <li><a href="shop.html">Rocks & Stones</a></li>
						  <li><a href="shop.html">Handloom</a></li>
						  <li><a href="shop.html">Baloochuri</a></li>
						  <li><a href="shop.html">Artist’s Gallery</a></li>
						  <li><a href="customization.html">Customization</a></li>
						  <li><a href="about.html">Mission & Vision</a></li>
						  <li><a href="about.html">About Us</a></li>
					   </ul>
					 -->
					</div>
				 </div>
			</div>
         </div>
         <!-- header bottom end -->
      </header>
      <!-- end header -->