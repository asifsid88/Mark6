<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mark6 meta data goes here">
    <title>Mark6</title>
    <link rel="shortcut icon" href="src/img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="src/css/pure-min.css">
    <link rel="stylesheet" type="text/css" href="src/css/grids-responsive-min.css">
    <link rel="stylesheet" type="text/css" href="src/css/global.css">
    <link rel="stylesheet" type="text/css" href="src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="src/css/body-container.css">
    <script type="text/javascript" src="src/javascript/jquery-1.7.2.min.js"></script>

    <!-- FlexSlider -->
    <link rel="stylesheet" type="text/css" href="src/css/slideshow.css" media="all" />
    <script type="text/javascript" src="src/javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
        $('.flexslider').flexslider({
              animation: "fade"
        });
        
        $(function() {
            $('.show_menu').click(function(){
                    $('.menu').fadeIn();
                    $('.show_menu').fadeOut();
                    $('.hide_menu').fadeIn();
            });
            $('.hide_menu').click(function(){
                    $('.menu').fadeOut();
                    $('.show_menu').fadeIn();
                    $('.hide_menu').fadeOut();
            });
        });
    });
    </script>
</head>
<body>
<div id="mark6-menu" class="custom-wrapper pure-g affix">
    <div class="pure-u-1 pure-u-md-1-2 vertical-center">
        <div class="pure-menu">
            <a href="#" class="pure-menu-heading custom-brand"><img src="src/img/logo.png" id="mark6-logo" /></a>
            <a class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-2 vertical-center" id="menu-items">
        <div class="pure-menu pure-menu-horizontal custom-can-transform">
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Product</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">About Us</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="mark6-body">
    <!-- Slideshow -->
    <div class="slider_container">
        <div class="flexslider">
          <ul class="slides">
            <li>
                <a href="#"><img class="pure-img" src="images/slider/slide1.jpg" alt="" title=""/></a>
                <div class="flex-caption">
                     <div class="caption_title_line"><h2>Party Hairstyles</h2><p>Find the perfect hairstyle a la Lauren Conrad for every type of festive fête.</p></div>
                </div>
            </li>
            <li>
                <a href="#"><img class="pure-img" src="images/slider/slide2.jpg" alt="" title=""/></a>
                <div class="flex-caption">
                     <div class="caption_title_line"><h2>Beautiful Hairstyle</h2><p>The latest hairstyles and instructions on how to create them here. Total Beauty has your complete hairstyles guide</p></div>
                </div>
            </li>
            <li>
                <a href="#"><img class="pure-img" src="images/slider/slide3.jpg" alt="" title=""/></a>
                <div class="flex-caption">
                     <div class="caption_title_line"><h2>Party Dresses</h2><p>If you are looking for something a little special for your big night out, check out Rare London's collection of stunning party dresses</p></div>
                </div>
            </li>
            <li>
                <a href="#"><img class="pure-img" src="images/slider/slide4.jpg" alt="" title=""/></a>
                <div class="flex-caption">
                     <div class="caption_title_line"><h2>Bodycon Dresses</h2><p>The bodycon dress is a key silhouette for this season's party girl; from sleek colour-block panelling to geometric prints the bodycon.</p></div>
                </div>
            </li>
          </ul>
        </div>
    </div>
    <!-- end of slideshow -->
    
    <div id="mark6-main-container-wrapper">
        <div id="mark6-main-container">        
            <div id="mark6-tabs-panel">
                <div id="tab1" class="mark6-tabs">Newly Launched</div>
                <div id="tab2" class="mark6-tabs">Upcoming</div>
                <div id="tab3" class="mark6-tabs">Mostly Purchased</div>
            </div>
            <div id="mark6-tabs-content-panel">
                <div id="tab1-content" class="mark6-tabs-content">
                    <div class="pure-g mark6-product-grid">
                        <div class="pure-u-1 pure-u-md-1-6 mark6-product">
                            <div class="mark6-product-img">
                                <img class="pure-img" src="src/img/products/1.jpg" />
                            </div>
                            <div class="mark6-product-readmore-button">View</div>
                        </div>
                        <div class="pure-u-1 pure-u-md-1-6 mark6-product">
                            <div class="mark6-product-img">
                                <img class="pure-img" src="src/img/products/2.jpg" />
                            </div>
                            <div class="mark6-product-readmore-button">View</div>
                        </div>
                        <div class="pure-u-1 pure-u-md-1-6 mark6-product">
                            <div class="mark6-product-img">
                                <img class="pure-img" src="src/img/products/3.jpg" />
                            </div>
                            <div class="mark6-product-readmore-button">View</div>
                        </div>
                        <div class="pure-u-1 pure-u-md-1-6 mark6-product">
                            <div class="mark6-product-img">
                                <img class="pure-img" src="src/img/products/4.jpg" />
                            </div>
                            <div class="mark6-product-readmore-button">View</div>
                        </div>
                        <div class="pure-u-1 pure-u-md-1-6 mark6-product">
                            <div class="mark6-product-img">
                                <img class="pure-img" src="src/img/products/5.jpg" />
                            </div>
                            <div class="mark6-product-readmore-button">View</div>
                        </div>
                    </div>
                </div>
                <div id="tab2-content" class="mark6-tabs-content">
                    tab2 content goes here . . .
                </div>
                <div id="tab3-content" class="mark6-tabs-content">
                    tab3 content goes here . . .
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="src/javascript/global.js"></script>
<script type="text/javascript" src="src/javascript/menu.js"></script>
<script type="text/javascript" src="src/javascript/tab.js"></script>
</body>
</html>
