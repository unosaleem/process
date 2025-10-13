@extends('layout.master')
@section('content')
    <section class="hero-section">
        <div class="container container-custom">
            <!-- Breadcrumb -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Rare Cases & Medical Breakthroughs</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="rare-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Rare Cases &amp; Medical Breakthroughs</h2>
                <p>
                    At Sunrise Hospital, South Delhi, our internationally trained doctors handle rare medical cases and deliver innovative gynecology, IVF, and minimally invasive treatments. Patients from India and abroad trust us for cutting-edge healthcare solutions.
                </p>
            </div>
             <div class="row">
                 <div class="col-lg-4 col-md-4">
                     <div class="card rare-card">
                         <img src="https://project.digitalnawab.com/sunrisehospital/assets/images/rare-case/republic.webp" alt="Rare Case 1">
                         <div class="rare-card-body">
                             <h5 class="truncate-heading">Endometriosis new horizons 2025</h5>
                             <p class="truncate-text">Dr. Nikita Trehan was honored at Endometriosis Conference for expertise...</p>
                             <a href="https://www.republicworld.com/initiatives/dr-nikita-trehan-delivers-twins-127-days-apart-in-rare-medical-feat" target="_blank" class="btn-read">Read More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-4">
                     <div class="card rare-card">
                         <img src="https://project.digitalnawab.com/sunrisehospital/assets/images/rare-case/edtimes.webp" alt="Rare Case 2">
                         <div class="rare-card-body">
                             <h5 class="truncate-heading">Lecture at aiims</h5>
                             <p class="truncate-text">Dr. Nikita Trehan delivered a lecture on Deeply Infiltrating Endometriosis...</p>
                             <a href="https://edtimes.in/dr-nikita-trehans-surgical-precision-achieves-127-day-twin-delivery-milestone/" target="_blank" class="btn-read">Read More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-4">
                     <div class="card rare-card">
                         <img src="https://project.digitalnawab.com/sunrisehospital/assets/images/rare-case/3.webp" alt="Rare Case 3">
                         <div class="rare-card-body">
                             <h5 class="truncate-heading">Dr. Nikita Trehan delivers...</h5>
                             <p class="truncate-text">World-renowned laparoscopic surgeon Dr. Nikita Trehan excels in managing high-risk...</p>
                             <a href="https://news.abplive.com/brand-wire/dr-nikita-trehan-achieves-medical-milestone-with-127-day-delayed-twin-delivery-1792718" target="_blank" class="btn-read">Read More</a>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </section>
@endsection