@extends('layout.master')
@section('css')
    <style>
         .doctors-page{
             padding: 50px 0px;
         }
        .search-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 1px 4px 0 rgba(34, 34, 34, .302);
            width: 40%;
            margin-left: auto;
            margin-right: 0;
        }

        .search-bar {
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            font-size: 1rem;
        }

        .search-bar:focus {
            outline: none;
            box-shadow: none;
        }

        .search-btn {
            background: var(--primary-color);
            border: none;
            border-radius: 50px;
            padding: 0.8rem 1.5rem;
            color: white;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            background: var(--accent-color);
            transform: translateY(-1px);
            color: white;
        }

        .filters-sidebar {
            background: white;
            border-radius: 5px;
            box-shadow: 0 1px 4px 0 rgba(34, 34, 34, .302);
            padding: 1rem;
            height: fit-content;
            position: sticky;
            top: 2rem;
        }

        .filter-title {
            color: #003366;
            font-weight: 600;
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }

        .filter-section {
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .filter-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .filter-label {
            font-weight: 600;
            color: #003366;
            margin-bottom: 0.8rem;
            display: block;
        }
         .results-header {
            background: white;
            padding: 1.5rem;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }

        .results-count {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 1.1rem;
        }

        .filter-clear-btn {
            background: #f8f9fa;
            border: 1px solid var(--border-color);
            color: var(--accent-color);
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }

        .filter-clear-btn:hover {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }
         @media (max-width: 768px) {
            .filters-sidebar {
                margin-bottom: 2rem;
            }

            .header-section {
                padding: 2rem 0 1.5rem 0;
            }

            .search-container {
                margin-top: 1.5rem;
            }
        }
    </style>
@endsection
@section('content')
    <!-- Header Section -->
    <section class="hero-section">
        <div class="container container-custom">
            <!-- Breadcrumb -->
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h5 class="mb-3">Doctors</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Doctors</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="doctors-page">
        <div class="container">
            <div class="row">
                <!-- Filters Sidebar -->
                <div class="col-lg-3">
                    <div class="filters-sidebar">
                        <h4 class="filter-title">
                            <i class="fas fa-filter me-2"></i>Filters
                        </h4>
                        <!-- Experience Filter -->
                        <div class="filter-section">
                            <label class="filter-label">Experience</label>
                            <select class="form-select" id="experienceFilter">
                                <option value="">All Experience Levels</option>
                                <option value="25+">25+ Years</option>
                                <option value="20+">20+ Years</option>
                                <option value="15+">15+ Years</option>
                                <option value="10+">10+ Years</option>
                                <option value="5+">5+ Years</option>
                            </select>
                        </div>

                        <!-- Specialty Filter -->
                        <div class="filter-section">
                            <label class="filter-label">Specialty</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="general" id="general">
                                <label class="form-check-label" for="general">Gynae Laparoscopic Surgeries</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="obstetrics" id="obstetrics">
                                <label class="form-check-label" for="obstetrics">Obstetrics and Gynaecology</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="fertility" id="fertility">
                                <label class="form-check-label" for="fertility">Pediatricians</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="oncology" id="oncology">
                                <label class="form-check-label" for="oncology">ENT</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="endocrinology" id="endocrinology">
                                <label class="form-check-label" for="endocrinology">General Surgery</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="endocrinology" id="endocrinology">
                                <label class="form-check-label" for="endocrinology">Orthopedics</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="endocrinology" id="endocrinology">
                                <label class="form-check-label" for="endocrinology">Reconstructive URO Surgery</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="endocrinology" id="endocrinology">
                                <label class="form-check-label" for="endocrinology">Critical Cases & ICU</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="endocrinology" id="endocrinology">
                                <label class="form-check-label" for="endocrinology">Bariatric Surgery</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="endocrinology" id="endocrinology">
                                <label class="form-check-label" for="endocrinology">Internal Medicine</label>
                            </div>
                        </div>

                        <!-- Availability Filter -->
                        <div class="filter-section">
                            <label class="filter-label">Availability</label>
                            <select class="form-select" id="availabilityFilter">
                                <option value="">Any Time</option>
                                <option value="today">Available Today</option>
                                <option value="week">This Week</option>
                                <option value="month">This Month</option>
                            </select>
                        </div>

                        <!-- Gender Filter -->
                        <div class="filter-section">
                            <label class="filter-label">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="male" id="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="female" id="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Doctors List -->
                <div class="col-lg-9">
{{--                    <div class="search-container">--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="text" class="form-control search-bar" placeholder="Search by doctor ..." id="doctorSearch">--}}
{{--                            <button class="btn search-btn" type="button">--}}
{{--                                <i class="fas fa-search me-2"></i>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <!-- <div class="doctors-grid" id="doctorsGrid">
                    </div> -->
                    <div class="row">
                        <!-- Doctor Card 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="card doctor-card">
                                <span class="experience-badge">18+ Years</span>
                                <img src="{{asset('assets/nikita.webp')}}" alt="Doctor" />
                                <div class="doctor-info">
                                    <h5>Dr. Nikita Trehan</h5>
                                    <p>MBBS, DNB, MNAMS Diploma in Laparoscopic Surgery </p>
                                    <p class="text-success">Gynae Laparoscopic Surgery</p>
                                    <div class="doctor-actions d-flex">
                                        <button class="btn btn-appointment flex-fill me-2" data-bs-toggle="tooltip"
                                                title="Book Appointment">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </button>
                                        <a href="{{url('doctor-detail')}}" class="btn btn-profile flex-fill" data-bs-toggle="tooltip" title="View Profile">
                                            <i class="fa-solid fa-user"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Doctor Card 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="card doctor-card">
                                <span class="experience-badge">31+ Years</span>
                                <img src="https://www.sunrisehospitals.in/wp-content/uploads/2024/12/Dr.Anand-Wadera.jpg"
                                     alt="Doctor" />
                                <div class="doctor-info">
                                    <h5>Dr. Anand Wadera</h5>
                                    <p>MBBS, MS</p>
                                    <p class="text-success">Orthopaedics, Joint Replacement & Sports Injury</p>
                                    <div class="doctor-actions d-flex">
                                        <button class="btn btn-appointment flex-fill me-2" data-bs-toggle="tooltip"
                                                title="Book Appointment">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </button>
                                        <button class="btn btn-profile flex-fill" data-bs-toggle="tooltip" title="View Profile">
                                            <i class="fa-solid fa-user"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Doctor Card 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="card doctor-card">
                                <span class="experience-badge">8+ Years</span>
                                <img src="https://www.sunrisehospitals.in/wp-content/uploads/2024/12/Dr.-prakhar-final.png"
                                     alt="Doctor" />
                                <div class="doctor-info">
                                    <h5>Dr. Prakhar Singh</h5>
                                    <p>MBBS, MD</p>
                                    <p class="text-success">Critical Care Medicine & Diabetologist</p>
                                    <div class="doctor-actions d-flex">
                                        <button class="btn btn-appointment flex-fill me-2" data-bs-toggle="tooltip"
                                                title="Book Appointment">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </button>
                                        <button class="btn btn-profile flex-fill" data-bs-toggle="tooltip" title="View Profile">
                                            <i class="fa-solid fa-user"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Doctor Card 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="card doctor-card">
                                <span class="experience-badge">20+ Years</span>
                                <img src="https://www.sunrisehospitals.in/wp-content/uploads/2024/12/Dr-Saurabh-Sinha.png" alt="Doctor" />
                                <div class="doctor-info">
                                    <h5>Dr. Saurabh Sinha</h5>
                                    <p>MBBS, MS, M.Ch</p>
                                    <p class="text-success">Urologist</p>
                                    <div class="doctor-actions d-flex">
                                        <button class="btn btn-appointment flex-fill me-2" data-bs-toggle="tooltip" title="Book Appointment">
                                                <i class="fa-solid fa-calendar-check"></i>
                                        </button>
                                        <button class="btn btn-profile flex-fill" data-bs-toggle="tooltip" title="View Profile">
                                            <i class="fa-solid fa-user"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Doctor Card 4 -->
                        <div class="col-md-4 mb-4">
                            <div class="card doctor-card">
                                <span class="experience-badge">10+ Years</span>
                                <img src="{{asset('assets/images/doctors/Dr-Sanjay-Gudwani.webp')}}"
                                     alt="Doctor" />
                                <div class="doctor-info">
                                    <h5>Dr Sanjay Gudwani</h5>
                                    <p>MBBS, MS</p>
                                    <p class="text-success">ENT</p>
                                    <div class="doctor-actions d-flex">
                                        <button class="btn btn-appointment flex-fill me-2" data-bs-toggle="tooltip"
                                                title="Book Appointment">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </button>
                                        <button class="btn btn-profile flex-fill" data-bs-toggle="tooltip" title="View Profile">
                                            <i class="fa-solid fa-user"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Doctor Card 5 -->
                        <div class="col-md-4 mb-4">
                            <div class="card doctor-card">
                                <span class="experience-badge">10+ Years</span>
                                <img src="{{asset('assets/images/doctors/Dr.Anmol-Maria.webp')}}"
                                     alt="Doctor" />
                                <div class="doctor-info">
                                    <h5>Dr Anmol Maria</h5>
                                    <p>MBBS, MS</p>
                                    <p class="text-success">Orthopaedics, Joint Replacement & Sports Injury</p>
                                    <div class="doctor-actions d-flex">
                                        <button class="btn btn-appointment flex-fill me-2" data-bs-toggle="tooltip"
                                                title="Book Appointment">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </button>
                                        <button class="btn btn-profile flex-fill" data-bs-toggle="tooltip" title="View Profile">
                                            <i class="fa-solid fa-user"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Doctor Card 6 -->
                        <div class="col-md-4 mb-4">
                            <div class="card doctor-card">
                                <span class="experience-badge">36+ Years</span>
                                <img src="{{asset('assets/images/doctors/Dr-Anupama-Sobti.webp')}}"
                                     alt="Doctor" />
                                <div class="doctor-info">
                                    <h5>Dr. Anupama Sobti</h5>
                                    <p>MBBS DGO</p>
                                    <p class="text-success">Obstetrics & Gynaecology</p>
                                    <div class="doctor-actions d-flex">
                                        <button class="btn btn-appointment flex-fill me-2" data-bs-toggle="tooltip"
                                                title="Book Appointment">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </button>
                                        <button class="btn btn-profile flex-fill" data-bs-toggle="tooltip" title="View Profile">
                                            <i class="fa-solid fa-user"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Doctor Card 7 -->
                        <div class="col-md-4 mb-4">
                            <div class="card doctor-card">
                                <span class="experience-badge">25+ Years</span>
                                <img src="{{asset('assets/images/doctors/Dr-Bhavna-Barmi.webp')}}"
                                     alt="Doctor" />
                                <div class="doctor-info">
                                    <h5>Dr. Bhawna Barmi</h5>
                                    <p>Ph.d, M.phil (NIMHANS, Bangalore)</p>
                                    <p class="text-success">Senior clinical and child psychologist</p>
                                    <div class="doctor-actions d-flex">
                                        <button class="btn btn-appointment flex-fill me-2" data-bs-toggle="tooltip"
                                                title="Book Appointment">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </button>
                                        <button class="btn btn-profile flex-fill" data-bs-toggle="tooltip" title="View Profile">
                                            <i class="fa-solid fa-user"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Doctor Card 8 -->
                        <div class="col-md-4 mb-4">
                            <div class="card doctor-card">
                                <span class="experience-badge">18+ Years</span>
                                <img src="{{asset('assets/images/doctors/Dr-Deepak-Kapoor.webp')}}"
                                     alt="Doctor" />
                                <div class="doctor-info">
                                    <h5>Dr. Deepak Kapoor</h5>
                                    <p>MBBS, MS</p>
                                    <p class="text-success">General & Bariatric Surgery</p>
                                    <div class="doctor-actions d-flex">
                                        <button class="btn btn-appointment flex-fill me-2" data-bs-toggle="tooltip"
                                                title="Book Appointment">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </button>
                                        <button class="btn btn-profile flex-fill" data-bs-toggle="tooltip" title="View Profile">
                                            <i class="fa-solid fa-user"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Doctor Card 9 -->
                        <div class="col-md-4 mb-4">
                            <div class="card doctor-card">
                                <span class="experience-badge">10+ Years</span>
                                <img src="{{asset('assets/images/doctors/Dr-Vaibhav-Gautam.webp')}}"
                                     alt="Doctor" />
                                <div class="doctor-info">
                                    <h5>Dr. Vaibhav Gautam</h5>
                                    <p>MBBS, MS</p>
                                    <p class="text-success">Orthopaedics, Joint Replacement & Sports Injury</p>
                                    <div class="doctor-actions d-flex">
                                        <button class="btn btn-appointment flex-fill me-2" data-bs-toggle="tooltip"
                                                title="Book Appointment">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </button>
                                        <button class="btn btn-profile flex-fill" data-bs-toggle="tooltip" title="View Profile">
                                            <i class="fa-solid fa-user"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Doctor Card 10 -->
                        <div class="col-md-4 mb-4">
                            <div class="card doctor-card">
                                <span class="experience-badge">24+ Years</span>
                                <img src="{{asset('assets/images/doctors/Dr-Beena-Tiwari.webp')}}"
                                     alt="Doctor" />
                                <div class="doctor-info">
                                    <h5>Dr. Beena Tiwari</h5>
                                    <p>MBBS, MD</p>
                                    <p class="text-success">Radiologist</p>
                                    <div class="doctor-actions d-flex">
                                        <button class="btn btn-appointment flex-fill me-2" data-bs-toggle="tooltip"
                                                title="Book Appointment">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </button>
                                        <button class="btn btn-profile flex-fill" data-bs-toggle="tooltip" title="View Profile">
                                            <i class="fa-solid fa-user"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Doctor Card 11 -->
                        <div class="col-md-4 mb-4">
                            <div class="card doctor-card">
                                <span class="experience-badge">24+ Years</span>
                                <img src="{{asset('assets/images/doctors/Dr-Sumit-More.webp')}}"
                                     alt="Doctor" />
                                <div class="doctor-info">
                                    <h5>Dr. Sumit More</h5>
                                    <p>MBBS, MS, MCh (Uro)</p>
                                    <p class="text-success">Consultant Urologist</p>
                                    <div class="doctor-actions d-flex">
                                        <button class="btn btn-appointment flex-fill me-2" data-bs-toggle="tooltip"
                                                title="Book Appointment">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </button>
                                        <button class="btn btn-profile flex-fill" data-bs-toggle="tooltip" title="View Profile">
                                            <i class="fa-solid fa-user"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Filter functionality
        function applyFilters() {
            const sortFilter = document.getElementById('sortFilter').value;
            const experienceFilter = document.getElementById('experienceFilter').value;
            const availabilityFilter = document.getElementById('availabilityFilter').value;
            const searchQuery = document.getElementById('doctorSearch').value.toLowerCase();

            const specialtyFilters = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(cb => cb.value);
            const genderFilter = document.querySelector('input[name="gender"]:checked')?.value;

            const doctorCards = document.querySelectorAll('.doctor-card');
            let visibleCount = 0;

            doctorCards.forEach(card => {
                let show = true;

                // Search filter
                if (searchQuery) {
                    const doctorName = card.querySelector('h5').textContent.toLowerCase();
                    const specialty = card.querySelector('.speciality').textContent.toLowerCase();
                    if (!doctorName.includes(searchQuery) && !specialty.includes(searchQuery)) {
                        show = false;
                    }
                }

                // Experience filter
                if (experienceFilter && !card.dataset.experience.includes(experienceFilter.replace('+', ''))) {
                    show = false;
                }

                // Specialty filter
                if (specialtyFilters.length > 0) {
                    const cardSpecialties = card.dataset.specialty.split(',');
                    const hasMatchingSpecialty = specialtyFilters.some(filter =>
                        cardSpecialties.includes(filter)
                    );
                    if (!hasMatchingSpecialty) {
                        show = false;
                    }
                }

                // Availability filter
                if (availabilityFilter && card.dataset.availability !== availabilityFilter) {
                    show = false;
                }

                // Gender filter
                if (genderFilter && card.dataset.gender !== genderFilter) {
                    show = false;
                }

                card.style.display = show ? 'block' : 'none';
                if (show) visibleCount++;
            });

            // Update results count
            document.getElementById('resultsCount').textContent = `Showing ${visibleCount} doctor${visibleCount !== 1 ? 's' : ''}`;

            // Apply sorting
            applySorting(sortFilter);
        }

        function applySorting(sortBy) {
            const grid = document.getElementById('doctorsGrid');
            const cards = Array.from(grid.children).filter(card => card.style.display !== 'none');

            cards.sort((a, b) => {
                switch(sortBy) {
                    case 'experience':
                        const expA = parseInt(a.dataset.experience);
                        const expB = parseInt(b.dataset.experience);
                        return expB - expA;
                    case 'availability':
                        const availabilityOrder = { 'today': 3, 'week': 2, 'month': 1 };
                        return availabilityOrder[b.dataset.availability] - availabilityOrder[a.dataset.availability];
                    case 'name':
                    default:
                        const nameA = a.querySelector('h5').textContent;
                        const nameB = b.querySelector('h5').textContent;
                        return nameA.localeCompare(nameB);
                }
            });

            // Reorder cards
            cards.forEach(card => grid.appendChild(card));
        }

        function clearFilters() {
            document.getElementById('sortFilter').value = 'name';
            document.getElementById('experienceFilter').value = '';
            document.getElementById('availabilityFilter').value = '';
            document.getElementById('doctorSearch').value = '';

            document.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
            document.querySelectorAll('input[name="gender"]').forEach(radio => radio.checked = false);

            applyFilters();
        }

        // Event listeners
        document.getElementById('sortFilter').addEventListener('change', applyFilters);
        document.getElementById('experienceFilter').addEventListener('change', applyFilters);
        document.getElementById('availabilityFilter').addEventListener('change', applyFilters);
        document.getElementById('doctorSearch').addEventListener('input', applyFilters);

        document.querySelectorAll('input[type="checkbox"]').forEach(cb => {
            cb.addEventListener('change', applyFilters);
        });

        document.querySelectorAll('input[name="gender"]').forEach(radio => {
            radio.addEventListener('change', applyFilters);
        });

        // Search button functionality
        document.querySelector('.search-btn').addEventListener('click', applyFilters);

        // Enter key for search
        document.getElementById('doctorSearch').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                applyFilters();
            }
        });

        // Initialize page
        applyFilters();
    </script>
@endsection




