<?php include 'includes/header.php' ?>
<div class="about_title">
</div>
<style>
    .about_company_profile .page-title {
        z-index: 2;
        font-size: 24px;
        font-weight: bold;
        color: white;
        text-align: center;
        background-color: #ff000059;
        padding: 10px 10px;
        border-radius: 8px;
    }

    .about_company_profile {
        position: relative;
        height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .about_company_profile img {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
    }

    .md-name {
        font-size: 18px;
        font-weight: 400;
    }

    .md-main-point {
        font-size: 18px;
    }

    .md_message_img {
        height: 350px;
        width: 100%;
    }
</style>

<div class="pb-5">
    <div class="about_company_profile">
        <img src="img/travel_bg.jpeg" class="object-cover" alt="">
        <p class="page-title">Team Details</p>
    </div>
</div>

<div class="text-center container">
    <p class="h3">Out team is the best in the world you can expect.</p>
</div>
<style>
    .team_member_photo {
        transition: all ease 1s;
        height: 400px;
        width: 100%;
        border-radius: 6px;
        box-shadow: 0 0 10px 0 #0000000f;
        overflow: hidden;
        position: relative;
    }

    .team_member_photo:hover {
        box-shadow: 0 0 10px 0 #00000020;
    }

    .team_member_info {
        transition: all ease 0.7s;
        position: absolute;
        bottom: -50%;
        left: 0;
        width: 100%;
        background-color: #ffe9e9;
    }

    .team_member_photo:hover .team_member_info {
        bottom: -0%;
    }
</style>
<div class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-6 mt-3 mt-md-0">
                <div class="p-3">
                    <div class="team_member_photo">
                        <img src="assets/media/images/about/team/team_member.jpg" class="object-cover" alt="">
                        <div class="team_member_info p-3">
                            <p class="h5 font-weight-normal">Mrs. Padma Wilfred</p>
                            <p class="h6">Director </p>
                            <div class="d-flex">
                                <p class="w-50">Hello</p>
                                <p class="w-50">Hello</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 mt-3 mt-md-0">
                <div class="p-3">
                    <div class="team_member_photo">
                        <img src="assets/media/images/about/team/team_member.jpg" class="object-cover" alt="">
                        <div class="team_member_info p-3">
                            <p class="h5 font-weight-normal">Mr. Singaravelou</p>
                            <p class="h6">Director </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 mt-3 mt-md-0">
                <div class="p-3">
                    <div class="team_member_photo">
                        <img src="assets/media/images/about/team/team_member.jpg" class="object-cover" alt="">
                        <div class="team_member_info p-3">
                            <p class="h5 font-weight-normal">Ms. Deepti </p>
                            <p class="h6">Director </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 mt-3 mt-md-0">
                <div class="p-3">
                    <div class="team_member_photo">
                        <img src="assets/media/images/about/team/team_member.jpg" class="object-cover" alt="">
                        <div class="team_member_info p-3">
                            <p class="h5 font-weight-normal">Mr. Tijo Mathew</p>
                            <p class="h6">Director </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 mt-3 mt-md-0">
                <div class="p-3">
                    <div class="team_member_photo">
                        <img src="assets/media/images/about/team/team_member.jpg" class="object-cover" alt="">
                        <div class="team_member_info p-3">
                            <p class="h5 font-weight-normal">Mr. Sivaji Gollapelli</p>
                            <p class="h6">Vice President</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 mt-3 mt-md-0">
                <div class="p-3">
                    <div class="team_member_photo">
                        <img src="assets/media/images/about/team/team_member.jpg" class="object-cover" alt="">
                        <div class="team_member_info p-3">
                            <p class="h5 font-weight-normal">Mr. Ramesh Raja</p>
                            <p class="h6">Vice President</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>
<script>
    $('.team_members_slick').slick({
        autoplay: true,
        autoplaySpeed: 1500,
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '20px',
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    centerMode: true,
                    centerPadding: '0',
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToScroll: 1,
                }
            }
        ]
    });
</script>