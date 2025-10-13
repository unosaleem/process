@extends('layout.master')
@section('css')
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container container-custom">
            <!-- Breadcrumb -->
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h5>Sunrise Hospital: Where Care Meets Community</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Sunrise Hospital: Where Care Meets Community</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card rare-card">
                        <img src="{{asset('assets/images/events/1.webp')}}" alt="Events 1" />
                        <div class="rare-card-body">
                            <h5 class="truncate-heading">Endometriosis New Horizons 2025</h5>
                            <p class="truncate-text">
                                Dr. Nikita Trehan was honored at Endometriosis Conference for expertise in laparoscopic endometriosis and adenomyosis management.
                            </p>
                            <a href="{{url('event-detail')}}" class="btn-read">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card rare-card">
                        <img src="{{asset('assets/images/events/2.webp')}}" alt="Events 2" />
                        <div class="rare-card-body">
                            <h5 class="truncate-heading">Lecture at Aiims</h5>
                            <p class="truncate-text">
                                Dr. Nikita Trehan delivered a lecture on Deeply Infiltrating Endometriosis Management at AOGD, AIIMS on 12/09/25.
                            </p>
                            <a href="{{url('event-detail')}}" class="btn-read">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card rare-card">
                        <img src="{{asset('assets/images/events/womens-day/6.webp')}}" alt="Events 3" />
                        <div class="rare-card-body">
                            <h5 class="truncate-heading">Women’s Day Celebration – Elite Gynae Forum</h5>
                            <p class="truncate-text">
                                Organized in collaboration with ABBOT India and Sunrise Hospital, Kalindi Colony.
                            </p>
                            <a href="{{url('event/womens-day')}}" class="btn-read">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card rare-card">
                        <img src="{{asset('assets/images/events/CME/6.webp')}}" alt="Rare Case 3" />
                        <div class="rare-card-body">
                            <h5 class="truncate-heading">CME on Advanced Laparoscopy Surgery</h5>
                            <p class="truncate-text">
                                A Continuing Medical Education program highlighting innovations and best practices in advanced laparoscopic surgery.
                            </p>
                            <a href="{{url('event/CME')}}" class="btn-read">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card rare-card">
                        <img src="{{asset('assets/images/events/workshop-patna/3.webp')}}" alt="Rare Case 3" />
                        <div class="rare-card-body">
                            <h5 class="truncate-heading">Single Faculty Workshop in Patna</h5>
                            <p class="truncate-text">
                                Performed 4 surgeries and delivered 3 lectures, with warm hospitality from Dr. Neelu Prasad and Dr. Mahesh Prasad.
                            </p>
                            <a href="{{url('event/workshop-patna')}}" class="btn-read">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card rare-card">
                        <img src="{{asset('assets/images/events/workshop-gurgaon/1.webp')}}" alt="Rare Case 3" />
                        <div class="rare-card-body">
                            <h5 class="truncate-heading">Gurgaon Gynae Society Expert Discussion</h5>
                            <p class="truncate-text">
                                Dr. Abha Majumdar shared insights on IVF, while Dr. Nikita Trehan presented advancements in laparoscopic surgery for endometriosis.
                            </p>
                            <a href="{{url('event/workshop-gurgaon')}}" class="btn-read">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card rare-card">
                        <img src="{{asset('assets/images/events/samastipur-basicon/3.webp')}}" alt="Rare Case 3" />
                        <div class="rare-card-body">
                            <h5 class="truncate-heading">Samastipur BASICON – Surgeries and Lectures</h5>
                            <p class="truncate-text">
                                Operated on 3 cases and delivered 2 lectures, with heartfelt hospitality from Dr. Shraddha, Dr. Mahesh Thakur, and the BASICON team.
                            </p>
                            <a href="{{url('event/samastipur-basicon')}}" class="btn-read">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card rare-card">
                        <img src="{{asset('assets/images/events/narchicon/3.webp')}}" alt="Rare Case 3" />
                        <div class="rare-card-body">
                            <h5 class="truncate-heading">Deliberation on Adenomyosis at Narchicon</h5>
                            <p class="truncate-text">
                                Discussed treatment of adenomyosis with an esteemed gathering of teachers including Manju Puri madam and Renu madam. Grateful to Team Narchicon, especially Achla madam, for the opportunity.
                            </p>
                            <a href="{{url('event/narchicon')}}" class="btn-read">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 9 -->
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card rare-card">
                        <img src="{{asset('assets/images/events/workshop-ludhiana/3.webp')}}" alt="Rare Case 3" />
                        <div class="rare-card-body">
                            <h5 class="truncate-heading">Lymphadenectomy at IAGE Workshop Ludhiana</h5>
                            <p class="truncate-text">
                                Performed at Fortis Ludhiana with the warm hospitality of Dr. Gursimran and the excellent support of the OT staff.
                            </p>
                            <a href="{{url('event/workshop-ludhiana')}}" class="btn-read">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Truncate paragraph text to 14 words
            document.querySelectorAll(".truncate-text").forEach(function (el) {
                let words = el.innerText.trim().split(" ");
                if (words.length > 12) {
                    el.innerText = words.slice(0, 12).join(" ") + "...";
                }
            });
        });
    </script>
@endsection
