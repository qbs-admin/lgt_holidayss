<?php include 'includes/header.php' ?>

<div class="dashboard_img navbar_margin_top position-relative">
    <img src="img/mice/mice.jpg" class="object-cover" alt="">
    <div class="mice_title">
        <div class="text-center">
            <h1 class="h1 mb-3 text-light">Domestic Travel</h1>
            <p class="text-light navigation_line">Home <i class="fa-solid fa-chevron-right mx-2"></i> Customized Travel
                <i class="fa-solid fa-chevron-right mx-2"></i> Domestic Tours
            </p>
        </div>
    </div>
</div>
<style>
    .tour_package {
        transition: all ease 0.8s;
        height: 400px;
        width: calc(100% / 3);
        padding: 24px;
    }

    .tour_packages_img {
        transition: all ease 0.8s;
        border-radius: 4px;
        overflow: hidden;
        height: 100%;
        position: relative;
    }
    .tour_packages_img:hover {
        transform: scale(1.090);
        box-shadow:0 0 10px 0 #0000006b;
    }

    .tour_packages_img img{
        filter: brightness(0.9);
    }

    .tour_package_container {
        transition: all ease 0.8s;
        display: flex;
    }

    .packages_container {
        transition: all ease 0.8s;
        display: flex;
        width: 80%;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px
    }

    .packages_filter {
        transition: all ease 0.8s;
        width: 20%;
    }
    .bottom_content{
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: 2;
        color: white;
        padding: 14px;
        font-weight: 600;
    }
    .small_sligan{
        font-size: 24px;
        font-weight: 300;
        font-style: italic;
    }
    .big_sligan{
        font-size: 24px;
    }
    .tour_rate{
        position: absolute;
        top:0;
        left: 0;
        font-size: 20px;
        font-weight: 600;
        color: white;
        padding: 14px;
    }

</style>

<div class="container">
    <div class="tour_package_container my-5">
        <div class="packages_container">
            <p class="w-100 h3 mb-0 pl-3 pt-3 pb-3">Packages</p>
            <div class="tour_package">
                <div class="tour_packages_img">
                    <img src="https://picsum.photos/600/400" class="object-cover" alt="">
                    <div class="bottom_content">
                        <p class="small_sligan">Hello Dude</p>
                        <p class="big_sligan">Hello Dude</p>
                    </div>
                    <p class="tour_rate">$2000</p>
                </div>
            </div>
            <div class="tour_package">
                <div class="tour_packages_img">
                    <img src="https://picsum.photos/600/400" class="object-cover" alt="">
                    <div class="bottom_content">
                        <p class="small_sligan">Hello Dude</p>
                        <p class="big_sligan">Hello Dude</p>
                    </div>
                    <p class="tour_rate">$2000</p>
                </div>
            </div>
            <div class="tour_package">
                <div class="tour_packages_img">
                    <img src="https://picsum.photos/600/400" class="object-cover" alt="">
                    <div class="bottom_content">
                        <p class="small_sligan">Hello Dude</p>
                        <p class="big_sligan">Hello Dude</p>
                    </div>
                    <p class="tour_rate">$2000</p>
                </div>
            </div>
            <div class="tour_package">
                <div class="tour_packages_img">
                    <img src="https://picsum.photos/600/400" class="object-cover" alt="">
                    <div class="bottom_content">
                        <p class="small_sligan">Hello Dude</p>
                        <p class="big_sligan">Hello Dude</p>
                    </div>
                    <p class="tour_rate">$2000</p>
                </div>
            </div>
            <div class="tour_package">
                <div class="tour_packages_img">
                    <img src="https://picsum.photos/600/400" class="object-cover" alt="">
                    <div class="bottom_content">
                        <p class="small_sligan">Hello Dude</p>
                        <p class="big_sligan">Hello Dude</p>
                    </div>
                    <p class="tour_rate">$2000</p>
                </div>
            </div>
        </div>
        <div class="packages_filter py-3 pl-3">
            <p class="h3 mb-0">Filters</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>