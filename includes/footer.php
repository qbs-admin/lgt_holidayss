<style>
    .footer_animation {
        position: relative;
    }

    .small_plains {
        transition: all ease 1s;
        height: 40px;
        min-width: 200px;
        position: absolute;
        bottom: 66%;
        right: 38%;
        transform: rotateY(0deg);
        opacity: 80%;
        animation-name: small_plains;
        animation-duration: 10s;
        animation-iteration-count: infinite;
    }

    .small_plains2 {
        transition: all ease 1s;
        height: 27px;
        min-width: 200px;
        position: absolute;
        bottom: 75%;
        right: -20%;
        transform: rotateY(0deg);
        opacity: 80%;
        animation-name: small_plainss;
        animation-duration: 10s;
        animation-delay: 7s;
        animation-iteration-count: infinite;
    }

    @keyframes small_plains {
        0% {
            bottom: 66%;
            right: -20%;
            transform: rotateY(0deg);
        }

        50% {
            bottom: 66%;
            right: 108%;
            transform: rotateY(0deg);
        }

        49% {
            bottom: 66%;
            right: 108%;
            transform: rotateY(0deg);
        }

        50% {
            bottom: 66%;
            right: 108%;
            transform: rotateY(180deg);
        }

        99% {
            bottom: 66%;
            right: -20%;
            transform: rotateY(180deg);
        }

        100% {
            bottom: 66%;
            right: -20%;
            transform: rotateY(0deg);
        }
    }

    @keyframes small_plainss {
        0% {
            bottom: 80%;
            right: -20%;
            transform: rotateY(0deg);
        }

        50% {
            bottom: 80%;
            right: 108%;
            transform: rotateY(0deg);
        }

        49% {
            bottom: 80%;
            right: 108%;
            transform: rotateY(0deg);
        }

        50% {
            bottom: 80%;
            right: 108%;
            transform: rotateY(180deg);
        }

        99% {
            bottom: 80%;
            right: -20%;
            transform: rotateY(180deg);
        }

        100% {
            bottom: 80%;
            right: -20%;
            transform: rotateY(0deg);
        }
    }

    .aeroplain_img {
        transition: all ease 1s;
        height: 50px;
        min-width: 350px;
        position: absolute;
        bottom: 0%;
        right: 38%;
        transform: rotate(0deg)rotateY(0deg);
        opacity: 80%;
        animation-name: aerplain_anime;
        animation-duration: 10s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
    }

    .aeroplain_terminal {
        height: 300px;
    }

    .aeroplain_terminal img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @keyframes aerplain_anime {
        0% {
            bottom: 0%;
            right: 26%;
            transform: rotate(0deg)rotateY(0deg);
            opacity: 80%;
        }

        20% {
            bottom: 0%;
            right: 37%;
            transform: rotate(4deg)rotateY(0deg);
            opacity: 80%;
        }

        35% {
            bottom: 46%;
            right: 100%;
            transform: rotate(11deg)rotateY(70deg);
            opacity: 80%;
        }

        50% {
            bottom: 46%;
            right: 100%;
            transform: rotate(11deg)rotateY(70deg);
            opacity: 80%;
        }

        51% {
            bottom: 8%;
            right: 100%;
            transform: rotate(-4deg)rotateY(180deg);
            opacity: 80%;
        }

        68% {
            bottom: 0%;
            right: 50%;
            transform: rotate(-2deg)rotateY(180deg);
            opacity: 80%;
        }

        80% {
            bottom: 0%;
            right: -20%;
            transform: rotate(0deg)rotateY(180deg);
            opacity: 80%;
        }

        81% {
            bottom: 0%;
            right: -20%;
            transform: rotate(0deg)rotateY(0deg);
            opacity: 80%;
        }

        100% {
            bottom: 0%;
            right: 26%;
            transform: rotate(0deg)rotateY(0deg);
            opacity: 80%;
        }
    }

    .footer_animation::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: transparent;
        z-index: 1;
    }

    .f-links a {
        transition: all ease 1s;
        position: relative;
    }

    .f-links a::before {
        transition: all ease 1s;
        content: "";
        position: absolute;
        top: 5px;
        left: -22px;
        clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);
        height: 10px;
        width: 10px;
        background-color: white;
    }

    .f-links a:hover::before {
        left: -14px;
        opacity: 1;
    }

    .f-links a:hover {
        padding-left: 8px;
    }

    .footer_bg_img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        background-color: black;
        opacity: 20%;
    }

    .zindex-1 {
        z-index: 2;
    }

    .footer_credentials {
        z-index: 2;
        position: relative;
    }

    footer {
        background-color: #212121;
    }

    .bigger_icon {
        font-size: 28px;
        margin-right: 28px;
    }
</style>

<footer class="position-relative">
    <img src="img/footer_pattern.png" class="footer_bg_img" alt="">
    <div class="container py-5 zindex-2">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6 text-light">
                        <img src="assets/logo1.png" style="height: 120px;object-fit:contain;margin-bottom: 24px;"
                            alt="">
                        <p>Explore paradise with LGT Holidays. Book now for luxury stays, unforgettable
                            experiences, and a journey like no other.</p>
                    </div>
                    <div class="col-md-6 mt-3 mt-md-0 f-links align-center text-light">
                        <div class="px-0 px-md-5">
                            <p class="h3 mb-4">Navigation</p>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="d-block text-light mb-4 h6">Home</a>
                                    <a href="#" class="d-block text-light mb-4 h6">About</a>
                                    <a href="#" class="d-block text-light mb-4 h6">Gallery</a>
                                    <a href="#" class="d-block text-light mb-4 h6">Contact Us</a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="d-block text-light mb-4 h6">Careers</a>
                                    <a href="#" class="d-block text-light mb-4 h6">Gift a Tour</a>
                                    <a href="#" class="d-block text-light mb-4 h6">Corporate travel</a>
                                    <a href="#" class="d-block text-light mb-4 h6">Customized Travel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-around align-items-center w-100">
                            <div class="footer_cred_image">
                                <img src="img/group_company/TAFI.png" class="object-contain" alt="">
                            </div>
                            <div class="footer_cred_image">
                                <img src="img/group_company/taai.png" class="object-contain" alt="">
                            </div>
                            <div class="footer_cred_image">
                                <img src="img/group_company/OTOAI.png" class="object-contain" alt="">
                            </div>
                            <div class="footer_cred_image">
                                <img src="img/group_company/iata-agent.png" class="object-contain" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3 my-md-0 text-light">
                <p class="h3 mb-4">Contact Details</p>

                <div class="d-flex">
                    <i class="fa-solid fa-phone-volume bigger_icon mt-2"></i>
                    <div>
                        <p>Mobile Number</p>
                        <p>+91 87901 95350</p>
                    </div>
                </div>
                <div class="d-flex my-3">
                    <i class="fa-regular fa-envelope bigger_icon mt-2"></i>
                    <div>
                        <p>Email Address</p>
                        <p>contact@lgtholidays.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="fa-solid fa-map-location-dot bigger_icon mt-2"></i>
                    <div>
                        <p>Address</p>
                        <p>Plot No. 8-2-684/4/16 Ground Floor Road No. 12 Anand Banjara Line Banjara Hills Hyderabad
                            Telangana -500034 India</p>
                        <a href="contact.php" class="font-weight-bold text-light">Check Other locations</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2 border-top text-center px-3 footer_credentials">
        <p class="text-light">Copyright © 2024 All Rights Reserved By LGT Holidays</p>
    </div>
</footer>
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="assets/js/parallax.js"></script>
</body>

</html>