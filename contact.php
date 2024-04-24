<?php include 'includes/header.php' ?>
<style>
    .location_pointer {
        height: 2%;
        width: 2%;
        background-color: red;
        border-radius: 50%;
        border: 4px solid gray;
        position: absolute;
        top: calc(80vh - 16vh);
        left: calc(100% - 56%);
    }

    .sticky-top {
        top: 25vh;
        z-index: 0;
        background-color: #ed1c24;
        border-radius: 8px;
        padding: 14px;
        color: white;
    }

    @media (max-width: 765px) {
        .sticky-top {
            top: 0vh;
        }
    }
</style>

<div class="section_title py-5">
    <img src="img/contact_s_bg.jpg" class="object-cover section_bg" alt="">
    <h1 class="ml-md-5">Contact Us</h1>
</div>
<div class="py-5">
    <div class="container mt-3 mt-md-5">
        <div class="row">
            <div class="col-lg-5 order-2 order-md-1">
                <div class="py-b sticky-top toggle_map_contact">
                    <div class="india_map">
                        <img src="img/indian_map.png" class="object-contain" alt="">
                        <button class="btn btn-primary toggle_map_contact_btn map_button">Show Enquiry Form</button>
                    </div>
                    <div class="contact_form">
                        <p class="h2">Contact Form</p>
                        <p class="h6">if you have any questions don't hesitate to ask us.</p>
                        <input type="text" class="form-control my-4" placeholder="Name">
                        <input type="text" class="form-control" placeholder="Email">
                        <input type="text" class="form-control my-4" placeholder="Destination">
                        <textarea name="" class="form-control" placeholder="Message" rows="4"></textarea>
                        <div class="mt-3 mb-3 mb-md-0">
                            <button class="btn btn-light">Send</button>
                            <button class="btn btn-light toggle_map_contact_btn">Show Map</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 order-1 order-md-2">
                <p class="h2 mb-3">Our Presence Across India</p>
                <div class="border rounded p-3 shadow-sm my-4">
                    <p class="h4">Hyderabad</p>
                    <p class="h6 mb-2">LGT Business Connextions Pvt Ltd</p>
                    <p class="mb-3">Plot No. 8-2-684/4/16 Ground Floor Road No. 12 Anand Banjara Line Banjara Hills
                        Hyderabad Telangana -500034 India</p>
                    <div class="d-md-flex justify-content-between align-items-center w-100">
                        <a href="https://maps.app.goo.gl/J8CmYEwVWPZHGyD8A" target="blank"
                            class="btn btn-primary mb-3 mb-md-0">Show
                            Directions</a>
                        <div>
                            <a href="tel:8790195350" class="btn btn-light"><i class="fa fa-phone mr-1"></i> +91 87901
                                95350</a>
                            <a href="#" class="btn btn-light"><i class="fa-solid fa-envelope mr-1"></i>
                                contact@lgtholidays.com</a>
                        </div>
                    </div>
                </div>
                <div class="border rounded p-3 shadow-sm my-4">
                    <p class="h4">Bangalore</p>
                    <p class="mb-3">6th floor, Trifecta Adatto, 21, ITPL Main Rd, Garudachar Palya, Mahadevapura,
                        Bengaluru, Karnataka 560048</p>
                    <div class="d-md-flex justify-content-between align-items-center w-100">
                        <a href="https://maps.app.goo.gl/pRF1QtJ1LZoWVftS7" target="blank"
                            class="btn btn-primary mb-3 mb-md-0">Show
                            Directions</a>
                        <div>
                            <a href="#" class="btn btn-light"><i class="fa fa-phone mr-1"></i> +91 1234567890</a>
                            <a href="#" class="btn btn-light"><i class="fa-solid fa-envelope mr-1"></i>
                                Info@lgtholidays.com</a>
                        </div>
                    </div>
                </div>
                <div class="border rounded p-3 shadow-sm my-4">
                    <p class="h4">Chennai</p>
                    <p class="mb-3">New No.38 Old No.44 1st Floor Brindavan Street Extn West Mambalam Chennai - 600033
                        India </p>
                    <div class="d-md-flex justify-content-between align-items-center w-100">
                        <a href="https://maps.app.goo.gl/QF8hMxfVGysyfE9G7" target="blank"
                            class="btn btn-primary mb-3 mb-md-0">Show
                            Directions</a>
                        <div>
                            <a href="#" class="btn btn-light"><i class="fa fa-phone mr-1"></i> +91 44 4958 5855</a>
                            <a href="#" class="btn btn-light"><i class="fa-solid fa-envelope mr-1"></i>
                                Info@lgtholidays.com</a>
                        </div>
                    </div>
                </div>
                <div class="border rounded p-3 shadow-sm my-4">
                    <p class="h4">Cochin</p>
                    <p class="mb-3">First floor, Chelaveetil estate, Near, S Over Bridge, near medical trust school of
                        nursing, Ravipuram, Valanjambalam, Kochi, Ernakulam, Kerala 682016</p>
                    <div class="d-md-flex justify-content-between align-items-center w-100">
                        <a href="https://maps.app.goo.gl/Z132kepZDc1NKdSu9" target="blank"
                            class="btn btn-primary mb-3 mb-md-0">Show
                            Directions</a>
                        <div>
                            <a href="#" class="btn btn-light"><i class="fa fa-phone mr-1"></i> +91 44 4958 5855</a>
                            <a href="#" class="btn btn-light"><i class="fa-solid fa-envelope mr-1"></i>
                                Info@lgtholidays.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php' ?>
<script>
    $(".toggle_map_contact_btn").on("click", function () {
        $('.toggle_map_contact').toggleClass('show_map');
    });
</script>
<style>
    .map_button{
        position: absolute;
        bottom: 4px;
        right: 4px;
    }
    .india_map {
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        padding: 14px;
        transition: all ease 1s;
        transform: rotateY(180deg);
        opacity: 0;
        background-color: white;
        z-index: -1;
        border: 1px solid #0000006e;
        border-radius: 4px;
    }

    .contact_form {
        transition: all ease 1s;
        transform: rotateY(0deg);
        opacity: 1;
        position: relative;
        z-index: 1;
    }

    .show_map .contact_form {
        transform: rotateY(180deg);
        opacity: 0;
        z-index: -1;
    }

    .show_map .india_map {
        transform: rotateY(0deg);
        opacity: 1;
        z-index: 1;
    }
</style>