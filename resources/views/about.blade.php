@extends('layouts.index')

<style>
    /* =========================
       ABOUT PAGE
    ========================= */

    .nk-about-page {
        width: 100%;
        min-height: 100vh;
        padding: 150px 0 100px;
        background: var(--bg);
        color: var(--text);
        position: relative;
    }

    .nk-about-page .container {
        position: relative;
    }

    /* =========================
       PAGE HEADER
    ========================= */

    .nk-about-heading {
        width: 100%;
        max-width: 800px;
        margin: 0 auto 65px;
        text-align: center;
    }

    .nk-about-eyebrow {
        display: inline-block;
        margin-bottom: 15px;

        color: var(--accent);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .nk-about-title {
        margin: 0 0 20px !important;
        padding: 0 !important;

        color: var(--text) !important;
        font-size: clamp(42px, 6vw, 68px) !important;
        line-height: 1.05 !important;
        font-weight: 800 !important;
        letter-spacing: -2px;
    }

    .nk-about-title span {
        color: var(--accent);
    }

    .nk-about-intro {
        max-width: 680px;
        margin: 0 auto !important;

        color: var(--muted);
        font-size: 15px;
        line-height: 1.8;
    }

    /* =========================
       MAIN ABOUT CARD
    ========================= */

    .nk-about-card {
        width: 100%;
        padding: 45px;

        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: 18px;

        box-sizing: border-box;
    }

    .nk-about-card h2 {
        margin: 0 0 18px !important;
        padding: 0 !important;

        color: var(--text) !important;
        font-size: 30px !important;
        line-height: 1.2 !important;
        font-weight: 700 !important;
    }

    .nk-about-card h2 span {
        color: var(--accent);
    }

    .nk-about-text {
        margin: 0 0 18px !important;

        color: var(--muted);
        font-size: 15px;
        line-height: 1.9;
    }

    .nk-about-text:last-child {
        margin-bottom: 0 !important;
    }

    /* =========================
       EXPERIENCE / STATS
    ========================= */

    .nk-about-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-top: 25px;
    }

    .nk-about-stat {
        padding: 22px 18px;

        background: var(--surface-2);
        border: 1px solid var(--border);
        border-radius: 12px;

        text-align: center;
        transition: all 0.3s ease;
    }

    .nk-about-stat:hover {
        border-color: rgba(56, 217, 169, 0.35);
        transform: translateY(-3px);
    }

    .nk-about-stat strong {
        display: block;
        margin-bottom: 6px;

        color: var(--accent);
        font-size: 26px;
        font-weight: 800;
    }

    .nk-about-stat span {
        color: var(--muted);
        font-size: 12px;
        font-weight: 600;
    }

    /* =========================
       SKILLS
    ========================= */

    .nk-about-section {
        margin-top: 25px;
    }

    .nk-about-section-title {
        margin: 0 0 20px !important;
        padding: 0 !important;

        color: var(--text) !important;
        font-size: 24px !important;
        font-weight: 700 !important;
    }

    .nk-about-skills {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .nk-about-skill {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        padding: 9px 14px;

        background: var(--surface-2);
        border: 1px solid var(--border);
        border-radius: 8px;

        color: var(--muted);
        font-size: 13px;
        font-weight: 600;

        transition: all 0.25s ease;
    }

    .nk-about-skill i {
        color: var(--accent);
        font-size: 15px;
    }

    .nk-about-skill:hover {
        color: var(--text);
        border-color: rgba(56, 217, 169, 0.35);
        transform: translateY(-2px);
    }

    /* =========================
       WHAT I DO
    ========================= */

    .nk-about-services {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
    }

    .nk-about-service {
        padding: 25px;

        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: 14px;

        transition: all 0.3s ease;
    }

    .nk-about-service:hover {
        border-color: rgba(56, 217, 169, 0.35);
        transform: translateY(-4px);
    }

    .nk-about-service-icon {
        width: 45px;
        height: 45px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 18px;

        background: rgba(56, 217, 169, 0.08);
        border: 1px solid rgba(56, 217, 169, 0.15);
        border-radius: 10px;

        color: var(--accent);
        font-size: 20px;
    }

    .nk-about-service h3 {
        margin: 0 0 10px !important;
        padding: 0 !important;

        color: var(--text) !important;
        font-size: 18px !important;
        font-weight: 700 !important;
    }

    .nk-about-service p {
        margin: 0 !important;

        color: var(--muted);
        font-size: 13px;
        line-height: 1.7;
    }

    /* =========================
       CURRENT FOCUS
    ========================= */

    .nk-about-focus {
        margin-top: 25px;
        padding: 30px;

        background: var(--surface);
        border: 1px solid rgba(56, 217, 169, 0.18);
        border-radius: 15px;
    }

    .nk-about-focus-title {
        display: flex;
        align-items: center;
        gap: 10px;

        margin-bottom: 12px;

        color: var(--text);
        font-size: 20px;
        font-weight: 700;
    }

    .nk-about-focus-title i {
        color: var(--accent);
    }

    .nk-about-focus p {
        margin: 0;

        color: var(--muted);
        font-size: 14px;
        line-height: 1.8;
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 991px) {

        .nk-about-page {
            padding-top: 120px;
        }

        .nk-about-heading {
            margin-bottom: 45px;
        }

        .nk-about-card {
            padding: 35px;
        }

        .nk-about-services {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 767px) {

        .nk-about-page {
            padding-top: 100px;
            padding-bottom: 60px;
        }

        .nk-about-heading {
            margin-bottom: 35px;
        }

        .nk-about-title {
            font-size: 42px !important;
            letter-spacing: -1.5px;
        }

        .nk-about-card {
            padding: 25px;
            border-radius: 15px;
        }

        .nk-about-card h2 {
            font-size: 26px !important;
        }

        .nk-about-stats {
            grid-template-columns: 1fr;
        }

        .nk-about-service {
            padding: 22px;
        }

        .nk-about-focus {
            padding: 25px;
        }
    }
</style>

@section('content')

<div class="nk-about-page">

    <div class="container">

        {{-- ================= PAGE HEADER ================= --}}
        <div class="nk-about-heading">

            <span class="nk-about-eyebrow">
                About Me
            </span>

            <h1 class="nk-about-title">
                Building Ideas Into
                <span>Digital Solutions</span>
            </h1>

            <p class="nk-about-intro">
                I'm a Laravel Developer focused on building clean, scalable
                and user-friendly web applications with modern backend
                technologies.
            </p>

        </div>


        {{-- ================= ABOUT ================= --}}
        <div class="row">

            <div class="col-12">

                <div class="nk-about-card">

                    <h2>
                        Hello, I'm <span>Nitish</span>
                    </h2>

                    <p class="nk-about-text">
                        I'm a Laravel Developer with around 2+ years of
                        experience in developing web applications using PHP,
                        Laravel, MySQL and modern web technologies.
                    </p>

                    <p class="nk-about-text">
                        I enjoy working on backend architecture, database
                        design, authentication systems, APIs and complete
                        Laravel applications. My focus is on writing clean,
                        maintainable code and creating applications that are
                        practical and easy to use.
                    </p>

                    <p class="nk-about-text">
                        Along with Laravel development, I'm also exploring
                        Artificial Intelligence, RAG and agentic AI systems
                        to understand how AI can be integrated into real-world
                        applications.
                    </p>


                    {{-- ================= STATS ================= --}}
                    <div class="nk-about-stats">

                        <div class="nk-about-stat">
                            <strong>2+</strong>
                            <span>Years Experience</span>
                        </div>

                        <div class="nk-about-stat">
                            <strong>Laravel</strong>
                            <span>Primary Framework</span>
                        </div>

                        <div class="nk-about-stat">
                            <strong>AI</strong>
                            <span>Current Learning Focus</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- ================= WHAT I DO ================= --}}
        <div class="nk-about-section">

            <h2 class="nk-about-section-title">
                What I Do
            </h2>

            <div class="nk-about-services">

                <div class="nk-about-service">

                    <div class="nk-about-service-icon">
                        <i class="icofont-code"></i>
                    </div>

                    <h3>Laravel Development</h3>

                    <p>
                        Building scalable Laravel applications with clean
                        architecture, authentication, CRUD systems, APIs
                        and database integration.
                    </p>

                </div>


                <div class="nk-about-service">

                    <div class="nk-about-service-icon">
                        <i class="icofont-database"></i>
                    </div>

                    <h3>Backend & Database</h3>

                    <p>
                        Designing database structures, relationships,
                        queries, migrations and backend logic for
                        real-world applications.
                    </p>

                </div>


                <div class="nk-about-service">

                    <div class="nk-about-service-icon">
                        <i class="icofont-brain"></i>
                    </div>

                    <h3>AI Integration</h3>

                    <p>
                        Exploring RAG, LangGraph and AI agents to build
                        intelligent features and AI-powered applications.
                    </p>

                </div>

            </div>

        </div>


        {{-- ================= SKILLS ================= --}}
        <div class="nk-about-section">

            <h2 class="nk-about-section-title">
                Technical Skills
            </h2>

            <div class="nk-about-skills">

                <span class="nk-about-skill">
                    <i class="icofont-check"></i>
                    PHP
                </span>

                <span class="nk-about-skill">
                    <i class="icofont-check"></i>
                    Laravel
                </span>

                <span class="nk-about-skill">
                    <i class="icofont-check"></i>
                    MySQL
                </span>

                <span class="nk-about-skill">
                    <i class="icofont-check"></i>
                    REST API
                </span>

                <span class="nk-about-skill">
                    <i class="icofont-check"></i>
                    JavaScript
                </span>

                <span class="nk-about-skill">
                    <i class="icofont-check"></i>
                    Bootstrap
                </span>

                <span class="nk-about-skill">
                    <i class="icofont-check"></i>
                    Git
                </span>

                <span class="nk-about-skill">
                    <i class="icofont-check"></i>
                    GitHub
                </span>

                <span class="nk-about-skill">
                    <i class="icofont-check"></i>
                    LangGraph
                </span>

                <span class="nk-about-skill">
                    <i class="icofont-check"></i>
                    RAG
                </span>

            </div>

        </div>


        {{-- ================= CURRENT FOCUS ================= --}}
        <div class="nk-about-focus">

            <div class="nk-about-focus-title">
                <i class="icofont-bulb"></i>
                Currently Exploring
            </div>

            <p>
                I'm currently expanding my development skills beyond
                traditional web applications by learning AI agents,
                Retrieval-Augmented Generation (RAG), LangGraph and
                AI-powered workflows with Laravel and Python.
            </p>

        </div>

    </div>

</div>

@endsection