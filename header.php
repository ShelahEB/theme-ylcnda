<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width" />

      <!--Start Bootstrap--------------------------------------------------->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--end Bootstrap--------------------------------------------------->


      <!--Style Sheets-->
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!--flex slider style-->
    <link href="flexslider.css" rel="stylesheet" type="text/css">
    <!--flexslider css-->

        <!--Start Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <!--for flexslider | Connects to javascript-->
    <script src="scripts/jquery.flexslider.js"></script>
    <!--make a call to the Flexsilder JavaScript file:-->
    <!--End Scripts-->



    <!-- Start Flex Slider -->
    <script type="text/javascript" charset="utf-8">
        $(window).load(function () {
            $('.flexslider').flexslider();
        });
    </script>
    <!-- End Flex Slider -->



    <!-- for older browsers  -->
    <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        <div id="page">
                <div id="header">
                        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h4><?php bloginfo('description'); ?></h4>
                </div>


<!------------------------Header LOGO---------------- ---------------------------------->
        <header>
            <!--start header-->

            <div id="cart" class=".col-xs-12 .col-sm-6 .col-lg-8">
                <!--start cart div-->
                <a href="javascript:;"><img src="images/cart_search.png" /></a>
            </div>
            <!--end cart div-->

            <div class="brand">
                <a href="javascript:;"><img src="images/ylucionada_logo.png" /></a>
            </div>

        </header>
        <!--end header-->


<!-------------------------Navigation-------------------------------------------------->

        <nav id="full_nav">
            <!--start navigation-->
            <div class="menu ">
                <!--start navigation menu div-->
                <ul>
                    <li><a href="http://www.sdebdesigns.com/ylucionada/about-page/">About</a></li>
                    <li><a href=" http://www.sdebdesigns.com/ylucionada/shop/">Shop</a>
                        <ul>
                            <li><a href=" http://www.sdebdesigns.com/ylucionada/shop/womens">Women's</a></li>
                            <li><a href=" http://www.sdebdesigns.com/ylucionada/shop/mens">Men's</a></li>
                            <li><a href=" http://www.sdebdesigns.com/ylucionada/shop/collections">Collections</a></li>
                        </ul>
                    </li>
                    <li><a href="http://www.sdebdesigns.com/ylucionada/media-blog/">Media</a></li>
                    <li><a href="http://www.sdebdesigns.com/ylucionada/contact/">Contact</a></li>
                </ul>
            </div>
            <!--end navigation menu div-->
        </nav>
        <!--end navigation-->

<!---- mobile Nav----------------------------------------------------------->
        <div id="mobile_nav" class="navbar navbar-inverse navbar-static-top ">
            <div class="container">
                <a href="javascript:;" class="navbar-brand">Ylucionada</a>

                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse navHeaderCollapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Collection</a></li>

                            </ul>

                        </li>
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Contact</a></li>


                    </ul>


                </div>


            </div>


        </div>
