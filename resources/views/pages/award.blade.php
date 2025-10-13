@extends('layout.master')
@section('css')
    <style>
        :root {
            --primary-teal: rgb(0,151,167);
            --primary-blue: rgb(0,64,128);
            --light-teal: rgba(0,151,167,0.1);
            --light-blue: rgba(0,64,128,0.1);
            --medium-teal: rgba(0,151,167,0.8);
            --medium-blue: rgba(0,64,128,0.8);
        }



        .hero-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-teal) 100%);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 300px;
            height: 300px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
            animation: float 8s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .hero-title {
            font-size: 45px;
            font-weight: 300;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 28px;
            opacity: 0.9;
            font-weight: 300;
            font-style: italic;
        }

        .award-card2 {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0,64,128,0.1);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border-top: 5px solid transparent;
            background-clip: padding-box;
        }

        /* .award-card2::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-teal), var(--primary-blue));
        } */

        .award-card2:hover {
            transform: translateY(-7px);
            box-shadow: 0 25px 50px rgba(0,64,128,0.2);
        }

        .award-icon {
            width: 80px;
            height: 80px;
            /* background: linear-gradient(135deg, var(--primary-teal), var(--primary-blue)); */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            margin-bottom: 1.5rem;
            box-shadow: 0 8px 20px rgba(0,151,167,0.3);
        }

        .award-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 1.5rem;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }


        .award-year {
            color: var(--primary-teal);
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .award-title {
            color: var(--primary-blue);
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .award-description {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .award-authority {
            /* color: var(--primary-teal); */
            font-weight: 500;
            font-style: italic;
            font-size: 0.9rem;
        }

        .stats-section {
            background: white;
            border-radius: 30px;
            padding: 4rem 2rem;
            margin: 4rem 0;
            box-shadow: 0 20px 40px rgba(0,64,128,0.15);
            position: relative;
            overflow: hidden;
        }

        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(90deg, var(--primary-teal), var(--primary-blue));
        }

        .stats-title {
            color: var(--primary-blue);
            font-size: 32px;
            font-weight: 300;
            margin-bottom: 3rem;
        }

        .stat-card {
            text-align: center;
            padding: 1rem 1rem;
            background: linear-gradient(135deg, var(--light-teal), var(--light-blue));
            border-radius: 20px;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, var(--primary-teal), var(--primary-blue));
            color: white;
        }

        .stat-number {
            font-size: 30px;
            font-weight: bold;
            color: var(--primary-teal);
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .stat-card:hover .stat-number {
            color: white;
        }

        .stat-label {
            font-size: 1.1rem;
            color: var(--primary-blue);
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .stat-card:hover .stat-label {
            color: white;
        }

        .section-divider {
            height: 4px;
            background: linear-gradient(90deg, var(--primary-teal), var(--primary-blue));
            border: none;
            margin: 4rem 0;
            border-radius: 2px;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }

            .stats-title {
                font-size: 2.2rem;
            }

            .stat-number {
                font-size: 2.5rem;
            }
        }

    </style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero-section">

        <div class="container hero-content">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="hero-title">Awards & Recognition</h1>
                    <p class="hero-subtitle">Excellence in Healthcare & Women's Wellness</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards Grid Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Award 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="award-card2">
                        <img src="{{asset('assets/images/award/award1.jpg')}}" alt="Healthcare Excellence Award" class="award-image">
                        <div class="award-year">2024</div>
                        <h3 class="award-title">Best Women's Healthcare Center</h3>
                        <p class="award-description">Recognized for outstanding patient care, advanced medical technology, and comprehensive women's health services.</p>
                        <div class="award-authority">Healthcare Excellence Awards</div>
                    </div>
                </div>

                <!-- Award 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="award-card2">
                        <img src="{{asset('assets/images/award/award2.jpg')}}" alt="Maternal Care Award" class="award-image">
                        <div class="award-year">2023</div>
                        <h3 class="award-title">Excellence in Maternal Care</h3>
                        <p class="award-description">Awarded for exceptional maternal and fetal care services with lowest complication rates in the region.</p>
                        <div class="award-authority">National Medical Association</div>
                    </div>
                </div>

                <!-- Award 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="award-card2">
                        <img src="{{asset('assets/images/award/award3.jpg')}}" alt="Patient Safety Award" class="award-image">
                        <div class="award-year">2023</div>
                        <h3 class="award-title">Patient Safety Excellence</h3>
                        <p class="award-description">Honored for maintaining highest standards in patient safety and implementing innovative safety protocols.</p>
                        <div class="award-authority">Patient Safety Foundation</div>
                    </div>
                </div>

                <!-- Award 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="award-card2">
                        <img src="{{asset('assets/images/award/award4.jpg')}}" alt="Compassionate Care Award" class="award-image">
                        <div class="award-year">2022</div>
                        <h3 class="award-title">Compassionate Care Award</h3>
                        <p class="award-description">Recognized for providing empathetic, patient-centered care and emotional support to families.</p>
                        <div class="award-authority">Healthcare Compassion Institute</div>
                    </div>
                </div>

                <!-- Award 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="award-card2">
                        <img src="{{asset('assets/images/award/award5.jpg')}}" alt="Innovation Award" class="award-image">
                        <div class="award-year">2022</div>
                        <h3 class="award-title">Innovation in Women's Health</h3>
                        <p class="award-description">Awarded for pioneering minimally invasive surgical techniques and advanced diagnostic procedures.</p>
                        <div class="award-authority">Medical Innovation Council</div>
                    </div>
                </div>

                <!-- Award 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="award-card2">
                        <img src="{{asset('assets/images/award/award6.jpg')}}" alt="Quality Certification" class="award-image">
                        <div class="award-year">2021</div>
                        <h3 class="award-title">Quality Excellence Certification</h3>
                        <p class="award-description">Certified for meeting international standards in healthcare quality management and continuous improvement.</p>
                        <div class="award-authority">International Quality Assurance</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="section-divider">

    <!-- Statistics Section -->
    <section>
        <div class="container">
            <div class="stats-section">
                <h2 class="stats-title text-center">Our Achievements in Numbers</h2>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card">
                            <span class="stat-number">15+</span>
                            <div class="stat-label">Awards Received</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card">
                            <span class="stat-number">50,000+</span>
                            <div class="stat-label">Successful Deliveries</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card">
                            <span class="stat-number">98%</span>
                            <div class="stat-label">Patient Satisfaction</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card">
                            <span class="stat-number">25+</span>
                            <div class="stat-label">Years of Excellence</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Certifications Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 style="color: var(--primary-blue); font-size: 32px; font-weight: 300;">Certifications & Accreditations</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="award-card2 text-center">
                        <img src="{{asset('assets/images/award/award4.jpg')}}" alt="JCI Accreditation" class="award-image">
                        <h4 class="award-title">JCI Accreditation</h4>
                        <p class="award-description">Internationally recognized for meeting global healthcare quality standards.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="award-card2 text-center">
                        <img src="{{asset('assets/images/award/award5.jpg')}}" alt="ISO Certification" class="award-image">
                        <h4 class="award-title">ISO 9001:2015 Certified</h4>
                        <p class="award-description">Certified for quality management systems and continuous improvement processes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="award-card2 text-center">
                        <img src="{{asset('assets/images/award/award6.jpg')}}" alt="Baby-Friendly Hospital" class="award-image">
                        <h4 class="award-title">Baby-Friendly Hospital</h4>
                        <p class="award-description">Designated by WHO/UNICEF for promoting breastfeeding and maternal-infant bonding.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

