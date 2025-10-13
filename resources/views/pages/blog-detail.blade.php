@extends('layout.master')
@section('css')
    <style>
        .blog-content {
            position: relative;
            z-index: 10;
        }

        .featured-image {
            width: 100%;
        }
        .content-body h3 {
            color: #003366;
            font-weight: 600;
            font-size: 20px;
            margin: 1.5rem 0 1rem;
        }
        .content-body ul, .content-body ol {
            margin-bottom: 1.5rem;
            padding-left: 1rem;
        }

        .content-body li {
            margin-bottom: 0.5rem;
            font-size: 16px;
        }

        .highlight-box {
            background: linear-gradient(135deg, rgba(36,162,205, 0.05) 0%, rgba(0,151,167, 0.05) 100%);
            border-left: 4px solid rgb(36,162,205);
            padding: 1.5rem;
            margin: 2rem 0;
            border-radius: 0 10px 10px 0;
        }

        .tags-section {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 2px solid #f8f9fa;
        }

        .tag {
            background: rgba(36,162,205, 0.1);
            color: rgb(36,162,205);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            margin: 0.25rem;
            transition: all 0.3s ease;
        }

        .tag:hover {
            background: rgb(36,162,205);
            color: white;
            transform: translateY(-2px);
        }

        .sidebar {
            padding-left: 2rem;
        }

        .sidebar-widget {
            background: white;
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 2rem;
            box-shadow: 0 1px 4px 0 rgba(34, 34, 34, .302);
            transition: transform 0.3s ease;
        }

        .sidebar-widget:hover {
            transform: translateY(-3px);
        }

        .widget-title {
            color: #003366;
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .widget-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(135deg, rgb(0 51 102) 0%, rgb(0 51 102) 100%);
            border-radius: 2px;
        }

        .related-post {
            display: flex;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #d9e0e6;
            text-decoration: none;
            color: inherit;
            transition: all 0.3s ease;
        }
        .related-post:last-child {
            border-bottom: none;
        }

        .related-post-img {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            object-fit: cover;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .related-post-content h6 {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 0.25rem;
            line-height: 1.3;
            color: #003366;
        }

        .related-post-date {
            font-size: 0.8rem;
            color: #6c757d;
        }

        .share-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .share-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .share-btn:hover {
            transform: translateY(-3px);
            color: white;
        }

        .share-facebook { background: #3b5998; }
        .share-twitter { background: #1da1f2; }
        .share-linkedin { background: #0077b5; }
        .share-whatsapp { background: #25d366; }

        .cta-section {
            background: linear-gradient(135deg, rgb(36,162,205) 0%, rgb(0,151,167) 100%);
            color: white;
            padding: 3rem;
            border-radius: 15px;
            text-align: center;
            margin: 2rem 0;
        }

        .cta-btn {
            background: white;
            color: rgb(36,162,205);
            border: none;
            padding: 1rem 2rem;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }

        .cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            color: rgb(36,162,205);
        }

        @media (max-width: 768px) {
            .blog-title {
                font-size: 1.8rem;
            }

            .content-body {
                padding: 2rem 1.5rem;
            }

            .sidebar {
                padding-left: 0;
                margin-top: 2rem;
            }

            .blog-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }
    </style>
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
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item"><a href="#">Best Gynecologist in Delhi</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Blog Content -->
                <div class="col-lg-8">
                    <article class="blog-content">
                        <img src="https://www.sunrisehospitals.in/wp-content/uploads/2025/06/Best-Gynecologist-in-Delhi-1024x576.webp" alt="Endometriosis Treatment" class="featured-image">

                        <div class="content-body mt-4">
                            <h1>Best Gynecologist in Delhi for Your Pregnancy and Reproductive Health</h1>
                            <p>
                                When it comes to women’s health, finding the best gynecologist in Delhi is crucial for ensuring quality care, whether you’re planning a pregnancy, seeking infertility treatment, or addressing reproductive health concerns. Delhi, a hub for advanced medical care, offers numerous options, but selecting the right specialist can be overwhelming. At Sunrise Hospitals, we pride ourselves on providing world-class gynecological care, led by experts like Dr. Nikita Trehan, one of the best gynecologists in South Delhi. In this comprehensive guide, we’ll explore how to choose the best pregnancy doctor in Delhi, the importance of specialized care, and why Sunrise Hospitals is the best hospital for pregnancy in Delhi.
                            </p>
                            <h2>Why Choosing the Right Gynecologist Matters</h2>
                            <p>
                                A gynecologist plays a pivotal role in a woman’s health journey, from adolescence to menopause. Whether you’re searching for a gynecologist near me for routine check-ups or a pregnancy specialist in Delhi for high-risk pregnancies, the right doctor ensures personalized care and better outcomes. According to recent studies, 70% of women prioritize proximity and expertise when choosing a gynecologist, making gynecologist near me one of the most searched terms in Delhi.
                            </p>
                            <p>
                                At Sunrise Hospitals, our team of experienced gynecologists, including Dr. Nikita Trehan, combines expertise with compassion to address all aspects of female reproductive health treatment in Delhi. From routine screenings to advanced procedures like IVF treatment in Delhi, we are committed to your well-being.
                            </p>
{{--                            <div class="highlight-box">--}}
{{--                                <h4><i class="fas fa-info-circle text-primary me-2"></i>Did You Know?</h4>--}}
{{--                                <p class="mb-0">Endometriosis affects approximately 10% of women of reproductive age worldwide, yet it often takes 7-12 years to receive an accurate diagnosis.</p>--}}
{{--                            </div>--}}

                            <h2>Key Factors to Consider When Choosing a Gynecologist</h2>
                            <ul>
                                <li><strong>Expertise and Specialization:</strong> Look for a doctor with specialized training in areas like obstetrics, infertility, or high-risk pregnancies. Dr. Nikita Trehan, for instance, is renowned for her expertise in pregnancy care and infertility treatments.</li>
                                <li><strong>Hospital Affiliation:</strong> The best hospital in South Delhi, like Sunrise Hospitals, offers state-of-the-art facilities, including advanced labor rooms and neonatal ICUs, ensuring comprehensive care.</li>
                                <li><strong>Patient Reviews:</strong> Check online reviews for terms like “best gynecologist in Delhi” to gauge patient satisfaction.</li>
                                <li><strong>Accessibility:</strong> A gynecologist near me ensures convenience, especially during emergencies or frequent pregnancy visits.</li>
                                <li><strong>Holistic Care:</strong> Choose a doctor who offers a range of services, from infertility treatment in Delhi to menopause management.</li>
                            </ul>

                            <h2>The Role of a Pregnancy Specialist in Delhi</h2>
                            <p>
                                Pregnancy is a transformative journey that requires expert care, especially for high-risk cases. A pregnancy specialist doctor in Delhi provides tailored guidance, from prenatal care to delivery. At Sunrise Hospitals, our specialists use advanced diagnostics to monitor fetal health, ensuring both mother and baby are safe. Whether you’re seeking the best pregnancy doctor in Delhi for a normal delivery or a cesarean, our team is equipped to handle all scenarios.
                            </p>
                            <h2>Why Sunrise Hospitals is the Best Hospital for Pregnancy in Delhi</h2>
                            <p>As the best hospital for pregnancy in Delhi, Sunrise Hospitals offers:</p>
                            <ul>
                                <li><strong>Advanced Labor Rooms:</strong> Equipped with modern technology for safe deliveries.</li>
                                <li><strong>Neonatal ICU:</strong> For premature or high-risk newborns.</li>
                                <li><strong>Expert Team:</strong> Led by Dr. Nikita Trehan, our gynecologists are among the best in South Delhi.</li>
                                <li><strong>Comprehensive Care:</strong> From prenatal check-ups to postpartum support, we cover every stage of pregnancy.</li>
                            </ul>
                            <p>Our commitment to excellence has made us a top choice for women searching for the best hospital in South Delhi for pregnancy care.</p>

                            <h3>Addressing Female Reproductive Health Concerns</h3>
                            <p>Beyond pregnancy, gynecologists address a wide range of reproductive health issues, including:</p>
                            <ul>
                                <li><strong>Polycystic Ovary Syndrome (PCOS):</strong> A common condition affecting 1 in 10 women in India.</li>
                                <li><strong>Endometriosis:</strong> A painful disorder requiring expert diagnosis and treatment.</li>
                                <li><strong>Menstrual Irregularities:</strong> Managed through lifestyle changes or medical interventions.</li>
                                <li><strong>Menopause:</strong> Comprehensive care for symptoms like hot flashes and hormonal changes.</li>
                            </ul>

                            <p>At Sunrise Hospitals, our female reproductive health treatment in Delhi includes advanced diagnostics and personalized treatment plans. Whether you’re dealing with PCOS or seeking routine screenings, our team ensures you receive the best care.</p>

                            <h2>Infertility Treatment in Delhi: A Ray of Hope</h2>
                            <p>Infertility affects 15% of couples in India, but advancements in medical science offer hope. IVF treatment in Delhi has become increasingly accessible, with Sunrise Hospitals leading the way. Our infertility specialists, including Dr. Nikita Trehan, provide comprehensive infertility treatment in Delhi, including:</p>

                            <ul>
                                <li><strong>In-Vitro Fertilization (IVF):</strong> A highly effective procedure for couples struggling to conceive.</li>
                                <li><strong>Intrauterine Insemination (IUI):</strong> A less invasive option for certain cases.</li>
                                <li><strong>Hormonal Therapy:</strong> To address ovulation disorders.</li>
                            </ul>
                            <p>Our state-of-the-art fertility center ensures high success rates, making us a top destination for couples searching for the best gynecologist in Delhi for infertility care.</p>

                            <h2>How to Find the Best Gynecologist in South Delhi</h2>
                            <p>South Delhi is home to some of the finest healthcare facilities, and Sunrise Hospitals stands out as a leader. Here’s how to find the best gynecologist in South Delhi:</p>
                            <ul>
                                <li><strong>Research Online:</strong> Search for terms like “best gynecologist in South Delhi” or “Dr. Nikita Trehan reviews” to find trusted doctors.</li>
                                <li><strong>Check Credentials:</strong> Ensure the gynecologist is board-certified and affiliated with a reputed hospital.</li>
                                <li><strong>Visit the Hospital:</strong> Tour facilities like Sunrise Hospitals to assess infrastructure and patient care.</li>
                                <li><strong>Ask for Referrals:</strong> Friends, family, or general physicians can recommend reliable specialists.</li>
                            </ul>
                            <p>Dr. Nikita Trehan, a leading gynecologist at Sunrise Hospitals, is highly recommended for her expertise in pregnancy and infertility care, making her a top choice for women in South Delhi.</p>
                            <h3>The Importance of Location: Gynecologist Near Me</h3>
                            <p>For many women, proximity is a key factor when choosing a gynecologist. Searching for a gynecologist near me ensures quick access during emergencies or routine visits. Sunrise Hospitals, located in Kalindi Colony, South Delhi, is easily accessible for residents of New Delhi and surrounding areas. Our 24/7 emergency services and dedicated women’s health wing make us a preferred choice for those seeking a gynecologist near me.</p>
                            <h3>Combining Gynecology with Other Specialties at Sunrise Hospitals</h3>
                            <p>While gynecology is our focus, Sunrise Hospitals is a multispecialty facility, offering services like:</p>
                            <ul>
                                <li><strong>Cardiology:</strong> Led by the best cardiologist in Delhi, our heart care unit is equipped for advanced procedures like angioplasty.</li>
                                <li><strong>Nephrology:</strong> Specialized care for kidney-related issues.</li>
                                <li><strong>Orthopedics:</strong> Treatment for joint and bone conditions.</li>
                            </ul>
                            <p>This multidisciplinary approach ensures holistic care, especially for pregnant women with comorbidities like diabetes or hypertension.</p>
                            <h3>Why Choose Dr. Nikita Trehan?</h3>
                            <p>Dr. Nikita Trehan is a name synonymous with excellence in gynecology. Her accolades include:</p>
                            <ul>
                                <li><strong>Expertise in High-Risk Pregnancies:</strong> Ensuring safe outcomes for complex cases.</li>
                                <li><strong>Leadership in Infertility Care:</strong> Pioneering IVF treatment in Delhi with high success rates.</li>
                                <li><strong>Patient-Centric Approach:</strong> Known for her empathy and clear communication.</li>
                            </ul>
                            <p>Patients searching for the best gynecologist in South Delhi consistently praise Dr. Trehan for her dedication and skill.</p>
                            <h3>Tips for a Healthy Pregnancy with the Best Pregnancy Doctor in Delhi</h3>
                            <p>To ensure a smooth pregnancy, follow these tips from our pregnancy specialist in Delhi:</p>
                            <ul>
                                <li><strong>Regular Check-Ups:</strong> Schedule monthly visits to monitor fetal development.</li>
                                <li><strong>Balanced Diet:</strong> Include folate, iron, and calcium-rich foods.</li>
                                <li><strong>Exercise:</strong> Practice prenatal yoga or light walking, as advised by your doctor.</li>
                                <li><strong>Stress Management:</strong> Meditation and adequate sleep promote maternal health.</li>
                                <li><strong>Avoid Toxins:</strong> Stay away from alcohol, smoking, and unverified medications.</li>
                            </ul>
                            <p>At Sunrise Hospitals, our best pregnancy doctor in Delhi provides personalized advice to ensure a healthy pregnancy journey.</p>
                            <h3>Conclusion</h3>
                            <p>Choosing the best gynecologist in Delhi is a critical decision for your health and well-being. Whether you’re seeking a pregnancy specialist in Delhi, infertility treatment in Delhi, or routine gynecological care, Sunrise Hospitals offers unparalleled expertise and facilities. With Dr. Nikita Trehan leading our gynecology department, we are proud to be the best hospital for pregnancy in Delhi and a trusted name in female reproductive health treatment in Delhi.</p>
                            <p>Don’t wait to prioritize your health. Book an appointment today at Sunrise Hospitals and experience world-class care from the best gynecologist in South Delhi.</p>
                        </div>
                    </article>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- Related Posts Widget -->
                        <div class="sidebar-widget">
                            <h5 class="widget-title">Related Blog</h5>

                            <a href="#" class="related-post">
                                <img src="https://www.sunrisehospitals.in/wp-content/uploads/2025/04/Pregnancy-Specialist-in-Delhi-1024x576.webp" alt="PCOS" class="related-post-img">
                                <div class="related-post-content">
                                    <h6>Pregnancy Specialist in Delhi at Sunrise Hospital with Dr. Nikita Trehan</h6>
                                    <div class="related-post-date">Jan 28, 2024</div>
                                </div>
                            </a>

                            <a href="#" class="related-post">
                                <img src="https://www.sunrisehospitals.in/wp-content/uploads/2023/08/dr-nikita-trehan-1-464x487-1.jpg%22" alt="Pregnancy" class="related-post-img">
                                <div class="related-post-content">
                                    <h6>Health Concern for Women and Best Endometriosis Treatment in Delhi</h6>
                                    <div class="related-post-date">Jan 15, 2024</div>
                                </div>
                            </a>

                            <a href="#" class="related-post">
                                <img src="https://www.sunrisehospitals.in/wp-content/uploads/2023/11/images-2.jpeg" alt="Menopause" class="related-post-img">
                                <div class="related-post-content">
                                    <h6>Can Endometriosis Get Worse with Age and best Endometriosis Treatment in Delhi?</h6>
                                    <div class="related-post-date">Jan 8, 2024</div>
                                </div>
                            </a>
                        </div>

                        <!-- Categories Widget -->
{{--                        <div class="sidebar-widget">--}}
{{--                            <h5 class="widget-title">Categories</h5>--}}
{{--                            <div class="d-flex flex-column gap-2">--}}
{{--                                <a href="#" class="tag">Women's Health (15)</a>--}}
{{--                                <a href="#" class="tag">Pregnancy Care (12)</a>--}}
{{--                                <a href="#" class="tag">Fertility (8)</a>--}}
{{--                                <a href="#" class="tag">Menopause (6)</a>--}}
{{--                                <a href="#" class="tag">Preventive Care (10)</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection