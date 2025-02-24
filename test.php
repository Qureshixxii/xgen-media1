<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>xgen Media | The Social</title>
    <link rel="shortcut icon" href="assets/xgen-media-icon.png" type="image/x-icon" />
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
    <link rel="stylesheet" href="css/button&fun.css" />
    <link rel="stylesheet" href="css/the-social.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
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

        .contact-background {
            background-color: #031126;
        }

 /* Custom CSS for full-screen modal */
.modal-fullscreen .modal-content {
    background-color: black;
}

.carousel-item img,
.carousel-item video {
    max-height: 80vh;
    width: auto;
    margin: 0 auto;
}

.carousel-control-prev,
.carousel-control-next {
    width: 5%;
}

/* Style for the close button */
.btn-close {
    color: white;
    opacity: 1;
    font-size: 2rem;
}
        
    </style>

</head>

<body>
    <section class="h100 h_auto position-relative">
        <!-- Video Background with black overlay -->
        <div class="position-relative">
            <video id="front_video" autoplay loop muted class="position-absolute top-0 start-0 object-cover"
                src="assets/The-Social-Video-Bg.mp4"></video>

            <!-- Black Overlay -->
            <div class="sec_main position-absolute top-0 start-0 w-100 h-100"></div>
        </div>

        <!-- Navbar and Content -->
        <nav class="navbar navbar-expand-lg mb-md-5 mb-3 z-3">
           
            <div class="container-fluid">
                <div class="logo">
                  <a class="navbar-brand" href="index.php">
                    <img
                      class="list-group-horizontal"
                      width="100"
                      height="120"
                      src="assets/xgen-media-logo.png"
                      alt="logo"
                      
                    />
                  </a>
                </div>
                <button
                  class="navbar-toggler text-light"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-lg-5 ps-lg-5 ms-3 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a
                        class="nav-link active text-light"
                        aria-current="page"
                        href="index.php"
                        >Home</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="about-us.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a
                        class="nav-link dropdown-toggle text-light"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        >Service</a
                      >
                      <ul class="dropdown-menu pe-5">
                        <li>
                          <a class="dropdown-item" href="the-social.php">The Social</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="drone-services.php">Drone Services</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="editing-services.php">Editing Services</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="sound-prof.php">Sound Proof Studio</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="Gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="contact-us.php">Contact us</a>
                    </li>
                  </ul>
                  <div class="d-flex">
                    <div
                      class="rounded-circle d-flex justify-content-center bg-warning border border-4 border-white"
                    >
                      <button class="btn">
                        <i class="bi bi-telephone-fill text-light fs-3 my-auto"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
        </nav>

        <div class="container-fluid">
            <div class="container">
                <div class="row position-relative z-index-1 margin_top">
                    <div class="col-12 d-flex justify-content-center mb-md-5 z-3">
                        <img class="xgen_media" width="120" src="assets/xgen-media-icon.png" alt="log-media" />
                    </div>
                    <div class="col-12 text-center text-light z-3">
                        <p class="text-warning text_20 dm-sns text-uppercase mb-4 z-3">
                            A Creative Hub for Inspiration and Connection in Karachi
                        </p>
                        <h1 class="text-light text-100 mb-3 z-3">
                            The Social Event Space
                        </h1>
                        <div class="row d-flex justify-content-around">
                            <div class="col-md-8 z-3">
                                <p class="text_18 text-justify">
                                    As the premier indoor creative retreat in Karachi, The
                                    Social was conceptualized to nurture creative exchange,
                                    spark impactful partnerships and fuel forward-thinking
                                    discussions. Unlike transitory outdoor venues susceptible to
                                    interruption, our enclosed environment fosters inspired
                                    ideation through a distraction-minimized atmosphere.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-around z-3">
                        <button style="padding: 10px 25px 10px 25px" onclick="window.location.href = '#mailForm'"
                            class="rounded-2 bg-transparent text-white border-white custom-button">
                            <span class="text-20"> Inquire About Venue Rentals </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h_auto position-relative">
        <!-- Video Background with black overlay -->
        <div class="position-relative">
            <video id="sec_2_video" autoplay loop muted class="position-absolute top-0 start-0 object-cover"
                src="assets/The-social.mp4"></video>

            <!-- Black Overlay -->
            <div class="sec_main1 position-absolute top-0 start-0 w-100 h-100"></div>
        </div>

        <div class="container-fluid" style="height: 50vh; align-items: center; display: flex;">
            <div class="row position-relative z-index-1 justify-content-end align-items-center">
                <div class="col-md-8 text-center text-light z-3 d-flex justify-content-start">
                    <p class="text-warning text-100 ms-md-5">Amenities</p>
                </div>
                <div class="col-md-8">
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-6 text-white text-15 lh-lg z-3">
                            <p class="ms-md-5"><img width="20" src="assets/icons/conference-bold.png" alt=""
                                    srcset=""> Seating for 100+ attendees</p>
                        </div>
                        <div class="col-md-6 text-white text-15 lh-lg z-3">
                            <p><img width="20" src="assets/icons/wifi-router.png" alt="" srcset=""> High-speed WiFi
                                network</p>
                        </div>
                        <div class="col-md-6 text-white text-15 lh-lg z-3">
                            <p class="ms-md-5"><img width="20" src="assets/icons/cctv.png" alt="" srcset=""> Security
                                cameras</p>
                        </div>
                        <div class="col-md-6 text-white text-15 lh-lg z-3">
                            <p><img width="20" src="assets/icons/generator.png" alt="" srcset=""> Generator backup
                        </div>
                        <div class="col-md-6 text-white text-15 lh-lg z-3">
                            <p class="ms-md-5"><img width="20" src="assets/icons/window-frame.png" alt="" srcset="">
                                Sound proof studio</p>
                        </div>
                        <div class="col-md-6 text-white text-15 lh-lg z-3">
                            <p><img width="20" src="assets/icons/air-conditioning.png" alt="" srcset=""> Fully air
                                conditioned</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="h_auto position-relative overlay-img-singer">
        <!-- Video Background with black overlay -->
        <div class="position-relative">
            <!-- Black Overlay -->
            <div class="sec_main1 position-absolute top-0 start-0 w-100 h-100"></div>
        </div>

        <div class="container" style="height: 50vh; align-items: center; display: flex;">
            <div class="row position-relative z-index-1 align-items-center">
                <div class="col-md-10 col-lg-8 text-center text-light z-3 d-flex justify-content-start">
                    <p class="text-warning text-100 ms-md-5"><span class="text-light">Creative</span> Services</p>
                </div>
                <div class="col-md-10 col-lg-8">
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-6 text-white text-15 lh-lg z-3">
                            <p class="ms-md-5"><img width="20" src="assets/icons/conference-bold.png" alt=""
                                    srcset=""> Strategic Conferences</p>
                        </div>
                        <div class="col-md-6 text-white text-15 lh-lg z-3">
                            <p><img width="20" src="assets/icons/wifi-router.png" alt="" srcset=""> Corporate Mixers
                            </p>
                        </div>
                        <div class="col-md-6 text-white text-15 lh-lg z-3">
                            <p class="ms-md-5"><img width="20" src="assets/icons/cctv.png" alt="" srcset=""> Intimate
                                Gatherings</p>
                        </div>
                        <div class="col-md-6 text-white text-15 lh-lg z-3">
                            <p><img width="20" src="assets/icons/generator.png" alt="" srcset=""> Product/Launch
                                Presentations
                        </div>
                        <div class="col-md-6 text-white text-15 lh-lg z-3">
                            <p class="ms-md-5"><img width="20" src="assets/icons/window-frame.png" alt="" srcset="">
                                Screenings/Talks</p>
                        </div>
                        <div class="col-md-6 text-white text-15 lh-lg z-3">
                            <p><img width="20" src="assets/icons/air-conditioning.png" alt="" srcset=""> Fully air
                                conditioned</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-3-social">
        <p class="text-100 text-center py-5 text-warning"><span class="text-light">Our</span> Gallery</p>
        <div class="container">
            <div class="row">
                
                <div class="col-xl-8 col-md-6 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <a href="assets/The-social.mp4" class="media-item" data-type="video">
                                <video class="img-fluid mb-3" autoplay loop muted src="assets/The-social.mp4"></video>
                            </a>
                        </div>
                        <div class="col-12">
                            <a href="assets/HHS_1028.jpg" class="media-item" data-type="image">
                                <img class="img-fluid" src="assets/HHS_1028.jpg" alt="group-image">
                            </a>
                        </div>
                    </div>
                </div>




                <div class="col-xl-4 col-md-4 col-sm-12 mb-3">
                    <div class="row justify-content-center">
                        <div class="col-12 gallery-item mb-3">
                            <a href="assets/HHS_0958.jpg" class="media-item" data-type="image">
                                <div class="box">
                                    <img class="w-90 h-set"
                                        src="assets/HHS_0958.jpg" />
                                </div>
                            </a>
                        </div>
                        <div class="col-12 gallery-item">
                            <a href="assets/mic-girl.png" class="media-item" data-type="image">
                                <div class="box">
                                    <img class="w-90 h-set" src="assets/mic-girl.png" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 col-sm-12">
                    <a href="assets/qawali-studio.jpg" class="media-item" data-type="image">
                        <img class="img-fluid w-100 h-85 object-fit-cover" src="assets/qawali-studio.jpg"
                            alt="">
                    </a>
                </div>
                <div class="col-md-8 mb-md-3">
                    <img class="w-100 object-fit-cover zoom" src="assets/HHS_1118.jpg" alt="Image 5" data-bs-toggle="modal" data-bs-target="#lightbox" data-index="4" style="height: 30vh;">
                </div>
                <div class="col-md-12 mb-md-3">
                    <a href="assets/HHS_1146.jpg" class="media-item" data-type="image">
                    <img class="w-100 object-fit-cover zoom" src="assets/HHS_1146.jpg" alt="Image 6" data-bs-toggle="modal" data-bs-target="#lightbox" data-index="5" style="height: 50vh;">
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section class="form background-overlay-form">
        <div class="background-studio-video">
            <div class="video">
                <div class="row position-relative">
                    <div class="col-12">
                       
                        <div class="container">
                            <form action="send-mail.php" id="mailForm" method="post">
                                <p class="fs-100 text-light lh-1">
                                    <span class="text-warning fs-50 lh-1 d-block lh-1">Book Now</span>
                                    Perfect Venue For <p class="fs-100 text-light lh-1">Your Next Event</p> 
                                </p>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-6 col-md-6 col-sm-6 mb-3 mb-md-5">
                                                <input type="text" name="name" id=""
                                                    class="text-white input form-control bg-transparent border-0 border-bottom rounded-0 fs-5"
                                                    placeholder="Enter Your Name" />
                                            </div>
                                            <div class="col-6 col-md-6 col-sm-6 mb-3 mb-md-5">
                                                <input type="text" name="company-name" id=""
                                                    class="text-white input form-control bg-transparent border-0 border-bottom rounded-0 fs-5"
                                                    placeholder="Company Name" />
                                            </div>
                                            <div class="col-6 col-md-6 col-sm-6 mb-3 mb-md-5">
                                                <input type="text" name="mobile" id=""
                                                    class="text-white input form-control bg-transparent border-0 border-bottom rounded-0 fs-5"
                                                    placeholder="Mobile Number" />
                                            </div>
                                            <div class="col-6 col-md-6 col-sm-6 mb-3 mb-md-5">
                                                <input type="text" name="email" id=""
                                                    class="text-white input form-control bg-transparent border-0 border-bottom rounded-0 fs-5"
                                                    placeholder="Email Address" />
                                            </div>
                                            <div class="col-md-12 col-sm-6 mb-3 mb-md-5">
                                                <select name="service"
                                                    class="form-select bg-transparent rounded-0 border-0 border-bottom text-light fs-5 fs_sm_16 mb-5"
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


                                                <button style="padding: 10px 25px 10px 25px"
                                                    class="rounded-2 bg-transparent text-white border-white text-uppercase custom-button">
                                                    <span class="text-20"> Submit </span>
                                                </button>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12 text-center ">
                                                <i class="bi bi-telephone-fill text-light fs-1"></i>
                                            </div>
                                            <div class="col-md-10 col-sm-12 text-center text-md-start mb-4">
                                                <span class="text-light fs-5 d-block fs_sm_16">Phone No</span>
                                                <span class="text-light fs-5 d-block fs_sm_16">+923011019756</span>
                                            </div>
                                            <div class="col-md-2 col-sm-12 text-center ">
                                                <i class="bi bi-envelope-fill text-light fs-1"></i>
                                            </div>
                                            <div class="col-md-10 col-sm-12 text-center  text-md-start  mb-4">
                                                <span class="text-light fs-5 d-block fs_sm_16">Email</span>
                                                <span class="text-light fs-5 d-block fs_sm_16">info@xgen.media</span>
                                            </div>
                                            <div class="col-md-2 col-sm-12 text-center ">
                                                <i class="bi bi-geo-alt-fill text-light fs-1"></i>
                                            </div>
                                            <div class="col-md-10 col-sm-12 text-center  text-md-start  mb-4">
                                                <span class="text-light fs-5 d-block fs_sm_16">Address</span>
                                                <span class="text-light fs-5 d-block fs_sm_16">Plot # 13-C , Stadium
                                                    Commercial Lane 2, DHA Phase
                                                    5 , Karachi South.</span>
                                            </div>
                                            <div class="col-md-2 col-sm-12 text-center ">
                                                <img width="50" src="assets/instagram.png" alt="instagram" />
                                            </div>
                                            <div class="col-md-10 col-sm-12 text-center  text-md-start  mb-4">
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
    </section>





    <!-- footer -->
    <!-- map -->
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.4492371974893!2d67.04741157607388!3d24.8143061471014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33c52e3dbecf3%3A0x96ef5d730cbe518b!2sXGen%20Technologies!5e0!3m2!1sen!2s!4v1738152732472!5m2!1sen!2s"
                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <footer class="web_bluebackground">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 d-flex justify-content-center align-content-center py-5 border-bottom">
                    <img height="130" src="assets/xgen-media-logo.png" alt="">
                </div>
                <div class="col-md-3">
                    <p class="text-light fw-bold text-30 text-center text-md-start">Quick Links</p>
                    <p class="text-light text-17 text-center text-md-start">Home</p>
                    <p class="text-light text-17 text-center text-md-start">About</p>
                    <p class="text-light text-17 text-center text-md-start">Gallery</p>
                    <p class="text-light text-17 text-center text-md-start">Contact us</p>
                </div>
                <div class="col-md-3">
                    <p class="text-light fw-bold text-30 text-center text-md-start">Services</p>
                    <p class="text-light text-17 text-center text-md-start">The Social</p>
                    <p class="text-light text-17 text-center text-md-start">Drone Services</p>
                    <p class="text-light text-17 text-center text-md-start">Editing</p>
                    <p class="text-light text-17 text-center text-md-start">Sound Proof Studio</p>
                </div>
                <div class="col-md-3">
                    <p class="text-light fw-bold text-30 text-center text-md-start">Our Policies</p>
                    <p class="text-light text-17 text-center text-md-start">Privacy Policy</p>
                    <p class="text-light text-17 text-center text-md-start">Cookie Policies</p>
                    <p class="text-light text-17 text-center text-md-start">Term & Condition</p>
                </div>
                <div class="col-md-3">
                    <p class="text-light fw-bold text-30 text-center text-md-start">Get In Touch</p>
                    <p class="text-light text-17 text-center text-md-start">+923011019576</p>
                    <p class="text-light text-17 text-center text-md-start">Info@xgen.Media</p>
                    <p class="text-light text-17 text-center text-md-start">Plot # 13-C , Stadium Commercial Lane 2, DHA Phase 5 , Karachi
                        South.</p>
                    <p class="text-center text-md-start"><i class="text-light fs-4 bi bi-facebook mx-2"></i>
                      <i class="text-light fs-4 bi bi-youtube"></i>
                      <i class="mx-2 text-light fs-4 bi bi-instagram"></i></p>
                </div>
                <div class="form text-center mt-md-5">
                    <p class="text-light text-30 fw-bold">Sign up for our Newsletter Today</p>
                    <p class="text-light text-17">Be the first to know about our new arrivals and exclusive offers.
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control bg-transparent backround-footer-input"
                                    placeholder="Email Address" aria-label="Recipient's username"
                                    aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Sign up
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text-light text-center text-17">© 2024 — XGen Media Production. All Rights
                            Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
      </footer>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Magnific Popup JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            // Initialize Magnific Popup for mixed content (images and videos)
            $('.media-item').magnificPopup({
                type: 'image', // Default type
                gallery: {
                    enabled: true, // Enable gallery navigation
                    navigateByImgClick: true, // Allows navigating by clicking on media
                    preload: [0, 1] // Preload the next and previous items
                },
                callbacks: {
                    elementParse: function (item) {
                        // Check if the item is a video
                        if (item.el.data('type') === 'video') {
                            item.type = 'iframe'; // Set type to iframe for videos
                            item.iframe = {
                                patterns: {
                                    youtube: {
                                        index: 'youtube.com/', // YouTube URL pattern
                                        id: 'v=', // Extract video ID
                                        src: '%id%?autoplay=1' // Autoplay when opened
                                    },
                                    vimeo: {
                                        index: 'vimeo.com/', // Vimeo URL pattern
                                        id: '/', // Extract video ID
                                        src: '//player.vimeo.com/video/%id%?autoplay=1' // Autoplay when opened
                                    },
                                    directVideo: {
                                        index: '', // Direct video URL pattern
                                        id: '', // No ID extraction
                                        src: item.el.attr('href') // Use the href directly
                                    }
                                }
                            };
                        }
                    }
                }
            });
        });

</script>
  
    <script src="js/button.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="js/slides.js"></script>
   

    

    
</body>

</html>