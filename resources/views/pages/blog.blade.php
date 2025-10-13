@extends('layout.master')
@section('css')
    <style>


    </style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container container-custom">
            <!-- Breadcrumb -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog Section -->
    <section class="recent-articles">
        <div class="container">
            <div class="row">
                <!-- Blog Section -->
                <div class="col-lg-8">
                    <div class="row g-4" id="blog-list">
                        <!-- Blog Card 1 -->
                        <div class="col-lg-6 col-md-12 blog-item">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://www.sunrisehospitals.in/wp-content/uploads/2025/06/Best-Gynecologist-in-Delhi-1024x576.webp" alt="Women's Health" />
                                </div>
                                <div class="blog-content">
                                    <a href="{{url('/blog-detail')}}">
                                        <h3 class="blog-title">
                                            Best Gynecologist in Delhi for Your Pregnancy and Reproductive Health
                                        </h3>
                                    </a>
                                    <p class="blog-excerpt">
                                        When it comes to women’s health, finding the best gynecologist in Delhi is crucial for ensuring quality care, whether you’re planning a pregnancy, seeking infertility treatment, or addressing reproductive health concerns. Delhi, a hub for advanced medical care, offers numerous options, but selecting the right specialist can be overwhelming. At Sunrise Hospitals, we pride ourselves
                                    </p>
                                    <div class="blog-meta">
                                        <span class="author">DR. NIKITA TREHAN</span>
                                        <div class="meta-info">
                                            <span class="date">Sep 22, 2025</span> |
                                            <span class="read-time">9 min read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Card 2 -->
                        <div class="col-lg-6 col-md-12 blog-item">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://www.sunrisehospitals.in/wp-content/uploads/2025/04/Pregnancy-Specialist-in-Delhi-1024x576.webp" alt="Brain-Eating Amoeba" />
                                </div>
                                <div class="blog-content">
                                    <a href="{{url('/blog-detail')}}">
                                        <h3 class="blog-title">
                                            Pregnancy Specialist in Delhi at Sunrise Hospital with Dr. Nikita Trehan
                                        </h3>
                                    </a>
                                    <p class="blog-excerpt">
                                        Pregnancy is a transformative journey that requires expert care to ensure the health and safety of both mother and baby. Choosing the best pregnancy doctor in Delhi is crucial for a smooth and healthy pregnancy. At Sunrise Hospital, under the expert guidance of Dr. Nikita Trehan, expecting mothers receive world-class prenatal care tailored to their
                                    </p>
                                    <div class="blog-meta">
                                        <span class="author">DR. NIKITA TREHAN</span>
                                        <div class="meta-info">
                                            <span class="date">Sep 22, 2025</span> |
                                            <span class="read-time">7 min read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card 3 -->
                        <div class="col-lg-6 col-md-12 blog-item">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src=https://www.sunrisehospitals.in/wp-content/uploads/2023/08/dr-nikita-trehan-1-464x487-1.jpg" alt="Brain-Eating Amoeba" />
                                </div>
                                <div class="blog-content">
                                    <a href="{{url('/blog-detail')}}">
                                        <h3 class="blog-title">
                                            Health Concern for Women and Best Endometriosis Treatment in Delhi
                                        </h3>
                                    </a>
                                    <p class="blog-excerpt">
                                        Endometriosis and adenomyosis have emerged as critical health issues affecting millions of women worldwide. At Sunrise Hospital, we take pride in offering the best endometriosis treatment in Delhi, thanks to our dedicated team of specialists. Combining gynecologists, laparoscopic surgeons, urologists, gastro surgeons, and IVF experts, we provide comprehensive care tailored to each patient’s needs.
                                    </p>
                                    <div class="blog-meta">
                                        <span class="author">DR. NIKITA TREHAN</span>
                                        <div class="meta-info">
                                            <span class="date">Sep 22, 2025</span> |
                                            <span class="read-time">7 min read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card 4 -->
                        <div class="col-lg-6 col-md-12 blog-item">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://www.sunrisehospitals.in/wp-content/uploads/2023/11/images-2.jpeg" alt="Brain-Eating Amoeba"/>
                                </div>
                                <div class="blog-content">
                                    <a href="{{url('/blog-detail')}}">
                                        <h3 class="blog-title">
                                            Can Endometriosis Get Worse with Age and best Endometriosis Treatment in Delhi?
                                        </h3>
                                    </a>
                                    <p class="blog-excerpt">
                                        Endometriosis is a chronic medical condition that affects individuals with female reproductive systems. It occurs when tissue resembling the uterine lining (endometrium) grows outside the uterus, often in the pelvic region, but can spread to other parts of the body. Endometriosis can lead to severe pain, irregular menstrual cycles, and infertility. Many people wonder whether
                                    </p>
                                    <div class="blog-meta">
                                        <span class="author">DR. NIKITA TREHAN</span>
                                        <div class="meta-info">
                                            <span class="date">Sep 22, 2025</span> |
                                            <span class="read-time">7 min read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card 5 -->
                        <div class="col-lg-6 col-md-12 blog-item">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://www.sunrisehospitals.in/wp-content/uploads/2023/09/Cervical-Cancer-HPV-1024x427.webp" alt="Brain-Eating Amoeba" />
                                </div>
                                <div class="blog-content">
                                    <a href="{{url('/blog-detail')}}">
                                        <h3 class="blog-title">
                                            Cervical Cancer: Risk Factors, Prevention, and Cervical Cancer Treatment Cast
                                        </h3>
                                    </a>
                                    <p class="blog-excerpt">
                                        Cervical cancer, a type of cancer that originates in the cells of the cervix (the lower part of the uterus that connects to the vagina), remains one of the most common cancers affecting women globally. In most cases, the cause of cervical cancer is an infection with the human papillomavirus (HPV), a sexually transmitted infection
                                    </p>
                                    <div class="blog-meta">
                                        <span class="author">DR. NIKITA TREHAN</span>
                                        <div class="meta-info">
                                            <span class="date">Sep 22, 2025</span> |
                                            <span class="read-time">7 min read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card 6 -->
                        <div class="col-lg-6 col-md-12 blog-item">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://www.sunrisehospitals.in/wp-content/uploads/2023/09/AdobeStock_167846258.jpg" alt="Brain-Eating Amoeba" />
                                </div>
                                <div class="blog-content">
                                    <a href="{{url('/blog-detail')}}">
                                        <h3 class="blog-title">
                                            Preparing Yourself for a Healthy Pregnancy: Guidance from Sunrise Hospital, a Leading Gynecology
                                        </h3>
                                    </a>
                                    <p class="blog-excerpt">
                                        Embarking on the journey of pregnancy is a life-changing experience that requires proper planning, preparation, and expert care. Sunrise Hospital, recognized as the best hospital for maternity and pregnancy in Delhi, provides top-tier gynecological and obstetric care to ensure a smooth and healthy pregnancy. Whether you need IVF treatment in Delhi, recurrent miscarriage treatment, infertility
                                    </p>
                                    <div class="blog-meta">
                                        <span class="author">DR. NIKITA TREHAN</span>
                                        <div class="meta-info">
                                            <span class="date">Sep 22, 2025</span> |
                                            <span class="read-time">7 min read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card 7 -->
                        <div class="col-lg-6 col-md-12 blog-item">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://www.sunrisehospitals.in/wp-content/uploads/2023/09/doctor-examining-pregnant-woman-at-home-487684483-595192633df78cae81c33eb6-1024x683.jpg" alt="Brain-Eating Amoeba" />
                                </div>
                                <div class="blog-content">
                                    <a href="{{url('/blog-detail')}}">
                                        <h3 class="blog-title">
                                            What Should You Do After Miscarriage? Most Common Signs And Symptoms Of Miscarriage?
                                        </h3>
                                    </a>
                                    <p class="blog-excerpt">
                                        Miscarriage, also known as spontaneous abortion, occurs when the baby does not develop normally inside the womb. It is a heartbreaking experience for many women, but with the right medical care and emotional support, recovery is possible. If you have experienced multiple pregnancy losses, seeking recurrent miscarriage treatment in Delhi is crucial for identifying potential
                                    </p>
                                    <div class="blog-meta">
                                        <span class="author">DR. NIKITA TREHAN</span>
                                        <div class="meta-info">
                                            <span class="date">Sep 22, 2025</span> |
                                            <span class="read-time">7 min read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card 8 -->
                        <div class="col-lg-6 col-md-12 blog-item">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://www.sunrisehospitals.in/wp-content/uploads/2023/04/cancers-in-the-female-reproductive-organs.jpg" alt="Brain-Eating Amoeba" />
                                </div>
                                <div class="blog-content">
                                    <a href="{{url('/blog-detail')}}">
                                        <h3 class="blog-title">
                                            Cancers in the Female Reproductive Organs: Symptoms, Prevention, and Advanced Treatment Options
                                        </h3>
                                    </a>
                                    <p class="blog-excerpt">
                                        Cancer of the female reproductive organs is a growing concern worldwide, with cervical cancer being the most common among Indian women. According to Dr. Nikita Trehan, one of the best gynecologists in Delhi, the incidence of cervical cancer in India is still high compared to the Western world, where preventive measures have significantly reduced cases.
                                    </p>
                                    <div class="blog-meta">
                                        <span class="author">DR. NIKITA TREHAN</span>
                                        <div class="meta-info">
                                            <span class="date">Sep 22, 2025</span> |
                                            <span class="read-time">7 min read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card 9 -->
                        <div class="col-lg-6 col-md-12 blog-item">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://www.sunrisehospitals.in/wp-content/uploads/2023/04/push-to-replace-open-hysterectomy-with-keyhole-226-1024x614.jpg" alt="Brain-Eating Amoeba" />
                                </div>
                                <div class="blog-content">
                                    <a href="{{url('/blog-detail')}}">
                                        <h3 class="blog-title">
                                            Hysterectomy Vs Open Surgery Vs Laparoscopic Surgery – A Critical Review
                                        </h3>
                                    </a>
                                    <p class="blog-excerpt">
                                        This article explores the differences between hysterectomy, open surgery vs laparoscopic surgery, their advantages and disadvantages, and why choosing the Best Laparoscopic Surgeon in Delhi is crucial for better health outcomes. When it comes to gynecological health, surgical interventions often become necessary for conditions like fibroids, endometriosis, recurrent miscarriages, and other reproductive health concerns.
                                    </p>
                                    <div class="blog-meta">
                                        <span class="author">DR. NIKITA TREHAN</span>
                                        <div class="meta-info">
                                            <span class="date">Sep 22, 2025</span> |
                                            <span class="read-time">7 min read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card 10 -->
                        <div class="col-lg-6 col-md-12 blog-item">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="https://www.sunrisehospitals.in/wp-content/uploads/2023/04/blog-v.jpeg" alt="Brain-Eating Amoeba" />
                                </div>
                                <div class="blog-content">
                                    <a href="{{url('/blog-detail')}}">
                                        <h3 class="blog-title">
                                            Why We Need Laparoscopic Surgery & the Best Gynecologist in Delhi
                                        </h3>
                                    </a>
                                    <p class="blog-excerpt">
                                        Laparoscopic surgery has transformed the field of gynecology, offering women safer and more effective treatments with minimal downtime. Whether it’s treating endometriosis, infertility, recurrent miscarriages, or performing hysterectomies, laparoscopic surgery in Delhi is becoming the preferred choice for women seeking minimally invasive solutions. When it comes to women’s healthcare, having the best gynecologist in Delhi
                                    </p>
                                    <div class="blog-meta">
                                        <span class="author">DR. NIKITA TREHAN</span>
                                        <div class="meta-info">
                                            <span class="date">Sep 22, 2025</span> |
                                            <span class="read-time">7 min read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat more cards -->
                    </div>
                    <!-- Load More Button -->
                    <div class="text-center mt-5">
                        <button  id="loadMoreBtn" class="btn btn-lg" style="background: linear-gradient(135deg, rgb(36,162,205) 0%, rgb(0,151,167) 100%); color: white; border: none; border-radius: 10px; font-weight: 600;font-size: 14px;">
                            Load More
                        </button>
                    </div>
                </div>
                <!-- Sidebar Section -->
                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
                    <div class="specialities-sidebar p-3">
                        <h3 class="mb-3">Recent Blogs</h3>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge rounded">Best Gynecologist in Delhi for Your Pregnancy and Reproductive Health</span>
                            <span class="badge rounded">Pregnancy Specialist in Delhi at Sunrise Hospital with Dr. Nikita Trehan</span>
                            <span class="badge rounded">Health Concern for Women and Best Endometriosis Treatment in Delhi</span>
                            <span class="badge rounded">Can Endometriosis Get Worse with Age and best Endometriosis Treatment in Delhi?</span>
                            <span class="badge rounded">Cervical Cancer: Risk Factors, Prevention, and Cervical Cancer Treatment Cast</span>
                            <span class="badge rounded">Preparing Yourself for a Healthy Pregnancy: Guidance from Sunrise Hospital, a Leading Gynecology</span>
                            <span class="badge rounded">Cancers in the Female Reproductive Organs: Symptoms, Prevention, and Advanced Treatment Options</span>
                            <span class="badge rounded">What Should You Do After Miscarriage? Most Common Signs And Symptoms Of Miscarriage?</span>
                            <span class="badge rounded">Hysterectomy Vs Open Surgery Vs Laparoscopic Surgery – A Critical Review</span>
                            <span class="badge rounded">Why We Need Laparoscopic Surgery & the Best Gynecologist in Delhi</span>
                            <span class="badge rounded">Best Endometriosis Treatment in Delhi – Advanced Care at Sunrise Hospital</span>
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
            const excerpts = document.querySelectorAll(".blog-excerpt");

            excerpts.forEach(function (excerpt) {
                let text = excerpt.innerText.trim();
                let words = text.split(" ");

                if (words.length > 20) {
                    let shortText = words.slice(0, 20).join(" ") + "...";
                    excerpt.innerText = shortText;
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            let items = document.querySelectorAll("#blog-list .blog-item");
            let loadMoreBtn = document.getElementById("loadMoreBtn");
            let visible = 4; // show first 4 cards

            // Hide extra items initially
            for (let i = visible; i < items.length; i++) {
                items[i].style.display = "none";
            }

            loadMoreBtn.addEventListener("click", function() {
                let hiddenItems = 0;
                for (let i = visible; i < visible + 4 && i < items.length; i++) {
                    items[i].style.display = "block";
                    hiddenItems++;
                }
                visible += hiddenItems;

                // Hide button if all items are visible
                if (visible >= items.length) {
                    loadMoreBtn.style.display = "none";
                }
            });
        });
    </script>
@endsection