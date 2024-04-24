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
        height: 40vh;
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
        filter: blur(2px)
    }

    .md-name {
        font-size: 18px;
        font-weight: 400;
    }

    .md-main-point {
        font-size: 18px;
    }
    .md_message_img{
        height: 350px;
        width: 100%;
    }
</style>

<div class="pb-5">
    <div class="about_company_profile">
        <img src="img/travel_bg.jpeg" class="object-cover" alt="">
        <p class="page-title">Company Profile</p>
    </div>
</div>

<div class="pb-4 container">
    <div class="row">
        <div class="col-lg-6">
            <div class="md_message_img">
                <img src="" class="object-cover" alt="">
            </div>
            <p class="md-main-point">At LGT Holidays, we are passionate about creating unforgettable travel experiences
                and organizing
                exceptional events that exceed expectations. Our dedicated team works tirelessly to curate tailor-made
                itineraries, ensuring that each journey is unique and memorable.</p>
        </div>
        <div class="col-lg-6">
            <p class="md-main-point">Whether you're dreaming of exploring exotic destinations, celebrating life's
                special moments, or organizing corporate events that leave a lasting impression, we are here to turn
                your vision into reality. With our commitment to excellence, personalized service, and attention to
                detail, we strive to make every aspect of your travel or event planning seamless and stress-free.
            </p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-6">
            <p class="md-main-point">As you navigate through our website, we invite you to explore our diverse range of
                travel packages, event planning services, and destination guides. Whether you're planning a romantic
                honeymoon, a family vacation, a corporate retreat, or a grand celebration, we have the expertise and
                resources to make it extraordinary.</p>
        </div>
        <div class="col-lg-6">
            <p class="md-main-point">At LGT Holidays, we believe that travel is not just about reaching a destination;
                it's about the journey
                and the experiences along the way. Let us be your trusted partner in creating moments that will be
                cherished for a lifetime.</p>
        </div>
    </div>

</div>

<?php include 'includes/footer.php' ?>