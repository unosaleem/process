@extends('layout.master')
@section('css')
    <style>
        :root {
            --primary-blue: rgb(22, 156, 201);
            --light-blue: rgb(212, 238, 248);
            --accent-orange: rgb(245, 176, 61);
            --accent-green: rgb(194, 211, 72);
        }

        /* Appointment Section */
        .appointment-section {
            background: linear-gradient(135deg, var(--light-blue) 0%, #ffffff 50%, var(--light-blue) 100%);
            padding: 50px 0;
            position: relative;
            overflow: hidden;
        }

        .appointment-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: var(--accent-orange);
            border-radius: 50%;
            opacity: 0.1;
            transform: translate(100px, -100px);
        }

        .section-heading {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-heading h6 {
            color: var(--primary-blue);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }



        .section-heading p {
            color: #666;
            font-size: 1.1rem;
            max-width: 500px;
            margin: 0 auto;
        }

        /* Unified Appointment Box */
        .appointment-box {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 1px 4px 0 rgba(34, 34, 34, .302);
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .appointment-content {
            display: flex;
            min-height: 600px;
        }

        /* Left Image Side */
        .image-side {
            flex: 1;
            position: relative;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-orange));
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .image-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('{{asset("assets/images/doctors.jpeg")}}') center/cover;
            opacity: 0.8;
        }

        .image-side::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(22, 156, 201, 0.8), rgba(245, 176, 61, 0.6));
        }

        .image-overlay-content {
            position: relative;
            z-index: 3;
            text-align: center;
            color: white;
        }

        .image-overlay-content .icon {
            font-size: 4rem;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .image-overlay-content h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .image-overlay-content p {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Right Form Side */
        .form-side {
            flex: 1;
            padding: 50px 40px;
            background: linear-gradient(145deg, #ffffff, #f8fcff);
        }

        .form-header {
            margin-bottom: 40px;
        }

        .form-header .badge {
            background: var(--primary-blue);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .form-header h3 {
            color: #2c3e50;
            font-weight: 700;
            font-size: 1.8rem;
            line-height: 1.3;
            margin: 0;
        }

        /* Form Styles */
        .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .simple-input {
            width: 100%;
            padding: 15px 20px 15px 15px;
            border: 2px solid var(--light-blue);
            border-radius: 12px;
            background: #f8fcff;
            color: #2c3e50;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .simple-input:focus {
            outline: none;
            border-color: var(--primary-blue);
            background: white;
            box-shadow: 0 0 0 3px rgba(22, 156, 201, 0.1);
        }

        .simple-input::placeholder {
            color: #7a7a7a;
        }

        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-blue);
            font-size: 1.1rem;
        }

        textarea.simple-input {
            height: 120px;
            resize: none;
        }

        textarea + .input-icon {
            top: 20px;
            transform: none;
        }

        /* Submit Button */
        .btn-appointment {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-orange));
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-appointment:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(22, 156, 201, 0.3);
        }

        /* Contact Info Section */
        .contact-info-section {
            background: var(--light-blue);
            padding: 80px 0;
        }

        .contact-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            transition: all 0.4s ease;
            height: 100%;
            border: 2px solid transparent;
            box-shadow: 0 1px 4px 0 rgba(34, 34, 34, .302);
        }

        .contact-card:hover {
            box-shadow: 0 1px 4px 0 rgba(34, 34, 34, .302);
            transform: translateY(-5px);
        }

        .contact-card .icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-orange));
            color: white;
            font-size: 1.5rem;
            margin-bottom: 25px;
            transition: all 0.4s ease;
        }

        .contact-card:hover .icon {
            transform: scale(1.1) rotate(5deg);
        }

        .contact-card h6 {
            color: var(--primary-blue);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.85rem;
            margin-bottom: 10px;
        }

        .contact-card h5 {
            color: #2c3e50;
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .contact-card p {
            color: #666;
            font-size: 1rem;
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .appointment-content {
                flex-direction: column;
                min-height: auto;
            }
            
            .image-side {
                min-height: 300px;
                padding: 30px 20px;
            }
            
            .form-side {
                padding: 40px 30px;
            }
            
            .section-heading h1 {
                font-size: 2.2rem;
            }
            
            .image-overlay-content h3 {
                font-size: 1.6rem;
            }
        }
    </style>
  @endsection
@section('content')
    <!-- Appointment Section -->
    <section class="appointment-section">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading">
                <h2>Get In Touch</h2>
            </div>

            <!-- Appointment Box -->
            <div class="appointment-box">
                <div class="appointment-content">
                    <!-- Left Image Side -->
                    <div class="image-side">
                        <div class="image-overlay-content">
                            <i class="fas fa-user-md icon"></i>
                            <h3>Professional Care</h3>
                            <p>Our expert gynecologists provide comprehensive women's health services with compassion and expertise</p>
                        </div>
                    </div>

                    <!-- Right Form Side -->
                    <div class="form-side">
                        <div class="form-header">
                            <h3>Make an Online Appointment Booking For Treatment Patients</h3>
                        </div>

                        <form>
                            <div class="row g-0">
                                <!-- Name -->
                                <div class="col-md-6 pe-md-2">
                                    <div class="form-group">
                                        <input type="text" class="simple-input" placeholder="Enter Name*" required>
                                        <i class="fa fa-user input-icon"></i>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 ps-md-2">
                                    <div class="form-group">
                                        <input type="email" class="simple-input" placeholder="Enter E-Mail*" required>
                                        <i class="fa fa-envelope input-icon"></i>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6 pe-md-2">
                                    <div class="form-group">
                                        <input type="text" class="simple-input" placeholder="Enter Number*" required>
                                        <i class="fa fa-phone input-icon"></i>
                                    </div>
                                </div>

                                <!-- Hospital Selection -->
                                <div class="col-md-6 ps-md-2">
                                    <div class="form-group">
                                        <select class="simple-input" required>
                                            <option selected disabled>Please select</option>
                                            <option>Sunrise Hospital Kalindi Colony</option>
                                        </select>
                                        <i class="fa fa-hospital input-icon"></i>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="simple-input" placeholder="Write a short message..." required></textarea>
                                        <i class="fa fa-comment input-icon"></i>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn-appointment">
                                        Send Now <i class="fa fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container">
            <div class="row g-4">
                <!-- Email -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h6>Send Now</h6>
                        <h5>E-Mail Address</h5>
                        <p>helpdesk@sunrisehospitals.in</p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h6>Call Us</h6>
                        <h5>Phone Number</h5>
                        <p>+91-9800001900</p>
                    </div>
                </div>

                <!-- Location -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h6>Meet Us</h6>
                        <h5>Location</h5>
                        <p>F-1, Kalindi Colony New Delhi-110065</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d405851.96360444854!2d77.265935!3d28.577030000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce39f2985e0bb%3A0x3a89d01ce7f403b6!2sSunrise%20Hospital!5e1!3m2!1sen!2sus!4v1757934745090!5m2!1sen!2sus" 
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection