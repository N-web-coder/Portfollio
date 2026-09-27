@extends('layouts.index')

<style>
    /* =========================
       SERVICES PAGE
    ========================= */

    .nk-services-page {
        width: 100%;
        min-height: 100vh;
        padding: 150px 0 100px;
        background: var(--bg);
        color: var(--text);
    }

    .nk-services-page .container {
        position: relative;
    }

    /* =========================
       PAGE HEADER
    ========================= */

    .nk-services-heading {
        width: 100%;
        max-width: 780px;
        margin: 0 auto 65px;
        text-align: center;
    }

    .nk-services-eyebrow {
        display: inline-block;
        margin-bottom: 15px;

        color: var(--accent);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .nk-services-title {
        margin: 0 0 20px !important;
        padding: 0 !important;

        color: var(--text) !important;
        font-size: clamp(42px, 6vw, 68px) !important;
        line-height: 1.05 !important;
        font-weight: 800 !important;
        letter-spacing: -2px;
    }

    .nk-services-title span {
        color: var(--accent);
    }

    .nk-services-intro {
        max-width: 680px;
        margin: 0 auto !important;

        color: var(--muted);
        font-size: 15px;
        line-height: 1.8;
    }

    /* =========================
       SERVICES GRID
    ========================= */

    .nk-services-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    /* =========================
       SERVICE CARD
    ========================= */

    .nk-service-card {
        position: relative;
        padding: 32px;

        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: 16px;

        overflow: hidden;
        transition: all 0.3s ease;
    }

    .nk-service-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;

        width: 0;
        height: 2px;

        background: var(--accent);

        transition: width 0.35s ease;
    }

    .nk-service-card:hover {
        border-color: rgba(56, 217, 169, 0.30);
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.16);
    }

    .nk-service-card:hover::before {
        width: 100%;
    }

    /* =========================
       ICON
    ========================= */

    .nk-service-icon {
        width: 52px;
        height: 52px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 22px;

        background: rgba(56, 217, 169, 0.08);
        border: 1px solid rgba(56, 217, 169, 0.16);
        border-radius: 13px;

        color: var(--accent);
        font-size: 23px;

        transition: all 0.3s ease;
    }

    .nk-service-card:hover .nk-service-icon {
        background: rgba(56, 217, 169, 0.13);
        border-color: rgba(56, 217, 169, 0.30);
        transform: translateY(-2px);
    }

    /* =========================
       CONTENT
    ========================= */

    .nk-service-number {
        position: absolute;
        top: 28px;
        right: 30px;

        color: rgba(255, 255, 255, 0.08);
        font-size: 34px;
        font-weight: 800;
        line-height: 1;
    }

    .nk-service-card h3 {
        margin: 0 0 12px !important;
        padding: 0 !important;

        color: var(--text) !important;
        font-size: 21px !important;
        line-height: 1.3 !important;
        font-weight: 700 !important;
    }

    .nk-service-card p {
        margin: 0 0 22px !important;

        color: var(--muted);
        font-size: 14px;
        line-height: 1.8;
    }

    /* =========================
       SERVICE FEATURES
    ========================= */

    .nk-service-features {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .nk-service-feature {
        display: inline-flex;
        align-items: center;
        gap: 6px;

        padding: 7px 10px;

        background: var(--surface-2);
        border: 1px solid var(--border);
        border-radius: 7px;

        color: var(--muted);
        font-size: 11px;
        font-weight: 600;
    }

    .nk-service-feature i {
        color: var(--accent);
        font-size: 12px;
    }

    /* =========================
       BOTTOM CTA
    ========================= */

    .nk-services-cta {
        margin-top: 25px;
        padding: 35px;

        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 30px;

        background: var(--surface);
        border: 1px solid rgba(56, 217, 169, 0.18);
        border-radius: 16px;
    }

    .nk-services-cta-content {
        min-width: 0;
    }

    .nk-services-cta h2 {
        margin: 0 0 8px !important;
        padding: 0 !important;

        color: var(--text) !important;
        font-size: 24px !important;
        font-weight: 700 !important;
    }

    .nk-services-cta p {
        margin: 0 !important;

        color: var(--muted);
        font-size: 14px;
        line-height: 1.7;
    }

    .nk-services-cta-button {
        flex-shrink: 0;

        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;

        min-height: 46px;
        padding: 12px 22px;

        background: var(--accent);
        border: 1px solid var(--accent);
        border-radius: 8px;

        color: #06130f !important;
        text-decoration: none !important;

        font-size: 13px;
        font-weight: 700;

        transition: all 0.25s ease;
    }

    .nk-services-cta-button:hover {
        background: #65e8c0;
        border-color: #65e8c0;
        color: #06130f !important;
        transform: translateY(-2px);
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 991px) {

        .nk-services-page {
            padding-top: 120px;
        }

        .nk-services-heading {
            margin-bottom: 45px;
        }

        .nk-services-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 767px) {

        .nk-services-page {
            padding-top: 100px;
            padding-bottom: 60px;
        }

        .nk-services-heading {
            margin-bottom: 35px;
        }

        .nk-services-title {
            font-size: 42px !important;
            letter-spacing: -1.5px;
        }

        .nk-service-card {
            padding: 25px;
            border-radius: 14px;
        }

        .nk-service-number {
            top: 24px;
            right: 24px;
            font-size: 28px;
        }

        .nk-services-cta {
            padding: 25px;
            flex-direction: column;
            align-items: flex-start;
        }

        .nk-services-cta-button {
            width: 100%;
        }
    }
</style>


@section('content')

<div class="nk-services-page">

    <div class="container">

        {{-- ================= PAGE HEADER ================= --}}
        <div class="nk-services-heading">

            <span class="nk-services-eyebrow">
                My Services
            </span>

            <h1 class="nk-services-title">
                What I Can <span>Build</span>
            </h1>

            <p class="nk-services-intro">
                I help businesses and individuals build reliable,
                scalable and user-friendly web applications using
                modern backend technologies.
            </p>

        </div>


        {{-- ================= SERVICES ================= --}}
        <div class="nk-services-grid">


            {{-- SERVICE 01 --}}
            <div class="nk-service-card">

                <span class="nk-service-number">
                    01
                </span>

                <div class="nk-service-icon">
                    <i class="icofont-code"></i>
                </div>

                <h3>
                    Laravel Web Development
                </h3>

                <p>
                    Development of custom Laravel applications with
                    clean architecture, authentication, CRUD systems,
                    role-based access and scalable backend logic.
                </p>

                <div class="nk-service-features">

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Laravel
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        PHP
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        MVC
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Authentication
                    </span>

                </div>

            </div>


            {{-- SERVICE 02 --}}
            <div class="nk-service-card">

                <span class="nk-service-number">
                    02
                </span>

                <div class="nk-service-icon">
                    <i class="icofont-server"></i>
                </div>

                <h3>
                    Backend & API Development
                </h3>

                <p>
                    Building secure and structured backend systems,
                    REST APIs and server-side functionality for web
                    and application integrations.
                </p>

                <div class="nk-service-features">

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        REST API
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        JSON
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        API Auth
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Backend Logic
                    </span>

                </div>

            </div>


            {{-- SERVICE 03 --}}
            <div class="nk-service-card">

                <span class="nk-service-number">
                    03
                </span>

                <div class="nk-service-icon">
                    <i class="icofont-database"></i>
                </div>

                <h3>
                    Database Design
                </h3>

                <p>
                    Designing structured databases with proper
                    relationships, migrations and queries for
                    reliable and maintainable applications.
                </p>

                <div class="nk-service-features">

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        MySQL
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Migrations
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Relationships
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Query Optimization
                    </span>

                </div>

            </div>


            {{-- SERVICE 04 --}}
            <div class="nk-service-card">

                <span class="nk-service-number">
                    04
                </span>

                <div class="nk-service-icon">
                    <i class="icofont-bug"></i>
                </div>

                <h3>
                    Bug Fixing & Optimization
                </h3>

                <p>
                    Debugging existing Laravel applications,
                    fixing backend issues and improving code
                    structure and application performance.
                </p>

                <div class="nk-service-features">

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Debugging
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Laravel Fixes
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Optimization
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Maintenance
                    </span>

                </div>

            </div>


            {{-- SERVICE 05 --}}
            <div class="nk-service-card">

                <span class="nk-service-number">
                    05
                </span>

                <div class="nk-service-icon">
                    <i class="icofont-layout"></i>
                </div>

                <h3>
                    Web Application Development
                </h3>

                <p>
                    Complete web application development from
                    database and backend logic to responsive
                    frontend interfaces.
                </p>

                <div class="nk-service-features">

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Bootstrap
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        JavaScript
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Laravel
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Responsive UI
                    </span>

                </div>

            </div>


            {{-- SERVICE 06 --}}
            <div class="nk-service-card">

                <span class="nk-service-number">
                    06
                </span>

                <div class="nk-service-icon">
                    <i class="icofont-brain"></i>
                </div>

                <h3>
                    AI Integration
                </h3>

                <p>
                    Exploring AI-powered features including RAG,
                    AI agents and intelligent workflows that can
                    be integrated into modern web applications.
                </p>

                <div class="nk-service-features">

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        RAG
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        LangGraph
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        AI Agents
                    </span>

                    <span class="nk-service-feature">
                        <i class="icofont-check"></i>
                        Python
                    </span>

                </div>

            </div>

        </div>


        {{-- ================= CTA ================= --}}
        <div class="nk-services-cta">

            <div class="nk-services-cta-content">

                <h2>
                    Have a project in mind?
                </h2>

                <p>
                    Let's discuss your idea and turn it into
                    a practical digital solution.
                </p>

            </div>

            <a href="{{ url('/contact') }}"
               class="nk-services-cta-button">

                Let's Talk

                <i class="icofont-arrow-right"></i>

            </a>

        </div>

    </div>

</div>

@endsection