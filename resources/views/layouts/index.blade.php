@extends('layouts.layout')
<style>
    .hero-wrapper {
        position: relative;
        overflow: hidden;
    }

    .hero-top-shape {
        position: absolute !important;
        left: auto !important;
        right: 0 !important;
    }

    .hero-bottom-shape {
        position: absolute !important;
        left: auto !important;
        right: 0 !important;
    }

    .skill-display-section.section-gap-tb-100 {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .skill-display-wrapper {
        gap: 18px;
    }

    .skill-progress-single-item {
        margin-bottom: 18px;
    }

    .project-display-section {
        position: relative;
    }

    .project-card {
        position: relative;
        height: 100%;
        padding: 35px;
        border: 1px solid rgba(0, 0, 0, 0.08);
        border-radius: 18px;
        background: #2a2c39;
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .project-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
    }

    .project-card-content {
        position: relative;
        z-index: 2;
    }

    .project-number {
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 18px;
        opacity: 0.5;
    }

    .project-category {
        display: inline-block;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .project-title {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .project-description {
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 22px;
        opacity: 0.75;
    }

    .project-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 25px;
    }

    .project-tech span {
        padding: 6px 12px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 600;
        background: #f4f4f4;
    }

    .project-links {
        display: flex;
        align-items: center;
        gap: 22px;
    }

    .project-link {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
    }

    .project-link.secondary {
        opacity: 0.7;
    }

    @media (max-width: 767px) {

        .project-card {
            padding: 25px;
        }

        .project-title {
            font-size: 23px;
        }

        .project-links {
            gap: 15px;
        }

    }

    .technology-list {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 30px;
    }

    .technology-card {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        padding: 10px 18px;

        border: 1px solid rgba(0, 0, 0, 0.08);
        border-radius: 8px;

        background: #fff;

        font-size: 14px;
        font-weight: 600;

        white-space: nowrap;

        transition: all 0.3s ease;
    }

    .technology-card:hover {
        transform: translateY(-3px);
    }
    
</style>
@section('content')
    <div class="hero-section section-dark-blue-bg">
        <div class="hero-wrapper">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <div class="hero-content">

                            <h3 class="title-big">Hello! I'm</h3>

                            <h2 class="title-large">Nitish Kumar</h2>

                            <p>
                                Laravel Developer
                                <span class="mx-2">|</span>
                                PHP Developer
                            </p>

                            <p class="mt-3">
                                I build scalable web applications using Laravel,
                                PHP, MySQL, REST APIs and modern web technologies.
                            </p>

                            <div class="d-flex flex-wrap gap-3 mt-4">

                                <a href="{{ asset('resume.docx') }}" target="_blank"
                                    class="btn btn-xl btn-outline-one icon-space-left">
                                    Get Resume
                                    <i class="icofont-download"></i>
                                </a>

                                {{-- <a href="{{ route('projects') }}" class="btn btn-xl btn-outline-one">
                                    View Projects
                                    <i class="icofont-arrow-right"></i>
                                </a> --}}

                            </div>

                            <div class="footer-single-info mt-5">
                                <a href="{{ env('FACEBOOK') }}" class="info-box">
                                    <span class="icon"><i class="icofont-facebook"></i></span>
                                </a>
                                <a href="{{ env('GITHUB') }}" class="info-box">
                                    <span class="icon"><i class="icofont-github"></i></span>
                                </a>
                                <a href="{{ env('LINKEDIN') }}" class="info-box">
                                    <span class="icon"><i class="icofont-linkedin"></i></span>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- RIGHT SIDE DECORATIVE SHAPES --}}
            <div class="hero-shape hero-top-shape">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="hero-shape hero-bottom-shape">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>



    </div>

    {{-- ================= SERVICES ================= --}}

    <div class="service-display-section section-gap-tb-165 pos-relative">


        <div class="container">

            <div class="row">
                <div class="col-12">

                    <div class="section-content">

                        <span class="section-tag">My Services</span>

                        <h2 class="section-title">
                            What I Can Build For You.
                        </h2>

                    </div>

                </div>
            </div>

        </div>

        <div class="service-display-wrapper">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <div class="service-display-slider">

                            <div class="swiper-container">

                                <div class="swiper-wrapper">

                                    {{-- Laravel --}}
                                    <div class="service-box-single-item swiper-slide">

                                        <div class="inner-shape inner-shape-top-right"></div>

                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon/service-icon-1.png') }}"
                                                alt="Laravel Development">
                                        </div>

                                        <h4 class="title">
                                            Laravel Development
                                        </h4>

                                        <ul class="list-item">
                                            <li>Laravel Web Applications</li>
                                            <li>REST APIs</li>
                                            <li>Authentication & Authorization</li>
                                            <li>Admin Dashboards</li>
                                            <li>Database Integration</li>
                                        </ul>

                                        <div class="inner-shape inner-shape-bottom-right"></div>

                                    </div>


                                    {{-- Backend --}}
                                    <div class="service-box-single-item swiper-slide">

                                        <div class="inner-shape inner-shape-top-right"></div>

                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon/service-icon-2.png') }}"
                                                alt="Backend Development">
                                        </div>

                                        <h4 class="title">
                                            Backend Development
                                        </h4>

                                        <ul class="list-item">
                                            <li>PHP Development</li>
                                            <li>MySQL Database</li>
                                            <li>API Integration</li>
                                            <li>CRUD Systems</li>
                                            <li>Third Party APIs</li>
                                        </ul>

                                        <div class="inner-shape inner-shape-bottom-right"></div>

                                    </div>


                                    {{-- Full Stack --}}
                                    <div class="service-box-single-item swiper-slide">

                                        <div class="inner-shape inner-shape-top-right"></div>

                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon/service-icon-1.png') }}"
                                                alt="Web Development">
                                        </div>

                                        <h4 class="title">
                                            Web Application Development
                                        </h4>

                                        <ul class="list-item">
                                            <li>Responsive Websites</li>
                                            <li>Bootstrap UI</li>
                                            <li>Laravel Blade</li>
                                            <li>JavaScript</li>
                                            <li>Git & GitHub</li>
                                        </ul>

                                        <div class="inner-shape inner-shape-bottom-right"></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>

    {{-- ================= SKILLS ================= --}}

    <div class="skill-display-section section-gap-tb-100 section-bg pos-relative">

        <div class="skill-display-section-box">

            <div class="container">

                <div class="row align-items-center">

                    {{-- LEFT CONTENT --}}
                    <div class="col-xl-5 col-xxl-5">

                        <div class="section-content">

                            <span class="section-tag">
                                Technical Skills
                            </span>

                            <h2 class="section-title">
                                Technologies I Work With.
                            </h2>

                            <p class="mt-3 mb-4">
                                Building scalable web applications and RESTful APIs
                                using Laravel, PHP, MySQL and modern web technologies.
                            </p>

                            <a href="{{ asset('resume.docx') }}" target="_blank"
                                class="btn btn-xl btn-outline-one icon-space-left">

                                Get Resume

                                <i class="icofont-download"></i>

                            </a>

                        </div>

                    </div>


                    {{-- RIGHT SKILLS --}}
                    <div class="col-xl-6 col-xxl-6 offset-xxl-1">

                        <div class="skill-display-wrapper">

                            {{-- Laravel --}}
                            <div class="skill-progress-single-item">
                                <span class="tag">Laravel / PHP</span>

                                <div class="skill-box">
                                    <div class="progress-line" data-width="92">
                                        <span class="skill-percentage">92%</span>
                                    </div>
                                </div>
                            </div>


                            {{-- MySQL --}}
                            <div class="skill-progress-single-item">
                                <span class="tag">MySQL / Database</span>

                                <div class="skill-box">
                                    <div class="progress-line" data-width="88">
                                        <span class="skill-percentage">88%</span>
                                    </div>
                                </div>
                            </div>


                            {{-- REST API --}}
                            <div class="skill-progress-single-item">
                                <span class="tag">REST API / Sanctum / JWT</span>

                                <div class="skill-box">
                                    <div class="progress-line" data-width="86">
                                        <span class="skill-percentage">86%</span>
                                    </div>
                                </div>
                            </div>


                            {{-- Frontend --}}
                            <div class="skill-progress-single-item">
                                <span class="tag">JavaScript / React / Bootstrap</span>

                                <div class="skill-box">
                                    <div class="progress-line" data-width="80">
                                        <span class="skill-percentage">80%</span>
                                    </div>
                                </div>
                            </div>


                            {{-- Git --}}
                            <div class="skill-progress-single-item">
                                <span class="tag">Git / GitHub</span>

                                <div class="skill-box">
                                    <div class="progress-line" data-width="78">
                                        <span class="skill-percentage">78%</span>
                                    </div>
                                </div>
                            </div>


                            {{-- AI --}}
                            <div class="skill-progress-single-item">
                                <span class="tag">AI / LangChain / RAG</span>

                                <div class="skill-box">
                                    <div class="progress-line" data-width="65">
                                        <span class="skill-percentage">40%</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="skill-display-shape"></div>

    </div>

    {{-- ================= COUNTERS ================= --}}

    <div class="counter-display-section section-gap-tb-165 section-bg-2">


        <div class="counter-display-wrapper">

            <div class="container">

                <div class="row justify-content-center">

                    {{-- Experience --}}
                    <div class="d-block d-md-flex justify-content-md-center col-12 col-sm-4 col-md-4">

                        <div class="counterup-single-item">

                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/counterup-icon-1.png') }}" alt="Experience">
                            </div>

                            <div class="content">

                                <h2 class="number">
                                    <span class="counter">2.2</span>+
                                </h2>

                                <span class="text">
                                    Years Experience
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- Projects --}}
                    <div class="d-block d-md-flex justify-content-md-center col-12 col-sm-4 col-md-4">

                        <div class="counterup-single-item">

                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/counterup-icon-2.png') }}" alt="Projects">
                            </div>

                            <div class="content">

                                <h2 class="number">
                                    <span class="counter">6</span>+
                                </h2>

                                <span class="text">
                                    Projects
                                </span>

                            </div>

                        </div>

                    </div>


                    {{-- Technologies --}}
                    <div class="d-block d-md-flex justify-content-md-center col-12 col-sm-4 col-md-4">

                        <div class="counterup-single-item">

                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/counterup-icon-3.png') }}" alt="Technologies">
                            </div>

                            <div class="content">

                                <h2 class="number">
                                    <span class="counter">8</span>+
                                </h2>

                                <span class="text">
                                    Technologies
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>

    {{-- ================= PROJECTS SECTION ================= --}}
    <div class="project-display-section section-gap-tb-100">

        <div class="container">

            {{-- Section Heading --}}
            <div class="row">
                <div class="col-12">

                    <div class="section-content text-center mb-5">

                        <span class="section-tag">
                            Featured Projects
                        </span>

                        <h2 class="section-title">
                            Projects I've Worked On.
                        </h2>

                        <p class="mt-3">
                            A collection of web applications, backend systems and
                            AI-powered projects built using modern technologies.
                        </p>

                    </div>

                </div>
            </div>


            <div class="row g-4">

                @foreach ($projects as $project)
                    <div class="col-lg-6">

                        <div class="project-card h-100">

                            <div class="project-card-content">

                                @if (!empty($project['image']))
                                    <div class="project-image mb-4">
                                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                                            class="img-fluid">
                                    </div>
                                @endif

                                <div class="project-number">
                                    {{ $project['number'] }}
                                </div>

                                <span class="project-category">
                                    {{ $project['type'] }}
                                </span>

                                <h3 class="project-title">
                                    {{ $project['title'] }}
                                </h3>

                                <p class="project-description">
                                    {{ $project['description'] }}
                                </p>

                                <div class="project-tech">

                                    @foreach ($project['technologies'] as $technology)
                                        <span> {{ $technology }} </span>
                                    @endforeach

                                </div>

                                <div class="project-links">

                                    @if ($project['live_url'] !== '#')
                                        <a href="{{ $project['live_url'] }}" target="_blank" class="project-link">
                                            View Project <i class="icofont-arrow-right"></i>
                                        </a>
                                    @endif

                                    @if ($project['github_url'] !== '#')
                                        <a href="{{ $project['github_url'] }}" target="_blank"
                                            class="project-link secondary">
                                            <i class="icofont-github"></i> GitHub
                                        </a>
                                    @endif

                                </div>

                                <a href="{{ route('projects', $project['number']) }}" class="project-link">
                                    View Details
                                    <i class="icofont-arrow-right"></i>
                                </a>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </div>


    {{-- ================= TESTIMONIAL / ABOUT ================= --}}

    <div class="testimonial-display-section section-gap-tb-165 section-bg">


        <div class="testimonial-display-box d-flex flex-column align-items-center d-xl-block pos-relative">

            <div class="container overflow-hidden">

                <div class="row">

                    <div class="col d-xl-flex justify-content-xl-end">

                        <div class="section-content pos-relative">

                            <span class="section-tag">
                                About Me
                            </span>

                            <h2 class="section-title">
                                Building Practical Web Solutions.
                            </h2>

                        </div>

                    </div>

                </div>


                <div class="testimonial-display-wrapper">

                    <div class="row">

                        <div class="col-lg-8 ms-auto">

                            <div class="testimonial-slider-single-item">

                                <div class="inner-shape inner-shape-top-right"></div>

                                <div class="content">

                                    <span class="icon">“</span>

                                    <p class="text">

                                        I'm a Laravel Developer with 2.2+ years
                                        of experience in developing web applications,
                                        backend systems, REST APIs and database-driven
                                        applications.

                                        <br><br>

                                        My primary stack includes Laravel, PHP, MySQL,
                                        Bootstrap, JavaScript and Git. I also explore
                                        AI technologies such as RAG, LangChain,
                                        FastAPI and LLM-based applications.

                                    </p>

                                    <div class="info">

                                        <div class="author">

                                            <h4 class="name">
                                                Nitish Kumar
                                            </h4>

                                            <span class="designation">
                                                Laravel Developer
                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>

    {{-- ================= TECHNOLOGIES ================= --}}

    <div class="company-logo-display section-mt-165">

        <div class="company-logo-display-box">

            <div class="container">

                {{-- ================= SECTION HEADING ================= --}}
                <div class="row">

                    <div class="col">

                        <div class="section-content pos-relative">

                            <span class="section-tag">
                                Technologies
                            </span>

                            <h2 class="section-title">
                                Technologies I Use.
                            </h2>

                        </div>

                    </div>

                </div>


                {{-- ================= TECHNOLOGY SLIDER ================= --}}
                <div class="company-logo-display-wrapper">

                    <div class="row">

                        <div class="col">

                            <div class="company-logo-display-slider">

                                <div class="swiper-container">

                                    <div class="swiper-wrapper">

                                        @php
                                            $technologies = [
                                                'Laravel',
                                                'PHP',
                                                'MySQL',
                                                'Bootstrap',
                                                'REST API',
                                                'Razorpay',
                                                'RBAC',
                                                'Postman',
                                                'Github',
                                                'JavaScript',
                                                'Python',
                                                'LangChain',
                                                'RAG',
                                                'Vector Search',
                                                'LLM',
                                            ];
                                        @endphp

                                        <div class="company-logo-display section-mt-165">

                                            <div class="company-logo-display-box">

                                                <div class="container">

                                                    <div class="row">

                                                        <div class="col">

                                                            <div class="section-content pos-relative">

                                                                <span class="section-tag">
                                                                    Technologies
                                                                </span>

                                                                <h2 class="section-title">
                                                                    Technologies I Use.
                                                                </h2>

                                                            </div>

                                                        </div>

                                                    </div>


                                                    <div class="company-logo-display-wrapper">

                                                        <div class="row">

                                                            <div class="col">

                                                                <div class="technology-list">

                                                                    @foreach ($technologies as $technology)
                                                                        <div class="technology-card">

                                                                            <span>
                                                                                {{ $technology }}
                                                                            </span>

                                                                        </div>
                                                                    @endforeach

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- ================= BLOG / CURRENT FOCUS ================= --}}

    <div class="blog-feed-display-section section-gap-tb-165">


        <div class="blog-feed-display-box">

            <div class="container">

                <div class="row">

                    <div class="col">

                        <div class="section-content pos-relative text-center">

                            <span class="section-tag">
                                Current Focus
                            </span>

                            <h2 class="section-title">
                                What I'm Learning
                            </h2>

                        </div>

                    </div>

                </div>


                <div class="blog-feed-display-wrapper">

                    <div class="row mb-n5">


                        {{-- AI --}}
                        <div class="col-12 mb-5">

                            <div class="blog-feed-single-item">

                                <div class="inner-shape inner-shape-top-right"></div>

                                <div class="content-box">

                                    <div class="content">

                                        <div class="post-meta">

                                            <span class="catagory">
                                                AI Development
                                            </span>

                                        </div>

                                        <h4 class="title">
                                            Learning RAG, LangChain,
                                            FastAPI and LLM applications.
                                        </h4>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Laravel --}}
                        <div class="col-12 mb-5">

                            <div class="blog-feed-single-item">

                                <div class="inner-shape inner-shape-top-right"></div>

                                <div class="content-box">

                                    <div class="content">

                                        <div class="post-meta">

                                            <span class="catagory">
                                                Laravel
                                            </span>

                                        </div>

                                        <h4 class="title">
                                            Building scalable Laravel applications,
                                            REST APIs and real-world management systems.
                                        </h4>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- System Design --}}
                        <div class="col-12 mb-5">

                            <div class="blog-feed-single-item">

                                <div class="inner-shape inner-shape-top-right"></div>

                                <div class="content-box">

                                    <div class="content">

                                        <div class="post-meta">

                                            <span class="catagory">
                                                Backend
                                            </span>

                                        </div>

                                        <h4 class="title">
                                            Improving backend architecture,
                                            database design and system design skills.
                                        </h4>

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
