<!--== Start Footer Area Wrapper ==-->
<footer class="footer-area sp-y">

    <div class="footer-widget-area sm-top-wt">
        <div class="container">
            <div class="row mtn-40">
                <div class="col-lg-4 order-4 order-lg-0">
                    <div class="widget-item">
                        <div class="about-widget px-5" style="text-align:justify;">
                            <a href="index.html"><img src="assets/images/logo-png.png" class="w-100`" alt="Logo"></a>
                            <p>We are a consulting firm that transforms business challenges into opportunities for sustainable growth and success. </p>

                            <div class="copyright-txt">
                                <p>&copy;
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                    Yettify Consulting Group
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-2 ms-auto">
                    <div class="widget-item">
                        <h4 class="widget-title">Information</h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <?php foreach ($navs as $nav): ?>
                                    <li><a href="./?page=<?= $nav['link'] ?>"><?= $nav['title'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-lg-2 ms-auto" style="padding:0px;">
                    <div class="widget-item">
                        <h4 class="widget-title">Services</h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <?php foreach ($services as $service): ?>
                                    <li><a href="./?page=specialty-areas&service=<?= $service['link'] ?>"><?= $service['title'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <div class="widget-item">
                        <h4 class="widget-title footer">Contact</h4>
                        <div class="widget-body container">
                            <div class="row d-flex justify-content-start">
                                <div class="col-2"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="col-10 footer-contact-text">
                                    AXA Tower 36 floor, Unit 5-6 Kuningan City Jl. Pr
                                    Jakarta Selatan, Indonesia
                                </div>
                            </div>
                            <div class="row d-flex justify-content-start">
                                <div class="col-2"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                                <div class="col-10 footer-contact-text">
                                     <a href="mailto:itservices@yettifyconsulting.biz">itservices@yettifyconsulting.biz</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--== End Footer Area Wrapper ==-->

<!-- Scroll Top Button -->
<button class="btn-scroll-top"><i class="mdi mdi-chevron-up"></i></button>


<!-- Start Off Canvas Menu Wrapper -->
<aside class="off-canvas-wrapper off-canvas-cog">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <div class="close-btn">
            <button class="btn-close"><i class="mdi mdi-close"></i></button>
        </div>

        <!-- Start Off Canvas Content -->
        <div class="off-canvas-content mb-sm-30">
            <div class="off-canvas-item">
                <div class="log-in-content-wrap">
                    <h2>Login</h2>
                    <div class="login-form mtn-15">
                        <form action="#" method="post">
                            <div class="form-input-item">
                                <label for="username" class="sr-only">Username</label>
                                <input type="text" id="username" placeholder="Username" required="">
                            </div>

                            <div class="form-input-item">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" id="password" placeholder="Password" required="">
                            </div>

                            <div class="form-input-item">
                                <button type="submit" class="btn-submit">Login</button>
                            </div>
                        </form>
                    </div>

                    <div class="sign-up-notification">
                        <p>Not Resisted? <a href="#">Create Account Now.</a></p>
                    </div>
                </div>
            </div>

            <div class="off-canvas-item mt-sm-30">
                <div class="social-icons">
                    <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://dribbble.com" target="_blank"><i class="fa fa-dribbble"></i></a>
                    <a href="https://pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a>
                </div>
                <div class="copyright-content">
                    <p>&copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        Businex Ltd. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- End Off Canvas Menu Wrapper -->


<!-- Start Off Canvas Menu Wrapper -->
<aside class="off-canvas-wrapper off-canvas-menu">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <!-- Start Off Canvas Header -->
        <div class="close-btn">
            <button class="btn-close"><i class="mdi mdi-close"></i></button>
        </div>

        <!-- Start Off Canvas Content -->
        <div class="off-canvas-content">
            <div class="res-mobile-menu">

            </div>
        </div>
    </div>
</aside>
<!-- End Off Canvas Menu Wrapper -->


<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-bottom-center modal-xl">
        <div class="modal-content ">
            <div class="background-modal"></div>
            <div class="modal-body td-flex flex-column align-items-center">
                <div class="modal-body-content ">
                    <div class="row">
                        <div class="col-6">
                            <div class="d-inline-block ">
                                <img src="./assets/images/cookies.png" class="w-100 d-flex flex-column align-items-center mx-auto" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <h2 class="sec-title__title mb-3" id="exampleModalLabel">
                                Cookie Policy
                            </h2>
                            <p class="text-justify mb-4">
                               Hello! We want to improve your experience. We use cookies to ensure everything works smoothly and to provide you with content that interests you. You can choose how we use them or accept them all for maximum enjoyment.
                            </p>
                            <p>Please see our <a href="./?page=cookie-policy">Cookie Policy</a> for more details.</p>
                            <div class="d-flex flex-row align-items-center justify-content-end gap-2 mt-5 w-100">
                                <button type="button" class="btn-outline-service" style="height: 65px !important;" id="clickModal" data-bs-dismiss="modal">
                                    Accept
                                </button>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=======================Javascript============================-->
<script src="assets/js/modernizr-3.6.0.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-migrate.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins/waypoint.min.js"></script>
<script src="assets/js/plugins/counterup.min.js"></script>
<script src="assets/js/plugins/instafeed.min.js"></script>
<script src="assets/js/plugins/jquery.appear.js"></script>
<script src="assets/js/plugins/jquery.slicknav.min.js"></script>
<script src="assets/js/plugins/parallax.min.js"></script>
<script src="assets/js/plugins/slick.min.js"></script>
<script src="assets/js/plugins/magnific-popup.min.js"></script>

<!--=== Active Js ===-->
<script src="assets/js/active.min.js"></script>

<!-- REVOLUTION JS FILES -->
<script src="assets/js/revslider/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/revslider/jquery.themepunch.revolution.min.js"></script>


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="assets/js/revslider/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.video.min.js"></script>

<!--=== REVOLUTION JS ===-->
<script src="assets/js/revslider/rev-active.js"></script>

</body>

</html>


<script>
    $(document).ready(function() {
        // $('#exampleModal1').modal('show');
        let cookies = localStorage.getItem('cookies');

        if (localStorage.getItem('cookies') == '0' || localStorage.getItem('cookies')) {
            // localStorage.setItem('cookies', false);
        } else {
            $('#exampleModal1').modal('show');
            localStorage.setItem('cookies', '0');
        }
    });

    $(document).ready(function() {
        generate();
    })

    let captcha;

    function generate() {

        // Clear old input
        document.getElementById("submit").value = "";

        // Access the element to store
        // the generated captcha
        // captcha = document.getElementById("captcha");
        captchaInput = document.getElementById("captchandler");
        let uniquechar = "";

        const randomchar =
            "ABCDEFGHiJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz123456789";

        // Generate captcha for length of
        // 5 with random character
        for (let i = 1; i < 7; i++) {
            uniquechar += randomchar.charAt(
                Math.random() * randomchar.length)
        }
        console.log(uniquechar)
        // Store generated input
        // captcha.innerHTML = uniquechar;
        captchaInput.value = uniquechar;

    }

    function printmsg() {
        let msgOpening = "";
        let msgAgent = "";
        const usr_input = document
            .getElementById("submit").value;

        // Check whether the input is equal
        // to generated captcha or not
        if (usr_input == captchaInput.value) {
            let s = document.getElementById("key").innerHTML = '<p style="color: #1e3811; font-size: 16px;padding: 1px 10px;background: #fff;width: fit-content; border-radius: 5px;"><i class="fa fa-check"></i> Matched</p>';


            $('.submit-button').prop('disabled', false);
            document.getElementById("captcha_mail").value = captchaInput.value;
            document.getElementById("btnCheck").disabled = true;
            generate();
        } else {
            let s = document.getElementById("key")
                .innerHTML = '<p style="color: red; font-size: 16px;padding: 1px 10px;background: #fff;width: fit-content; border-radius: 5px;"><i class="fa fa-exclamation-triangle"></i> INCORRECT CAPTCHA</p>';

            generate();
        }
    }
</script>