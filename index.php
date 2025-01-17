<?php

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Syles -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="sass/scss/css/style.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">

    <link rel="icon" href="image/icon.png">
    <title>Flyn</title>
</head>

<body>
    <header>
        <div class="abs-img">
            <img class="circle-shape-2" src="image/circle-shape_2.png" alt="circle">
            <img class="circle-shape-1" src="image/circle-shape-1.png" alt="circle">
            <img class="dot-triange" src="image/shape_3.png" alt="triangle">
        </div>
        <img class="dot-box d-xl-block d-none" id="dotBox1" src="image/dot_box_1.png" alt="dot">
        <img class="dot-box-1 d-xl-block d-none" src="image/dot_box_1.png" alt="dot">
        <div class="dot-flow" id="dotFlow1">
            <img src="image/dot_flow_1.png" alt="dot-flow" width="100%">
        </div>

        <div class="ui-image d-xl-block">
            <div class="row py-3">
                <div class="col-8 offset-1"><img class="ux-ui" id="img1" src="image/img_1.png" alt="ui-image"></div>
                <div class="col-3 px-5"><img class="ux-ui" id="img2" src="image/img_2.png" alt="ui-image"></div>
            </div>
            <div class="row py-3">
                <div class="col-3"><img class="ux-ui" id="img3" src="image/img_3.png" alt="ui-image"></div>
                <div class="col-9"><img class="ux-ui" id="img4" src="image/img_4.png" alt="ui-image"></div>
            </div>
            <div class="row py-3">
                <div class="col-8"><img class="ux-ui" id="img6" src="image/img_6.png" alt="ui-image"></div>
                <div class="col-4 px-5"><img class="ux-ui" id="img5" src="image/img_5.png" alt="ui-image"></div>
            </div>
        </div>

        <div class="bg-header">
            <div class="container-fluid">
                <div class="container py-xl-4 py-2 px-xl-0">
                    <div class="row py-2">
                        <div class="col px-xl-1 py-0">
                            <nav class="d-flex justify-content-between">
                                <div class="logo"><img src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/logo/logo_1.png" alt="logo" width="100%"></div>
                                <div>
                                    <button class="button-purchase-now-1 d-xl-block d-none" type="button">Purchase Now</button>

                                    <div>
                                        <button class="btn btn-outline-light d-xl-none d-block" onclick="toggleNavar()">
                                            <i class="fas fa-bars" aria-hidden="true"></i>
                                        </button>
                                        <div id="slideNav" class="slide-navbar">
                                            <div class="d-flex justify-content-between align-items-center p-5">
                                                <div class="logo_2">
                                                    <img src="image/logo_2.png" alt="logo-2">
                                                </div>
                                                <div onclick="toggleNavar()"><i class="fas fa-times display-4 text-danger" aria-hidden="true"></i></div>
                                            </div>

                                            <div class="my-5 px-5">
                                                <h3 class="h2 text-dark">Make a website You’ll be Proud of</h3>
                                                <p class="my-4 text-dark">Save hours on design and development and launch faster.</p>
                                                <button class="button-purchase-now-2 px-5 mt-3"><span class="mx-3 px-3">Purchase Now</span></button>
                                            </div>

                                            <div class="d-flex flex-column pt-5">
                                                <a class="sl-nav-link" href="#">Demos</a>
                                                <a class="sl-nav-link" href="#">Features</a>
                                                <a class="sl-nav-link" href="#">Pages</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="row py-5 mt-5">
                        <div class="col-xl-6 px-xl-1 pt-xl-4">
                            <div class="row justify-content-xl-start justify-content-center">
                                <div class="col-sm-10 px-sm-0 px-5">
                                    <div class="header-title text-center text-xl-start">Full Screen Portfolio Theme for Agencies, Freelancers & Professionals.</div>
                                </div>
                            </div>
                            <div class="row text-white z-index-20">
                                <div class="col-3 p-xl-2 p-0">
                                    <h3 class="d-flex align-items-center"><span>9</span><span class="i-plus">+</span></h3>
                                    <p>HOME PAGES</p>
                                </div>
                                <div class="col-3 p-xl-2 p-0">
                                    <h3 class="d-flex align-items-center"><span>8</span><span class="i-plus">+</span></h3>
                                    <p>PORTFOLIO</p>
                                </div>
                                <div class="col-3 p-xl-2 p-0">
                                    <h3 class="d-flex align-items-center"><span>70</span><span class="i-plus">+</span></h3>
                                    <p>ELEMENTS</p>
                                </div>
                                <div class="col-3 p-xl-2 p-0">
                                    <h3 class="d-flex align-items-center"><span>80</span><span class="i-plus">+</span></h3>
                                    <p>TOTAL PAGES</p>
                                </div>
                            </div>
                            <div class="my-5 py-3 p-xl-2 p-0">
                                <span href="#" class="btn-scroll-down" onclick="btnScrollDown()">
                                    <span class="text-white" href="#"><span class="arrow-down"></span></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="circle-of-row"><img src="image/shape_5.png" alt="dot" width="100%"></div>
        <div class="dot-flow-main"><img src="image/dot_flow_2.png" alt="dot" width="100%"></div>

        <section class="stunning-demos py-5">
            <div class="st_dmo_txt">Stunning Demos</div>
            <div class="container-fluid py-xl-5">
                <div class="container">
                    <div class="row pt-xl-5">
                        <div class="col text-center">
                            <div class="demo-details">
                                <h1 class="text-white m-0">Demo Websites</h1>
                                <h1 class="text-white m-0">Single Click Install</h1>
                                <h6>Choose from pre-made layout for creative portfolio</h6>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-5 pb-xl-5 mt-xl-4" data-setname="demos">
                        <div class="col-xl-6 pb-5 pb-xl-0">
                            <div><img class="ui-m-up" src="image/01.jpg" alt="demos" width="100%"></div>
                            <h3 class="text-center text-white py-xl-4 py-2">Design Studio</h2>
                        </div>
                        <div class="col-xl-6 pb-5 pb-xl-0">
                            <div><img class="ui-m-up" src="image/02.jpg" alt="demos" width="100%"></div>
                            <h3 class="text-center text-white py-xl-4 py-2">Full Screen Portfolio</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 pb-5 pb-xl-0">
                            <div><img class="ui-m-up" src="image/03.jpg" alt="demos" width="100%"></div>
                            <h3 class="text-center text-white py-xl-4 py-2">Home Creative Agency</h3>
                        </div>
                        <div class="col-xl-6 pb-5 pb-xl-0">
                            <div><img class="ui-m-up" src="image/04.jpg" alt="demos" width="100%"></div>
                            <h3 class="text-center text-white py-xl-4 py-2">Home Horizontal Slider</h3>
                        </div>
                    </div>

                    <div class="row pt-xl-5">
                        <div class="col-xl-6 pb-5 pb-xl-0">
                            <div><img class="ui-m-up" src="image/05.jpg" alt="demos" width="100%"></div>
                            <h3 class="text-center text-white py-xl-4 py-2">Home Masonry</h3>
                        </div>
                        <div class="col-xl-6 pb-5 pb-xl-0">
                            <div class="ui-m-up coming-soon">
                                <span>
                                    <h3>Coming Soon</h3>
                                </span>
                                <img src="image/img_10.jpg" alt="demos" width="100%">
                            </div>
                            <h3 class="text-center text-white py-xl-4 py-2">Coming Soon</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <article class="elementor">
        <div class="container pt-xl-5 mt-xl-5">
            <div class="row py-5 mt-xl-5 flex-xl-nowrap align-items-center">
                <div class="col-xl-5 text-xl-start text-center">
                    <div class="elementor-icon mx-xl-4 mx-auto">
                        <img src="image/icon_1.png" alt="elementor" width="35">
                    </div>
                    <div class="pt-xl-5">
                        <h1 class="f-w-400">Elementor</h1>
                        <h1 class="f-w-600">Drag-n-Drop Visual Builder</h1>
                        <p class="sub-title f-s-1 pt-4">Flyn is built upon Elementor, one of the most advanced, easy-to-use page builders inmodern days. Its intuitive, front end builder enables
                            you to make necessary changes on your web-page and its preview panel gives you real-time view of what you are achieving. Pure fun!</p>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 text-xl-start text-center">
                    <div class="elementor-ui">
                        <img class="shadow-large" src="image/img_1.jpg" alt="elementor" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="demo_import">
        <div class="shape_10"><img src="image/shape_10.png" alt="shape" width="100%"></div>
        <div class="shape_11"><img src="image/shape_11.png" alt="shape"></div>
        <div class=" container py-xl-5 mt-xl-5">
            <div class="row py-xl-5 mt-5 mb-xl-5 flex-xl-nowrap align-items-center">
                <div class="col-xl-5 text-end position-relative">
                    <img class="demo_import-img" src="image/img_2.jpg" alt="elementor" width="100%">
                </div>
                <div class="col-xl-6 offset-xl-1 pt-3 pt-xl-0 mb-5 text-center text-xl-start">
                    <h1 class="f-w-600">One-click demo import. Load the demo you like with a single click.</h1>
                    <p class="sub-title f-s-1_25 pt-xl-4 pb-xl-5 mb-xl-5">The Theme Importer provides you with all pages
                        and posts, sample sliders, widgets, theme options, assigned pages, and more.</p>
                </div>
            </div>
        </div>
    </article>

    <article class="blogging">
        <div class="bg-blogging">
            <div class="container py-5">
                <div class="row justify-content-center py-sm-5">
                    <div class="col-xl-7 text-center">
                        <h1 class="text-white">Awesome Blogging</h1>
                        <h6 class="sub-title text-white">We have included beautiful and useful blog archive layouts - list, grid views.
                            And blow single is also a gem. Moreover, you can show or hide the sidebars.</h6>
                    </div>
                </div>

                <div class="row py-5 mt-5 mb-sm-5">
                    <div class="col py-5 my-lg-5">
                        <div class="py-xl-5 my-sm-5">
                            <div class="py-xxl-5 my-xxl-5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blogging-image-1"><img src="image/blog_1.jpg" alt="ui-template" width="100%"></div>
        <div class="blogging-image-2"><img src="image/blog_2.jpg" alt="ui-template" width="100%"></div>
        <div class="blogging-image-3"><img src="image/blog_3.jpg" alt="ui-template" width="100%"></div>
    </article>

    <article class="varsetile_portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <h1>Creative & versatile portfolio</h1>
                    <h6 class="sub-title">Adjust item spacing, use cool animations, customize hover effects, or even create custom portfolio layouts.</h6>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row py-5 my-3">
                <div class="col">
                    <!--  Demos Slider -->
                    <section id="demos">
                        <div class="row">
                            <div class="large-12 columns">
                                <div class="loop owl-carousel owl-theme">
                                    <div class="item px-2 px-3 slider-hover">
                                        <div class="slide-img"><img src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/portfolio/img_1.jpg" alt="slide" width="100%"></div>
                                    </div>
                                    <div class="item px-2 px-3 slider-hover">
                                        <div class="slide-img"><img src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/portfolio/img_3.jpg" alt="slide" width="100%"></div>
                                    </div>
                                    <div class="item px-2 px-3 slider-hover">
                                        <div class="slide-img"><img src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/portfolio/img_2.jpg" alt="slide" width="100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </article>

    <article class="layout">
        <div class="container-fluid">
            <div class="container py-xl-5">
                <div class="row pt-5 pb-xl-5">
                    <div class="col">
                        <h1 class="text-center">9+ Portfolio stunning layouts</h1>
                    </div>
                </div>
                <div class="row flex-wrap justify-content-center pt-2 pb-xl-3 pb-3">
                    <div class="col-sm-4 col-6 py-xl-0 py-3">
                        <div class="text-xl-start text-center"><img src="image/layout_1.png" alt="layout" width="99%"></div>
                        <h6 class="text-center pt-xl-3 pt-2">Grid View</h6>
                    </div>
                    <div class="col-sm-4 col-6 py-xl-0 py-3">
                        <div class="text-xl-start text-center"><img src="image/layout_2.png" alt="layout" width="99%"></div>
                        <h6 class="text-center pt-xl-3 pt-2">Fluid View</h6>
                    </div>
                    <div class="col-sm-4 col-6 py-xl-0 py-3">
                        <div class="text-xl-start text-center"><img src="image/layout_3.png" alt="layout" width="99%"></div>
                        <h6 class="text-center pt-xl-3 pt-2">Grid View</h6>
                    </div>
                    <div class="col-sm-4 col-6 py-xl-0 py-3 pt-0 pt-xl-4">
                        <div class="text-xl-start text-center"><img src="image/layout_4.png" alt="layout" width="99%"></div>
                        <h6 class="text-center pt-xl-3 pt-2">Masonary View</h6>
                    </div>
                    <div class="col-sm-4 col-6 py-xl-0 py-3 pt-0 pt-xl-4">
                        <div class="text-xl-start text-center"><img src="image/layout_5.png" alt="layout" width="99%"></div>
                        <h6 class="text-center pt-xl-3 pt-2">Fluid View With Title</h6>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <article class="mobile_optimized">
        <div><img class="polygon-a1" src="image/shape_18.png" alt="shape"></div>
        <div><img class="dot-flow-3" src="image/dot_flow_2.png" alt="flow"></div>

        <div class="container-fluid pt-xl-5">
            <div class="container pt-5">
                <div class="row pt-1">
                    <div class="col text-center">
                        <h1 class="text-white">Mobile Optimized</h1>
                        <h6 class="sub-title text-white">Flyn is 100% responsive to make your website look beautiful in all devices and resolutions.</h6>
                    </div>
                </div>
                <div class="row mt-5 pt-3">
                    <div class="col">
                        <div class="text-center"><img src="image/img_8.png" alt="mobile" width="98%"></div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <article class="plugin">
        <div class="container-fluid bg-light py-5">
            <div class="container py-xl-5">
                <div class="row mt-sm-3">
                    <div class="col text-center">
                        <h1>Get premium and exclusive <br>plugins for free</h1>
                    </div>
                </div>

                <div class="row pt-xl-4 mt-sm-5 align-items-sm-stretch">
                    <div class="col-xl-4 col-sm-6 py-xl-0 py-3 mb-xl-4">
                        <div class="card bg-white shadow p-4">
                            <img class="m-3" src="image/flyn.jpg" alt="flyn" width="50">
                            <div class="card-body pb-sm-3 pb-lg-0">
                                <h5 class="card-title">Flyn Core</h5>
                                <p class="card-text pb-sm-4 pb-md-2 pb-lg-3">Required Plugin</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 py-xl-0 py-3 mb-xl-4">
                        <div class="card bg-white shadow p-4">
                            <img class="m-3" src="image/elementor.png" alt="elementor" width="50">
                            <div class="card-body">
                                <h5 class="card-title">Elementor Builder</h5>
                                <p class="card-text">Page Builder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 py-xl-0 py-3 mb-xl-4">
                        <div class="card bg-white shadow p-4">
                            <img class="m-3" src="image/acf.png" alt="acf" width="50">
                            <div class="card-body">
                                <h5 class="card-title">ACF Pro <span>- Save $25</span></h5>
                                <p class="card-text">Free Plugin</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 py-xl-0 py-3">
                        <div class="card bg-white shadow p-4">
                            <img class="m-3" src="image/redus.png" alt="redux" width="60">
                            <div class="card-body">
                                <h5 class="card-title">Redux Framework</h5>
                                <p class="card-text">Free Plugin</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 py-xl-0 py-3">
                        <div class="card bg-white shadow p-4">
                            <img class="m-3" src="image/mailchimp.png" alt="mail" width="45">
                            <div class="card-body">
                                <h5 class="card-title">MailChimp</h5>
                                <p class="card-text">Subscription Plugin</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 py-xl-0 py-3">
                        <div class="card bg-white shadow p-4">
                            <img class="m-3" src="image/contactform.png" alt="mail" width="77">
                            <div class="card-body">
                                <h5 class="card-title">Contact Form 7</h5>
                                <p class="card-text">Free Plugin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <article class="marvelous">
        <div class="container-fluid">
            <div class="container py-xl-5">
                <div class="row py-5 mt-5">
                    <div class="col-xl-7">
                        <div class="pb-2"><img src="image/img_6.jpg" alt="img" width="100%"></div>
                        <div class="py-4"><img src="image/img_7.jpg" alt="img" width="100%"></div>
                        <div class="pt-2"><img src="image/img_9.jpg" alt="img" width="100%"></div>
                    </div>
                    <div class="col-xl-4 offset-xl-1 d-flex align-items-center justify-content-center">
                        <div class="marvelous-text py-xl-0 py-3 text-xl-start text-center">
                            <span>Marvelous</span>
                            <h2>Header Styles</h2>
                            <p class="py-2">Flyn gives the flexibility to choose from a number of headers of different styles.</p>
                            <div class="pt-4"><button class="button-purchase-now-1">Check Now</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <hr class=" text-secondary">
    <article class="different_footer">
        <div class="container-fluid mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 px-5 text-center">
                        <h1>Different Footers</h1>
                        <h6>Multi column layouts combined with subfoooter and footer top content with page builder.</h6>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-xl-6">
                        <div><img src="image/img-ui-1.jpg" alt="img" width="98%"></div>
                    </div>
                    <div class="col-xl-6">
                        <div class="pb-3"><img src="image/img-ui-2.jpg" alt="img" width="98%"></div>
                        <div class="py-4"><img src="image/img-ui-3.jpg" alt="img" width="98%"></div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <article class="premade_inner">
        <div class="container-fluid">
            <div class="container py-5">
                <div class="row align-items-end justify-content-center">
                    <div class="col-xl-6 text-center">
                        <h1>Premade inner pages.</h1>
                        <h6 class="sub-title">Save time with a single click ready- to go beautiful pre-made inner pages and UI element.</h6>
                    </div>
                    <div class="col-xl-6 d-none">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-dark slide-btn" onclick="jsSliderLeft()" type="button"><i class="fas fa-arrow-left"></i></button>
                            <button class="btn btn-dark slide-btn" onclick="jsSliderRight()" type="button"><i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Demos Slider -->
            <section id="demos">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="loop owl-carousel owl-theme">
                            <div class="item px-2 slider-hover">
                                <div class="slide-img"><img src="image/slide-img-1.jpg" alt="slide" width="100%"></div>
                            </div>
                            <div class="item px-2 slider-hover">
                                <div class="slide-img"><img src="image/slide-img-2.jpg" alt="slide" width="100%"></div>
                            </div>
                            <div class="item px-2 slider-hover">
                                <div class="slide-img"><img src="image/slide-img-3.jpg" alt="slide" width="100%"></div>
                            </div>
                            <div class="item px-2 slider-hover">
                                <div class="slide-img"><img src="image/slide-img-4.jpg" alt="slide" width="100%"></div>
                            </div>
                            <div class="item px-2 slider-hover">
                                <div class="slide-img"><img src="image/slide-img-1.jpg" alt="slide" width="100%"></div>
                            </div>
                            <div class="item px-2 slider-hover">
                                <div class="slide-img"><img src="image/slide-img-2.jpg" alt="slide" width="100%"></div>
                            </div>
                            <div class="item px-2 slider-hover">
                                <div class="slide-img"><img src="image/slide-img-3.jpg" alt="slide" width="100%"></div>
                            </div>
                            <div class="item px-2 slider-hover">
                                <div class="slide-img"><img src="image/slide-img-4.jpg" alt="slide" width="100%"></div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </section>
        </div>
    </article>

    <article class="countless">
        <div class="container py-5">
            <div class="row py-5 justify-content-center">
                <div class="col-xl-6 text-center">
                    <h1>Countless key features</h1>
                    <h6 class="sub-title">We given to you quick list of the main features, check the page to see the features in action</h6>
                </div>
            </div>

            <div class="row row-1 py-4 text-center text-xl-start flex-wrap">
                <div class="col-xl-4 col-sm-6 d-flex justify-content-center">
                    <div class="card border-0 align-items-xl-start align-items-center mb-4">
                        <div class="card-img">
                            <img class="rounded" src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/icons/icon_2.png" alt="card-img" width="100%">
                        </div>
                        <div class="py-xl-4 py-sm-3 py-2">
                            <h5 class="card_title py-xl-3 py-2">State Of The Art Design</h5>
                            <h6 class="sub-title">Flyn comes with beautifully deisgned pages that will make your website really attractive.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 d-flex justify-content-center">
                    <div class="card border-0 align-items-xl-start align-items-center mb-4">
                        <div class="card-img">
                            <img class="rounded" src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/icons/icon_3.png" alt="card-img" width="100%">
                        </div>
                        <div class="py-xl-4 py-sm-3 py-2">
                            <h5 class="card_title py-xl-3 py-2">5+ Premade Demos</h5>
                            <h6 class="sub-title">Choose among many ready-made solutions to get your business running in no time!</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 d-flex justify-content-center">
                    <div class="card border-0 align-items-xl-start align-items-center mb-4">
                        <div class="card-img">
                            <img class="rounded" src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/icons/icon_4.png" alt="card-img" width="100%">
                        </div>
                        <div class="py-xl-4 py-sm-3 py-2">
                            <h5 class="card_title py-xl-3 py-2">50+ Shortcodes Collection</h5>
                            <h6 class="sub-title">Use our unique pre-made Visual Composer elements to make your site stand out.t</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 d-flex justify-content-center text-center text-xl-start">
                    <div class="card border-0 align-items-xl-start align-items-center mb-4">
                        <div class="card-img">
                            <img class="rounded" src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/icons/icon_5.png" alt="card-img" width="100%">
                        </div>
                        <div class="py-xl-4 py-sm-3 py-2">
                            <h5 class="card_title py-xl-3 py-2">800+ Google Fonts</h5>
                            <h6 class="sub-title">Feature your web project by choosing from 800+ Google Fonts that suits it the most.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 d-flex justify-content-center text-center text-xl-start">
                    <div class="card border-0 align-items-xl-start align-items-center mb-4">
                        <div class="card-img">
                            <img class="rounded" src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/icons/icon_6.png" alt="card-img" width="100%">
                        </div>
                        <div class="py-xl-4 py-sm-3 py-2">
                            <h5 class="card_title py-xl-3 py-2">One Click Demo Importer</h5>
                            <h6 class="sub-title">Flyn has a super easy way to import the demo with One Click Demo Importer and setup the theme in a moment.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 d-flex justify-content-center text-center text-xl-start">
                    <div class="card border-0 align-items-xl-start align-items-center mb-4">
                        <div class="card-img">
                            <img class="rounded" src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/icons/icon_7.png" alt="card-img" width="100%">
                        </div>
                        <div class="py-xl-4 py-sm-3 py-2">
                            <h5 class="card_title py-xl-3 py-2">Multi Footer Styles</h5>
                            <h6 class="sub-title">Multi column layouts combined with subfoooter and footer top content with page builder.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 d-flex justify-content-center">
                    <div class="card border-0 align-items-xl-start align-items-center mb-4">
                        <div class="card-img">
                            <img class="rounded" src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/icons/icon_8.png" alt="card-img" width="100%">
                        </div>
                        <div class="py-xl-4 py-sm-3 py-2">
                            <h5 class="card_title py-xl-3 py-2">Responsive & Retina Ready</h5>
                            <h6 class="sub-title">Flyn is 100% responsive to make your website look beautiful in all devices and resolution</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 d-flex justify-content-center text-center text-xl-start">
                    <div class="card border-0 align-items-xl-start align-items-center mb-4">
                        <div class="card-img">
                            <img class="rounded" src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/icons/icon_9.png" alt="card-img" width="100%">
                        </div>
                        <div class="py-xl-4 py-sm-3 py-2">
                            <h5 class="card_title py-xl-3 py-2">Parallax Scrolling</h5>
                            <h6 class="sub-title">You can set parallax backgrounds to any page section in seconds.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 d-flex justify-content-center text-center text-xl-start">
                    <div class="card border-0 align-items-xl-start align-items-center mb-4">
                        <div class="card-img">
                            <img class="rounded" src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/icons/icon_10.png" alt="card-img" width="100%">
                        </div>
                        <div class="py-xl-4 py-sm-3 py-2">
                            <h5 class="card_title py-xl-3 py-2">Extensive Documentation</h5>
                            <h6 class="sub-title">The documentation file covers all the Information needed to install and use this</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 d-flex justify-content-center">
                    <div class="card border-0 align-items-xl-start align-items-center mb-4">
                        <div class="card-img">
                            <img class="rounded" src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/icons/icon_11.png" alt="card-img" width="100%">
                        </div>
                        <div class="py-xl-4 py-sm-3 py-2">
                            <h5 class="card_title py-xl-3 py-2">Speed Performance</h5>
                            <h6 class="sub-title">The code is always optimized for best performance on all.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 d-flex justify-content-center text-center text-xl-start">
                    <div class="card border-0 align-items-xl-start align-items-center mb-4">
                        <div class="card-img">
                            <img class="rounded" src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/icons/icon_12.png" alt="card-img" width="100%">
                        </div>
                        <div class="py-xl-4 py-sm-3 py-2">
                            <h5 class="card_title py-xl-3 py-2">Friendly Support</h5>
                            <h6 class="sub-title">Stuck? Need help? Visit our support portal to find FAQ and a way to contact us.</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 d-flex justify-content-center text-center text-xl-start">
                    <div class="card border-0 align-items-xl-start align-items-center mb-sm-4 mb-3">
                        <div class="card-img">
                            <img class="rounded" src="https://preview.droitthemes.com/wp/flyn/demos/assets/images/icons/icon_13.png" alt="card-img" width="100%">
                        </div>
                        <div class="py-xl-4 py-sm-3 py-2">
                            <h5 class="card_title py-xl-3 py-2">Auto Updates</h5>
                            <h6 class="sub-title">Stay up-to-date with the latest version of our theme without needing to do it manually.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <footer>
        <div class="footer-bottom">
            <div class="circle-1"><img class="circle-1" src="image/shape_20.png" alt="circle"></div>
            <div class="circle-2"><img class="circle-2" src="image/shape_19.png" alt="circle"></div>
            <div class="container py-xl-5 px-xl-0 px-3">
                <div class="row py-5 justify-content-center">
                    <div class="col-xl-6 py-4 text-center">
                        <div><img src="image/logo_1.png" alt="logo"></div>
                        <h1 class="text-white pt-4 pb-4 mt-3">Make a website You’ll be Proud of</h1>
                        <h6 class="text-white">Save hours on design and development and launch faster.</h6>
                        <div class="pt-5 mt-xl-4"><button class="button-purchase-now-1"><span class="px-2">Buy Flyn Now</span><i class="fas fa-cart-plus px-2" aria-hidden="true"></i></button></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="btn-scroll-top" id="scrollTopBtn">
        <i class="fa fa-arrow-up text-primary" aria-hidden="true"></i>
    </div>
    
    <!-- jQuery first for use in next scripts -->
    <script src="js/jquery-3.5.1.min.js" async></script>
    <script src="js/bootstrap.bundle.js" async></script>
    <script src="js/owl.carousel.js" async></script>
    <script src="js/scrollreveal.js" async></script>
    <script src="js/app.js" async> </script>
</body>

</html>