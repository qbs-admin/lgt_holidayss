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
        overflow: hidden;
        position: relative;
        height: 80vh;
        /* display: flex;
        justify-content: center;
        align-items: center; */
    }

    .about_company_profile img {
        /* position: absolute;
        top: 0;
        left: 0; */
        height: auto;
        width: 100%;
    }

    .md-name {
        font-size: 18px;
        font-weight: 400;
    }

    .md-main-point {
        font-size: 18px;
        text-align: justify;
    }

    .md_message_img {
        height: 350px;
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 14px;
    }

    .align-center {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    @media (max-width: 765px){
        .about_company_profile{
        height: auto;
            
        }
    }
</style>

<div class="pb-5">
    <div class="about_company_profile">
        <img src="img/md_quotes.png" alt="">
    </div>
</div>

<div class="pb-4 container">
    <div class="row">
        <div class="col-lg-6">
            <div class="align-center reveal-r">
                <p class="md-main-point">At LGT Holidays, we are passionate about creating unforgettable travel
                    experiences
                    and organizing
                    exceptional events that exceed expectations. Our dedicated team works tirelessly to curate
                    tailor-made
                    itineraries, ensuring that each journey is unique and memorable.</p>
            </div>
        </div>
        <div class="col-lg-6 mt-3 mt-md-0">
            <div class="md_message_img reveal-l">
                <img src="img/about/1.jpg" class="object-cover" alt="">
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-6 order-2 order-md-1 mt-3 mt-md-0">
            <div class="md_message_img reveal-r">
                <img src="img/about/2.jpg" class="object-cover" alt="">
            </div>
        </div>
        <div class="col-lg-6 order-1 order-md-2">
            <div class="align-center reveal-l">
                <p class="md-main-point">Whether you're dreaming of exploring exotic destinations, celebrating life's
                    special moments, or organizing corporate events that leave a lasting impression, we are here to turn
                    your vision into reality. With our commitment to excellence, personalized service, and attention to
                    detail, we strive to make every aspect of your travel or event planning seamless and stress-free.
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="align-center reveal-r">
                <p class="md-main-point">As you navigate through our website, we invite you to explore our diverse range
                    of
                    travel packages, event planning services, and destination guides. Whether you're planning a romantic
                    honeymoon, a family vacation, a corporate retreat, or a grand celebration, we have the expertise and
                    resources to make it extraordinary.</p>
            </div>
        </div>
        <div class="col-lg-6 mt-3 mt-md-0">
            <div class="md_message_img reveal-l">
                <img src="img/about/3.jpg" class="object-cover" alt="">
            </div>
        </div>
    </div>
    <div class="my-3">
        <p class="md-main-point reveal-r">At LGT Holidays, we believe that travel is not just about reaching a destination
            it's about the journey
            and the experiences along the way. Let us be your trusted partner in creating moments that will be
            cherished for a lifetime.</p>
            <a href="contact.php" class="btn btn-primary mt-3 reveal-r">Contact Us</a>
    </div>
</div>

<?php include 'includes/footer.php' ?>