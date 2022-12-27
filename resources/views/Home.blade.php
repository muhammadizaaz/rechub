@extends('layouts.post')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
            <h1>Find Your Job with recruithub.</h1>
            <h2>A dream doesn't become reality through magic, it takes sweat, determination and hard work.</h2>
            <img src="{{ asset('template1') }}/img/hero-img.png" class="img-fluid hero-img" alt="" data-aos="zoom-in"
                data-aos-delay="150">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>
    <!-- End Hero -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="content">
                        <h3>Voluptatem dignissimos provident quasi</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>Corporis voluptates sit</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Ullamco laboris nisi</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-images"></i>
                                <h4>Labore consequatur</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-shield"></i>
                                <h4>Beatae veritatis</h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="job" class="services">
      <div class="container-fluid px-0">
        <div class="row ">
            <div class="col-sm-12 col-md-7 ml-auto">
                <div class="card">
                    <div class="card-header">
                        <p class="card-title font-weight-bold"><i class="fas fa-briefcase"></i> Top jobs</p>
                    </div>
                    <div class="card-body">
                        <div class="top-jobs">
                            <div class="row">

                                @foreach ($posts as $post)
                                    @if ($post->company)
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-sm-6 mb-sm-3">
                                            <a href="{{ route('post.show', ['job' => $post->id]) }}">
                                                <div class="job-item border row h-100">
                                                    <div class="col-xs-3 col-sm-4 col-md-5">
                                                        <img src="{{ asset($post->company->logo) }}" alt="jobings"
                                                            class="img-fluid p-2">
                                                    </div>
                                                    <div class="job-description col-xs-9 col-sm-8 col-md-7">
                                                        <p class="company-name" title="{{ $post->company->title }}">
                                                            {{ $post->company->title }}</p>
                                                        <ul class="companyings">
                                                            <li>•{{ substr($post->job_title, 0, 27) }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <a class="btn secondary-btn" href="{{ route('job.index') }}">Show all jobs</a>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 mr-auto">

                <div class="card mb-4">
                    <div class="card-header">
                        <p class="font-weight-bold"><i class="fas fa-building"></i> Top Employers</p>
                    </div>
                    <div class="card-body">
                        <div class="top-employers">
                            @foreach ($topEmployers as $employer)
                                <div class="top-employer">
                                    <a href="{{ route('account.employer', ['employer' => $employer]) }}">
                                        <img src="{{ asset($employer->logo) }}" width="60px" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="card mb-4 job-by-category">
                    <div class="card-header">
                        <p class="font-weight-bold"><i class="fab fa-typo3"></i> Jobs By Category</p>
                    </div>
                    <div class="card-body">
                        <div class="jobs-category mb-3 mt-0">
                            @foreach ($categories as $category)
                                <div class="hover-shadow p-1"><a
                                        href="{{ URL::to('search?category_id=' . $category->id) }}"
                                        class="text-muted">{{ $category->category_name }}</a> </div>
                            @endforeach
                            <a class="p-1 text-info" href="{{ route('job.index') }}">More..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End Services Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Testimonials</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                    sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                                Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{ asset('template1') }}/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                                eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                                culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{ asset('template1') }}/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                                minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{ asset('template1') }}/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                                velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                                veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{ asset('template1') }}/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
                                enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                                nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="{{ asset('template1') }}/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                    sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@example.com<br>contact@example.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 mt-4 mt-md-0">
            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
