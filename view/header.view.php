<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Title here -->
    <title><?php echo $pageTitle; ?></title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href="view/css/font-awesome.min.css" rel="stylesheet">
    <!-- Magnific Popup -->
    <link href="view/css/magnific-popup.css" rel="stylesheet">
    <!-- Owl carousel -->
    <link href="view/css/owl.carousel.css" rel="stylesheet">

    <!-- CSS for this page -->
    <!-- Ecommerce -->
    <link href="view/css/styles/ecommerce.css" rel="stylesheet">

    <!-- Base style -->
    <link href="view/css/styles/style.css" rel="stylesheet">
    <!-- Skin CSS -->
    <link href="view/css/styles/skin-lblue.css" rel="stylesheet" id="color_theme">

    <!-- Custom CSS. Type your CSS code in custom.css file -->
    <link href="view/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="view/styles/monokai_sublime.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="#">
</head>

<!-- Add class "boxed" along with body for boxed layout. -->
<!-- Add "pattern-x" (1 to 5) for background patterns. -->
<!-- Add "img-x" (1 to 5) for background images. -->
<body>

<!-- Outer Starts -->
<div class="outer">

<!-- Top bar starts -->
<div class="top-bar">
    <div class="container">
        <!-- Shopping kart ends -->

        <div class="tb-language dropdown pull-right">
            <a href="#" data-target="#" data-toggle="dropdown"><i class="fa fa-lock"></i> Profile <i class="fa fa-angle-down color"></i></a>
            <!-- Dropdown menu with languages -->
            <ul class="dropdown-menu dropdown-mini" role="menu">
                <li><a href="profile">My Profile</a></li>
                <li><a href="signin?logout=true">Sign out</a></li>
            </ul>
        </div>

        <!-- Langauge starts -->
        <div class="tb-language dropdown pull-right">
            <a href="#" data-target="#" data-toggle="dropdown"><i class="fa fa-globe"></i> English <i class="fa fa-angle-down color"></i></a>
            <!-- Dropdown menu with languages -->
            <ul class="dropdown-menu dropdown-mini" role="menu">
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <!-- Language ends -->

        <!-- Search section for responsive design -->
        <div class="tb-search pull-left">
            <a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
            <div class="b-dropdown-block">
                <form role="form">
                    <!-- Input Group -->
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type Something">
									<span class="input-group-btn">
										<button class="btn btn-color" type="button">Search</button>
									</span>
                    </div>
                </form>
            </div>
        </div>
        <!-- Search section ends -->

        <!-- Social media starts -->
        <div class="tb-social pull-right">
            <div class="brand-bg text-right">
                <!-- Brand Icons -->
                <a href="#" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
                <a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus square-2 rounded-1"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin square-2 rounded-1"></i></a>
                <a href="#" class="pinterest"><i class="fa fa-pinterest square-2 rounded-1"></i></a>
            </div>
        </div>
        <!-- Social media ends -->

        <div class="clearfix"></div>
    </div>
</div>

<!-- Top bar ends -->

<!-- Header two Starts -->
<div class="header-2">

<!-- Container -->
<div class="container">
<div class="row">
<div class="col-md-4">
    <!-- Logo section -->
    <div class="logo">
        <h1><a href="#"><i class="fa fa-laptop"></i> Team Hire Blog</a></h1>
    </div>
</div>
<div class="col-md-9">

<!-- Navigation starts.  -->
<div class="navy">
    <ul>
        <!-- Main menu -->
        <li><a href="#">Home</a>
            <!-- Submenu -->
            <ul>
                <li><a href="sitemap.html" class="red">Complete List</a></li>
                <li><a href="index.html">Main Home</a></li>
                <li><a href="index-bootstrap-carousel.html">Home Carousel</a></li>
                <li><a href="index-magazine.html">Home Magazine</a></li>
                <!-- 2nd Level sub menu -->
                <li>
                    <a href="#">More #1</a>
                    <ul>
                        <li><a href="blog-masonry.html">Masonry Style</a></li>
                        <li><a href="medical-index.html">Medical</a></li>
                        <li><a href="ecommerce-index.html">Ecommerce</a></li>
                        <li><a href="non-profit-index.html">Non Profit</a></li>
                        <li><a href="coming-soon-image.html">Coming Soon</a></li>
                        <li><a href="index-slim.html">Home Slim</a></li>
                        <li><a href="index-sidebar.html">Home Sidebar</a></li>
                        <li><a href="index-parallax-slider.html">Home Parallax Slider</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">More #2</a>
                    <ul>
                        <li><a href="real-estate-index.html">Real Estate</a></li>
                        <li><a href="restaurant-index.html">Restaurant</a></li>
                        <li><a href="resume.html">Resume</a></li>
                        <li><a href="v-card-image.html">V Card</a></li>
                        <li><a href="wedding.html">Wedding</a></li>
                        <li><a href="index-parallax.html">Parallax Home</a></li>
                        <li><a href="header-2.html">Header Alt</a></li>
                        <li><a href="index-portfolio.html">Home Portfolio</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li><a href="#">Components</a>
            <ul>
                <li><a href="#">Components #1</a>
                    <ul>
                        <li><a href="accordion.html">Accordion</a></li>
                        <li><a href="blockquote.html">Blockquote</a></li>
                        <li><a href="box-shadow.html">Shadow Box</a></li>
                        <li><a href="brave-components.html">Basic Brave Components</a></li>
                        <li><a href="clients.html">Clients</a></li>
                        <li><a href="counter.html">Counter</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="cta.html">CTA</a></li>
                    </ul>
                </li>
                <li><a href="#">Components #2</a>
                    <ul>
                        <li><a href="divider.html">Divider</a></li>
                        <li><a href="bootstrap-carousel.html">Carousel</a></li>
                        <li><a href="heading.html">Heading</a></li>
                        <li><a href="icon-box.html">Icon Box</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="image-box.html">Image Box</a></li>
                        <li><a href="images.html">Images</a></li>
                        <li><a href="knob.html">Knob</a></li>
                    </ul>
                </li>
                <li><a href="#">Components #3</a>
                    <ul>
                        <li><a href="nav-tabs.html">Nav Tabs</a></li>
                        <li><a href="owl-carousel.html">Owl Carousel</a></li>
                        <li><a href="panel.html">Panel</a></li>
                        <li><a href="pricing-table.html">Pricing Table</a></li>
                        <li><a href="progress-bar.html">Progress Bar</a></li>
                        <li><a href="tables.html">Tables</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="testimonial.html">Testimonial</a></li>
                    </ul>
                </li>
                <!-- Multi level menu -->
                <li><a href="#">Multi Level Menu</a>
                    <ul>
                        <!-- Sub menu -->
                        <li><a href="#">Menu #1</a></li>
                        <li><a href="#">Menu #1</a></li>
                        <li><a href="#">Menu #1</a>
                            <ul>
                                <!-- Sub menu -->
                                <li><a href="#">Menu #2</a></li>
                                <li><a href="#">Menu #2</a></li>
                                <li><a href="#">Menu #2</a>
                                    <ul>
                                        <!-- Sub menu -->
                                        <li><a href="#">Menu #3</a></li>
                                        <li><a href="#">Menu #3</a></li>
                                        <li><a href="#">Menu #3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li><a href="#">Blog</a>
            <ul>
                <li><a href="blog-one.html">Blog One</a></li>
                <li><a href="blog-two.html">Blog Two</a></li>
                <li><a href="blog-three.html">Blog Three</a></li>
                <li><a href="blog-four.html">Blog Four</a></li>
                <li><a href="blog-single.html">Blog Single</a></li>
                <li><a href="blog-masonry.html">Blog Masonry</a></li>
            </ul>
        </li>

        <li><a href="#">Themes</a>
            <ul>
                <li><a href="ui-designs.html">UI Designs</a></li>
                <li><a href="#">Ecommerce</a>
                    <!-- Sub dropdown menu -->
                    <ul>
                        <li><a href="ecommerce-index.html">Home</a></li>
                        <li><a href="profile.php">Account</a></li>
                        <li><a href="ecommerce-checkout.html">Checkout</a></li>
                        <li><a href="ecommerce-items.html">Items</a></li>
                        <li><a href="ecommerce-item-single.html">Items Single</a></li>
                        <li><a href="ecommerce-items-ui.html">Items UI</a></li>
                        <li><a href="ecommerce-order-history.html">Order History</a></li>
                        <li><a href="ecommerce-view-cart.html">View Cart</a></li>
                        <li><a href="ecommerce-wish-list.html">Wish List</a></li>
                    </ul>
                </li>
                <li><a href="#">Medical</a>
                    <!-- Sub dropdown menu -->
                    <ul>
                        <li><a href="medical-index.html">Home</a></li>
                        <li><a href="medical-appointment.html">Appointment</a></li>
                        <li><a href="medical-department.html">Department</a></li>
                        <li><a href="medical-our-doctor.html">Our Doctor</a></li>
                        <li><a href="medical-treatment.html">Treatment</a></li>
                    </ul>
                </li>
                <li><a href="#">Real Estate</a>
                    <!-- Sub dropdown menu -->
                    <ul>
                        <li><a href="real-estate-index.html">Home</a></li>
                        <li><a href="real-estate-agencies.html">Agencies</a></li>
                        <li><a href="real-estate-agents.html">Agents</a></li>
                        <li><a href="real-estate-enquiry.html">Enquiry</a></li>
                        <li><a href="real-estate-property-map.html">Property Map</a></li>
                        <li><a href="real-estate-property-single.html">Property Single</a></li>
                    </ul>
                </li>
                <li><a href="#">Restaurant</a>
                    <!-- Sub dropdown menu -->
                    <ul>
                        <li><a href="restaurant-index.html">Home</a></li>
                        <li><a href="restaurant-checkout.html">Checkout</a></li>
                        <li><a href="restaurant-items.html">Items</a></li>
                        <li><a href="restaurant-item-single.html">Items Single</a></li>
                        <li><a href="restaurant-menu.html">Menu</a></li>
                        <li><a href="restaurant-nutrition-info.html">Nutrition Info</a></li>
                        <li><a href="restaurant-recipe.html">Recipe</a></li>
                        <li><a href="restaurant-reserve-seats.html">Reserve Seats</a></li>
                    </ul>
                </li>
                <li><a href="#">Non Profit</a>
                    <!-- Sub dropdown menu -->
                    <ul>
                        <li><a href="non-profit-index.html">Home</a></li>
                        <li><a href="non-profit-action.html">Action</a></li>
                        <li><a href="non-profit-action-single.html">Action Single</a></li>
                        <li><a href="non-profit-causes.html">Causes</a></li>
                        <li><a href="non-profit-donation.html">Donation</a></li>
                        <li><a href="non-profit-events.html">Events</a></li>
                        <li><a href="non-profit-goal.html">Goal</a></li>
                        <li><a href="non-profit-volunteers.html">Volunteers</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li><a href="#">Portfolio</a>
            <ul>
                <li><a href="portfolio-one.html">Portfolio One</a></li>
                <li><a href="portfolio-two.html">Portfolio Two</a></li>
                <li><a href="portfolio-three.html">Portfolio Three</a></li>
                <li><a href="portfolio-four.html">Portfolio Four</a></li>
                <li><a href="portfolio-single.html">Portfolio Single</a></li>
            </ul>
        </li>

        <li><a href="about-us-one.html">About Us</a></li>
        <li><a href="contact-us-one.html">Contact Us</a></li>
    </ul>
</div>
<!-- Navigation ends -->

</div>

<div class="col-md-1">

    <!-- Search section -->
    <div class="head-search pull-right">
        <a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
        <div class="b-dropdown-block">
            <form role="form">
                <!-- Input Group -->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type Something">
											<span class="input-group-btn">
												<button class="btn btn-color" type="button">Search</button>
											</span>
                </div>
            </form>
        </div>
    </div>
    <!-- Search section ends -->
    <div class="clearfix"></div>

</div>

</div>
</div>
</div>

<!-- Header two ends -->