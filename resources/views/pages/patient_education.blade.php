@extends('layout.master')
@section('css')
    <style>
        :root {
            --primary-color: rgb(0, 151, 167);
            --primary-light: rgba(0, 151, 167, 0.1);
            --primary-dark: rgb(0, 121, 137);
        }

        body {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }

        .bg-primary-custom {
            background-color: var(--primary-color) !important;
        }

        .text-primary-custom {
            color: var(--primary-color) !important;
        }

        .border-primary-custom {
            border-color: var(--primary-color) !important;
        }

        .btn-primary-custom {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }

        .btn-primary-custom:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 4rem 0;
        }

        .card-icon {
            width: 60px;
            height: 60px;
            background-color: var(--primary-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .list-item {
            border-left: 3px solid var(--primary-color);
            padding-left: 1rem;
            margin-bottom: 1rem;
            background-color: rgba(0, 151, 167, 0.05);
            padding: 1rem;
            border-radius: 0.375rem;
        }

        .section-divider {
            height: 3px;
            background: linear-gradient(to right, var(--primary-color), transparent);
            border: none;
            margin: 2rem 0;
        }
    </style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">
                        <i class="bi bi-heart-pulse me-3"></i>
                        Patient Education
                    </h1>
                    <p class="lead mb-0">Understanding Your Rights and Responsibilities in Healthcare</p>
                </div>
                <div class="col-lg-4 text-end">
                    <i class="bi bi-shield-check" style="font-size: 8rem; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Patient Rights Section -->
                <div class="mb-5">
                    <div class="d-flex align-items-center mb-4">
                        <div class="card-icon">
                            <i class="bi bi-person-check text-primary-custom" style="font-size: 1.5rem;"></i>
                        </div>
                        <h2 class="text-primary-custom ms-3 mb-0">Your Rights as a Patient</h2>
                    </div>

                    <div class="row g-3">
                        <div class="col-12">
                            <div class="list-item">
                                <p>Patient has the right to be informed of your rights and review the policies regarding
                                    them.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p> Patient has the right to express complaints and satisfaction regarding services rendered
                                    and to comment and make suggestions for improvement of the quality of care and services.
                                </p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p>Patient has the right to file a complaint and to receive a response in a timely manner
                                    without fear of discrimination or reprisal.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p>Patient has the right to receive considerate and respectful care in a safe and secure
                                    environment with respect and regard for privacy, individuality, personal beliefs and
                                    cultural traditions.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p>Patient has the right to access services and timely referrals to staff and services
                                    consistent with quality professional practice.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p>Patient has the right to refuse treatment and be fully informed of possible consequences
                                    of such refusal, without reprisal.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p>Patient has the right to participate in decisions affecting care and treatment according
                                    to their desires, needs, and understanding including the choice to have family and
                                    friends participate in the process.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p>Patient has the right to receive information regarding their illness, the course of
                                    treatment, and the prospects for good health in terms that they can understand.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p> Patient has the right to approve and refuse the release of their medical records.
                                    Patient have the right to access their medical record. Patient have the right to privacy
                                    and confidentiality of their records are to be maintained in a safe and secure
                                    environment.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p> Patient has the right to know the professional status of the person(s) treating them and
                                    those giving medical advice after hours.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p>Patient has the right to know, in advance of services, the cost of services and any
                                    applicable payment policy.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p>Patient has the right to receive timely and qualified care in a setting appropriate to
                                    health care needs.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p>Patient has the right to appoint a legal representative to make decisions regarding their
                                    health care.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p>Patient has the right to refuse to participate in research/experimental activities
                                    without reprisal.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p> Patient has the right to change their Primary Care or Dental providers if other
                                    qualified practitioners are available.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="section-divider">

                <!-- Patient Responsibilities Section -->
                <div class="mb-5">
                    <div class="d-flex align-items-center mb-4">
                        <div class="card-icon">
                            <i class="bi bi-clipboard-check text-primary-custom" style="font-size: 1.5rem;"></i>
                        </div>
                        <h2 class="text-primary-custom ms-3 mb-0">Your Responsibilities as a Patient</h2>
                    </div>

                    <div class="row g-3">
                        <div class="col-12">
                            <div class="list-item">
                                <p>  Patient has the responsibility to actively participate in decisions regarding their health
                                    care to the degree that you choose and to reasonably follow your provider's health care
                                    instructions.

                                </p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p>You has the responsibility to inform their healthcare provider of information related to
                                    past illness, treatment, and medications.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p> Patient has the responsibility to respect the rights and property of healthcare
                                    professionals, employees, and other patients.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p> Patient has the responsibility to make and promptly keep all scheduled appointments. To
                                    assure that all patients are served in a timely manner, patients are responsible for
                                    calling and changing appointments 24 hours in advance.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p> Patient has the responsibility to pay for services at the time service is provided and to
                                    provide the patient registration office with accurate, complete, and current information
                                    pertaining to insurance coverage, home address, telephone number, social security
                                    number, and Native American Indian verification.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p>  Patient has the responsibility to discuss their health care problems, concerns, and
                                    personal needs with their provider in an honest manner and to inform the health care
                                    provider of any changes occurring in their health.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p> Patients should ask questions when in need of further information or a better
                                    understanding.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p> Patient has the responsibility to cooperate with various providers involved in their care
                                    and to conduct themselves in a polite and reasonable manner.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p> Patient has the responsibility to inform provider if they cannot or will not follow a
                                    certain treatment plan.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p> Patient has the responsibility to respect the rights of their health care provider and to
                                    exchange information in a non-abusive manner either physically or verbally while
                                    receiving care.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="list-item">
                                <p> Patient has the responsibility to advise their provider of all changes in decisions
                                    concerning advance directives and/or persons designated by them to make health care
                                    decisions.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Right Column - Form -->
            <div class="col-lg-4">
                <div class="form-sidebar p-4">
                    <h4 class="mb-4 text-primary">
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
                                    <option value="Gynae Laparoscopic Surgeries">Gynae Laparoscopic Surgeries</option>
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

                            <!-- Captcha -->
                            <div class="col-12">
                                <div class="captcha-box">
                                    <div class="captcha-text" id="captcha">AB12C</div>
                                    <input type="text" class="captcha-input" placeholder="Enter Captcha" id="captcha-input"
                                           required>
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

@endsection