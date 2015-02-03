<!-- Foot Starts -->

<div class="foot">
    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <!-- Foot Item -->
                <div class="foot-item">
                    <!-- Heading -->
                    <h5 class="bold"><i class="fa fa-user"></i>&nbsp;&nbsp;About</h5>
                    <p>Itaque earum rerum hic tenetur a atque atatum dele niti atque tenetur a atque atatum tenetur volup tatum.</p>
                    <div class="brand-bg">
                        <!-- Social Media Icons -->
                        <a href="#" class="facebook"><i class="fa fa-facebook circle-3"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter circle-3"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus circle-3"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin circle-3"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest circle-3"></i></a>
                    </div>
                    <div class="subscribe-box">
                        <h5 class="bold">Subscribe :</h5>
                        <!-- Form -->
                        <form role="form">
                            <!-- Input Group -->
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Email Id">
											<span class="input-group-btn">
												<button class="btn btn-color" type="button">Subscribe</button>
											</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Foot Item -->
                <div class="foot-item">
                    <!-- Heading -->
                    <h5 class="bold"><i class="fa fa-comments"></i>&nbsp;&nbsp;Recent Posts</h5>
                    <!-- Foot Item Content -->
                    <div class="foot-item-content">
                        <ul class="list-unstyled">
                            <!-- Link -->
                            <li><a href="#">Denocing Sapientes Contain</a></li>
                            <li><a href="#">Dignissim Electronic Typeset</a></li>
                            <li><a href="#">Laborum Desktop Publishing</a></li>
                            <li><a href="#">Quibus PageMaker Including</a></li>
                            <li><a href="#">Denocing Sapientes Contain</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Foot Item -->
                <div class="foot-item">
                    <!-- Heading -->
                    <h5 class="bold"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Contact Us</h5>
                    <!-- Foot Item Content -->
                    <div class="foot-item-content address">
                        <!-- Heading -->
                        <h6 class="bold"><i class="fa fa-home"></i>&nbsp;&nbsp;Team Hire</h6>
                        <!-- Paragraph -->
                        <p class="add">
                            London, United Kingdom</p>
                        <p class="tel"> <i class="fa fa-phone"></i> Tel : + (07) - 818 210052<br />
                            <i class="fa fa-envelope"></i>  Mail : <a href="#">info@teamhire.co.uk</a><br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Foot Ends -->

<!-- Footer Starts -->

<footer>
    <!-- Container -->
    <div class="container">
        <!-- Footer Content -->
        <!-- Paragraph -->
        <p class="pull-left">Copyright &copy; 2014 - <a href="#">Team Hire</a></p>
        <ul class="list-inline pull-right">
            <!-- List -->
            <li><a href="index.html">Home</a><li>
            <li><a href="service.html">Service</a></li>
            <li><a href="feature.html">Features</a></li>
            <li><a href="about-us.html">About</a></li>
            <li><a href="contact-us.html">Contact</a></li>
        </ul>
        <!-- Clearfix -->
        <div class="clearfix"></div>
    </div>
</footer>

<!-- Footer Ends -->

</div>

<!-- Outer Ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-angle-up bg-color"></i></a></span>


<!-- Javascript files -->
<!-- jQuery -->
<script src="view/js/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="view/js/bootstrap.min.js"></script>
<!-- Placeholders JS -->
<script src="view/js/placeholders.js"></script>
<!-- Magnific Popup -->
<script src="view/js/jquery.magnific-popup.min.js"></script>
<!-- Owl carousel -->
<script src="view/js/owl.carousel.min.js"></script>
<!-- Respond JS for IE8 -->
<script src="view/js/respond.min.js"></script>
<!-- HTML5 Support for IE -->
<script src="view/js/html5shiv.js"></script>
<!-- Main JS -->
<script src="view/js/main.js"></script>

<!-- Javascript for this page -->
<!-- Ecommerce custom JS -->
<script src="view/js/ecommerce.js"></script>

<!-- Custom JS. Type your JS code in custom.js file -->
<script src="view/js/custom.js"></script>
<form id="form" method="POST" style="display:none">
</form>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    function postData(attrName,attrValue){
       var input  = $('<input/>',{type:'hidden',name:attrName,value:attrValue});
        $('#form').append(input).submit();
    }
</script>


<script src="view/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<!--
Style switcher. This is just for demo purpose only.
If you don't want remove the below line.
Some of the features of style switcher won't work on offline. THey only work when you upload it to server
-->
<!-- <script src="style-switcher/style-switcher.js"></script> -->

</body>
</html>