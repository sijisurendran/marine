<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/fonts/flaticon.css" />

    <link rel="stylesheet" href="assets/css/nice-select.min.css" />

    <link rel="stylesheet" href="assets/css/boxicons.min.css" />

    <link rel="stylesheet" href="assets/css/meanmenu.css" />

    <link rel="stylesheet" type="text/css" href="assets/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/navigation.css" />

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />

    <link rel="stylesheet" href="assets/css/modal-video.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />

    <link rel="stylesheet" href="assets/css/responsive.css" />
    <title>Shipcart || Contact Us</title>
    <!-- <link rel="icon" type="image/png" href="assets/images/favicon.png" /> -->
    <link rel="stylesheet" href="stylecontact.css" />
</head>

<body>


    <?php
include "header.php";
?>

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <span>Contact</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-img">
            <img src="assets/images/products/ct1.jpg" alt="About" />
            <img src="assets/images/shape16.png" alt="Shape" />
            <img src="assets/images/shape17.png" alt="Shape" />
            <img src="assets/images/shape18.png" alt="Shape" />
        </div>
    </div>

    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-8">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                        required data-error="Please enter your name" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                        required data-error="Please enter your email" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" placeholder="Phone"
                                        required data-error="Please enter your number" class="form-control" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                        placeholder="Subject" required data-error="Please enter your subject" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8"
                                        placeholder="Write message" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault3" />
                                        <label class="form-check-label" for="flexCheckDefault3">
                                            I accept all
                                            <a href="#">Terms & Conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <button type="submit" class="btn common-btn">
                                        Send Message
                                        <img src="assets/images/shape1.png" alt="Shape" />
                                        <img src="assets/images/shape2.png" alt="Shape" />
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="contact-info">
                        <h3>Contact Information:</h3>
                        <ul class="info">
                            <li>
                                <i class="flaticon-pin"></i>
                                <a href="#">Janashakti Residence
                                    (H)18 Near to Block Office. Puranattukara (p O) ,Guruvayoor, Thrissur Pin 680551</a>

                            </li>
                            <li>
                                <i class="flaticon-phone-call"></i>
                                <a href="tel:+91 8921967417">+91 8921967417</a>
                                <!-- <a href="tel:+5465486325">+546-548-6325</a> -->
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <a href="">Shipcartsales@gmail.com</a>

                            </li>
                        </ul>
                        <div class="social-links">
                            <ul>
                                <!-- <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li> -->

                                <li>
                                    <a href="https://www.linkedin.com/in/shipcart-sales-3a1629247" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="map-area pb-100">
      <div class="container">
        <iframe
          id="map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779285!2d62.17507173408571!3d23.728204508550363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1608484692696!5m2!1sen!2sbd"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
      </div>
    </div> -->

    <?php
    include "footer.php";
    ?>
    <div class="go-top">
        <i class="bx bxs-up-arrow-circle"></i>
        <i class="bx bxs-up-arrow-circle"></i>
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/jquery.meanmenu.js"></script>

    <script src="assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/jquery.themepunch.revolution.min.js"></script>

    <script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.video.min.js"></script>

    <script src="assets/js/jquery.mixitup.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery-modal-video.min.js"></script>

    <script src="assets/js/thumb-slide.js"></script>

    <script src="assets/js/custom.js"></script>
</body>


</html>