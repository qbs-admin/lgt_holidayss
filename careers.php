<?php include 'includes/header.php' ?>

<div class="dashboard_img navbar_margin_top position-relative">
    <img src="img/careers.avif" class="object-cover" alt="">
    <div class="mice_title">
        <div class="text-center">
            <h1 class="h1 mb-3 text-light">Careers</h1>
            <p class="text-light navigation_line">Home <i class="fa-solid fa-chevron-right mx-2"></i> Careers</p>
        </div>
    </div>
</div>

<div class="my-5">
    <div class="container">
        <p class="h2 font-weight-normal text-center">About Working Here</p>
        <div class="row my-4 mx-md-5 mx-0">
            <div class="col-lg-6 mt-md-5 mt-4">
                <div class="d-flex align-items-center">
                    <div class="careers_point_img mr-4">
                        <img src="img/icons/insurance.png" class="object-contain" alt="">
                    </div>
                    <div>
                        <p class="h4 font-weight-normal">Health Insurance</p>
                        <p class="text-secondary">We care about you and your family.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-md-5 mt-4">
                <div class="d-flex align-items-center">
                    <div class="careers_point_img mr-4">
                        <img src="img/icons/award.png" class="object-contain" alt="">
                    </div>
                    <div>
                        <p class="h4 font-weight-normal">Conductive Environment</p>
                        <p class="text-secondary">Appreciation for each of your success.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-md-5 mt-4">
                <div class="d-flex align-items-center">
                    <div class="careers_point_img mr-4">
                        <img src="img/icons/knowladge.png" class="object-contain" alt="">
                    </div>
                    <div>
                        <p class="h4 font-weight-normal">Culture Of learning</p>
                        <p class="text-secondary">Every one will share their knowladge.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-md-5 mt-4">
                <div class="d-flex align-items-center">
                    <div class="careers_point_img mr-4">
                        <img src="img/icons/gadget.png" class="object-contain" alt="">
                    </div>
                    <div>
                        <p class="h4 font-weight-normal">Cutting edge Technologies</p>
                        <p class="text-secondary">We use technology for make you productive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .careers_list .btn-light {
        width: fit-content;
    }
</style>
<div class="py-5">
    <div class="container">
        <div class="mx-md-5 mx-0">
            <p class="h2 font-weight-normal mb-5">Open Positions</p>
            <div class="d-flex align-items-center mt-4">
                <p class="careers_category" data-careers_type="marketing">Marketing</p>
                <p class="careers_category ml-4" data-careers_type="hr">Humar Resource</p>
                <p class="careers_category ml-4" data-careers_type="tour_guide">Tour Guide</p>
                <p class="careers_category ml-4" data-careers_type="manager">Manager</p>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row careers_list">
                        <div class="col-lg-6 mt-4 marketing_openings">
                            <div
                                class="h-100 w-100 d-flex flex-column justify-content-between rounded-lg border p-3 text-dark bg-light">
                                <div>
                                    <p class="h5 my-3">Sales Person</p>
                                    <p class="my-2">Join our team as a Sales Person and unleash your passion for
                                        connecting with
                                        clients, driving sales, and contributing to our growth story</p>
                                    <p class="h6 mb-0">Chennai, tamil Nadu</p>
                                </div>
                                <button class="btn btn-light mt-3">Apply Now</button>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 hr_openings">
                            <div
                                class="h-100 w-100 d-flex flex-column justify-content-between rounded-lg border p-3 text-dark bg-light">
                                <div>
                                    <p class="h5 my-3">Humam resource Manager</p>
                                    <p class="my-2">Join our HR team to shape a positive workplace culture and drive
                                        talent
                                        growth.</p>
                                    <p class="h6 mb-0">Chennai, tamil Nadu</p>
                                </div>
                                <button class="btn btn-light mt-3">Apply Now</button>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 tour_guide_openings">
                            <div
                                class="h-100 w-100 d-flex flex-column justify-content-between rounded-lg border p-3 text-dark bg-light">
                                <div>
                                    <p class="h5 my-3">Tour Guide</p>
                                    <p class="my-2">Join our team as a Tour Guide and bring unforgettable experiences to
                                        life,
                                        showcasing the best of our destinations with passion and expertise.</p>
                                    <p class="h6 mb-0">Cochin, Kerala</p>
                                </div>
                                <button class="btn btn-light mt-3">Apply Now</button>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 manager_openings">
                            <div
                                class="h-100 w-100 d-flex flex-column justify-content-between rounded-lg border p-3 text-dark bg-light">
                                <div>
                                    <p class="h5 my-3">Manager</p>
                                    <p class="my-2">Join our team as a Manager and lead with vision, guiding our team to
                                        success and
                                        driving excellence in every aspect of our operations.</p>
                                    <p class="h6 mb-0">Cochin, Kerala</p>
                                </div>
                                <button class="btn btn-light mt-3">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pl-lg-5">
                    <p class="h3">FAQ</p>
                    <div class="bg-secondary rounded-lg text-light px-3 py-2">
                        <div class="d-flex justify-content-between">
                            <p>How can i Apply in LGT Holidays</p>
                            <p><i class="fa-solid fa-chevron-right"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>

<script>
    $(".careers_category").on("click", function (event) {
        $(".careers_list .col-lg-6").hide();
        $("." + event.target.dataset.careers_type + "_openings").show();
    })
</script>