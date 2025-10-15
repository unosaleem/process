@extends('layout.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/specialties.css') }}" />
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container container-custom">
            <!-- Breadcrumb -->
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h5 class="mb-3"> Reconstructive URO Surgery</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Our Specialties</a></li>
                            <li class="breadcrumb-item"><a href="#"> Reconstructive URO Surgery</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Main Content Section -->
    <section class="main-content">
        <div class="container">
            <div class="row">
                <!-- Left Column - Content -->
                <div class="col-lg-8">
                    <!-- Main Image -->
                  
                    <img src="{{asset('assets/images/facility/facility6.jpg')}}"
                         alt="Obstetrics and Gynecology - Medical Care"
                         class="content-image">

                    <!-- Content -->
                    <p>Reconstructive urosurgery is a kind to restore the normal functions like recreating, rerouting, repairing the areas of the lower and upper urinary tract and reproductive system. The situations where patients need reconstructive urosurgery like medical conditions, birth defects, injuries, other surgery complications or treatments. </p>

                    <p>Reconstructive URO surgery is a specialized medical procedure aimed at restoring the normal functions of the urinary and reproductive systems. This type of surgery is performed to repair, recreate, or reroute areas of the lower and upper urinary tract and reproductive organs. It is commonly used to treat a range of conditions caused by birth defects, injuries, medical conditions, or complications from previous surgeries.</p>

                    <p>Reconstructive URO surgery can address a variety of health issues, including:</p>
                    <ul>
                        <li>Pelvic Floor Disorders</li>
                        <li>Pelvic Organ Prolapse</li>
                        <li>Peyronie’s Disease</li>
                        <li>Erectile Dysfunction</li>
                        <li>Bladder Fistulas</li>
                        <li>Birth Defects in the Urinary Tract</li>
                        <li>Neurological Conditions (e.g., Parkinson’s Disease, Multiple Sclerosis)</li>
                        <li>Traumatic Injuries to the Urinary and Reproductive Organs</li>
                        <li>Urinary Incontinence</li>
                        <li>Urethral Strictures</li>
                    </ul>

                    <p>Reconstructive surgery may be required in various parts of the urinary and reproductive systems, such as:</p>
                    <ul>
                        <li>Vagina</li>
                        <li>Penis</li>
                        <li>Testicles</li>
                        <li>Ureters (connecting tubes between the kidneys and bladder)</li>
                        <li>Bladder</li>
                        <li>Testicles</li>
                        <li>Prostate Gland</li>
                        <li>Kidneys</li>
                    </ul>

                    <p>Some of the common treatments in reconstructive URO surgery include:</p>
                    <ul>
                        <li><b>Penile Prosthesis:</b> An inflatable penile prosthesis to treat erectile dysfunction.</li>
                        <li><b>Peyronie’s Disease:</b> Correction of severe penile deformities for a natural appearance.</li>
                        <li><b>Artificial Urinary Sphincter:</b> To prevent urinary leakage and treat incontinence.</li>
                        <li><b>Urethral Stricture Repair:</b> Removal of scar tissue and reconstruction of the urethra.</li>
                    </ul>

                    <!-- <h3 class="content-heading">Comprehensive Preconception Care</h3> -->
                    <p>At Sunrise Hospital, we have some of the best surgeons specializing in Reconstructive URO surgery. Our team is dedicated to providing exceptional care, utilizing advanced techniques to ensure the best outcomes for our patients. We prioritize patient comfort, safety, and well-being throughout the treatment process.</p>
                    
                        <img src="{{asset('assets/images/facility/facility6.jpg')}}"
                         alt="Obstetrics and Gynecology - Medical Care"
                         class="content-image">
                    
                    <ul>
                        <li><b>Experienced Surgeons:</b>Our expert surgeons have years of experience in reconstructive urology.</li>
                        <li><b>Comprehensive Care:</b> We offer personalized treatment plans for each patient, ensuring optimal results.</li>
                        <li><b>State-of-the-Art Facility:</b> Our hospital is equipped with the latest technology and equipment to perform advanced urosurgical procedures.</li>
                        <li><b>Compassionate Support:</b> Our nursing and support staff are committed to providing exceptional care throughout the recovery process.</li>
                    </ul>

                    <!-- <h3 class="content-heading">High-Risk Pregnancy Management</h3> -->
                    <p>For those seeking
                        Reconstructive URO Surgery in Delhi, Sunrise Hospital is the trusted choice, offering expert care and advanced surgical solutions.</p>

                    <p>If you or someone you know requires reconstructive URO surgery, trust Sunrise Hospital’s experienced team to provide comprehensive care. Book an <a href="#">online appointment</a> today for a consultation with one of our leading surgeons.</p>

                    <p>Sunrise hospital have top surgeon for the reconstructive uro surgery. We provide our best services and treatment to every patient. Our nursing and supportive are very good , patient care and responsibility are there only motive. Doctors take care of every single step of the surgery and treatment.</p>

                </div>

                <!-- Right Column - Form -->
                <div class="col-12 col-lg-4">
                    <div class="form-sidebar p-4 rounded bg-white">
                        <h4 class="mb-4">
                            <i class="fas fa-calendar-alt me-2"></i>Book Appointment
                        </h4>
                        <form>
                            <div class="row g-3">
                                <!-- Full Name -->
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Enter your full name">
                                </div>

                                <!-- Phone Number -->
                                <div class="col-12">
                                    <input type="tel" class="form-control" placeholder="Enter your phone number">
                                </div>

                                <!-- Appointment Date -->
                                <div class="col-12">
                                    <input type="date" class="form-control" placeholder="Appointment Date">
                                </div>

                                <!-- Specialist -->
                                <div class="col-12">
                                    <select class="form-select">
                                        <option>Select Speciality</option>
                                        <option value="Gynae Laparoscopic Surgeries"> Gynae Laparoscopic Surgeries</option>
                                        <option value="Obstetrics and Gynaecology">Obstetrics and Gynaecology</option>
                                        <option value="Pediatricians">Pediatricians</option>
                                        <option value="ENT">ENT</option>
                                        <option value="General Surgery">General Surgery</option>
                                        <option value="Orthopedics">Orthopedics</option>
                                        <option value="Reconstructive URO Surgery">Reconstructive URO Surgery</option>
                                        <option value="Critical Cases & ICU">Critical Cases & ICU</option>
                                        <option value="Bariatric Surgery">Bariatric Surgery</option>
                                        <option value="Internal Medicine">Internal Medicine</option>
                                    </select>
                                </div>

                                <!-- Email -->
                                <div class="col-12">
                                    <input type="email" class="form-control" placeholder="Enter your email address">
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <div class="captcha-box">
                                        <div class="captcha-text" id="captcha">AB12C</div>
                                        <input type="text" class="captcha-input" placeholder="Enter Captcha" id="captcha-input" required>
                                        <button type="button" class="captcha-refresh" onclick="generateCaptcha()">
                                            <i class="bi bi-arrow-clockwise"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="fas fa-paper-plane me-2"></i>Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        // Form submission handler
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your appointment request! Our team will contact you within 24 hours.');
        });
    </script>
@endsection