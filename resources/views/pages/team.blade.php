@extends('layout.master')
@section('css')
<style>
    .team-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.8s ease;
        position: relative;
        height: 400px;
        margin-bottom: 30px;
    }

    .team-card:hover {
        transform: translateY(-10px) translateX(10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .card-image {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transition: all 0.8s ease;
        position: relative;
    }

    .team-card:hover .card-image {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
    }

    .doctor-photo {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.8s ease;
    }

    .team-card:hover .doctor-photo {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        position: absolute;
        top: 40px;
        right: 31%;
        transform: none;
        border: 3px solid rgba(255, 255, 255, 0.4);
        z-index: 1;
    }

    .team-card:hover .doctor-photo::before {
        content: '';
        position: absolute;
        top: -20px;
        right: -20px;
        width: 140px;
        height: 140px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        z-index: -1;
        backdrop-filter: blur(10px);
    }



    .card-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
        color: white;
        padding: 20px;
        transform: translateY(100%);
        transition: all 0.8s ease;
        opacity: 0;
    }

    .team-card:hover .card-overlay {
        transform: translateY(0);
        background: transparent;
        position: absolute;
        top: 50%;
        width: 100%;
        left: 50%;
        transform: translate(-50%, -30%);
        text-align: center;
        padding-top: 60px;
        opacity: 1;
    }

    .doctor-name {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 5px;
        color: white;
    }

    .doctor-position {
        font-size: 1rem;
        opacity: 0.9;
        margin-bottom: 15px;
        color: white;
    }

    .social-icons {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .social-icon {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .social-icon:hover {
        background: rgba(255, 255, 255, 0.3);
        color: white;
        transform: scale(1.1);
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .section-title p {
        font-size: 1.1rem;
        color: #7f8c8d;
    }




    :root {
        --primary-color: #0066cc;
        --secondary-color: #00b4d8;
        --accent-color: #90e0ef;
        --dark-color: #212529;
        --light-bg: #f8f9fa;
        --white: #ffffff;
        --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        --shadow-hover: 0 15px 40px rgba(0, 0, 0, 0.15);
        --border-radius: 20px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: var(--dark-color);
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: 100vh;
    }

    .team-section {
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .team-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        pointer-events: none;
    }

    .section-header {
        text-align: center;
        margin-bottom: 70px;
        position: relative;
    }

    .section-title {
        font-size: 3.5rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 20px;
        position: relative;
        display: inline-block;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        border-radius: 2px;
    }

    .section-subtitle {
        font-size: 1.2rem;
        color: #666;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.8;
    }

    .specialties-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-bottom: 80px;
    }

    .specialty-card {
        background: var(--white);
        padding: 30px 25px;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        position: relative;
        overflow: hidden;
    }

    .specialty-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        transform: translateX(-100%);
        transition: transform 0.3s ease;
    }

    .specialty-card:hover::before {
        transform: translateX(0);
    }

    .specialty-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-hover);
    }

    .specialty-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: white;
        font-size: 24px;
    }

    .specialty-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--dark-color);
        margin: 0;
    }



    @media (max-width: 768px) {
        .section-title {
            font-size: 2.5rem;
        }

        .team-section {
            padding: 60px 0;
        }

        .specialties-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }

    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s ease forwards;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .specialty-card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .specialty-card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .specialty-card:nth-child(3) {
        animation-delay: 0.3s;
    }

    .specialty-card:nth-child(4) {
        animation-delay: 0.4s;
    }

    .specialty-card:nth-child(5) {
        animation-delay: 0.5s;
    }

    .specialty-card:nth-child(6) {
        animation-delay: 0.6s;
    }

    .specialty-card:nth-child(7) {
        animation-delay: 0.7s;
    }

    .specialty-card:nth-child(8) {
        animation-delay: 0.8s;
    }

    .doctor-card:nth-child(1) {
        animation-delay: 0.2s;
    }

    .doctor-card:nth-child(2) {
        animation-delay: 0.4s;
    }

    .doctor-card:nth-child(3) {
        animation-delay: 0.6s;
    }

    .doctor-card:nth-child(4) {
        animation-delay: 0.8s;
    }

    /* Always visible name box */
    .name-box {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background: #0056b3;
        /* Bootstrap dark blue */
        z-index: 50;
        color: #fff;
        text-align: center;
        padding: 10px;
    }

    .name-box h3 {
        font-size: 1.1rem;
        margin: 0;
        font-weight: 600;
    }

    .name-box p {
        font-size: 0.85rem;
        margin: 2px 0 0;
    }

    .team-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.team-card:hover {
    transform: translateY(-10px); /* lift up effect */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* soft shadow */
}
</style>
@endsection
@section('content')
<section class="team-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header fade-in">
            <h1 class="section-title">Our Medical Team</h1>
            <p class="section-subtitle">Meet our experienced healthcare professionals dedicated to providing exceptional
                medical care with cutting-edge treatments and compassionate service.</p>
        </div>

        <!-- Medical Specialties -->
        <div class="specialties-grid">
            <div class="specialty-card fade-in">
                <div class="specialty-icon">🩺</div>
                <h3 class="specialty-title">Gynaecology & Obstetrics</h3>
            </div>
            <div class="specialty-card fade-in">
                <div class="specialty-icon">🏥</div>
                <h3 class="specialty-title">General & Bariatric Surgery</h3>
            </div>
            <div class="specialty-card fade-in">
                <div class="specialty-icon">🦴</div>
                <h3 class="specialty-title">Orthopaedics</h3>
            </div>
            <div class="specialty-card fade-in">
                <div class="specialty-icon">👨‍⚕️</div>
                <h3 class="specialty-title">General Medicine</h3>
            </div>
            <div class="specialty-card fade-in">
                <div class="specialty-icon">📡</div>
                <h3 class="specialty-title">Radiology</h3>
            </div>
            <div class="specialty-card fade-in">
                <div class="specialty-icon">🧬</div>
                <h3 class="specialty-title">Fetal Medicine & Prenatal Genetics</h3>
            </div>
            <div class="specialty-card fade-in">
                <div class="specialty-icon">🩻</div>
                <h3 class="specialty-title">Urology</h3>
            </div>
            <div class="specialty-card fade-in">
                <div class="specialty-icon">👂</div>
                <h3 class="specialty-title">ENT</h3>
            </div>
        </div>


        <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="card-image">
                        <img src="{{asset('assets/images/team/team1.jpg')}}" alt="Dr. Norma Pedric"
                            class="doctor-photo">

                        <div class="name-box">
                            <h3 class="doctor-name">Dr. Nikita Trehan</h3>
                            <p class="doctor-position">World Renowned Laparoscopic surgeon</p>
                        </div>
                    </div>
                    <div class="card-overlay">
                        <h3 class="doctor-name">Dr. Nikita Trehan</h3>
                        <p class="doctor-position">World Renowned Laparoscopic surgeon</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="card-image">
                        <img src="{{asset('assets/images/team/team2.jpg')}}" alt="Dr. Sarah Johnson"
                            class="doctor-photo">
                    </div>
                    <div class="card-overlay">
                        <h3 class="doctor-name">DR. NEETA MISRA </h3>
                        <p class="doctor-position">Senior Consultant</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="card-image">
                        <img src="{{asset('assets/images/team/team3.jpg')}}" alt="Dr. Michael Chen"
                            class="doctor-photo">
                    </div>
                    <div class="card-overlay">
                        <h3 class="doctor-name">DR. SANJAY VERMA</h3>
                        <p class="doctor-position">General & Bariatric Surgeon</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="card-image">
                        <img src="{{asset('assets/images/team/team4.jpg')}}" alt="Dr. Emily Rodriguez"
                            class="doctor-photo">
                    </div>
                    <div class="card-overlay">
                        <h3 class="doctor-name">DR. NISHIT BHATNAGAR</h3>
                        <p class="doctor-position">Consultant Orthopaedic & Joint Replacement</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row">
            <!-- Card 5 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="card-image">
                        <img src="{{asset('assets/images/team/team5.jpg')}}" alt="Dr. David Wilson"
                            class="doctor-photo">
                    </div>
                    <div class="card-overlay">
                        <h3 class="doctor-name">DR. AZMAT KARIM</h3>
                        <p class="doctor-position">HOD Pulmonary Critical Care & Sleep Medicine</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="card-image">
                        <img src="{{asset('assets/images/team/team6.jpg')}}" alt="Dr. Lisa Thompson"
                            class="doctor-photo">
                    </div>
                    <div class="card-overlay">
                        <h3 class="doctor-name">DR. SUMIT MORE</h3>
                        <p class="doctor-position">Consultant Urologist</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="card-image">
                        <img src="{{asset('assets/images/team/team7.jpg')}}" alt="Dr. Robert Brown"
                            class="doctor-photo">
                    </div>
                    <div class="card-overlay">
                        <h3 class="doctor-name">Dr. Jayati Dureja</h3>
                        <p class="doctor-position">Fetal Medicine & Prenatal Genetics Specialist</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <div class="card-image">
                        <img src="{{asset('assets/images/team/team8.png')}}" alt="Dr. Amanda Davis"
                            class="doctor-photo">
                    </div>
                    <div class="card-overlay">
                        <h3 class="doctor-name">DR. HAFEEZ RAHMAN</h3>
                        <p class="doctor-position">World Renowned Laparoscopic surgeon</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Doctors Section -->
<section>
<div class="container">
    <div class="row">

        <!-- Doctor Card -->
        <div class="col-md-4 mb-4">
            <div class="team-card card p-3">
                <div class="d-flex align-items-center">
                    <img src="doctor1.jpg" alt="Dr Anand Wadera" class="rounded-circle me-3" width="70" height="70">
                    <div>
                        <h5 class="mb-0">Dr Anand Wadera</h5>
                        <small>MBBS, MS</small>
                    </div>
                </div>
                <p class="mt-2"><span class="badge bg-light text-dark">Orthopaedics, Joint Replacement & Sports Injury</span></p>
                <p><i class="bi bi-calendar3"></i> <strong>31 Years</strong> Experience</p>
                <div class="d-flex">
                    <a href="#" class="btn btn-light flex-fill">View Full Profile</a>
                    <a href="#" class="btn btn-warning flex-fill">Book An Appointment</a>
                </div>
            </div>
        </div>

        <!-- Doctor Card -->
        <div class="col-md-4 mb-4">
            <div class="team-card card p-3">
                <div class="d-flex align-items-center">
                    <img src="doctor2.jpg" alt="Dr Mansi Dewan" class="rounded-circle me-3" width="70" height="70">
                    <div>
                        <h5 class="mb-0">Dr Mansi Dewan</h5>
                        <small>MBBS, MD</small>
                    </div>
                </div>
                <p class="mt-2"><span class="badge bg-light text-dark">Critical Care Medicine & Diabetologist</span></p>
                <p><i class="bi bi-calendar3"></i> <strong>8 Years</strong> Experience</p>
                <div class="d-flex">
                    <a href="#" class="btn btn-light flex-fill">View Full Profile</a>
                    <a href="#" class="btn btn-warning flex-fill">Book An Appointment</a>
                </div>
            </div>
        </div>

        <!-- Doctor Card -->
        <div class="col-md-4 mb-4">
            <div class="team-card card p-3">
                <div class="d-flex align-items-center">
                    <img src="doctor3.jpg" alt="Dr Sanjay Gudwani" class="rounded-circle me-3" width="70" height="70">
                    <div>
                        <h5 class="mb-0">Dr Sanjay Gudwani</h5>
                        <small>MBBS, MS</small>
                    </div>
                </div>
                <p class="mt-2"><span class="badge bg-light text-dark">ENT</span></p>
                <p><i class="bi bi-calendar3"></i> <strong>24 Years</strong> Experience</p>
                <div class="d-flex">
                    <a href="#" class="btn btn-light flex-fill">View Full Profile</a>
                    <a href="#" class="btn btn-warning flex-fill">Book An Appointment</a>
                </div>
            </div>
        </div>

        <!-- Repeat other doctors... -->

    </div>
</div>
</section>
@endsection