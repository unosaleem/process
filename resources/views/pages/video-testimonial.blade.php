@extends('layout.master')
@section('css')
   
@endsection
@section('content')
    <section class="hero-section">
        <div class="container container-custom">
            <!-- Breadcrumb -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Video Testimonials &amp; Medical Breakthroughs</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
   <section class="testimonial-slider">
        <div class="container">
            <div class="text-center">
                <h2>Video Testimonials – Patient Experiences at Sunrise Hospital</h2>
                <p>
                    Hear directly from our patients about their experiences at Sunrise Hospital, South Delhi. Watch real stories of successful gynecology, IVF, maternity, and minimally invasive treatments, showcasing our commitment to compassionate care, expertise, and exceptional outcomes. Our video testimonials help you make informed decisions and trust our world-class healthcare services.
                </p>
            </div>
            <div class="swiper TestimonialSwiper">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="video-card">
                            <iframe src="https://www.youtube.com/embed/6IktPd0diPg?si=FtzXDAOFKHBPKlso" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="video-card">
                            <iframe src="https://www.youtube.com/embed/58WtNQrVCE0?si=Rxf_k-1dPqoV9F7j" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="video-card">
                            <iframe src="https://www.youtube.com/embed/0qmyp8DQiAM?si=61Rvh1M0G5DvuIGN" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <div class="video-card">
                            <iframe src="https://www.youtube.com/embed/yMhOmL3qtgk?si=0zLVpEiYlAz5p3cM" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Slide 5 -->
                    <div class="swiper-slide">
                        <div class="video-card">
                            <iframe src="https://www.youtube.com/embed/60nxxbOFcYw?si=tnFF_pFpserpF65a" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                  </div>

                <!-- Swiper Pagination + Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            
        </div>
    </section>
@endsection