<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CyberGenix</title>
    <!-- Meta Tags for SEO -->
    <meta name="description" content="CyberGenix is a leading IT services company in Dalkhola, offering top-notch web development, software development, application development, and consultancy.">
    <meta name="keywords" content="IT services, web development, software development, app development, consultancy, Dalkhola, CyberGenix, IT company">
    <meta name="author" content="CyberGenix IT Services">
    <meta name="robots" content="index, follow">

    <!-- Open Graph for Social Media -->
    <meta property="og:title" content="CyberGenix - IT Services Company in Dalkhola">
    <meta property="og:description" content="Top IT services provider offering web development, software development, and more in Dalkhola.">
    <meta property="og:image" content="https://cybergenix.in/images/brand-logo.jpg">
    <meta property="og:url" content="https://cybergenix.in/">

    <!-- Twitter Card for SEO -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CyberGenix - Best IT Services in Dalkhola">
    <meta name="twitter:description" content="Leading IT services company offering web solutions and more in Dalkhola.">
    <meta name="twitter:image" content="https://yourwebsite.com/images/twitter-image.jpg">
    <link rel="icon" href="images/brand-logoCGICON.png" sizes="32x60" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/e7678863ec.js" crossorigin="anonymous"></script>
    <style>
    /* *{border:1px solid red;}  */
    ::selection {background-color: rgb(19, 150, 81);}
    .scale-hover{transition: all 0.8s ease-in;}
    .scale-hover:hover{transform: scale(1.05);}
    .card {width: 17em;height: 22.5em;/* background: #171717; */transition: 1s ease-in-out;clip-path: polygon(30px 0%, 100% 0, 100% calc(100% - 30px), calc(100% - 30px) 100%, 0 100%, 0% 30px);border-top-right-radius: 20px;border-bottom-left-radius: 20px;display: flex;flex-direction: column;}
    .card:hover{transform: scale(1.05);}
    .swiper-pagination-bullet{height:20px;width:20px;}
    .swiper-pagination-bullet-active {background: rgb(19, 120, 81);border:5px solid black;}
    .brightness-50 {filter: brightness(50%);}
    .slide-container, .mySwiper{-webkit-mask:linear-gradient(90deg, transparent, white 10%, white 90%, transparent);}
    .slide-container:hover .slide-items{animation-play-state: paused;}
    .slide-items {animation: slide-animation 40s linear infinite;}
    @keyframes slide-animation {
        to{
            transform: translateX(-50%);
        }
    }
    .workline:before{
        content:'';
        position:absolute;
        height:10px;
        width:10px;
        background:#adb5bd;
        border-radius:50%;
        left: 50%;
        bottom:100%;
        transform: translateX(-50%);
        animation:pointdown 8.5s forwards linear;
    }
    @keyframes pointdown {
        0%{bottom:100%;}
        100%{bottom:0%;}
    }
    .workline:after{
        content:'';
        position:absolute;
        height:100%;
        width:2px;
        background:#adb5bd;
        left: 50%;
        transform: translateX(-50%);
        animation:widthIncrease 8.5s forwards linear;
    }
    @keyframes widthIncrease {
        0%{height:0;}
        100%{height:100%;}
    }
    .workline .works {
        opacity: 0;
        position:relative;
        animation: showUp 2s ease-in forwards;
        cursor: pointer;
    }
    .workline .works:nth-child(odd) {
        /* align-self: flex-end; */
        transform:translateX(-58%);
    }
    .workline .works:nth-child(odd):before {
        content:'';
        position:absolute;
        height:7px;
        width:7px;
        border-radius:50%;
        background:#adb5bd;
        top: 50%;
        left:100%;
        transform:translateY(-50%);
    }
    .workline .works:nth-child(odd):after {
        content:'';
        position:absolute;
        height:2px;
        width:20px;
        background:#adb5bd;
        top: 50%;
        right:-20px;
        transform:translateY(-50%);
    }
    .workline .works:nth-child(even) {
        /* align-self: flex-start; */
        transform:translateX(58%);
    }
    .workline .works:nth-child(even):before {
        content:'';
        position:absolute;
        height:7px;
        width:7px;
        border-radius:50%;
        background:#adb5bd;
        top: 50%;
        right:100%;
        transform:translateY(-50%);
        }
    .workline .works:nth-child(even):after {
        content:'';
        position:absolute;
        height:2px;
        width:20px;
        background:#adb5bd;
        top: 50%;
        left:-20px;
        transform:translateY(-50%);
    }
    @keyframes showUp {
        0% {opacity: 0;}
        100% {opacity: 1;}
    }
    .workline .works:nth-child(1) {animation-delay: 0s;}
    .workline .works:nth-child(2) {animation-delay: 1s;}
    .workline .works:nth-child(3) {animation-delay: 2s;}
    .workline .works:nth-child(4) {animation-delay: 3s;}
    .workline .works:nth-child(5) {animation-delay: 4s;}
    .workline .works:nth-child(6) {animation-delay: 5s;}
    .workline .works:nth-child(7) {animation-delay: 6s;}
    .workline .works:nth-child(8) {animation-delay: 7s;}
    .workline .works:nth-child(9) {animation-delay: 8s;}
    @media (max-width: 992px) {
        .workline:before, .workline:after{
            left: 0;
        }
        .workline .works:nth-child(odd), .workline .works:nth-child(even) {
            transform:translateX(10px);
        }
        .workline .works:nth-child(odd):before {
            left:-7px;
        }
        .workline .works:nth-child(odd):after {
            left:-20px;
        }
        

    }
    </style>
  </head>
  <body class="bg-dark">
    <div class="spinner_container d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <?php include './navigation.php';?>
    <!-- hero section -->
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="d-flex justify-content-center align-items-center col-10 col-sm-8 col-lg-6 mx-auto">
                <img src="images/hero2.png" class="d-block img-fluid" alt="Bootstrap Themes" width="450" loading="lazy">
            </div>

            <div class="col-lg-6">
                <h2 class="display-6 fw-bold lh-1 mb-3 text-light">Why We Are the Best in IT Services</h2>
                <p class="lead text-light fs-6 fw-medium">
                    At CyberGenix, we pride ourselves on delivering exceptional IT services tailored to your needs. Our dedicated team of experts ensures unparalleled user satisfaction through innovative solutions, round-the-clock support, and a commitment to excellence. We leverage cutting-edge technology and industry best practices to solve your challenges efficiently, making us the trusted partner for businesses seeking reliable and effective IT solutions.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a type="button" class="services btn btn-primary btn-lg px-4 me-md-2">Services</a>
                </div>
            </div>
        </div>
    </div>
    <!--services  -->
    <div class="container py-5 text-light " id="icon-grid">
        <h2 class="pb-2 border-bottom">Services</h2>

        <div class="row d-flex justify-content-center align-items-top flex-wrap gap-4 p-3">
            <div class="scale-hover col  d-flex align-items-start border border-secondary rounded-3 p-2 shadow">
                <svg class="bi text-primary flex-shrink-0 me-3" width="1.75em" height="1.75em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#137851" d="M120.1 37.4C161.1 12.2 207.7-.8 255 0C423 0 512 123.8 512 219.5C511.9 252.2 499 283.4 476.1 306.7C453.2 329.9 422.1 343.2 389.4 343.7C314.2 343.7 297.9 320.6 297.9 311.7C297.9 307.9 299.1 305.5 302.7 302.3L303.7 301.1L304.1 299.5C314.6 288 320 273.3 320 257.9C320 179.2 237.8 115.2 136 115.2C98.5 114.9 61.5 124.1 28.5 142.1C55.5 84.6 111.2 44.5 119.8 38.3C120.6 37.7 120.1 37.4 120.1 37.4V37.4zM135.7 355.5C134.3 385.5 140.3 415.5 152.1 442.7C165.7 469.1 184.8 493.7 208.6 512C149.1 500.5 97.1 468.1 59.2 422.7C21.1 376.3 0 318.4 0 257.9C0 206.7 62.4 163.5 136 163.5C172.6 162.9 208.4 174.4 237.8 196.2L234.2 197.4C182.7 215 135.7 288.1 135.7 355.5V355.5zM469.8 400L469.1 400.1C457.3 418.9 443.2 435.2 426.9 449.6C396.1 477.6 358.8 495.1 318.1 499.5C299.5 499.8 281.3 496.3 264.3 488.1C238.7 477.8 217.2 458.1 202.7 435.1C188.3 411.2 181.6 383.4 183.7 355.5C183.1 335.4 189.1 315.2 198.7 297.3C212.6 330.4 236.2 358.6 266.3 378.1C296.4 397.6 331.8 407.6 367.7 406.7C398.7 407 429.8 400 457.9 386.2L459.8 385.3C463.7 383 467.5 381.4 471.4 385.3C475.9 390.2 473.2 394.5 470.2 399.3C470 399.5 469.9 399.8 469.8 400V400z"/></svg>
                <div>
                <h3 class="fw-bold mb-0 fs-4 text-light">Website Development</h3>
                <p>Building responsive, scalable, and user-friendly websites for seamless digital experiences.</p>
                </div>
            </div>
            <div class="scale-hover col  d-flex align-items-start border border-secondary rounded-3 p-2 shadow">
                <svg class="bi text-primary flex-shrink-0 me-3" width="1.75em" height="1.75em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#137851" d="M16 64C16 28.7 44.7 0 80 0L304 0c35.3 0 64 28.7 64 64l0 384c0 35.3-28.7 64-64 64L80 512c-35.3 0-64-28.7-64-64L16 64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64L80 64l0 320 224 0 0-320z"/></svg>
                <div>
                <h3 class="fw-bold mb-0 fs-4 text-light">Application Development</h3>
                <p>We deliver innovative, scalable applications tailored to meet business needs.</p>
                </div>
            </div>
            <div class="scale-hover col  d-flex align-items-start border border-secondary rounded-3 p-2 shadow">
                <svg class="bi text-primary flex-shrink-0 me-3" width="1.75em" height="1.75em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="#137851" d="M64 0C28.7 0 0 28.7 0 64L0 352c0 35.3 28.7 64 64 64l176 0-10.7 32L160 448c-17.7 0-32 14.3-32 32s14.3 32 32 32l256 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-69.3 0L336 416l176 0c35.3 0 64-28.7 64-64l0-288c0-35.3-28.7-64-64-64L64 0zM512 64l0 224L64 288 64 64l448 0z"/></svg>
                <div>
                <h3 class="fw-bold mb-0 fs-4 text-light">Software Development</h3>
                <p>Creating tailored software solutions to enhance business performance and efficiency.</p>
                </div>
            </div>
            <div class="scale-hover col  d-flex align-items-start border border-secondary rounded-3 p-2 shadow">
                <svg class="bi text-primary flex-shrink-0 me-3" width="1.75em" height="1.75em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="#137851" d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2s0 0 0 0s0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.2-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9c0 0 0 0 0 0s0 0 0 0l-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z"/></svg>
                <div>
                <h3 class="fw-bold mb-0 fs-4 text-light">Consultancy Services</h3>
                <p>Expert guidance on IT digital transformation, and tech solutions for optimal business performance.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Technology & Assets -->
    <div class="container p-2 mb-4">
        <div id="myCarousel" class="carousel slide mb-6 border-end border-5 border-primary" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner h-auto">
                <div class="carousel-item active position-relative">
                    <img src="images/tech1.png" class="bd-placeholder-img col-10 col-lg-3 brightness-50" height="100%" alt="...">
                    <div class="container col col-lg-8 text-light position-absolute d-flex flex-column justify-content-center align-items-end text-end h-100 overflow-auto" style="top:50%;left:50%;transform:translate(-50%, -50%);">
                        <h1>Website Technologies</h1>
                        <p class="opacity-75">Build dynamic, scalable web apps with HTML, CSS, JavaScript, React, PHP, MySQL, and Node.js.</p>
                        <p><a class="btn btn-lg btn-primary" href="./contact">Contact</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/tech2.png" class="bd-placeholder-img col-10 col-lg-3 brightness-50" height="100%" alt="...">
                    <div class="container col col-lg-8 text-light position-absolute d-flex flex-column justify-content-center align-items-end text-end h-100 overflow-auto" style="top:50%;left:50%;transform:translate(-50%, -50%);">
                        <h1>Application Technologies</h1>
                        <p>Create cross-platform apps with Flutter, Java, Kotlin, React Native, and Firebase for seamless, dynamic experiences.</p>
                        <p><a class="btn btn-lg btn-primary" href="./contact">Contact</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/tech3.png" class="bd-placeholder-img col-10 col-lg-3 brightness-50" height="100%" alt="...">
                    <div class="container col col-lg-8 text-light position-absolute d-flex flex-column justify-content-center align-items-end text-end h-100 overflow-auto" style="top:50%;left:50%;transform:translate(-50%, -50%);">
                        <h1>Software Technologies</h1>
                        <p>Develop powerful software for Mac and Windows using C, C++, Java, Python, C#, and .NET for robust, cross-platform solutions.</p>
                        <p><a class="btn btn-lg btn-primary" href="./contact">Contact</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/tech4.png" class="bd-placeholder-img col-10 col-lg-3 brightness-50" height="100%" alt="...">
                    <div class="container col col-lg-8 text-light position-absolute d-flex flex-column justify-content-center align-items-end text-end h-100 overflow-auto" style="top:50%;left:50%;transform:translate(-50%, -50%);">
                        <h1>Prototypes & UI Designs Technologies</h1>
                        <p>Create stunning UI designs and prototypes efficiently with tools like Adobe XD, Photoshop, and Git for version control, ensuring streamlined workflows and collaboration.</p>
                        <p><a class="btn btn-lg btn-primary" href="./contact">Contact</a></p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Langues to make efficency in work -->
    <div class="container d-flex justify-content-center align-items-center" style="height:250px">
        <div class="slide-container overflow-hidden">
            <div class="slide-items d-inline-flex align-items-center border border-2 border-secondary py-2">
                <div class="items d-inline-flex align-items-center mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
                    <g fill="#adb5bd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M45.27344,2.32422c-0.1875,-0.20703 -0.45703,-0.32422 -0.73828,-0.32422h-39.07031c-0.28125,0 -0.55078,0.11719 -0.73828,0.32422c-0.19141,0.20703 -0.28516,0.48438 -0.25781,0.76563l3.51953,39.42578c0.03516,0.41406 0.32422,0.75781 0.72266,0.875l16.01172,4.57031c0.08594,0.02734 0.17969,0.03906 0.27344,0.03906c0.09375,0 0.18359,-0.01172 0.27344,-0.03906l16.02344,-4.57031c0.39844,-0.11719 0.68359,-0.46094 0.72266,-0.875l3.51563,-39.42578c0.02734,-0.28125 -0.06641,-0.55859 -0.25781,-0.76562zM36.84766,15.91797h-18.8125l0.44922,5.08984h17.91016l-1.34375,15.04297l-10.05859,3.03906l-0.09766,-0.03125l-9.94141,-3.01172l-0.54297,-6.12891h4.87109l0.21094,2.37891l5.55859,1.16406l5.45703,-1.16406l0.58203,-6.4375h-17.04297l-1.32422,-14.80469h24.55859z"></path></g></g>
                    </svg>
                    <p class="fs-4 m-0 p-0 text-secondary fw-semibold ms-2">HTML</p>
                </div>
                <div class="items d-inline-flex align-items-center mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
                    <g fill="#adb5bd" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M42,6l-3,34l-14,4l-14,-4l-3,-34zM16.80078,28h4l0.09766,2.5l4.10156,1.39844l4.10156,-1.39844l0.29688,-4.5h-8.79687l-0.20312,-4h9.20313l0.29688,-4h-13.79687l-0.30078,-4h18.30078l-0.5,8l-0.70312,11.5l-7.89844,2.60156l-7.89844,-2.60156z"></path></g></g>
                    </svg>
                    <p class="fs-4 m-0 p-0 text-secondary fw-semibold ms-2">CSS</p>
                </div>
                <div class="items d-inline-flex align-items-center mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
                    <g fill="#adb5bd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M43.33594,4h-36.66797c-1.47266,0 -2.66797,1.19531 -2.66797,2.66797v36.66406c0,1.47266 1.19531,2.66797 2.66797,2.66797h36.66406c1.47266,0 2.66797,-1.19531 2.66797,-2.66406v-36.66797c0,-1.47266 -1.19531,-2.66797 -2.66406,-2.66797zM27,36.18359c0,3.99609 -2.34375,5.81641 -5.76562,5.81641c-3.09375,0 -5.32422,-2.07422 -6.23437,-4l3.14453,-1.90234c0.60547,1.07422 1.52734,1.90234 2.85547,1.90234c1.26953,0 2,-0.49609 2,-2.42578v-12.57422h4zM35.67578,42c-3.54297,0 -5.55469,-1.78516 -6.67578,-4l3,-2c0.81641,1.33594 1.70703,2.61328 3.58984,2.61328c1.58203,0 2.41016,-0.78906 2.41016,-1.88281c0,-1.30469 -0.85937,-1.76953 -2.59766,-2.53125l-0.95312,-0.41016c-2.75391,-1.17187 -4.58594,-2.64062 -4.58594,-5.75c0,-2.85937 2.18359,-5.03906 5.58984,-5.03906c2.42578,0 4.16797,0.84375 5.42578,3.05469l-2.96875,1.91016c-0.65625,-1.17578 -1.35937,-1.63672 -2.45703,-1.63672c-1.11719,0 -1.82422,0.71094 -1.82422,1.63672c0,1.14453 0.70703,1.60547 2.34375,2.31641l0.95313,0.41016c3.24609,1.38672 5.07422,2.80469 5.07422,5.99219c0,3.43359 -2.69922,5.31641 -6.32422,5.31641z"></path></g></g>
                    </svg>
                    <p class="fs-4 m-0 p-0 text-secondary fw-semibold ms-2">JS</p>
                </div>
                <div class="items d-inline-flex align-items-center mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
                    <g fill="#adb5bd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M5.56836,3c-1.255,0 -2.18263,1.12856 -2.14063,2.35156c0.04,1.176 -0.01177,2.69941 -0.38477,3.94141c-0.375,1.246 -1.00897,1.60603 -2.04297,1.70703v2c1.034,0.101 1.66797,0.46103 2.04297,1.70703c0.373,1.242 0.42477,2.76641 0.38477,3.94141c-0.042,1.223 0.88563,2.35156 2.14063,2.35156h12.86328c1.255,0 2.18458,-1.12856 2.14258,-2.35156c-0.04,-1.176 0.01177,-2.69941 0.38477,-3.94141c0.375,-1.246 1.00702,-1.60603 2.04102,-1.70703v-2c-1.034,-0.101 -1.66506,-0.46103 -2.03906,-1.70703c-0.373,-1.242 -0.42672,-2.76641 -0.38672,-3.94141c0.041,-1.223 -0.88658,-2.35156 -2.14258,-2.35156zM5.56836,5h12.86328c0.005,0 0.01978,-0.00075 0.05078,0.03125c0.046,0.047 0.09675,0.14291 0.09375,0.25391c-0.061,1.803 0.09575,3.34598 0.46875,4.58398c0.274,0.91 0.69639,1.61981 1.27539,2.13281c-0.58,0.513 -1.00139,1.21986 -1.27539,2.13086c-0.372,1.238 -0.52975,2.77999 -0.46875,4.58399c0.004,0.111 -0.04775,0.20591 -0.09375,0.25391c-0.031,0.03 -0.04478,0.0293 -0.05078,0.0293h-12.86328c-0.005,0 -0.01783,0.00075 -0.04883,-0.03125c-0.046,-0.047 -0.09675,-0.14191 -0.09375,-0.25391c0.061,-1.804 -0.0987,-3.34598 -0.4707,-4.58398c-0.273,-0.91 -0.69444,-1.61786 -1.27344,-2.13086c0.58,-0.513 1.00239,-1.22181 1.27539,-2.13281c0.372,-1.238 0.52975,-2.77998 0.46875,-4.58398c-0.004,-0.11 0.04875,-0.20495 0.09375,-0.25195c0.031,-0.032 0.04383,-0.03125 0.04883,-0.03125zM8,7.0332v9.9668h4.1543c1.071,0 1.96575,-0.26839 2.59375,-0.77539c0.643,-0.523 0.98438,-1.27859 0.98438,-2.18359c0,-1.083 -0.59864,-1.95719 -1.55664,-2.36719c0.649,-0.434 1.08789,-1.19014 1.08789,-1.99414c0,-0.79 -0.30577,-1.46045 -0.88477,-1.93945c-0.559,-0.463 -1.33714,-0.70703 -2.24414,-0.70703zM10.12695,8.95117h1.65039c0.902,0 1.35938,0.34248 1.35938,1.02148c0,0.926 -0.90792,1.12109 -1.66992,1.12109h-1.33984zM10.125,12.83984h1.63867c1.623,0 1.81055,0.68808 1.81055,1.20508c0,0.303 0.00039,1.22266 -1.72461,1.22266h-1.72461z"></path></g></g>
                    </svg>
                    <p class="fs-4 m-0 p-0 text-secondary fw-semibold ms-2">BOOTSTRAP</p>
                </div>
                <div class="items d-inline-flex align-items-center mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
                    <g fill="#adb5bd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M24.135,46.505l-23.997,-41c-0.389,-0.666 0.092,-1.506 0.864,-1.506h18.377c0.355,0 0.683,0.189 0.863,0.496l4.757,8.129l4.756,-8.129c0.18,-0.307 0.508,-0.496 0.864,-0.496h18.38c0.771,0 1.252,0.84 0.863,1.505l-24,41c-0.385,0.659 -1.341,0.659 -1.727,0.001zM24.999,44.021l22.255,-38.022h-8.329l-13.063,22.322c-0.385,0.659 -1.341,0.659 -1.727,0l-13.064,-22.322h-8.326z"></path></g></g>
                    </svg>
                    <p class="fs-4 m-0 p-0 text-secondary fw-semibold ms-2">VUE.JS</p>
                </div>
                <div class="items d-inline-flex align-items-center mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
                    <g fill="#adb5bd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,12c-13.45703,0 -24,5.71094 -24,13c0,7.28906 10.54297,13 24,13c13.45703,0 24,-5.71094 24,-13c0,-7.28906 -10.54297,-13 -24,-13zM22.50781,16h2.62109l-0.83203,4h2.33984c1.48438,0 2.48047,0.20703 3.04688,0.72656c0.55469,0.51172 0.72266,1.35156 0.5,2.49609l-1.03906,4.77734h-2.66406l0.95703,-4.41797c0.11719,-0.60547 0.07031,-1.02734 -0.13281,-1.25c-0.20312,-0.22266 -0.64844,-0.33203 -1.31641,-0.33203h-2.09766l-1.26562,6h-2.625zM11,20h5.33203c2.54297,0 4.08203,1.70313 3.48047,4.24609c-0.69922,2.95313 -2.57422,3.75391 -6.01953,3.75391h-1.64844l-0.52344,3h-2.64844zM32,20h5.33203c2.54297,0 4.08203,1.70313 3.48047,4.24609c-0.69922,2.95313 -2.57422,3.75391 -6.01953,3.75391h-1.64844l-0.52344,3h-2.64844zM13.26953,22l-0.75391,4h1.71094c1.48047,0 2.85547,-0.16797 3.08594,-2.375c0.08594,-0.85547 -0.26953,-1.625 -1.98047,-1.625zM34.26953,22l-0.75391,4h1.71094c1.48047,0 2.85547,-0.16797 3.08594,-2.375c0.08594,-0.85547 -0.26953,-1.625 -1.98047,-1.625z"></path></g></g>
                    </svg>
                    <p class="fs-4 m-0 p-0 text-secondary fw-semibold ms-2">PHP</p>
                </div>
                <div class="items d-inline-flex align-items-center mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
                    <g fill="#adb5bd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M31.16797,8c-0.46875,-0.01172 -0.87891,0.16797 -1.08984,0.6875c-0.35937,0.87109 0.53516,1.72266 0.85547,2.16797c0.22266,0.30859 0.51172,0.65625 0.67188,1.00391c0.10547,0.23047 0.12109,0.46094 0.21094,0.70313c0.22266,0.59766 0.57813,1.27734 0.86328,1.83203c0.14453,0.28125 0.30469,0.57422 0.48828,0.82422c0.11328,0.15234 0.30469,0.22266 0.33594,0.45703c-0.1875,0.26563 -0.19922,0.67578 -0.30469,1.01172c-0.47656,1.50391 -0.29687,3.375 0.39453,4.48438c0.21484,0.34375 0.71875,1.07422 1.40625,0.79688c0.60156,-0.24609 0.46875,-1.00781 0.64063,-1.68359c0.03906,-0.14844 0.01563,-0.26172 0.09375,-0.36328v0.03125c0.17969,0.36719 0.36328,0.73438 0.54688,1.09766c0.41016,0.65625 1.13281,1.33984 1.74219,1.80469c0.31641,0.23828 0.56641,0.65234 0.97656,0.79297v-0.03125h-0.03125c-0.07812,-0.125 -0.20312,-0.17578 -0.30469,-0.27344c-0.23828,-0.23437 -0.50391,-0.52734 -0.69922,-0.79687c-0.55859,-0.75391 -1.05078,-1.58203 -1.49609,-2.44141c-0.21484,-0.41016 -0.40234,-0.86328 -0.58203,-1.28125c-0.07031,-0.16406 -0.07031,-0.40625 -0.21484,-0.49219c-0.19922,0.30859 -0.48828,0.55469 -0.64062,0.91797c-0.24219,0.57813 -0.27734,1.28516 -0.36719,2.01563c-0.05469,0.01953 -0.03125,0.00391 -0.05859,0.03125c-0.42578,-0.10547 -0.57812,-0.54297 -0.73437,-0.91797c-0.39844,-0.94922 -0.47656,-2.48047 -0.12109,-3.57031c0.08984,-0.28516 0.5,-1.17578 0.33594,-1.4375c-0.07812,-0.26172 -0.34375,-0.41016 -0.48828,-0.60937c-0.18359,-0.24609 -0.36328,-0.57031 -0.48828,-0.85547c-0.32812,-0.74219 -0.63672,-1.60156 -0.98437,-2.35156c-0.16406,-0.35937 -0.44141,-0.71875 -0.67187,-1.03906c-0.25391,-0.35156 -0.53516,-0.60937 -0.73437,-1.03906c-0.06641,-0.14844 -0.16406,-0.39062 -0.05859,-0.54687c0.03125,-0.10547 0.07813,-0.14844 0.18359,-0.18359c0.17578,-0.13672 0.66797,0.04297 0.85547,0.12109c0.48828,0.20313 0.89844,0.39844 1.3125,0.67188c0.19922,0.13281 0.39844,0.38672 0.64063,0.46094h0.27344c0.43359,0.09766 0.91406,0.02734 1.3125,0.15234c0.71094,0.21484 1.34766,0.55078 1.92188,0.91406c1.76172,1.10938 3.20313,2.69141 4.18359,4.57813c0.16016,0.30469 0.23047,0.59766 0.37109,0.91797c0.27734,0.64844 0.63281,1.32031 0.91406,1.95313c0.27734,0.63672 0.55078,1.27344 0.94531,1.80078c0.20703,0.27734 1.01172,0.42969 1.375,0.58203c0.25391,0.10938 0.67578,0.22266 0.91406,0.36719c0.46484,0.27734 0.91016,0.60938 1.34375,0.91797c0.21875,0.15234 0.88281,0.48438 0.91797,0.76172c-1.07422,-0.02734 -1.89453,0.07031 -2.59375,0.36719c-0.19922,0.08594 -0.51953,0.08594 -0.55078,0.33594c0.10547,0.11328 0.125,0.28516 0.21094,0.42578c0.16797,0.26953 0.44922,0.63281 0.70313,0.82422c0.27734,0.20703 0.55859,0.42969 0.85547,0.61328c0.52344,0.31641 1.10938,0.5 1.61719,0.82031c0.29688,0.19141 0.59766,0.42969 0.88672,0.64063c0.14453,0.10938 0.23828,0.27344 0.42578,0.33984v-0.03125c-0.09766,-0.125 -0.12109,-0.29687 -0.21094,-0.42578l-0.40234,-0.40234c-0.38672,-0.51172 -0.87891,-0.96484 -1.40234,-1.33984c-0.41797,-0.30078 -1.35156,-0.70703 -1.52344,-1.19141l-0.03125,-0.03125c0.29297,-0.03125 0.64063,-0.14062 0.91406,-0.21484c0.46094,-0.12109 0.86719,-0.08984 1.33984,-0.21094c0.21484,-0.0625 0.42969,-0.125 0.64453,-0.18359v-0.125c-0.23828,-0.24219 -0.41016,-0.57031 -0.67187,-0.79297c-0.68359,-0.58203 -1.42969,-1.16406 -2.19922,-1.64844c-0.42578,-0.26953 -0.95312,-0.44531 -1.40234,-0.67187c-0.15234,-0.07812 -0.41797,-0.11719 -0.51953,-0.24609c-0.23828,-0.30078 -0.36719,-0.68359 -0.55078,-1.03516c-0.38281,-0.73828 -0.75781,-1.54297 -1.09766,-2.32031c-0.23047,-0.52734 -0.38281,-1.05078 -0.67187,-1.52734c-1.38672,-2.27734 -2.87891,-3.65625 -5.19141,-5.00781c-0.49219,-0.28906 -1.08203,-0.39844 -1.70703,-0.54687c-0.33984,-0.02344 -0.67187,-0.04297 -1.01172,-0.0625c-0.20312,-0.08594 -0.41797,-0.33594 -0.60937,-0.46094c-0.48047,-0.30078 -1.42578,-0.82422 -2.20703,-0.83594zM34.47656,11.3125c-0.22266,-0.00391 -0.38281,0.02734 -0.55078,0.0625v0.03125h0.03125c0.10547,0.21875 0.29688,0.35938 0.42969,0.54688c0.10156,0.21484 0.19922,0.42969 0.30078,0.64453l0.03125,-0.03125c0.1875,-0.13281 0.27734,-0.34766 0.27734,-0.67187c-0.07812,-0.07812 -0.08984,-0.17969 -0.15234,-0.27344c-0.08984,-0.12891 -0.25781,-0.19922 -0.36719,-0.30859zM1.86719,23.99609c-0.30078,0.01172 -0.62891,0.07031 -0.98438,0.18359c-0.59375,0.17969 -0.88672,0.53516 -0.88672,1.25781v7.5625h2.00391v-7.37891l2.77734,6.30859c0.34375,0.78516 0.8125,1.06641 1.73047,1.06641c0.92188,0 1.37109,-0.28125 1.71484,-1.06641l2.77734,-6.14844v7.21875h2v-7.5625c0,-0.72266 -0.28906,-1.07812 -0.88672,-1.25781c-1.42187,-0.44922 -2.37891,-0.0625 -2.80859,0.91016l-2.85156,6.41406l-2.75781,-6.41406c-0.3125,-0.73047 -0.9375,-1.12891 -1.82812,-1.09375zM26.24609,24c-0.78906,0 -3.24609,0.09375 -3.24609,2v1.23438c0,0.875 0.76953,1.58984 2.4375,1.76563c0.1875,0.01172 0.375,0.02734 0.5625,0.02734c0,0 1.94531,-0.03906 2,-0.02734c1.125,0 1,0.875 1,1v1c0,0.13672 -0.03125,1 -1.01172,1h-4.98828v1h5.00781c0.65625,0 1.29297,-0.13672 1.80078,-0.375c0.84375,-0.38672 1.19141,-0.91016 1.19141,-1.59766v-1.42969c0,-1.53516 -1.90625,-1.59766 -3,-1.59766h-2c-0.78516,0 -0.90625,-0.47656 -1,-1v-1c0.09375,-0.39844 0.26953,-0.9375 0.96484,-1h5.03516v-1zM33.98047,24c-1.47656,0.20313 -1.99609,0.9375 -1.99609,2v5c0,0.97266 0.54297,1.55859 1.66016,1.86328c0.375,0.10547 0.71484,0.14844 1.03516,0.14844l2.22656,-0.01172h1.30859l1.11328,1h2.25l-1.54687,-1.39453c0.72656,-0.30078 0.95313,-0.76172 0.95313,-1.625v-4.98047c0,-1.0625 -0.69141,-1.79687 -2.16797,-2zM42,24v6.95703c0,1.20703 0.68359,1.88672 2.49219,2.02344c0.16797,0.00781 0.33984,0.01953 0.50781,0.01953h5v-1h-4.62109c-1.03125,0 -1.37891,-0.43359 -1.37891,-1.05078v-6.94922zM35.17188,25h2.57422c0.67969,0 1.13672,0.54688 1.23828,1c0,0 0.01563,4.65625 0.01563,5c0,0.34375 -0.19141,0.5 -0.19141,0.5l-0.54297,-0.5h-2.26562l1.11328,1h-1.94141c-0.69531,0 -1.08594,-0.51562 -1.1875,-1v-4.89844c0,-0.53125 0.40625,-1.10156 1.1875,-1.10156zM14,27c0.03906,0.03906 0,4.26172 0,4.34375c0.01563,0.875 1.125,1.64063 2.86328,1.65625h3.13672v0.06641c0,0.1875 0.13672,0.8125 -1,0.93359c-0.01172,0 -4.98828,0 -5,0v1h5.21484c0.88281,-0.02734 2.79688,-0.22656 2.78516,-1.75781c0,-0.02734 0.00781,-6.24219 0,-6.24219h-2v5c-0.03125,0 -2.47656,0.00781 -2.96875,0c-0.96484,-0.01562 -1.04687,-0.56641 -1.03125,-0.77734v-4.22266z"></path></g></g>
                    </svg>
                    <p class="fs-4 m-0 p-0 text-secondary fw-semibold ms-2">MYSQL</p>
                </div>
                <div class="items d-inline-flex align-items-center mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0,0,256,256">
                    <g fill="#adb5bd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M23.642 5.43a.364.364 0 0 1 .014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 0 1-.188.326L9.93 23.949a.316.316 0 0 1-.066.027c-.008.002-.016.008-.024.01a.348.348 0 0 1-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 0 1-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 0 1 .023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 0 1 .375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 0 1 .024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 0 1 .375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033a.3.3 0 0 1 .024.06c.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 0 1-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81 1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505 2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087l-1.58-.907v4.283l2.182 1.256 1.58.908zm-8.65 9.654 5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"></path></g></g>
                    </svg>
                    <p class="fs-4 m-0 p-0 text-secondary fw-semibold ms-2">LARAVEL</p>
                </div>
                <div class="items d-inline-flex align-items-center mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                    <defs><linearGradient x1="13.375" y1="3.037" x2="39.932" y2="29.593" gradientUnits="userSpaceOnUse" id="color-1_zi5Or7J8cOfO_gr1"><stop offset="0" stop-color="#adb5bd"></stop><stop offset="1" stop-color="#adb5bd"></stop></linearGradient><linearGradient x1="13.397" y1="3.015" x2="39.953" y2="29.571" gradientUnits="userSpaceOnUse" id="color-2_zi5Or7J8cOfO_gr2"><stop offset="0" stop-color="#adb5bd"></stop><stop offset="1" stop-color="#adb5bd"></stop></linearGradient><linearGradient x1="25.046" y1="19.856" x2="37.017" y2="31.826" gradientUnits="userSpaceOnUse" id="color-3_zi5Or7J8cOfO_gr3"><stop offset="0" stop-color="#adb5bd"></stop><stop offset="1" stop-color="#adb5bd"></stop></linearGradient><linearGradient x1="4.037" y1="8.48" x2="28.544" y2="32.987" gradientUnits="userSpaceOnUse" id="color-4_zi5Or7J8cOfO_gr4"><stop offset="0" stop-color="#adb5bd"></stop><stop offset="1" stop-color="#adb5bd"></stop></linearGradient><linearGradient x1="7.441" y1="15.914" x2="28.296" y2="36.768" gradientUnits="userSpaceOnUse" id="color-5_zi5Or7J8cOfO_gr5"><stop offset="0" stop-color="#adb5bd"></stop><stop offset="1" stop-color="#adb5bd"></stop></linearGradient><linearGradient x1="9.806" y1="21.853" x2="27.803" y2="39.85" gradientUnits="userSpaceOnUse" id="color-6_zi5Or7J8cOfO_gr6"><stop offset="0" stop-color="#adb5bd"></stop><stop offset="1" stop-color="#adb5bd"></stop></linearGradient><linearGradient x1="-2.471" y1="11.821" x2="32.906" y2="47.198" gradientUnits="userSpaceOnUse" id="color-7_zi5Or7J8cOfO_gr7"><stop offset="0" stop-color="#adb5bd"></stop><stop offset="1" stop-color="#adb5bd"></stop></linearGradient><linearGradient x1="5.875" y1="19.623" x2="35.155" y2="48.903" gradientUnits="userSpaceOnUse" id="color-8_zi5Or7J8cOfO_gr8"><stop offset="0" stop-color="#adb5bd"></stop><stop offset="1" stop-color="#adb5bd"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M23.65,24.898c-0.998,-1.609 -1.722,-2.943 -2.725,-5.455c-1.696,-4.243 10.315,-8.077 5.445,-15.444c2.111,5.089 -7.577,8.235 -8.477,12.473c-0.823,3.898 5.752,8.426 5.757,8.426z" fill="url(#color-1_zi5Or7J8cOfO_gr1)"></path><path d="M23.878,17.27c-0.192,2.516 2.229,3.857 2.299,5.695c0.056,1.496 -1.447,2.743 -1.447,2.743c0,0 2.728,-0.536 3.579,-2.818c0.945,-2.534 -1.834,-4.269 -1.548,-6.298c0.267,-1.938 6.031,-5.543 6.031,-5.543c0,0 -8.481,0.562 -8.914,6.221z" fill="url(#color-2_zi5Or7J8cOfO_gr2)"></path><path d="M32.084,25.055c1.754,-0.394 3.233,0.723 3.233,2.01c0,2.901 -4.021,5.643 -4.021,5.643c0,0 6.225,-0.742 6.225,-5.505c0,-3.15 -3.057,-3.937 -5.437,-2.148z" fill="url(#color-3_zi5Or7J8cOfO_gr3)"></path><path d="M29.129,27.395c0,0 1.941,-1.383 2.458,-1.902c-4.763,1.011 -15.638,1.147 -15.638,0.269c0,-0.809 3.507,-1.638 3.507,-1.638c0,0 -7.773,-0.112 -7.773,2.181c0,2.39 10.175,2.561 17.446,1.09z" fill="url(#color-4_zi5Or7J8cOfO_gr4)"></path><path d="M27.935,29.571c-4.509,1.499 -12.814,1.02 -10.354,-0.993c-1.198,0 -2.974,0.963 -2.974,1.889c0,1.857 8.982,3.291 15.63,0.572z" fill="url(#color-5_zi5Or7J8cOfO_gr5)"></path><path d="M18.686,32.739c-1.636,0 -2.695,1.054 -2.695,1.822c0,2.391 9.76,2.632 13.627,0.205l-2.458,-1.632c-2.889,1.27 -10.146,1.445 -8.474,-0.395z" fill="url(#color-6_zi5Or7J8cOfO_gr6)"></path><path d="M36.281,36.632c0,-0.936 -1.055,-1.377 -1.433,-1.588c2.228,5.373 -22.317,4.956 -22.317,1.784c0,-0.721 1.807,-1.427 3.477,-1.093l-1.42,-0.839c-3.328,-0.522 -5.588,0.941 -5.588,2.121c0,5.503 27.281,5.238 27.281,-0.385z" fill="url(#color-7_zi5Or7J8cOfO_gr7)"></path><path d="M39,38.604c-4.146,4.095 -14.659,5.587 -25.231,3.057c10.572,4.503 25.181,1.967 25.231,-3.057z" fill="url(#color-8_zi5Or7J8cOfO_gr8)"></path></g></g>
                    </svg>
                    <p class="fs-4 m-0 p-0 text-secondary fw-semibold ms-2">JAVA</p>
                </div>
                <div class="items d-inline-flex align-items-center mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M26,4l-20,20l6,6l26,-26z" fill="#adb5bd"></path><path d="M38,22l-11,11l-6,-6l5,-5z" fill="#adb5bd"></path><rect x="-12.72895" y="33.94062" transform="rotate(-45.001)" width="8.485" height="8.485" fill="#adb5bd"></rect><path d="M38,44h-12l-5,-5l6,-6z" fill-opacity="0.74902" fill="#adb5bd"></path><path d="M21,39l9,-3l-3,-3z" fill-opacity="0.74902" fill="#adb5bd"></path></g></g>
                    </svg>
                    <p class="fs-4 m-0 p-0 text-secondary fw-semibold ms-2">FLUTTER</p>
                </div>
                <div class="items d-inline-flex align-items-center mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M8,37l15.234,-28.564c0.321,-0.602 1.189,-0.591 1.494,0.02l5.272,10.544z" fill-opacity="0.74902" fill="#adb5bd"></path><path d="M8,36.992l5.546,-34.199c0.145,-0.895 1.347,-1.089 1.767,-0.285l10.687,20.484z" fill="#adb5bd"></path><path d="M8.008,36.986l0.2,-0.157l17.529,-14.341l-4.944,-9.476z" fill="#9ca3aa"></path><path d="M8,37l26.666,-25.713c0.559,-0.539 1.492,-0.221 1.606,0.547l3.728,25.166l-15,8.743c-0.609,0.342 -1.352,0.342 -1.961,0z" fill="#adb5bd"></path></g></g>
                    </svg>
                    <p class="fs-4 m-0 p-0 text-secondary fw-semibold ms-2">FIREBASE</p>
                </div>
                <div class="items d-inline-flex align-items-center mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                    <g fill="#adb5bd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-0.71484,0 -1.42969,0.17969 -2.06641,0.53906l-16.84375,9.46484c-1.28906,0.72266 -2.08984,2.07813 -2.08984,3.53125v18.92969c0,1.45313 0.80078,2.80859 2.08984,3.53125l16.84375,9.46484c0.63672,0.35938 1.35156,0.53906 2.06641,0.53906c0.71484,0 1.42969,-0.17969 2.06641,-0.53906l16.84375,-9.46094c1.28906,-0.72656 2.08984,-2.08203 2.08984,-3.53516v-18.92969c0,-1.45312 -0.80078,-2.80859 -2.08984,-3.53125l-16.84375,-9.46484c-0.63672,-0.35937 -1.35156,-0.53906 -2.06641,-0.53906zM25,13c3.78125,0 7.27734,1.75391 9.54297,4.73828l-4.38281,2.53906c-1.31641,-1.44141 -3.1875,-2.27734 -5.16016,-2.27734c-3.85937,0 -7,3.14063 -7,7c0,3.85938 3.14063,7 7,7c1.97266,0 3.84375,-0.83594 5.16016,-2.27734l4.38281,2.53906c-2.26562,2.98438 -5.76172,4.73828 -9.54297,4.73828c-6.61719,0 -12,-5.38281 -12,-12c0,-6.61719 5.38281,-12 12,-12zM35,20h2v2h2v-2h2v2h2v2h-2v2h2v2h-2v2h-2v-2h-2v2h-2v-2h-2v-2h2v-2h-2v-2h2zM37,24v2h2v-2z"></path></g></g>
                    </svg>
                    <p class="fs-4 m-0 p-0 text-secondary fw-semibold ms-2">C#</p>
                </div>
            </div>
        </div>
    </div>
    <!-- project view -->
    <div class="container d-flex flex-column justify-content-center align-items-center mb-5">
        <h2 class="pb-2 border-bottom text-light w-100 text-end">Projects</h2>
        <div class="m-0 mb-4 p-0  d-flex flex-wrap justify-content-center align-items-center">
            <div role="button"class="col-3 item1 d-flex justify-content-center align-items-center flex-column mx-4 p-2 text-light overflow-hidden "style="width:17em;height:25em;">
                <div class="w-100 border border-bottom-0 rounded-top-4 overflow-hidden"style="height:40%;">
                    <img class="object-fit-cover" style="width:100%;height:100%;"src="images/project1.png" alt="Project Image">
                </div>
                <div class="bg-primary text-center rounded-bottom-4 p-1"style="height:60%;">
                    <h4>Inventory Managment System</h4>
                    <p class="lh-1">Private inventory management system for two farm, handling sales, purchase invoices, and party info with owner-only access and verification, ensuring streamlined business operations.</p>
                    <p>Price <span>₹12000</span> Timing <span>25 Day</span></p>
                </div>
            </div>
            <div role="button"class="col-3 item2 d-flex justify-content-center align-items-center flex-column mx-4 p-2 text-light overflow-hidden "style="width:17em;height:25em;">
                <div class="w-100 border border-bottom-0 rounded-top-4 overflow-hidden"style="height:40%;">
                    <img class="object-fit-cover" style="width:100%;height:100%;"src="images/project2.png" alt="Project Image">
                </div>
                <div class="bg-primary text-center rounded-bottom-4 p-1"style="height:60%;">
                    <h4>Mini E-Commerce Website</h4>
                    <p class="lh-1">Power Friend offers an e-commerce platform for battery orders, tracking, claims, admin management, monthly PDF reports, and file sharing between customers and owners. Visit: <a class="text-light fw-semibold"href="https://powerfriend.in" target="_blank">powerfriend.in</a></p>
                    <p>Price <span>₹22000</span> Timing <span><span>20 Day</span></p>
                </div>
            </div>
            <div role="button"class="col-3 item3 d-flex justify-content-center align-items-center flex-column mx-4 p-2 text-light overflow-hidden "style="width:17em;height:25em;">
                <div class="w-100 border border-bottom-0 rounded-top-4 overflow-hidden"style="height:40%;">
                    <img class="object-fit-cover" style="width:100%;height:100%;"src="images/hero4.png" alt="Project Image">
                </div>
                <div class="bg-primary text-center rounded-bottom-4 p-1"style="height:60%;">
                    <h4>Project Name</h4>
                    <p class="lh-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur nesciunt exercitationem doloribus, quisquam quasi odio possimus temporibus quo obcaecati quos.</p>
                    <p>Price <span>₹10000</span> Timing <span><span>1 Day</span></p>
                </div>
            </div>
        </div>
        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover fw-semibold text-light" href="./projects">View More <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <!-- feedback of clints with project details -->
    <div class="container d-flex justify-content-center">
        <div class="container bg-primary d-flex justify-content-center align-items-center m-0 p-0 mb-5" style=" box-shadow: inset 70px 70px 70px -15px rgba(32, 37, 41),inset -70px -70px 70px -15px rgba(32, 37, 41);">
            <div class="m-2 p-0 col-4 d-none d-lg-block">
                <h2 class="fs-2 text-light">Client's Feedback</h2>
                <p class="text-light">Your feedback helps us grow and improve our services. By sharing your experience, you help us serve you better. We'd love to hear your thoughts—thank you for your support!</p>
            </div>
            <div class="swiper mySwiper overflow-hidden">
                <div class="swiper-wrapper my-5">
                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="card bg-dark">
                            <div class="img m-auto"style="width: 4.8em;height: 4.8em;"><img src="images/client.png" class="img-thumbnail rounded-circle" alt="Client Image"></div>
                            <span class="fw-bold text-light d-block text-center" style="font-size: 1em;">Arif Sk</span>
                            <p class="info fw-medium text-light d-block text-center" style="font-size: 0.72em; margin: 1em;">Great job on the website! It’s easy to use and helps me manage both my inventory and farms smoothly. The features save me time, and everything runs much more efficiently now.</p>
                            <button class="btn btn-outline-primary fw-semibold rounded-5 p-2 m-auto w-50">Project</button>
                        </div>
                    </div>
                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="card bg-dark">
                            <div class="img m-auto"style="width: 4.8em;height: 4.8em;"><img src="images/client.png" class="img-thumbnail rounded-circle" alt="Client Image"></div>
                            <span class="fw-bold text-light d-block text-center" style="font-size: 1em;">Power Friend (Manager)</span>
                            <p class="info fw-medium text-light d-block text-center" style="font-size: 0.72em; margin: 1em;">Power Friend's new battery order and claim management system is working great. The website is easy to use, and it helps us manage orders smoothly. Very happy with the work!</p>
                            <button class="btn btn-outline-primary fw-semibold rounded-5 p-2 m-auto w-50">Project</button>
                        </div>
                    </div>
                    <div class="swiper-slide d-flex justify-content-center">
                        <div class="card bg-dark">
                            <div class="img m-auto"style="width: 4.8em;height: 4.8em;"><img src="images/client.png" class="img-thumbnail rounded-circle" alt="Client Image"></div>
                            <span class="fw-bold text-light d-block text-center" style="font-size: 1em;">Abhijit Dey</span>
                            <p class="info fw-medium text-light d-block text-center" style="font-size: 0.72em; margin: 1em;">I’m Walter, a multidisciplinary designer who focuses on telling my clients’ stories visually, through enjoyable and meaningful experiences. I specialize in responsive websites and functional user interfaces.</p>
                            <button class="btn btn-outline-primary fw-semibold rounded-5 p-2 m-auto w-50">Project</button>
                        </div>
                    </div>                
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- work flow of a project -->
     <div class="container">
        <h2 class="pb-2 border-bottom text-light">Work Flow</h2>
        <div class="container d-flex flex-column flex-lg-row justify-content-around align-items-center py-4">
            <div class="p-0 col col-lg-4">
                <h2 class="fs-2 text-light">Efficient Collaboration</h2>
                <p class="text-light">Excelling in these workflows requires clear communication, adaptive planning, continuous improvement, risk management, and customer-focused feedback to ensure quality results.</p>
            </div>
            <div class="container col col-lg-3">
                <div class="workline_container d-flex flex-column position-relative">
                    <div class="works border border-1 border-secondary rounded shadow p-2 m-2 w-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Gather and document all project requirements.">
                        <p class="text-light fs-6 fw-semibold m-0 p-0"style="line-height:1.2;">
                            <span>Requirement Analysis</span><br>
                            <!-- <span class="text-secondary fw-semibold p-0" style="font-size:0.8rem;">Gather and document all project requirements.</span> -->
                        </p>
                    </div>
                    <div class="works border border-1 border-secondary rounded shadow p-2 m-2 w-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Design the system based on gathered requirements.">
                        <p class="text-light fs-6 fw-semibold m-0 p-0"style="line-height:1.2;">
                            <span>System Design</span><br>
                            <!-- <span class="text-secondary fw-semibold p-0" style="font-size:0.8rem;">Design the system based on gathered requirements.</span> -->
                        </p>
                    </div>
                    <div class="works border border-1 border-secondary rounded shadow p-2 m-2 w-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Develop an initial working prototype of the system.">
                        <p class="text-light fs-6 fw-semibold m-0 p-0"style="line-height:1.2;">
                            <span>Build Prototype</span><br>
                            <!-- <span class="text-secondary fw-semibold p-0" style="font-size:0.8rem;">Develop an initial working prototype of the system.</span> -->
                        </p>
                    </div>
                    <div class="works border border-1 border-secondary rounded shadow p-2 m-2 w-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Get feedback from users based on the prototype.">
                        <p class="text-light fs-6 fw-semibold m-0 p-0"style="line-height:1.2;">
                            <span>Client/User Feedback</span><br>
                            <!-- <span class="text-secondary fw-semibold p-0" style="font-size:0.8rem;">Get feedback from users based on the prototype.</span> -->
                        </p>
                    </div>
                    <div class="works border border-1 border-secondary rounded shadow p-2 m-2 w-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Refine the prototype by addressing feedback and modifying features.">
                        <p class="text-light fs-6 fw-semibold m-0 p-0"style="line-height:1.2;">
                            <span>Refinement</span><br>
                            <!-- <span class="text-secondary fw-semibold p-0" style="font-size:0.8rem;">Refine the prototype by addressing feedback and modifying features.</span> -->
                        </p>
                    </div>
                    <div class="works border border-1 border-secondary rounded shadow p-2 m-2 w-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Develop the final system based on the refined prototype.">
                        <p class="text-light fs-6 fw-semibold m-0 p-0"style="line-height:1.2;">
                            <span>Final Product Development</span><br>
                            <!-- <span class="text-secondary fw-semibold p-0" style="font-size:0.8rem;">Develop the final system based on the refined prototype.</span> -->
                        </p>
                    </div>
                    <div class="works border border-1 border-secondary rounded shadow p-2 m-2 w-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Perform continuous testing for quality assurance.">
                        <p class="text-light fs-6 fw-semibold m-0 p-0"style="line-height:1.2;">
                            <span>Testing</span><br>
                            <!-- <span class="text-secondary fw-semibold p-0" style="font-size:0.8rem;">Perform continuous testing for quality assurance.</span> -->
                        </p>
                    </div>
                    <div class="works border border-1 border-secondary rounded shadow p-2 m-2 w-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Deploy the application to production environments.">
                        <p class="text-light fs-6 fw-semibold m-0 p-0"style="line-height:1.2;">
                            <span>Release</span><br>
                            <!-- <span class="text-secondary fw-semibold p-0" style="font-size:0.8rem;">Deploy the application to production environments.</span> -->
                        </p>
                    </div>
                    <div class="works border border-1 border-secondary rounded shadow p-2 m-2 w-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Continuously monitor system performance and maintain code.">
                        <p class="text-light fs-6 fw-semibold m-0 p-0"style="line-height:1.2;">
                            <span>Monitor and Maintain (Optional)</span><br>
                            <!-- <span class="text-secondary fw-semibold p-0" style="font-size:0.8rem;">Continuously monitor system performance and maintain code.</span> -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!-- footer -->
     <?php include './footer.php';?>
         
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 10,
        loop : true,
        autoplay :{
            delay:2000,
        },
        centeredSlides: true,
        spaceBetween: 30,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
                100: {
                    slidesPerView: 1,  // Show 1 slide or fewer if there is only one slide
                    spaceBetween: 10,
                },
                576: {
                    slidesPerView: 1,  // Show 1 slide or fewer if there is only one slide
                    spaceBetween: 10,
                },
                // Small (Bootstrap sm) - 576px to 767px
                768: {
                    slidesPerView: 1,  // Show 2 slides or fewer if there are fewer than 2 slides
                    spaceBetween: 10,
                },
                // Medium (Bootstrap md) - 768px to 991px
                992: {
                    slidesPerView: 2,  // Show up to 3 slides or fewer if there are fewer than 3 slides
                    spaceBetween: 10,
                },
                // Large (Bootstrap lg) - 992px to 1199px
                1200: {
                    slidesPerView: 2,  // Show up to 4 slides or fewer if there are fewer than 4 slides
                    spaceBetween: 10,
                },
            },
        });

        document.querySelector('.services').addEventListener('click', function() {
            // Select single .dropdown-toggle element
            let list = document.querySelector('.dropdown-toggle');
            let menu = document.querySelector('.dropdown-menu');

            // First remove attributes and classes
            list.removeAttribute('aria-expanded');
            list.classList.remove('show');
            menu.removeAttribute('data-bs-popper');
            menu.classList.remove('show');

            // Then add them back
            list.setAttribute('aria-expanded', 'true');
            list.classList.add('show');
            menu.setAttribute('data-bs-popper', 'static');
            menu.classList.add('show');
        });
        window.addEventListener('load', function() {
            document.querySelector('.spinner_container').style.display= 'none';
            document.querySelector('.spinner_container').remove();
        });

        // Get the .slide-items container
        const slideItems = document.querySelector(".slide-items");

        // Clone each image inside .slide-items and append to the same container
        const images = slideItems.querySelectorAll(".items");
        images.forEach(image => {
            const clone = image.cloneNode(true); // Clone each image
            // clone.setAttribute("data-clone", "true");
            slideItems.appendChild(clone);       // Append the cloned image back to .slide-items
        });

        //observe on wrokline_container if it on main then the workline class add on this and animation start
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        $(entry.target).addClass("workline");
                        observer.unobserve(entry.target);
                    }
                });
            }, 
            { threshold: 0.5 }
        );

        $(".workline_container").each((_, el) => observer.observe(el));
    </script>
  </body>
</html>