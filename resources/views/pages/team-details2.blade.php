@extends('layout.master')
@section('css')
    <style>
        .team-detail-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .hero-banner {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
            border-radius: 20px;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }

        .hero-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200"><path d="M0,100 Q250,50 500,100 T1000,100 V200 H0 Z" fill="rgba(255,255,255,0.1)"/></svg>') no-repeat bottom;
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .doctor-name-hero {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .doctor-title-hero {
            font-size: 1.4rem;
            opacity: 0.9;
            font-weight: 300;
        }

        .profile-section {
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 40px;
        }

        .profile-header {
            display: flex;
            padding: 50px;
            align-items: center;
            gap: 50px;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        .doctor-image-container {
            position: relative;
            flex-shrink: 0;
        }

        .doctor-image {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            object-fit: cover;
            border: 8px solid white;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .doctor-badge {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background: #1e40af;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(30, 64, 175, 0.4);
        }

        .doctor-info {
            flex: 1;
        }

        .doctor-name {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e40af;
            margin-bottom: 10px;
        }

        .doctor-specialty {
            font-size: 1.2rem;
            color: #6b7280;
            margin-bottom: 30px;
            font-style: italic;
        }

        .info-grid {
            display: grid;
            gap: 20px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            padding: 15px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 700;
            color: #1e40af;
            min-width: 140px;
            font-size: 1rem;
        }

        .info-value {
            flex: 1;
            color: #4b5563;
            line-height: 1.6;
            font-size: 1rem;
        }

        .brief-profile-section {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .section-header {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            color: white;
            padding: 30px 50px;
            font-size: 1.8rem;
            font-weight: 600;
            position: relative;
        }

        .section-header::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            right: 0;
            height: 10px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10"><path d="M0,0 Q50,10 100,0 V10 H0 Z" fill="white"/></svg>') repeat-x;
        }

        .section-content {
            padding: 50px;
        }

        .brief-text {
            font-size: 1.15rem;
            line-height: 1.8;
            color: #4b5563;
            text-align: justify;
            margin-bottom: 30px;
        }

        .brief-text:last-child {
            margin-bottom: 0;
        }

        .specializations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .specialization-card {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border: 2px solid #bae6fd;
            border-radius: 15px;
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .specialization-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
        }

        .specialization-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.15);
            border-color: #3b82f6;
        }

        .specialization-title {
            font-weight: 700;
            color: #1e40af;
            margin-bottom: 12px;
            font-size: 1.1rem;
        }

        .specialization-list {
            color: #4b5563;
            line-height: 1.7;
            font-size: 0.95rem;
        }

        .highlight-achievements {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border: 2px solid #f59e0b;
            border-radius: 20px;
            padding: 40px;
            margin: 40px 0;
            text-align: center;
            position: relative;
        }

        .highlight-achievements::before {
            content: '🏆';
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            padding: 10px;
            border-radius: 50%;
            font-size: 1.5rem;
            border: 3px solid #f59e0b;
        }

        .achievement-title {
            font-size: 1.6rem;
            font-weight: 700;
            color: #92400e;
            margin-bottom: 15px;
            margin-top: 10px;
        }

        .achievement-text {
            color: #a16207;
            font-size: 1.1rem;
            line-height: 1.7;
        }

        .qualifications-section {
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            border: 2px solid #10b981;
            border-radius: 20px;
            padding: 40px;
            margin: 30px 0;
        }

        .qualification-item {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.1);
            transition: all 0.3s ease;
        }

        .qualification-item:hover {
            transform: translateX(10px);
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.15);
        }

        .qualification-icon {
            background: #10b981;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            flex-shrink: 0;
            font-size: 1.2rem;
        }

        .qualification-content {
            flex: 1;
        }

        .qualification-title {
            font-weight: 700;
            color: #065f46;
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .qualification-desc {
            color: #047857;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        @media (max-width: 768px) {
            .team-detail-container {
                padding: 20px 10px;
            }

            .doctor-name-hero {
                font-size: 2.5rem;
            }

            .hero-banner {
                padding: 60px 20px;
                margin-bottom: 30px;
            }

            .profile-header {
                flex-direction: column;
                text-align: center;
                padding: 30px 20px;
                gap: 30px;
            }

            .doctor-image {
                width: 200px;
                height: 200px;
            }

            .section-content,
            .section-header {
                padding: 30px 20px;
            }

            .specializations-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .info-item {
                flex-direction: column;
                gap: 10px;
                text-align: left;
            }

            .info-label {
                min-width: auto;
            }
        }

        .training-highlight {
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 15px;
            padding: 25px;
            margin: 20px 0;
            border-left: 5px solid #3b82f6;
            transition: all 0.3s ease;
        }

        .training-highlight:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            transform: translateY(-3px);
        }

        .training-title {
            font-weight: 700;
            color: #1e40af;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .training-desc {
            color: #6b7280;
            line-height: 1.6;
        }
    </style>
@endsection
@section('content')
    <section class="hero-section">
        <div class="container container-custom">
            <!-- Breadcrumb -->
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h5 class="mb-3">DR. NIKITA TREHAN</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">DR. NIKITA TREHAN</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="team-detail-container">
        <!-- Hero Banner -->
        <div class="hero-banner">
            <div class="hero-content">
                <h1 class="doctor-name-hero">Dr. Jayati Dureja</h1>
                <p class="doctor-title-hero">Fetal Medicine & Prenatal Genetics Specialist</p>
            </div>
        </div>

        <!-- Profile Section -->
        <div class="profile-section">
            <div class="profile-header">
                <div class="doctor-image-container">
                    <img src="{{asset('assets/images/team/team7.jpg')}}" alt="Dr. Jayati Dureja" class="doctor-image">
                    <div class="doctor-badge">Specialist</div>
                </div>
                <div class="doctor-info">
                    <h2 class="doctor-name">Dr. Jayati Dureja</h2>
                    <p class="doctor-specialty">Fetal Medicine & Prenatal Genetics Specialist</p>
                    
                    <div class="info-grid">
                        <div class="info-item">
                            <span class="info-label">Name:</span>
                            <span class="info-value">Dr. Jayati Dureja</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Designation:</span>
                            <span class="info-value">Fetal Medicine & Prenatal Genetics Specialist</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Areas of Expertise:</span>
                            <span class="info-value">3D 4D Fetal Scan, Fetal Neuro sonography, Fetal Echo, Gyne pelvis scan, Early Preg Scan, Preterm Labour Predict scan, Level I (NT), Level 2(Anomaly), Fetal Echo, Doppler, Growth, AFI, Follicular monitoring</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Qualification:</span>
                            <span class="info-value">MBBS, DNB (Obs & Gyne)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Brief Profile Section -->
        <div class="brief-profile-section">
            <div class="section-header">Brief Profile</div>
            <div class="section-content">
                <p class="brief-text">
                    Dr. Jayati Dureja is dedicated to Fetal Medicine & Prenatal Genetics Specialist at "Sunrise Hospitals.
                </p>

                <div class="highlight-achievements">
                    <h3 class="achievement-title">Professional Certifications</h3>
                    <p class="achievement-text">
                        She is FMF (UK) certified for NT scan (11-13+6 weeks scan) and holds an Advanced Maternal Fetal Medicine Diploma from University of Barcelona (Fetal Medicine Barcelona, Dr Gratacos).
                    </p>
                </div>

                <p class="brief-text">
                    She has undergone Fetal Echocardiography Training at MEDISCAN, Chennai, and 1 year training in Fetal Medicine (6 months at SVPIMSR and NHL-VS General Hospital, Ahmedabad under guidance of Dr Prashant Acharya, Dr Janak Desai, Dr Mayank Chaudhary and Maternal Fetal Medicine Specialist, Dr Anusha Shah, and 6 months at Rajni Fetal Medicine Centre, Ahmedabad as part of ICOG Ultrasound course under guidance of Dr Jayprakash Shah). She is trained in carrying out invasive procedures such as Amniocentesis, CVS, Cordocentesis, Fetal Reduction and Intra-Uterine Transfusions, apart from Fetal Echocardiography and Fetal Neurosonography.
                </p>

                <p class="brief-text">
                    Additionally, She is certified in Genetic Counselling and has a Fellowship in Clinical Genetics from Sir Ganga Ram Hospital, Delhi (under the guidance of Dr. Ratna Dua Puri & Dr. IC Verma). She did her post-graduation in Obstetrics & Gynaecology (DNB) from CSI Hospital, Bangalore in 2018 and MBBS from Kasturba Medical College (Manipal University), Mangalore in 2014.
                </p>

                <!-- Specializations Grid -->
                <div class="specializations-grid">
                    <div class="specialization-card">
                        <div class="specialization-title">Fetal Imaging & Diagnostics</div>
                        <div class="specialization-list">
                            • 3D 4D Fetal Scan<br>
                            • Fetal Neuro sonography<br>
                            • Fetal Echo<br>
                            • Early Pregnancy Scan<br>
                            • Level I (NT) & Level 2 (Anomaly) Scans
                        </div>
                    </div>
                    <div class="specialization-card">
                        <div class="specialization-title">Gynecological Imaging</div>
                        <div class="specialization-list">
                            • Gyne pelvis scan<br>
                            • Follicular monitoring<br>
                            • Preterm Labour Predict scan<br>
                            • Doppler studies<br>
                            • Growth monitoring & AFI
                        </div>
                    </div>
                    <div class="specialization-card">
                        <div class="specialization-title">Invasive Procedures</div>
                        <div class="specialization-list">
                            • Amniocentesis<br>
                            • CVS (Chorionic Villus Sampling)<br>
                            • Cordocentesis<br>
                            • Fetal Reduction<br>
                            • Intra-Uterine Transfusions
                        </div>
                    </div>
                    <div class="specialization-card">
                        <div class="specialization-title">Genetic Counselling</div>
                        <div class="specialization-list">
                            • Clinical Genetics Fellowship<br>
                            • Prenatal Genetic Counselling<br>
                            • Genetic Risk Assessment<br>
                            • Family Planning Guidance<br>
                            • Inherited Disorder Consultation
                        </div>
                    </div>
                </div>

                <!-- Qualifications Section -->
                <div class="qualifications-section">
                    <h3 style="color: #065f46; margin-bottom: 30px; font-size: 1.5rem; text-align: center; font-weight: 700;">Professional Training & Qualifications</h3>
                    
                    <div class="qualification-item">
                        <div class="qualification-icon">🎓</div>
                        <div class="qualification-content">
                            <div class="qualification-title">FMF (UK) Certification</div>
                            <div class="qualification-desc">Certified for NT scan (11-13+6 weeks scan) from Fetal Medicine Foundation, UK</div>
                        </div>
                    </div>

                    <div class="qualification-item">
                        <div class="qualification-icon">📚</div>
                        <div class="qualification-content">
                            <div class="qualification-title">Advanced Maternal Fetal Medicine Diploma</div>
                            <div class="qualification-desc">University of Barcelona (Fetal Medicine Barcelona, Dr Gratacos)</div>
                        </div>
                    </div>

                    <div class="qualification-item">
                        <div class="qualification-icon">🏥</div>
                        <div class="qualification-content">
                            <div class="qualification-title">Fetal Echocardiography Training</div>
                            <div class="qualification-desc">MEDISCAN, Chennai - Specialized training in fetal heart assessment</div>
                        </div>
                    </div>

                    <div class="qualification-item">
                        <div class="qualification-icon">🧬</div>
                        <div class="qualification-content">
                            <div class="qualification-title">Fellowship in Clinical Genetics</div>
                            <div class="qualification-desc">Sir Ganga Ram Hospital, Delhi (Dr. Ratna Dua Puri & Dr. IC Verma)</div>
                        </div>
                    </div>

                    <div class="qualification-item">
                        <div class="qualification-icon">🎯</div>
                        <div class="qualification-content">
                            <div class="qualification-title">DNB in Obstetrics & Gynaecology</div>
                            <div class="qualification-desc">CSI Hospital, Bangalore (2018)</div>
                        </div>
                    </div>

                    <div class="qualification-item">
                        <div class="qualification-icon">⚕️</div>
                        <div class="qualification-content">
                            <div class="qualification-title">MBBS</div>
                            <div class="qualification-desc">Kasturba Medical College (Manipal University), Mangalore (2014)</div>
                        </div>
                    </div>
                </div>

                <!-- Training Highlights -->
                <div class="training-highlight">
                    <div class="training-title">Specialized Training Programs</div>
                    <div class="training-desc">
                        Completed comprehensive 1-year training in Fetal Medicine including 6 months at SVPIMSR and NHL-VS General Hospital, Ahmedabad, and 6 months at Rajni Fetal Medicine Centre, Ahmedabad as part of ICOG Ultrasound course.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection