@extends('lancer.master')
@section('content')

    <section class="hero-wrapper hero-1 text-center text-md-start">
        <div class="hero-slider-active">
            <div class="single-slide">
                <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/bg1.jpg');"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xxl-8 col-lg-9 col-sm-10">
                            <div class="hero-contents pe-lg-3 text-white">
                                <h6 class="animated" data-animation-in="fadeInDown">GoLancer IT Systems</h6>
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.3">Creative Idea To Excellent Products</h1>
                                <p class="pe-lg-5 mb-4 animated" data-animation-in="fadeInRight" data-delay-in="0.6">We are 100+ professional software engineers with more than <br>10 years of experience in delivering superior products.</p>
                                <a href="contact.html" data-animation-in="fadeInRight" data-delay-in="0.9" class="theme-btn me-sm-4 mt-4 animated">Get Consultant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/img/home1/slide1.jpg');"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xxl-8 col-lg-9 col-sm-10">
                            <div class="hero-contents pe-lg-3 text-white">
                                <h6 class="animated" data-animation-in="fadeInDown">Quan Tech IT Systems</h6>
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.3">Creative Idea To Excellent Products</h1>
                                <p class="pe-lg-5 mb-4 animated" data-animation-in="fadeInRight" data-delay-in="0.6">We are 100+ professional software engineers with more than <br>10 years of experience in delivering superior products.</p>
                                <a href="contact.html" data-animation-in="fadeInRight" data-delay-in="0.9" class="theme-btn me-sm-4 mt-4 animated">Get Consultant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
                <circle r="20" cy="22" cx="22" id="quantechcircle" />
            </symbol>
        </svg>
    </section>

    <section class="our-service-wrapper section-padding">
        <div class="container">
            <div class="col-12 col-xl-6 offset-xl-3 text-center">
                <div class="section-title">
                    <span>Our Feature</span>
                    <h2>We Help you Build and Grow Business</h2>
                </div>
            </div>
            <div class="row ps-xl-5 pe-xl-5">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="single-service-box">
                        <div class="icon">
                            <img src="{{  asset('assets/img/icons/solution.svg')  }}" alt="">
                        </div>
                        <h4><a href="services-details.html">It Solutions</a></h4>
                        <p>Sale and buy are the central strategies of trade. </p>
                        <a href="services-details.html" class="read-more-link">Read More</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="single-service-box">
                        <div class="icon">
                            <img src="{{  asset('assets/img/icons/coding.svg')  }}" alt="">
                        </div>
                        <h4><a href="services-details.html">Development</a></h4>
                        <p>Develop amazing web and app experiences.</p>
                        <a href="services-details.html" class="read-more-link">Read More</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="single-service-box">
                        <div class="icon">
                            <img src="{{  asset('assets/img/icons/ux-design.svg')  }}" alt="">
                        </div>
                        <h4><a href="services-details.html">Web Design</a></h4>
                        <p>Looking For Website Design Services? Browse.</p>
                        <a href="services-details.html" class="read-more-link">Read More</a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="single-service-box">
                        <div class="icon">
                            <img src="{{  asset('assets/img/icons/database.svg')  }}" alt="">
                        </div>
                        <h4><a href="services-details.html">Engineering</a></h4>
                        <p>A software engineer is a person applies.</p>
                        <a href="services-details.html" class="read-more-link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-wrapper section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-12">
                    <div class="about-images-video-popup mb-5 mb-md-0">
                        <img src="{{  asset('assets/img/home1/about1.jpg')  }}" alt="">
                        <img src="{{  asset('assets/img/home1/about2.jpg')  }}" alt="">

                        <div class="video-play-btn">
                            <a href="https://www.youtube.com/watch?v=E1xkXZs0cAQ" class="popup-video play-video"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12 ps-xl-5">
                    <div class="section-title">
                        <span>25 Years of Experience</span>
                        <h2>Your Partner for Software Innovation</h2>
                        <p>Quantech is the partner of choice for many of the world’s leading enterprises,
                            SMEs and technology challengers. We help businesses elevate their value through custom software development, product design.</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="info-icon-item">
                                <img src="{{  asset('assets/img/icons/experiance.svg')  }}" alt="">
                                <h3>User Experience</h3>
                                <p>Our great team of more than 1400 software experts.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="info-icon-item">
                                <img src="{{  asset('assets/img/icons/settings.svg')  }}" alt="">
                                <h3>Quick Support</h3>
                                <p>Our great team of more than 1400 software experts.</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="theme-btn mt-30">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-wrapper left-bg-overlay section-padding bg-gradient">
        <div class="shape-top"><img src="{{  asset('assets/img/top-shape.png')  }}" alt=""></div>
        <div class="shape-bottom"><img src="{{  asset('assets/img/left-bottom-shape.png')  }}" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-12 mb-5 mb-xl-0">
                    <div class="faq-img">
                        <img src="{{  asset('assets/img/home1/faq.jpg')  }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-12 ps-xl-5">
                    <div class="section-title">
                        <span>faq</span>
                        <h2>Frequntly Asked Any Questions</h2>
                    </div>

                    <div class="faq-accordion">
                        <div class="accordion" id="accordion">

                            <div class="accordion-item">
                              <h4 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-controls="faq1">
                                    What Is IT Consulting?
                                </button>
                              </h4>
                              <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    We help our clients succeed by creating brand, digital xperiences, and print materials.
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                              <h4 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-controls="faq2">
                                    Can I Get Internet in My Area ?
                                </button>
                              </h4>
                              <div id="faq2" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    We help our clients succeed by creating brand, digital xperiences, and print materials.
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                              <h4 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-controls="faq3">
                                    Software Development?
                                </button>
                              </h4>
                              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    We help our clients succeed by creating brand, digital xperiences, and print materials.
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                              <h4 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-controls="faq4">
                                    What is Business Development?
                                </button>
                              </h4>
                              <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    We help our clients succeed by creating brand, digital xperiences, and print materials.
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="best-services-wrapper section-padding">
        <div class="container">
            <div class="col-12 col-xl-6 offset-xl-3 text-center">
                <div class="section-title">
                    <span>Our Services</span>
                    <h2>We Offer a Wide Variety of IT Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-left-icon">
                        <div class="icon">
                            <img src="{{  asset('assets/img/icons/desktop.png')  }}" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="services-details.html">Web Development</a></h4>
                            <p>We carry more than just good coding skills. Our experience makes us stand out from other web development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-left-icon">
                        <div class="icon">
                            <img src="{{  asset('assets/img/icons/mobile.png')  }}" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="services-details.html">App Development</a></h4>
                            <p>We carry more than just good coding skills. Our experience makes us stand out from other web development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-left-icon">
                        <div class="icon">
                            <img src="{{  asset('assets/img/icons/ux.png')  }}" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="services-details.html">UI/UX Design</a></h4>
                            <p>Build the product you need on time with an experienced team that uses a clear and effective design process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-left-icon">
                        <div class="icon">
                            <img src="{{  asset('assets/img/icons/qa.png')  }}" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="services-details.html">QA & Testing</a></h4>
                            <p>Turn to our experts to perform compr ehensive, multi-stage testing and au
                                dicing of your software.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-left-icon">
                        <div class="icon">
                            <img src="{{  asset('assets/img/icons/stock.png')  }}" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="services-details.html">IT Consultancy</a></h4>
                            <p>We carry more than just good coding skills. Our experience makes us stand out from other web development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service-left-icon">
                        <div class="icon">
                            <img src="{{  asset('assets/img/icons/web.png')  }}" alt="">
                        </div>
                        <div class="content">
                            <h4><a href="services-details.html">Dedicated Team</a></h4>
                            <p>Over the past decade, our customers succeeded by leveraging Intellect soft’s process of building, motivating.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-50 text-center">
                <a href="services.html" class="theme-btn">All Services</a>
            </div>
        </div>
    </section>

    <section class="project-carousel-wrapper pt-0 section-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-8 col-xl-6 text-center text-md-start">
                    <div class="section-title">
                        <span>Our Completed Projects</span>
                        <h2>Improve and Enhance Our Tech Projects</h2>
                    </div>
                </div>
                <div class="col-md-4 col-xl-6">
                    <div class="case-study-carousel-arrow text-md-end">
                        <div class="project-carousel-nav-prev me-2"><i class="fal fa-arrow-left"></i></div>
                        <div class="project-carousel-nav-next"><i class="fal fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="project-showcase-carousel-active text-white">
                <div class="single-project-card bg-cover" style="background-image: url('assets/img/project/1.jpg')">
                    <a href="project-details.html" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Mobile Apps</h3>
                        <p>Design</p>
                    </div>
                </div>
                <div class="single-project-card bg-cover" style="background-image: url('assets/img/project/2.jpg')">
                    <a href="project-details.html" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Web Application</h3>
                        <p>Development</p>
                    </div>
                </div>
                <div class="single-project-card bg-cover" style="background-image: url('assets/img/project/3.jpg')">
                    <a href="project-details.html" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Online Games</h3>
                        <p>Game</p>
                    </div>
                </div>
                <div class="single-project-card bg-cover" style="background-image: url('assets/img/project/4.jpg')">
                    <a href="project-details.html" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Mobile Apps</h3>
                        <p>Design</p>
                    </div>
                </div>
                <div class="single-project-card bg-cover" style="background-image: url('assets/img/project/5.jpg')">
                    <a href="project-details.html" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Mobile Apps</h3>
                        <p>Design</p>
                    </div>
                </div>
                <div class="single-project-card bg-cover" style="background-image: url('assets/img/project/6.jpg')">
                    <a href="project-details.html" class="plus-link"><i class="fal fa-plus"></i></a>
                    <div class="content">
                        <h3>Mobile Apps</h3>
                        <p>Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-cta-wrapper bg-cover section-padding" style="background-image: url('assets/img/video-cta-bg.jpeg')">
        <div class="container">
            <div class="col-12 offset-xl-2 col-xl-8 offset-md-1 col-md-10 text-center">
                <div class="content-warpper mb-55">
                    <div class="video-play-btn mb-40">
                        <a href="https://www.youtube.com/watch?v=E1xkXZs0cAQ" class="popup-video play-video"><i class="fas fa-play"></i></a>
                    </div>
                    <h1 class="text-white">Preparing For Your Success
                    Provide Best IT Solutions.</h1>
                    <p class="text-white">Appropriate for your specific business, making it easy <br> for
                    you to have quality IT services.</p>
                    <a href="contact.html" class="theme-btn mt-5">Contact us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="fun-counter-wrapper text-white">
        <div class="container">
            <div class="row ps-md-5 pe-md-5">
                <div class="col-lg-6">
                    <div class="single-fun-counter bg-cover" style="background-image: url('assets/img/home1/counter-bg-1.jpg')">
                        <div class="count"><span>32</span>+</div>
                        <div class="content">
                            <h3>Countries Worldwide</h3>
                            <p>To succeed, every software solution must be deeply integrated
                                into the existing tech environment..</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-fun-counter mt bg-cover" style="background-image: url('assets/img/home1/counter-bg-2.jpg')">
                        <div class="count"><span>23</span>k</div>
                        <div class="content">
                            <h3>Happy Customers</h3>
                            <p>To succeed, every software solution must be deeply integrated
                                into the existing tech environment..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-carousel-wrapper section-padding">
        <div class="container">
            <div class="col-12 col-xl-8 offset-xl-2 text-center">
                <div class="section-title">
                    <span>Testimonials</span>
                    <h2>Here’s What Our Customer Say</h2>
                </div>
            </div>

            <div class="testimonial-carousel-grid-active">
                <div class="single-testimonial-card">
                    <div class="client-img bg-cover" style="background-image: url('assets/img/client1.jpg')"></div>
                    <div class="content">
                        <p>IT Solutions provides me day to day challenges and variety
                            in my work that keeps me engaged and interested. There is a strong work ethic culture.</p>
                        <div class="client-rating mt-15">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Nicholas R.Gomez</h4>
                        <span>IT Manager, IT Solutions Ltd.</span>
                    </div>
                </div>
                <div class="single-testimonial-card">
                    <div class="client-img bg-cover" style="background-image: url('assets/img/client2.jpg')"></div>
                    <div class="content">
                        <p>IT Solutions provides me day to day challenges and variety
                            in my work that keeps me engaged and interested. There is a strong work ethic culture.</p>
                        <div class="client-rating mt-15">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>James R Lawrence</h4>
                        <span>IT Manager, IT Solutions Ltd.</span>
                    </div>
                </div>
                <div class="single-testimonial-card">
                    <div class="client-img bg-cover" style="background-image: url('assets/img/client1.jpg')"></div>
                    <div class="content">
                        <p>IT Solutions provides me day to day challenges and variety
                            in my work that keeps me engaged and interested. There is a strong work ethic culture.</p>
                        <div class="client-rating mt-15">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Nicholas R.Gomez</h4>
                        <span>IT Manager, IT Solutions Ltd.</span>
                    </div>
                </div>
                <div class="single-testimonial-card">
                    <div class="client-img bg-cover" style="background-image: url('assets/img/client2.jpg')"></div>
                    <div class="content">
                        <p>IT Solutions provides me day to day challenges and variety
                            in my work that keeps me engaged and interested. There is a strong work ethic culture.</p>
                        <div class="client-rating mt-15">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>James R Lawrence</h4>
                        <span>IT Manager, IT Solutions Ltd.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-experts-wrapper section-padding section-bg">
        <div class="container">
            <div class="col-12 col-xl-6 offset-xl-3 col-md-8 offset-md-2 text-center">
                <div class="section-title">
                    <span>Our Amazing Team</span>
                    <h2>We have Well Experience
                        Team Members</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="single-team-member text-white bg-cover" style="background-image: url('assets/img/team/5.jpg')">
                        <div class="member-info">
                            <h4><a href="team-details.html">Asish Patil</a></h4>
                            <p>Founder & Ceo</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="single-team-member text-white bg-cover" style="background-image: url('assets/img/team/2.jpg')">
                        <div class="member-info">
                            <h4><a href="team-details.html">D. Maria Poddar</a></h4>
                            <p>Designer</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="single-team-member active text-white bg-cover" style="background-image: url('assets/img/team/3.jpg')">
                        <div class="member-info">
                            <h4><a href="team-details.html">Salman Ahmed</a></h4>
                            <p>Developer</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="single-team-member text-white bg-cover" style="background-image: url('assets/img/team/4.jpg')">
                        <div class="member-info">
                            <h4><a href="team-details.html">RS Rahul</a></h4>
                            <p>Marketer</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-news-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <span>news</span>
                        <h2>Our Latest News</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/blog/b1.jpg')">
                            <div class="post-cat">
                                <a href="news.html">App Design</a>
                            </div>
                        </div>
                        <div class="content">
                            <h3><a href="news-details.html">Technology allows profit to serve the community</a></h3>
                            <p>We're going to be pulling up to the hotel in just a few minutes. Please sit back and enjoy the view of the ocean</p>

                            <div class="post-meta d-flex align-items-center">
                                <div class="post-date">
                                    <i class="fal fa-calendar-alt"></i>Dec 6, 2021
                                </div>
                                <div class="post-author">
                                    <i class="fal fa-user-alt"></i> by <a href="#">admin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/blog/b2.jpg')">
                            <div class="post-cat">
                                <a href="news.html">Web Development</a>
                            </div>
                        </div>
                        <div class="content">
                            <h3><a href="news-details.html">Tips to Lowering Freight Shipping Costs</a></h3>
                            <p>We're going to be pulling up to the hotel in just a few minutes. Please sit back and enjoy the view of the ocean</p>

                            <div class="post-meta d-flex align-items-center">
                                <div class="post-date">
                                    <i class="fal fa-calendar-alt"></i>Jan 25, 2023
                                </div>
                                <div class="post-author">
                                    <i class="fal fa-user-alt"></i> by <a href="#">admin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/blog/b3.jpg')">
                            <div class="post-cat">
                                <a href="news.html">IT Services</a>
                            </div>
                        </div>
                        <div class="content">
                            <h3><a href="news-details.html">10 Best IT Technology Solution Agency 2023</a></h3>
                            <p>We're going to be pulling up to the hotel in just a few minutes. Please sit back and enjoy the view of the ocean</p>

                            <div class="post-meta d-flex align-items-center">
                                <div class="post-date">
                                    <i class="fal fa-calendar-alt"></i>Feb 14, 2023
                                </div>
                                <div class="post-author">
                                    <i class="fal fa-user-alt"></i> by <a href="#">admin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-banner-wrapper">
        <div class="container">
            <div class="cta-banner-box section-padding bg-cover" style="background-image: url('assets/img/cta-banner-bg.jpeg')">
                <div class="row align-center">
                    <div class="col-xl-7 text-center text-xl-start offset-xl-1 offset-xl-1">
                        <div class="section-title mb-0">
                            <span>Get A Quote</span>
                            <h2 class="mb-md-0">Need Any Consultations or <br> Work Next Projects</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 mt-4 mt-xl-0 text-center">
                        <a href="contact.html" class="theme-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
