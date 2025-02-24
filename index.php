<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xgen.media</title>
    <link rel="shortcut icon" href="./assets/xgen-media-icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Manrope:wght@200..800&display=swap"
        rel="stylesheet">
    <!-- google fonts end-->
    <!-- custom css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/button&fun.css">
    <link rel="stylesheet" href="./css/section-home.css">
    <link rel="stylesheet" href="./css/responsive1.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
    html {
        overflow-x: hidden;
    }

    .video-sec2 {
        object-fit: cover;
        /* To maintain aspect ratio */
        /* To fill the container */
    }

    .sec-drone-home {
        position: relative;
        width: 100%;
        height: 50vh;
        /* Full viewport height */
        overflow: hidden;
    }

    .sec-drone-home .drone-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensure the video covers the full section */
        z-index: -1;
        /* Keeps the video in the background */
    }

    .drone-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        /* Semi-transparent black overlay */
        z-index: 1;
        /* Overlay stays above the video, but behind the text */
    }

    .top-margin-7 {
        margin-top: 56%;
    }
    </style>
</head>

<body>
    <?php include './xyz.html'; ?>
    <section class="home">
        <!-- header -->
        <?php include './header.php'; ?>

        <!-- Video Background Section -->
        <div class="video-background">
            <video src="./assets/video-home.mp4" class="home-first-video" autoplay loop muted></video>
            <div class="container-fluid position-absolute top-50 start-50 translate-middle z-index-1 text-center">
                <div class="row justify-content-center">
                    <div class="col-12 mb-md-5" data-aos="fade-up" data-aos-duration="3000">
                        <img class="xgen_media" width="200" src="./assets/xgen-media-icon.png" alt="log-media">
                    </div>
                    <div class="col-12 text-light">
                        <h1 class="text-light text-125 mb-3">XGEN MEDIA PRODUCTION</h1>
                        <h2 class="text-warning text-uppercase text-25-heading mb-4">
                            Transforming Ideas into Impactful Stories
                        </h2>
                        <button style="padding: 10px 25px 10px 25px;" onclick="window.location.href = 'contact-us.php'"
                            class="rounded-2 bg-transparent text-white border-white text-uppercase custom-button">
                            <span class="text-20">Contact us Today</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Left bottom sticky button -->
    <button class="btn music-btn">
        <i class="bi bi-music-note-beamed text-warning fw-bold"></i>
    </button>
    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="scroll-to-top-btn btn btn-secondary rounded-circle">
        <i class="bi bi-arrow-up fs-4 fw-bold"></i>
    </button>

    <section class="sec-2social background-web-black py-5">

        <div class="container-fluid">
            <div class="row justify-content-md-end justify-content-lg-around">
                <div class="col-lg-5 d-flex align-items-center col-12 new-width pb-3">
                    <div class="card border-0 bg-transparent d-flex justify-content-end" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-img">
                            <img width="40%" src="./assets/social-01.png" alt="">
                        </div>
                        <div class="heading">
                            <div class="row">
                                <div class="col-12">
                                    <div class="only-text-120 lh-sm text-white">
                                        <span>
                                            The <span style="color:#FFBE02; ">Social</span> <br>An Event Space</span>
                                    </div>
                                    <p class="text-20 font-fm-Manrope text-light lh-1">
                                        A
                                        <span class="text-warning text-20 font-fm-Manrope">creative Space</span>
                                        to spark
                                        connections, cultivate ideas and elevate every event.
                                    </p>
                                    <button class="rounded-2 px-2 py-1 text-uppercase custom-button1" onclick="window.open('the-social.html', '_blank');">
                                        <span class="text-20">
                                            View More
                                            <i class="bi bi-chevron-right"></i>
                                        </span>
                                    </button>
                                    <button onclick="window.location.href = '#webForm'"
                                        class="rounded-2 bg-transparent text-white border-white text-uppercase btn btn-lm ms-md-5 custom-button">
                                        <span class="inquire">Inquire Now</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <video data-aos="fade-down" data-aos-duration="1000" autoplay loop muted class="video-sec2" src="./assets/Home-social-for-mobile.mp4"></video>
                </div>
            </div>
        </div>

    </section>

    <section class="sound-proff-studio">
        <div class="container z-i">
            <div class="row">
                <div class="col-lg-6 ps-lg-5 col-md-12 ms-md-4 cust-margin-studio cust-margin-studio1" data-aos="fade-right" data-aos-duration="2000">
                    <h2 class="spstd ms-md-5 mt-md-5 pt-md-5">
                        <span class="sp-y">Soundproof</span>
                        Studio
                    </h2>
                    <p class="spstd-p ms-md-5">
                        A distraction-free domain for premium audio
                        <br>
                        production
                    </p>
                    <button onclick="window.open('sound-prof.php', '_blank');" class="btn btn-lm ms-md-5 custom-button1">
                        <span>
                            Learn More
                            <i class="bi bi-chevron-right"></i>
                        </span>
                    </button>
                    <button onclick="window.location.href = '#webForm'" class="btn btn-bat ms-md-5 custom-button">
                        <span>Book A Studio Tour</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-drone-home">
        <video class="drone-video" src="./assets/Legends-Arena-drone-shoot.mp4" autoplay muted loop></video>
        <div class="drone-overlay"></div> <!-- Overlay div added -->
        <div class="container position-relative z-2">
            <div class="row justify-content-end">
                <div class="col-lg-6 ps-md-5 ms-md-4 cust-margin-studio cust-margin-studio1" data-aos="fade-up">
                    <h2 class="spstd ms-md-5 mt-md-5 pt-md-5">
                        <span class="sp-y">Drone</span>
                        Services
                    </h2>
                    <p class="spstd-p ms-md-5">
                        A distraction-free domain for premium audio
                        <br>
                        production
                    </p>
                    <button onclick="window.open('drone-services.php', '_blank');" class="btn btn-lm ms-md-5 custom-button1">
                        <span>
                            Learn More
                            <i class="bi bi-chevron-right"></i>
                        </span>
                    </button>
                    <button onclick="window.location.href = '#webForm'" class="btn btn-bat ms-md-5 custom-button">
                        <span>Request a Quote</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="sec-3 sec-5 w-100 h100 w-100" style="position: relative; z-index: 16;">
            <div class="row">
                <div class="col-md-6 cust-div col-sm-12 h100 h_auto h_50 d-flex align-items-center justify-content-end">
                    <div class="pt-custom-mobile px-3" data-aos="fade-up" data-aos-duration="1000">
                        <p class="only-text-120 lh-sm text-warning">
                            Editing
                            <span class="text-light">Services</span>
                        </p>
                        <p class="spstd-p">
                            A distraction-free domain for premium audio
                            <br>
                            production
                        </p>
                        <button class="btn btn-lm custom-button1">
                            <span>
                                Learn More
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </button>
                        <button onclick="window.location.href = '#webForm'" class="btn btn-bat ms-md-5 custom-button">
                            <span>Book A Studio Tour</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 cust-div-video d-none d-md-block">
                    <video data-aos="fade-up" data-aos-duration="1000" autoplay loop muted class="position-absolute w-100 video-sec2" id="editing_service"
                        src="./assets/Video-Editing.mp4"></video>
                </div>
                <div class="col-12 d-none d-sm-block d-flex justify-content-center" data-aos="fade-down" data-aos-duration="1000">
                    <video autoplay loop muted class="w-100" src="./assets/Video-Editing.mp4"></video>
                </div>
            </div>
        </div>
        <div class="sec-4 h_gallery h-100"  style="position: relative; z-index: 16;">
            <video autoplay loop muted class="position-absolute w-100 video-sec2 video-gallery"
                src="./assets/Home-Video-Collage.mp4"></video>
            <div class="container z-i height_cust" data-aos="fade-down" data-aos-duration="1000">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 ps-md-5 ms-md-4 position-absolute d-flex justify-content-center">
                        <p class="spstd h80 gallery_heading  d-flex align-items-center text-center">
                            <span class="sp-y mx-3 text-center">Video</span>
                            Gallery
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="parallex-effect top-margin-7" id="parallex_mb">
            <div class="sec-5 w-100 d-flex align-items-center justify-content-center pb-5">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12" data-aos="fade-up"
                    data-aos-anchor-placement="top-center" data-aos-duration="2000">
                        <p class="text-warning fs-100 z-3 text-center mb-sm-35">
                            Our
                            <span class="text-light">Partners</span>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                        <div class="card w-50 bg-transparent border-0" data-aos="fade-down"
                        data-aos-anchor-placement="top-center" data-aos-duration="1000">
                            <img class="partner-img" width="150" src="./assets/Lahoti-croped.png" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                        <div class="card w-50 bg-transparent border-0" data-aos="fade-up"
                        data-aos-anchor-placement="top-center" data-aos-duration="2000">
                            <img class="partner-img" width="150" src="./assets/icons-300x300.png" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 d-flex justify-content-center">
                        <div class="card w-50 bg-transparent border-0" data-aos="fade-down"
                        data-aos-anchor-placement="top-center" data-aos-duration="2000">
                            <img class="partner-img" width="150" src="./assets/PITHM-croped-150x150.png" alt=""
                                srcset="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- parallex effect-->
            <div class="container testimonial">
                <div class="row">
                    <div class="col-12">
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <p class="text-light fs-50 lh-1 mt-md-5" data-aos="fade-up"
                            data-aos-anchor-placement="top-center" data-aos-duration="1000">Testimonial</p>
                            <p class="text-warning fs-100" data-aos="fade-up"
                            data-aos-anchor-placement="top-center" data-aos-duration="2000">What People Say</p>
                            <div class="carousel-inner" style="height: 90vh" data-aos="fade-up"
                            data-aos-anchor-placement="top-center" data-aos-duration="2000">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="carousel-slider">
                                            <div class="carousel-item active" data-bs-interval="2000">
                                                <div class="card position-relative web_background web_card_sm"
                                                    style="width: 30rem">
                                                    <div class="card-body">
                                                        <p></p>
                                                        <p class="card-text text-white fs-5 lh-base text-16-sm">
                                                            I’m so glad that we have a new event space which offers
                                                            artists a space to perform and be themselves! The social is
                                                            great and its also located at a prime location which is
                                                            good!
                                                        </p>
                                                        <p>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                        </p>
                                                        <p class="card-title fw-bold fs-3 text-white">Natalia Gul</p>
                                                    </div>
                                                    <div class="card position-absolute end-0 border-0 bg-transparent sm_card"
                                                        style="width: 15rem; bottom: -40%; left: 70%">
                                                        <img src="./assets/Natalia-Gul.png"
                                                            class="card-img-top border border-warning border-4 rounded-5"
                                                            alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <div class="card position-relative web_background p-2 web_card_sm sethar"
                                                    style="width: 30rem">
                                                    <div class="card-body">
                                                        <p class="card-text fs-5 text-light lh-base mb-3 text-16-sm">
                                                            The social is an amazing space to showcase your art, may it
                                                            be anything. It’s a peaceful and wonderful place and I love
                                                            that they will give a chance to the youth and new artists.
                                                            There’s so many things that can happen here!
                                                        </p>
                                                        <p>
                                                            <span class="fs-5 text-light lh-base text-16-sm"
                                                                style="font-weight: 400;">I’m enjoying myself a lot here
                                                                and the staff is also so cooperative.</span>
                                                        </p>
                                                        <p>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                        </p>
                                                        <p class="fs-3 text-light fw-bold">Mazhar Sethar</p>
                                                    </div>
                                                    <div class="card position-absolute end-0 border-0 bg-transparent sm_card sethar_sm"
                                                        style="width: 15rem; bottom: -40%; left: 70%">
                                                        <img src="./assets/mazhar-sethar.png"
                                                            class="card-img-top border border-warning border-4 rounded-5"
                                                            alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <div class="card position-relative web_background web_card_sm"
                                                    style="width: 30rem">
                                                    <div class="card-body">
                                                        <span class="text-white fs-5 text-16-sm"
                                                            style="font-weight: 400;">The whole place is super positive.
                                                            These places bring an optimistic change for
                                                            artists.&nbsp;</span>
                                                        <p class="card-text">
                                                            <span class="text-white fs-5 text-16-sm"
                                                                style="font-weight: 400;">We had a great experience and
                                                                we love how The Social is a fun and safe space.</span>
                                                        </p>
                                                        <p>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                        <p class="fw-bold text-white fs-3">The Baloch Twins</p>
                                                        </p>
                                                    </div>
                                                    <div class="card position-absolute end-0 border-0 bg-transparent sm_card"
                                                        style="width: 15rem; bottom: -40%; left: 70%">
                                                        <img src="./assets/The-Baloch.png"
                                                            class="card-img-top border border-warning border-4 rounded-5"
                                                            alt="...">
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

            <div class="background-studio-video">
                <div class="container-fluid">
                    <div class="row position-relative">
                        <div class="col-12">
                            <video id="our_video" autoplay loop muted src="./assets/Our-Creative-Journey.mp4"></video>
                            <div class="container position-absolute top-50 start-50 translate-middle">
                                <form action="send-mail.php" id="webForm" method="post" data-aos="zoom-in-up" data-aos-duration="2000">
                                    <p class="fs-100 text-light">
                                        <span class="text-warning fs-50 lh-1 d-block">Get In Touch</span>
                                        How May I Help you?
                                    </p>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-12">
                                            <div class="row">
                                                <div class="col-6 col-md-6 col-sm-6  mb-3 mb-md-5">
                                                    <input type="text" name="name" id=""
                                                        class="text-white input form-control bg-transparent border-0 border-bottom rounded-0 fs-5"
                                                        placeholder="Enter Your Name">
                                                </div>
                                                <div class="col-6 col-md-6 col-sm-6 mb-3 mb-md-5">
                                                    <input type="text" name="company-name" id=""
                                                        class="text-white input form-control bg-transparent border-0 border-bottom rounded-0 fs-5"
                                                        placeholder="Company Name">
                                                </div>
                                                <div class="col-6 col-md-6 col-sm-6 mb-3 mb-md-5">
                                                    <input type="text" name="mobile" id=""
                                                        class="text-white input form-control bg-transparent border-0 border-bottom rounded-0 fs-5"
                                                        placeholder="Mobile Number">
                                                </div>
                                                <div class="col-6 col-md-6 col-sm-6 mb-3 mb-md-5">
                                                    <input type="text" name="email" id=""
                                                        class="text-white input form-control bg-transparent border-0 border-bottom rounded-0 fs-5"
                                                        placeholder="Email Address">
                                                </div>
                                                <div class="col-md-12 col-sm-6 mb-3 mb-md-5">
                                                    <select
                                                        class="form-select bg-transparent rounded-0 border-0 border-bottom text-light fs-5 fs_sm_16"
                                                        name="service" aria-label="Default select example">
                                                        <option class="text-dark" selected disabled>Service Required
                                                        </option>
                                                        <option class="text-dark" value="The Social Event Space">The
                                                            Social Event Space
                                                        </option>
                                                        <option class="text-dark" value="Drone Service">Drone Service
                                                        </option>
                                                        <option class="text-dark" value="Editing Service">Editing
                                                            Service</option>
                                                        <option class="text-dark" value="Sound Proof Studio">Sound Proof
                                                            Studio</option>
                                                        <option class="text-dark" value="Other">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 col-sm-12 mb-3">
                                                    <button style="padding: 10px 25px 10px 25px"
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
                                                    <span class="text-light fs-5 d-block fs_sm_16">Phone No</span>
                                                    <span class="text-light fs-5 d-block fs_sm_16">+923011019756</span>
                                                </div>
                                                <div class="col-2">
                                                    <i class="bi bi-envelope-fill text-light fs-1"></i>
                                                </div>
                                                <div class="col-10 mb-4">
                                                    <span class="text-light fs-5 d-block fs_sm_16">Email</span>
                                                    <span
                                                        class="text-light fs-5 d-block fs_sm_16">info@xgen.media</span>
                                                </div>
                                                <div class="col-2">
                                                    <i class="bi bi-geo-alt-fill text-light fs-1"></i>
                                                </div>
                                                <div class="col-10 mb-4">
                                                    <span class="text-light fs-5 d-block fs_sm_16">Address</span>
                                                    <span class="text-light fs-5 d-block fs_sm_16">Plot # 13-C , Stadium
                                                        Commercial Lane 2, DHA Phase 5 , Karachi South.</span>
                                                </div>
                                                <div class="col-2">
                                                    <img class="img-fluid" src="./assets/instagram.png" alt="instagram">
                                                </div>
                                                <div class="col-10">
                                                    <span class="text-light fs-5 d-block fs_sm_16">Instagram</span>
                                                    <span class="text-light fs-5 d-block fs_sm_16">@media.xgen</span>
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
        </div>

    </section>

    <div class="container-fluid bg-black d-flex justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <p class="fs-100 text-warning">News
                    <span class="text-light">&</span> Updates
                </p>
            </div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-end card_news mb-3" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="card border-0 bg-transparent card_news" style="width:28rem;">
                    <div class="card-img position-relative">
                        <img class="rounded-5 w-100" src="./assets/digital.jpg" alt="">
                    </div>
                    <div class="card-content position-absolute bottom-0 translate-bottom">
                        <p class="text-light fs-3 mx-3">Opening Of The Social</p>
                        <p class="text-light fs-5 mx-3">February 19,2024</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-3 card_news" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="card border-0 bg-transparent card_news" style="width:28rem;">
                    <div class="card-img position-relative">
                        <img class="img-fluid rounded-5" src="./assets/qawali.jpg" alt="">
                    </div>
                    <div class="card-content position-absolute bottom-0 translate-bottom">
                        <p class="text-light fs-3 mx-3">Qawali Night</p>
                        <p class="text-light fs-5 mx-3">February 19,2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/button.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script src="./js/slides.js"></script>
</body>

</html>