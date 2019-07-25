<!doctype html>
<html class="no-js"  <?php language_attributes(); ?>>
   <head>
      <meta charset="utf-8">
      <!-- Force IE to use the latest rendering engine available -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Meta -->
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
      <!-- Icons & Favicons -->
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
      <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
      <!--[if IE]>
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
      <![endif]-->
      <meta name="msapplication-TileColor" content="#f01d4f">
      <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
      <meta name="theme-color" content="#121212">
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
      <?php wp_head(); ?>
      <!-- Drop Google Analytics here -->
      <!-- end analytics -->
   </head>
   <body <?php body_class(); ?>>
      <div class="off-canvas-wrap" data-offcanvas>
      <div class="inner-wrap">
      <div id="container">
      <header class="header">
         <div class="top-section">
            <!-- start wrapper -->
            <div class="row wrapper collapse">
               <div class="columns large-12 starter">
                  <div class="clearfix">
                     <!-- Logo -->
                     <div class="left top-logo">
                        <div class="row collapse">
                           <div class="columns small-12 medium-12 large-12 logo end">
                              <a href="https://blog.teacollection.com/" title="Tea Collection"><img src="https://blog.teacollection.com/wp-content/themes/JointsWP/tea-assets/logo/Tea-logo.png" class="" data-interchange="[https://blog.teacollection.com/wp-content/themes/JointsWP/tea-assets/logo/Tea-logo.png,(default)],[https://blog.teacollection.com/wp-content/themes/JointsWP/tea-assets/logo/Mobile-Tea-logo.png,(small)], [https://blog.teacollection.com/wp-content/themes/JointsWP/tea-assets/logo/Tea-logo.png,(medium)], [https://blog.teacollection.com/wp-content/themes/JointsWP/tea-assets/logo/Tea-logo.png,(large)]" alt="Tea Collection" title="Tea Collection" data-uuid="interchange-ied47qks0">
                              </a>
                           </div>
                        </div>
                     </div>
                     <!-- >> Logo -->
                     <div class="left top-menu">
                        <div class="row">
                           <div class="columns small-12 medium-8 large-8">
                              <!-- Megamenu -->
                              <ul class="megamenu" style="margin-top: 7%;">
                                 <!-- Megamenu element -->
                                 <li>
                                    <a href="http://www.teacollection.com/girls-clothing" class="megamenu-sub-category-trigger">Girl</a>
                                 </li>
                                 <li>
                                    <a href="http://www.teacollection.com/boys-clothing" class="megamenu-sub-category-trigger">Boy</a>
                                 </li>
                                 <li>
                                    <a href="http://www.teacollection.com/baby-girl-clothes" class="megamenu-sub-category-trigger">Baby Girl</a>
                                 </li>
                                 <li>
                                    <a href="http://www.teacollection.com/baby-boy-clothes" class="megamenu-sub-category-trigger">Baby Boy</a>
                                 </li>
                                 <li>
                                    <a href="http://www.teacollection.com/newborn-clothes" class="megamenu-sub-category-trigger">Newborn</a>
                                 </li>
                                 <li>
                                    <a href="http://www.teacollection.com/clothing-sale" class="megamenu-sub-category-trigger">Sale</a>
                                 </li>
                              </ul>
                              <!-- Megamenu -->
                           </div>
                           <div class="columns small-12 medium-4 large-4">
                              <!-- sign in and mini-cart -->
                              <div class="relative clearfix user-section show-for-medium-up">
                              </div>
                              <!-- >> sign in and mini-cart -->
                              <div class="row collapse show-for-medium-up">
                                 <!-- Search section desktop -->
                                 <div class="columns medium-12 large-12">
                                    <div class="row collapse">
                                       <div class="relative">
                                          <input type="text" class="search-query placeholder" placeholder="SEARCH">
                                          <button class="search-button"></button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- >> Search section desktop  -->
                              </div>
                              <div class="row collapse show-for-medium-up">
                                 <div class="columns small-12">
                                    <p class="free-shipping-message hide-for-sticky" style="opacity: 1; height: auto;">Free Shipping on orders over $150</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="columns small-12 hide-for-medium-up">
                              <p class="slogan">for little citizens of the world</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end wrapper -->
         </div>
      </header>
      <!-- end .header -->

      <!-- start menu -->
      <div id="menu">
         <div id="inner-content" class="row">
            <?php ubermenu( 'main' , array( 'menu' => 710 ) ); ?>
         </div>
      </div>
      <!-- end menu -->
