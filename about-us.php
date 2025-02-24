<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About-us XGen Technologies</title>
    <link rel="shortcut icon" href="./assets/xgen-media-icon.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Manrope:wght@200..800&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />

    <!-- OWL Carousel CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- jQuery (OWL Carousel ke liye zaroori hai) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- OWL Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- google fonts end-->
    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/button&fun.css">
    <link rel="stylesheet" href="./css/section-home.css">
    <link rel="stylesheet" href="./css/about-us.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <style>
    html {
        overflow-x: hidden;
    }

    .video-sec2 {
        object-fit: cover;
        /* To maintain aspect ratio */
        /* To fill the container */
    }

    .about-background {
        background-color: #031126;
    }
    </style>
</head>

<body>
    <section class="about-sec-1 about-background">
        <!-- header -->
        <?php include 'header.php';  include 'xyz.html'; ?>
        <!-- header end -->

        <div class="container-fluid padding-top-255px">
            <!-- Background video -->
            <div class="row position-relative z-index-1">
                <div class="col-12 d-flex justify-content-center mb-md-5" data-aos="fade-up" data-aos-duration="3000">
                    <img class="xgen_media" width="100" src="./assets/xgen-media-icon.png" alt="log-media" srcset="" />
                </div>
                <div class="col-12 text-center text-light">
                    <h1 class="text-light mb-3 text-uppercase about_us_heading">
                        About us
                    </h1>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4 col-sm-12 d-flex justify-content-around">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <button onclick="window.location.href = '#ourservice'"
                                        class="rounded-2 padding-button bg-transparent text-white border-white text-uppercase custom-button">
                                        <span class="text-20"> Our Service </span>
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button onclick="window.location.href = '#webForm'"
                                        class="rounded-2 padding-button bg-transparent text-white border-white text-uppercase custom-button">
                                        <span class="text-20"> Our Service </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid margin-top-300px">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="./assets/Studio-Square.png" alt="Image 1" />
                </div>
                <div class="item">
                    <img src="./assets/HHS_0958.jpg" alt="Image 2" />
                </div>
                <div class="item">
                    <img src="./assets/HHS_1118.jpg" alt="Image 3" />
                </div>
                <div class="item">
                    <img src="./assets/AL_C5729-resized.jpg" alt="Image 4" />
                </div>
                <div class="item">
                    <img src="./assets/qawali-studio.jpg" alt="Image 5" />
                </div>
            </div>
        </div>
    </section>
    <section class="about-sec-2 bg-black d-flex align-content-end">
        <div class="container-fluid my-auto">
            <div class="row margin-custom">
                <div class="col-md-6">
                    <div class="card rounded-0 bg-transparent web_background custom-card cust-padding" data-aos="fade-right" data-aos-duration="2000">
                        <p class="text-80">Our Creative Journey</p>
                        <p class="text-white text-17 font-fm-Manrope lh-lg mb-4">
                            Founded in 2023, XGen Media began as a small collective
                            dedicated to empowering creativity through innovative media
                            production solutions. Starting locally, our high-quality and
                            collaborative approach helped a variety of projects come to
                            life.
                        </p>
                        <div class="div">
                            <button style="padding: 10px 25px 10px 25px" onclick="window.location.href = '#ourservice'"
                                class="rounded-2 bg-transparent text-white border-white text-uppercase custom-button">
                                <span class="text-20"> Our Service </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="2000">
                    <div class="card custom-width-sec2 rounded-0 bg-transparent pe-5">
                        <img src="./assets/About-Section-Collage.png" alt="" srcset="" />
                    </div>
                </div>
                <div class="col-md-12 sec-3-about">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-around">
                            <div data-aos="zoom-in" data-aos-duration="2000"
                                class="about-card-sec3 position-relative card w-50 rounded-0 bg-transparent pt-5 px-md-3 top_margin">
                                <p class="text-182 text-center">
                                    Connecting Minds Through Media
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 position-absolute z-n1 top-220" data-aos="zoom-out" data-aos-duration="2000">
                            <img class="img-fluid" src="./assets/About-Service-collage.png" alt="" srcset="" />
                        </div>
                        <div id="ourservice"
                            class="row d-flex justify-content-md-start justify-content-lg-end justify-content-sm-start my-row top_margin_30">
                            <div class="col-md-12 col-lg-7 col-sm-12" data-aos="zoom-in" data-aos-duration="2000">
                                <p class="text-warning text-40 px-5 text-center text-md-start">Our Services</p>
                                <p class="typewriter text_90 px-5 py-md-3" id="typewriter"></p>
                                <p class="text-20 text-white px-md-5 px-2 w-100 text-center text-md-start">
                                    XGen Media Production is a one-stop creative hub that
                                    empowers storytellers from concept to completion. With
                                    industry-leading in-house production facilities and services
                                    spanning audio, video, photography and events, our expert
                                    multimedia team helps transform client ideas into polished,
                                    impactful works through innovative media solutions. Whether
                                    you’re a musician, podcaster, filmmaker or brand – at XGen
                                    your imagination has wings.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec4">
        <div class="sec-5 w-100 d-flex align-items-center justify-content-center pb-3">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <p class="text-warning fs-100 z-3 text-center mb-sm-35" data-aos="fade-right" data-aos-duration="2000">
                        Our
                        <span class="text-light">Partners</span>
                    </p>
                </div>
                <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-3 col-md-3 col-sm-12 d-flex justify-content-around">
                    <img class="partner-img" width="150" src="./assets/Lahoti-croped.png" alt="" srcset="" />
                </div>
                <div data-aos="fade-down" data-aos-duration="2000" class="col-lg-3 col-md-3 col-sm-12 d-flex justify-content-around">
                    <img class="partner-img" width="150" src="./assets/icons-300x300.png" alt="" srcset="" />
                </div>
                <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-3 col-md-3 col-sm-12 d-flex justify-content-around">
                    <img class="partner-img" width="150" src="./assets/PITHM-croped-150x150.png" alt="" srcset="" />
                </div>
            </div>
        </div>
    </section>
    <!-- sec end -->

    <section class="form">
        <div class="background-studio-video">
            <div class="video">
                <div class="row position-relative">
                    <div class="col-12" style="    margin-bottom: -6px;">
                        <video id="our_video" autoplay loop muted src="./assets/Our-Creative-Journey.mp4"></video>
                        <div class="container position-absolute top-50 start-50 translate-middle">
                            <form action="send-mail.php" id="webForm" method="post" data-aos="zoom-in" data-aos-duration="2000">
                                <p class="text_100 text-light">
                                    <span class="text-warning fs-50 lh-1 d-block">Get In Touch</span>
                                    How May I Help you?
                                </p>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-6 col-md-6 col-sm-6 mb-3 mb-md-5">
                                                <input type="text" name="name" id=""
                                                    class="text-white input form-control bg-transparent border-0 border-bottom rounded-0 text-18"
                                                    placeholder="Enter Your Name" />
                                            </div>
                                            <div class="col-6 col-md-6 col-sm-6 mb-3 mb-md-5">
                                                <input type="text" name="company-name" id=""
                                                    class="text-white input form-control bg-transparent border-0 border-bottom rounded-0 text-18"
                                                    placeholder="Company Name" />
                                            </div>
                                            <div class="col-6 col-md-6 col-sm-6 mb-3 mb-md-5">
                                                <input type="text" name="mobile" id=""
                                                    class="text-white input form-control bg-transparent border-0 border-bottom rounded-0 text-18"
                                                    placeholder="Mobile Number" />
                                            </div>
                                            <div class="col-6 col-md-6 col-sm-6 mb-3 mb-md-5">
                                                <input type="text" name="email" id=""
                                                    class="text-white input form-control bg-transparent border-0 border-bottom rounded-0 text-18"
                                                    placeholder="Email Address" />
                                            </div>
                                            <div class="col-md-12 col-sm-6 mb-3 mb-md-5">
                                                <select name="service"
                                                    class="form-select bg-transparent rounded-0 border-0 border-bottom text-light text-18 fs_sm_16 mb-5"
                                                    aria-label="Default select example">
                                                    <option selected disabled>Service Required</option>
                                                    <option class="text-dark mb-2" value="The Social Event Space">
                                                        The Social Event Space
                                                    </option>
                                                    <option class="text-dark mb-2" value="Drone Service">
                                                        Drone Service
                                                    </option>
                                                    <option class="text-dark mb-2" value="Editing Service">
                                                        Editing Service
                                                    </option>
                                                    <option class="text-dark mb-2" value="Sound proof Studio">
                                                        Sound proof Studio
                                                    </option>
                                                    <option class="text-dark mb-2" value="Other">
                                                        Other
                                                    </option>
                                                </select>


                                                <button type="submit" style="padding: 10px 25px 10px 25px"
                                                    class="rounded-2 bg-transparent text-white border-white text-uppercase custom-button">
                                                    <span class="text-20"> Submit </span>
                                                </button>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="bi bi-telephone-fill text-light fs-1"></i>
                                            </div>
                                            <div class="col-10 mb-4">
                                                <span class="text-light text-18 d-block fs_sm_16">Phone No</span>
                                                <span class="text-light text-18 d-block fs_sm_16">+923011019756</span>
                                            </div>
                                            <div class="col-2">
                                                <i class="bi bi-envelope-fill text-light fs-1"></i>
                                            </div>
                                            <div class="col-10 mb-4">
                                                <span class="text-light text-18 d-block fs_sm_16">Email</span>
                                                <span class="text-light text-18 d-block fs_sm_16">info@xgen.media</span>
                                            </div>
                                            <div class="col-2">
                                                <i class="bi bi-geo-alt-fill text-light fs-1"></i>
                                            </div>
                                            <div class="col-10 mb-4">
                                                <span class="text-light text-18 d-block fs_sm_16">Address</span>
                                                <span class="text-light text-18 d-block fs_sm_16">Plot # 13-C , Stadium
                                                    Commercial Lane 2, DHA Phase
                                                    5 , Karachi South.</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->

    <?php include 'footer.php'; ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/button.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="./js/slides.js"></script>
</body>

</html>