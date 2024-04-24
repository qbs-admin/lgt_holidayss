<?php include 'includes/header.php' ?>

<div class="dashboard_img navbar_margin_top position-relative">
    <img src="img/careers.avif" class="object-cover" alt="">
    <div class="mice_title">
        <div class="text-center">
            <h1 class="h1 mb-3 text-light">Gallery</h1>
            <p class="text-light navigation_line">Home > Gallery</p>
        </div>
    </div>
</div>

<div class="my-5">
<p class="font-weight-normal h3 text-center">Our Team</p>
<div class="gallery_slider">
    <div class="p-2">
        <div class="gallery_image_container">
            <img src="https://picsum.photos/300/200" class="object-cover" alt="">
        </div>
    </div>
    <div class="p-2">
        <div class="gallery_image_container">
            <img src="https://picsum.photos/300/200" class="object-cover" alt="">
        </div>
    </div>
    <div class="p-2">
        <div class="gallery_image_container">
            <img src="https://picsum.photos/300/200" class="object-cover" alt="">
        </div>
    </div>
    <div class="p-2">
        <div class="gallery_image_container">
            <img src="https://picsum.photos/300/200" class="object-cover" alt="">
        </div>
    </div>
    <div class="p-2">
        <div class="gallery_image_container">
            <img src="https://picsum.photos/300/200" class="object-cover" alt="">
        </div>
    </div>
</div>
</div>

<div class="container">
    <p class="font-weight-normal h3 text-center">Our Happy Clients</p>
    <div class="row mb-4">
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery_image">
                <img src="https://picsum.photos/400/250" class="object-cover" alt="">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery_image">
                <img src="https://picsum.photos/400/250" class="object-cover" alt="">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery_image">
                <img src="https://picsum.photos/400/250" class="object-cover" alt="">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery_image">
                <img src="https://picsum.photos/400/250" class="object-cover" alt="">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery_image">
                <img src="https://picsum.photos/400/250" class="object-cover" alt="">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
            <div class="gallery_image">
                <img src="https://picsum.photos/400/250" class="object-cover" alt="">
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>
<script>
    $('.gallery_slider').slick({
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