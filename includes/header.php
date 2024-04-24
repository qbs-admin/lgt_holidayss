<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Their is nothing to see about it">
    <title>LGT Holidays</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap">
    <!-- Slick -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/logo1.png" type="image/x-icon">
</head>

<!-- splash screen codes on the way -->
<!-- <div class="splash_screen">
    <div>
        <div class="loading_gif">
            <img src="assets/logo1.png" class="object-contain logo_reveal_anime">
            <img src="assets/media/images/globe.png" class="object-contain globe">
        </div>
        <p class="name_reveal_anime h2 text-center">Loading ...</p>
    </div>
</div> -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let loaderContainer = document.querySelector('.splash_screen');
        setTimeout(function () {
            loaderContainer.classList.add('remove');
        }, 1000);

        setTimeout(function () {
            $(".slider_line_one").addClass("slider_show");
            $(".slider_line_two").addClass("slider_show");
            $(".nav_links").addClass("nav_links_show");
            $(".reveal_after_anime").addClass("goo");
        }, 2300);

        //if video container exist
        if (document.getElementById('background-video') != null) {
            let video = document.getElementById('background-video');
            document.getElementById('background-video').pause();

            video.addEventListener('canplay', function () {
                document.querySelector('.alternative_img').classList.add('d-none');
                document.getElementById('background-video').play();
            });
            video.addEventListener('progress', function () {
                if (video.buffered.length > 0) {
                    let percent = (video.buffered.end(0) / video.duration) * 100;
                    if (percent == 100) {
                        document.querySelector('.alternative_img').classList.add('d-none');
                        document.getElementById('background-video').play();
                    }
                } else {
                    // console.log('buffer not started')
                }
            });
        }
    });
</script>

<body>
    <div class="custom_notification">
        <p class="h6 font-weight-normal py-2 px-4 rounded bg-white d-inline-block shadow-lg">Thank You For Contacting
            Us, One Of Our Team Member Will Contact You Shortly</p>
    </div>
    <div class="enquiry_form">
        <div class="enquiry_close_area open_enquiry"></div>
        <div class="bg-white shadow-lg form_content">
            <div class="h-100 overflow-auto">
                <div class=" pe-0">
                    <div class="enq_image">
                        <img src="assets/media/images/enquiry_bg.jpg" class="object-cover" alt="">
                    </div>
                </div>
                <div class="enquiry_container bg-white py-3">
                    <div class="mx-2 px-3">
                        <p class="h4">Explore the world with us !</p>
                        <p class="">Your journey begins with a simple inquiry.</p>
                        <input type="text" class="custom-form-control mb-3 mt-4" placeholder="Name">
                        <input type="number" class="custom-form-control" placeholder="Mobile Number">
                        <input type="email" class="custom-form-control my-3" placeholder="Email ID">
                        <input type="text" class="custom-form-control mb-3" placeholder="City Name">
                        <button class="btn btn-primary send_enquiry mb-2">Send</button>
                        <button class="btn btn-primary open_enquiry mb-2">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar and Video Player -->
    <nav class="main_navbar d-flex justify-content-between navbar-align-items d-large-padding-right">
        <div class="logo_container">
            <a href="index.php" class="logo">
                <img src="assets/logo1.png" class="object-contain" alt="">
            </a>
        </div>
        <div class="d-block-large-display h-100">
            <div class="h-100 d-flex flex-column justify-content-between pt-2">
                <div class="d-flex justify-content-between align-items-center h6 font-weight-normal text-dark px-5">
                    <p class="d-flex align-items-center"><i class="fa-solid fa-phone text-primary mr-2"></i> <span
                            class="pl-2"> +91 87901 95350</span></p>
                    <p class="d-flex align-items-center"><i class="fa-solid fa-envelope h5 mb-0 text-primary mr-2"></i>
                        <span class="pl-2">contact@lgtholidays.com</span>
                    </p>
                    <p class="d-flex justify-content-around align-items-center">
                        <a href="#" class="social_media_icons" aria-label="Instagram">
                            <img src="img/icons/facebook.png" alt="" class="social_icons">
                        </a>
                        <a href="#" class="social_media_icons mx-3" aria-label="Facebook">
                            <img src="img/icons/insta.png" alt="" class="social_icons">
                        </a>
                        <a href="#" class="social_media_icons" aria-label="LinkedIn">
                            <img src="img/icons/linked_in.png" alt="" class="social_icons">
                        </a>
                        <a href="#" class="social_media_icons ml-3" aria-label="Twitter">
                            <img src="img/icons/twitter.png" alt="" class="social_icons">
                        </a>
                    </p>
                </div>
                <ul class="d-flex justify-content-around align-items-center nav_links">
                    <li>
                        <a href="index.php" class="links">Home</a>
                    </li>
                    <li class="position-relative">
                        <a href="about.php" class="links" data-nav="about_drop">About Us</a>
                        <div class="dropdown_content">
                            <div class="d-block">
                                <a href="md-message.php">Message From MD's Desk</a>
                                <a href="about.php">Company Profile</a>
                                <a href="team-details.php">Core Team</a>
                            </div>
                        </div>
                    </li>
                    <li class="position-relative">
                        <a href="#" class="links" data-nav="corporate_travel_drop">Corporate Travel</a>
                        <div class="dropdown_content">
                            <div class="d-block">
                                <a href="mice.php">MICE</a>
                                <a href="hotel_booking.php">Hotel Booking</a>
                                <a href="md-message.php">Ticketing</a>
                                <a href="md-message.php">VISA</a>
                                <a href="md-message.php">Forex</a>
                            </div>
                        </div>
                    </li>
                    <li class="position-relative">
                        <a href="#" class="links" data-nav="customized_drop">Customized Travel</a>
                        <div class="dropdown_content">
                            <div class="d-block">
                                <a href="domestic_tours.php">Domestic Tours</a>
                                <a href="md-message.php">International Tours</a>
                                <a href="md-message.php">Specialized Tours</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="links">Gift a Tour</a>
                    </li>
                    <li>
                        <a href="gallery.php" class="links">Gallery</a>
                    </li>
                    <li>
                        <a href="careers.php" class="links">Careers</a>
                    </li>
                    <li>
                        <a href="contact.php" class="links">Contact Us</a>
                    </li>
                    <li>
                        <a href="#" class="links open_enquiry">Enquiry</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-block-small-display">
            <button class="side_bar_toggler open_close_button"></button>
        </div>
        <div class="d-block-small-display side_navbar">
            <div class="d-flex justify-content-end my-5 mx-3">
            </div>
            <div class="overflow-auto h-100">
                <ul>
                    <li><a href="index.php" class="text-dark">Home</a></li>
                    <li>
                        <p class="open_small_drop_down" data-dropdown="small_drop_1">About</p>
                        <ul class="small_drop_down small_drop_1">
                            <li><a href="md-message.php" class="d-block w-100 text-dark">Message From MD's Desk</a></li>
                            <li><a href="about.php" class="d-block w-100 text-dark">Company Profile</a></li>
                            <li><a href="team-details.php" class="d-block w-100 text-dark">Core Team</a></li>
                        </ul>
                    </li>
                    <li>
                        <p class="open_small_drop_down" data-dropdown="small_drop_2">Corporate Travel</p>
                        <ul class="small_drop_down small_drop_2">
                            <li>MICE</li>
                            <li>Hotels & Booking</li>
                            <li>Ticketing</li>
                            <li>VISA</li>
                            <li>Forex</li>
                        </ul>
                    </li>
                    <li>
                        <p class="open_small_drop_down" data-dropdown="small_drop_3">Customized Travel</p>
                        <ul class="small_drop_down small_drop_3">
                            <li>Domestic Travel</li>
                            <li>International Travel</li>
                            <li>Specialized Travel</li>
                        </ul>
                    </li>
                    <li><a href="#" class="text-dark">gift a Tour</a></li>
                    <li><a href="contact.php" class="text-dark">Contact Us</a></li>
                    <li><a href="#" class="text-dark open_enquiry">Make a Trip</a></li>
                </ul>
            </div>
        </div>
    </nav>