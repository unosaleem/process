@extends('layout.master')
@section('css')
    <style>
        .doctor-detail-page{
            padding: 50px 0px;
        }
        .content-section {
            background: white;
            border-radius: 5px;
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .25);
            margin-bottom: 30px;
            overflow: hidden;
        }

        .brief-header {
            background: linear-gradient(135deg, #00416f 0%, #007f97 100%);
            color: white;
            padding: 10px 20px;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .section-content {
            padding: 0px 20px;
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 30px 0;
        }

        .achievement-card {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border: 1px solid #bae6fd;
            border-radius: 5px;
            padding: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .25);
        }

        .achievement-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .25);
        }

        .achievement-title {
            font-weight: 700;
            color: #003366;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .achievement-desc {
            color: #4b5563;
            line-height: 1.6;
        }

        .specialties-list {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 15px;
        }

        .specialties-list li {
            background: #f8fafc;
            border-radius: 10px;
            padding: 15px 20px;
            transition: all 0.3s ease;
            position: relative;
            padding-left: 50px;
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .25);
        }

        .specialties-list li::before {
            content: '✓';
            position: absolute;
            left: 20px;
            top: 28%;
            background: #0097a7;
            color: white;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .specialties-list li:hover {
            border-color: #3b82f6;
            background: #f0f9ff;
            transform: translateX(5px);
        }

        .training-programs {
            background: #f8fafc;
            border-radius: 15px;
            padding: 30px;
            margin: 30px 0;
        }

        .program-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            padding: 15px;
            background: white;
            border-radius: 10px;
            border-left: 4px solid #003366;
        }

        .program-number {
            background: #003366;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            flex-shrink: 0;
        }

        .program-details {
            flex: 1;
        }

        .program-name {
            font-weight: 600;
            color: #003366;
            margin-bottom: 5px;
        }

        .program-duration {
            color: #6b7280;
            font-size: 0.9rem;
        }

        .highlight-box {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border: 2px solid #f59e0b;
            border-radius: 5px;
            padding: 10px 15px;
            margin: 30px 0;
        }

        .highlight-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #92400e;
            margin-bottom: 10px;
        }
        .records-section {
            border: 2px solid #0097a7;
            border-radius: 15px;
            padding: 30px;
            margin: 30px 0;
        }

        .record-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
            padding: 10px 15px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .25);
        }

        .record-icon {
            background: #0097a7;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            flex-shrink: 0;
        }

        .record-content {
            flex: 1;
        }

        .record-title {
            font-weight: 700;
            color: #003366;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }
        @media (max-width: 768px) {
            .doctor-name {
                font-size: 2rem;
            }
            
            .profile-header {
                flex-direction: column;
                text-align: center;
                padding: 30px 20px;
            }
            
            .doctor-image {
                width: 150px;
                height: 150px;
            }
            
            .section-content,
            .section-header {
                padding: 20px;
            }
            
            .achievements-grid {
                grid-template-columns: 1fr;
            }
            
            .specialties-list {
                grid-template-columns: 1fr;
            }
            
            .container {
                margin-top: -30px;
            }
        }

        .experience-highlights {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .experience-card {
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .experience-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
        }

        .experience-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.12);
            border-color: #3b82f6;
        }

        .experience-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #1e40af;
            margin-bottom: 10px;
            display: block;
        }

        .experience-label {
            color: #6b7280;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }
        .doctor-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ecf5fb;
            z-index: -1;
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

    <section>
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side: Doctor Image -->
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="doctor-img">
                        <img src="{{ asset('assets/images/home-page/nikita.webp') }}" alt="Doctor" />
                    </div>
                </div>

                <!-- Right Side: Doctor Info -->
                <div class="col-lg-7 doctor-details">
                    <h5>World Renowned Gynae Laparoscopic Surgeon</h5>
                    <h2>DR. NIKITA TREHAN</h2>
                    <p>
                        Consult with internationally acclaimed surgeon having record-breaking
                        achievements in laparoscopic surgeries.
                    </p>
                    <p><strong>Designation:</strong> World Renowned Gynae Laparoscopic Surgeon</p>
                    <p><strong>Areas of Expertise:</strong> Gynae Laparoscopic Surgery</p>
                    <p><strong>Qualification:</strong> MBBS, DNB, MNAMS Diploma in Laparoscopic Surgery (Kochi, Germany)</p>
                </div>
            </div>
        </div>
    </section>

    <div class="doctor-detail-page">
        <div class="container">
            <div class="content-section">
                <div class="brief-header">Brief Profile</div>
                <div class="section-content">
                    <p>
                        <b>Dr. Nikita Trehan</b>: Is a <b>world-renowned Gynecologist and Laparoscopic Surgeon</b>.
                        <b>Dr. Nikita Trehan</b> is dedicated to <b>Gynae Endoscopy and Minimally Invasive Gynecology</b>
                        at <b>“Sunrise Hospitals, INDIA, & Sunrise IMH, Dubai”</b> for the last <b>18 years</b>.
                        She is the <b>Managing Director</b> of <b>Sunrise Hospital, Delhi, Mumbai & International Modern Hospital, Dubai</b>.
                    </p>
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <img src="https://www.sunrisehospitals.in/wp-content/uploads/2023/04/imag12.jpg" width="100%" alt="Patient Image">
                        </div>
                        <div class="col-lg-5 col-md-5">

                        </div>
                    </div>

                    <div class="highlight-box">
                        <div class="highlight-title">World Record Holder</div>
                        <p class="highlight-text">
                            She holds the World Record for the largest fibroid removed laparoscopically at 6.5kg (Done in Dubai) She also holds the world's record for the oldest person operated in the at 107yrs of age. The patient had a vaginal sacrospinous fixation.
                        </p>
                    </div>

                    <div class="experience-highlights">
                        <div class="experience-card">
                            <span class="experience-number">18+</span>
                            <span class="experience-label">Years Experience</span>
                        </div>
                        <div class="experience-card">
                            <span class="experience-number">5000+</span>
                            <span class="experience-label">Surgeries Performed</span>
                        </div>
                        <div class="experience-card">
                            <span class="experience-number">3</span>
                            <span class="experience-label">World Records</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-section">
                <div class="brief-header">Professional Achievements</div>
                <div class="section-content">
                    <div class="achievements-grid">
                        <div class="achievement-card">
                            <div class="achievement-title">Academic Excellence</div>
                            <p class="achievement-desc">She is an academician and is involved in most Gynae conferences & workshops for demonstrating her superb surgical skills "LIVE"</p>
                        </div>
                        <div class="achievement-card">
                            <div class="achievement-title">Research Contributions</div>
                            <p class="achievement-desc">She has contributed to numerous papers in various international journals and books</p>
                        </div>
                        <div class="achievement-card">
                            <div class="achievement-title">Training Programs</div>
                            <p class="achievement-desc">She conducts various teaching programs and conferences</p>
                        </div>
                    </div>

                    <div class="training-programs">
                        <h3 style="color:#003366; margin-bottom: 25px; font-size: 1.3rem;">Training Programs Conducted</h3>
                        <div class="program-item">
                            <div class="program-number">1</div>
                            <div class="program-details">
                                <div class="program-name">Basic LAP training program</div>
                                <div class="program-duration">(2Days)</div>
                            </div>
                        </div>
                        <div class="program-item">
                            <div class="program-number">2</div>
                            <div class="program-details">
                                <div class="program-name">TLH Hands-on</div>
                                <div class="program-duration">(4Days)</div>
                            </div>
                        </div>
                        <div class="program-item">
                            <div class="program-number">3</div>
                            <div class="program-details">
                                <div class="program-name">Fellowship program</div>
                                <div class="program-duration">(3 months)</div>
                            </div>
                        </div>
                    </div>

                    <div class="highlight-box">
                        <div class="highlight-title">Training Excellence</div>
                        <p class="highlight-text">
                            She along with her team are the first in Delhi to offer:<br>
                            <strong>"EMERGENCY LAP ENDOSCOPE SERVICES"</strong>
                        </p>
                    </div>
                </div>
            </div>

            <div class="content-section">
                <div class="brief-header">Specialized Procedures & World Records</div>
                <div class="section-content">
                    <div class="records-section">
                        <h3 style="color: #003366; margin-bottom: 25px; font-size: 1.3rem;">Special procedures done by her and her team at Sunrise Delhi & IMH Dubai include:</h3>

                        <div class="record-item">
                            <div class="record-icon">1</div>
                            <div class="record-content">
                                <div class="record-title">Total Laparoscopic & Hysterectomy</div>
                                <p class="record-desc">Any size of uterus (We have a record for 6.5kg TLH done Laparoscopically)</p>
                            </div>
                        </div>

                        <div class="record-item">
                            <div class="record-icon">2</div>
                            <div class="record-content">
                                <div class="record-title">Laparoscopic Myomectomy</div>
                                <p class="record-desc">Any size of fibroid (we have the world record for worlds largest fibroid removed laparoscopically)</p>
                            </div>
                        </div>

                        <div class="record-item">
                            <div class="record-icon">3</div>
                            <div class="record-content">
                                <div class="record-title">Advanced Laparoscopic Procedures</div>
                                <p class="record-desc">Including Encircle for Recurrent Miscarriages, Fertility Enhancing Surgeries, and various hysteroscopic procedures</p>
                            </div>
                        </div>

                        <div class="record-item">
                            <div class="record-icon">4</div>
                            <div class="record-content">
                                <div class="record-title">Specialized Vaginal Surgeries</div>
                                <p class="record-desc">Including Sacrospinous Fixation, Vaginal Rejuvenation Surgeries, and various reconstructive procedures</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-section">
                <div class="brief-header">Areas of Specialization</div>
                <div class="section-content">
                    <ul class="specialties-list">
                        <li>Laparoscopic Enceriage for Recurrent Miscarriages</li>
                        <li>Laparoscopic & Hysteroscopy Fertility Enhancing Surgeries</li>
                        <li>All hysteroscopic procedures like Hysteroscopic Myomectomy, Polypectomy, Septal Resection etc</li>
                        <li>Laparoscopic Onosurgeries laparoscopic Wertheim's Hysterectomy for CA cervix and CA endometrium</li>
                        <li>Laparoscopic surgeries for CA ovary</li>
                        <li>Laparoscopic Sling Surgery for Malignous Prolapse</li>
                        <li>All Gynae Urological Surgeries: TVT, TOT</li>
                        <li>Laparoscopic Treatment of Fibroids/ Laparoscopic Vaginoplasty by Sunrise Method</li>
                        <li>Laparoscopic Sacrocolpopexy for Uterine Prolapse Surgery</li>
                        <li>Laparoscopic Mesh Vault Repair Surgery</li>
                        <li>Laparoscopic Mesh Repair of Multiparous Prolapse Surgery</li>
                        <li>Laparoscopic Hysteroscopy Surgery</li>
                        <li>Laparoscopic Reconciliation Surgery</li>
                        <li>Laparoscopic Ovarian Cystectomy Surgery</li>
                        <li>Laparoscopic Endometriosis Surgery</li>
                    </ul>
                </div>
            </div>

            <div class="content-section">
                <div class="brief-header">Professional Contributions</div>
                <div class="section-content">
                    <p class="brief-profile">
                        She has organized and conducted several CME's for the promotion of Minimally invasive Gynaecology under the banner of "Sunrise Keyhole Surgery Foundation" of which she is the Vice president. She has also trained many Indian & International Doctors in Minimally invasive Gynaecology and has been a Training Surgeon for minimally invasive Gynecology.
                    </p>

                    <p class="brief-profile">
                        As part of her endeavor to promote minimally invasive techniques in Gynecology and completing the CSR(Corporate Social Responsibility)She has organized many "Free Surgical Camps" for poor patients of Sunrise.
                    </p>

                    <p class="brief-profile">
                        She has contributed to many chapters in Gynaecology Endoscopy Surgery books and is actively involved in various academic activities of teaching and new research and has many papers in various international journals to her credit.
                    </p>

                    <div class="highlight-box">
                        <div class="highlight-title">Latest Achievement</div>
                        <p class="highlight-text">
                            She has the record for the largest fibroid remove laparoscopically in the UAE at 6.5 KGS and has recently entered the Limca Book of Record for the oldest patient operated in the world at Sunrise IMH Dubai the Lady was 107 years old.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection