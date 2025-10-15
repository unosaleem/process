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
                            <li class="breadcrumb-item"><a href="#">Patients Testimonials &amp; Medical Breakthroughs</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
     <section class="faq-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- FAQ Left -->
                <div class="col-lg-12">
                    <h2>Frequently Asked Questions (FAQs)</h2>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>

                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    How can I book an appointment at Sunrise Hospital, Delhi?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can book appointments online, via WhatsApp, or by calling +91 9871802342. Walk-ins and emergency consultations are available 24x7 at our South Delhi hospital.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Where is Sunrise Hospital located in Delhi?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sunrise Hospital is at F-1, Kalindi Colony, near New Friends Colony, South Delhi. Easily accessible from Lajpat Nagar, Greater Kailash, Okhla, and just 30 minutes from IGI Airport.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    What maternity and pregnancy care services are offered?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We provide prenatal checkups, high-risk pregnancy management, normal & C-section deliveries, and neonatal ICU care. Trusted as one of the best maternity hospitals in Delhi NCR.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    Who is the best gynecologist and laparoscopic surgeon at Sunrise Hospital?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Dr. Nikita Trehan, internationally acclaimed for advanced laparoscopic gynecology surgeries, leads our team. Expert in fibroid removal, hysterectomy, and endometriosis treatments.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                    Who is the best gynecologist and laparoscopic surgeon at Sunrise Hospital?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Dr. Nikita Trehan, internationally acclaimed for advanced laparoscopic gynecology surgeries, leads our team. Expert in fibroid removal, hysterectomy, and endometriosis treatments.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection