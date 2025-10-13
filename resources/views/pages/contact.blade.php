<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Free Consulting</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }

        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8fafc;
        }

        .booking-section {
            display: flex;
            width: 100%;
            max-width: 1200px;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #a855f7 100%);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(99, 102, 241, 0.3);
        }

        .booking-form-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .booking-form {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .form-title {
            color: white;
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 30px;
            line-height: 1.2;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-textarea {
            border-radius: 20px !important;
            resize: vertical;
            min-height: 100px;
            font-family: inherit;
        }

        .form-input, .form-select {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 16px;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .form-input:focus, .form-select:focus {
            border-color: rgba(255, 255, 255, 0.6);
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .form-select {
            appearance: none;
            cursor: pointer;
            background-image: url("data:image/svg+xml;charset=UTF-8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><polyline points='6,9 12,15 18,9'></polyline></svg>");
            background-repeat: no-repeat;
            background-position: right 20px center;
            background-size: 16px;
        }

        .form-select option {
            background: #6366f1;
            color: white;
        }

        .submit-btn {
            background: white;
            color: #6366f1;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            background: #f8fafc;
        }

        .submit-btn:active {
            transform: translateY(-1px);
        }

        .image-container {
            flex: 1;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .doctor-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .floating-element {
            position: absolute;
            background: rgba(99, 102, 241, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            width: 60px;
            height: 60px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 80px;
            height: 80px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            width: 40px;
            height: 40px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        @media (max-width: 768px) {
            .booking-section {
                flex-direction: column;
            }
            
            .booking-form-container {
                order: 2;
                min-height: 60vh;
            }
            
            .image-container {
                order: 1;
                min-height: 40vh;
            }
            
            .form-title {
                font-size: 2rem;
            }
            
            .booking-form {
                padding: 30px 20px;
            }
        }

        /* Success animation */
        .success-animation {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.5s ease;
        }

        .success-animation.show {
            opacity: 1;
            transform: scale(1);
        }
    </style>
</head>
<body>
    <div class="main-container">
        <section class="booking-section">
        <div class="booking-form-container">
            <form class="booking-form" id="bookingForm">
                <h2 class="form-title">Book your Free Consulting</h2>
                
                <div class="form-group">
                    <input type="text" class="form-input" placeholder="Name" required>
                </div>
                
                <div class="form-group">
                    <input type="email" class="form-input" placeholder="Email" required>
                </div>
                
                <div class="form-group">
                    <input type="tel" class="form-input" placeholder="Contact" required>
                </div>
                
                <div class="form-group">
                    <select class="form-select" required>
                        <option value="">Select Service</option>
                        <option value="consultation">General Consultation</option>
                        <option value="checkup">Health Checkup</option>
                        <option value="specialist">Specialist Consultation</option>
                        <option value="emergency">Emergency Care</option>
                        <option value="therapy">Therapy Session</option>
                        <option value="surgery">Surgery Consultation</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <textarea class="form-input form-textarea" placeholder="Message" rows="4" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">
                    Send Message
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22,2 15,22 11,13 2,9 22,2"></polygon>
                    </svg>
                </button>
            </form>
        </div>
        
        <div class="image-container">
            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjYwMCIgdmlld0JveD0iMCAwIDYwMCA2MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNjAwIiBmaWxsPSIjZjhmYWZjIi8+CjxjaXJjbGUgY3g9IjIwMCIgY3k9IjIwMCIgcj0iMTAwIiBmaWxsPSIjZGRkNmZlIiBvcGFjaXR5PSIwLjMiLz4KPGNpcmNsZSBjeD0iNDAwIiBjeT0iMzUwIiByPSI4MCIgZmlsbD0iIzk4OGJmNCIgb3BhY2l0eT0iMC4yIi8+CjxyZWN0IHg9IjE1MCIgeT0iMjUwIiB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgcng9IjIwIiBmaWxsPSJ3aGl0ZSIgb3BhY2l0eT0iMC44Ii8+Cjx0ZXh0IHg9IjMwMCIgeT0iMzMwIiBmb250LWZhbWlseT0iQXJpYWwsIHNhbnMtc2VyaWYiIGZvbnQtc2l6ZT0iMjAiIGZpbGw9IiM2MzY2ZjEiIHRleHQtYW5jaG9yPSJtaWRkbGUiPtCU0L7QutGC0L7RgCDQuCDQv9Cw0YbQuNC10L3RgjwvdGV4dD4KPGN0ZXh0IHg9IjMwMCIgeT0iMzYwIiBmb250LWZhbWlseT0iQXJpYWwsIHNhbnMtc2VyaWYiIGZvbnQtc2l6ZT0iMTYiIGZpbGw9IiM2MzY2ZjEiIHRleHQtYW5jaG9yPSJtaWRkbGUiIG9wYWNpdHk9IjAuNyI+0JzQtdC00LjRhtC40L3RgdC60LDRjyDQutC+0L3RgdGD0LvRjNGC0LDRhtC40Y88L3RleHQ+CjxjaXJjbGUgY3g9IjE4MCIgY3k9IjMwMCIgcj0iMzAiIGZpbGw9IiNlY2Y0ZmYiLz4KPGNpcmNsZSBjeD0iNDIwIiBjeT0iMzIwIiByPSIyNSIgZmlsbD0iI2VjZjRmZiIvPgo8L3N2Zz4K" alt="Doctor and Patient" class="doctor-image">
            <div class="floating-elements">
                <div class="floating-element"></div>
                <div class="floating-element"></div>
                <div class="floating-element"></div>
            </div>
        </div>
            </section>
    </div>

    <script>
        // Set minimum date to today
        document.addEventListener('DOMContentLoaded', function() {
            const dateInput = document.querySelector('input[type="date"]');
            const today = new Date().toISOString().split('T')[0];
            dateInput.setAttribute('min', today);
            dateInput.value = today;
        });

        // Form submission handling
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitBtn = document.querySelector('.submit-btn');
            
            // Simulate loading state
            submitBtn.innerHTML = `
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="animation: spin 1s linear infinite;">
                    <line x1="12" y1="2" x2="12" y2="6"></line>
                    <line x1="12" y1="18" x2="12" y2="22"></line>
                    <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                    <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                    <line x1="2" y1="12" x2="6" y2="12"></line>
                    <line x1="18" y1="12" x2="22" y2="12"></line>
                    <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                    <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                </svg>
                Sending...
            `;
            submitBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                submitBtn.innerHTML = `
                    ✓ Message Sent!
                `;
                submitBtn.style.background = '#10b981';
                submitBtn.style.color = 'white';
                
                // Reset form after 2 seconds
                setTimeout(() => {
                    this.reset();
                    submitBtn.innerHTML = `
                        Send Message
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22,2 15,22 11,13 2,9 22,2"></polygon>
                        </svg>
                    `;
                    submitBtn.style.background = 'white';
                    submitBtn.style.color = '#6366f1';
                    submitBtn.disabled = false;
                    
                    // Reset date to today
                    const today = new Date().toISOString().split('T')[0];
                    dateInput.value = today;
                }, 2000);
            }, 1500);
        });

        // Add hover effects to form inputs
        document.querySelectorAll('.form-input, .form-select, .form-textarea').forEach(input => {
            input.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-1px)';
            });
            
            input.addEventListener('mouseleave', function() {
                if (this !== document.activeElement) {
                    this.style.transform = 'translateY(0)';
                }
            });
        });
    </script>

    <style>
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</body>
</html>