@extends('layouts.index')

<style>
    /* =========================
       CONTACT PAGE
    ========================= */

    .nk-contact-page {
        width: 100%;
        min-height: 100vh;
        padding: 150px 0 100px;
        background: var(--bg);
        color: var(--text);
        position: relative;
    }

    .nk-contact-page .container {
        position: relative;
    }

    /* =========================
       PAGE HEADER
    ========================= */

    .nk-contact-heading {
        width: 100%;
        max-width: 760px;
        margin: 0 auto 60px;
        text-align: center;
    }

    .nk-contact-eyebrow {
        display: inline-block;
        margin-bottom: 15px;
        color: var(--accent);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .nk-contact-title {
        margin: 0 0 20px !important;
        padding: 0 !important;
        color: var(--text) !important;
        font-size: clamp(42px, 6vw, 68px) !important;
        line-height: 1.05 !important;
        font-weight: 800 !important;
        letter-spacing: -2px;
    }

    .nk-contact-title span {
        color: var(--accent);
    }

    .nk-contact-intro {
        max-width: 650px;
        margin: 0 auto !important;
        color: var(--muted);
        font-size: 15px;
        line-height: 1.8;
    }

    /* =========================
       CONTACT CARD
    ========================= */

    .nk-contact-info {
        width: 100%;
        max-width: 850px;
        margin: 0 auto;
        padding: 45px;
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: 18px;
        box-sizing: border-box;
    }

    .nk-contact-info h3 {
        margin: 0 0 12px !important;
        padding: 0 !important;
        color: var(--text) !important;
        font-size: 30px !important;
        line-height: 1.2 !important;
        font-weight: 700 !important;
    }

    .nk-contact-info-text {
        max-width: 650px;
        margin: 0 0 35px !important;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.8;
    }

    /* =========================
       CONTACT ITEMS
    ========================= */

    .nk-contact-item {
        display: flex;
        align-items: center;
        gap: 15px;
        width: 100%;
        margin-bottom: 24px;
    }

    .nk-contact-icon {
        flex: 0 0 48px;
        width: 48px;
        height: 48px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: rgba(56, 217, 169, 0.08);
        border: 1px solid rgba(56, 217, 169, 0.15);
        border-radius: 12px;

        color: var(--accent);
        font-size: 20px;
    }

    .nk-contact-item-content {
        min-width: 0;
    }

    .nk-contact-item-content span {
        display: block;
        margin-bottom: 5px;

        color: var(--muted);
        font-size: 11px;
        line-height: 1;
        font-weight: 700;
        letter-spacing: 0.6px;
        text-transform: uppercase;
    }

    .nk-contact-item-content a,
    .nk-contact-item-content p {
        display: block;
        margin: 0 !important;
        padding: 0 !important;

        color: var(--text) !important;
        font-size: 14px;
        line-height: 1.5;
        font-weight: 600;
        text-decoration: none;

        overflow-wrap: anywhere;
    }

    .nk-contact-item-content a:hover {
        color: var(--accent) !important;
    }

    /* =========================
       SOCIAL
    ========================= */

    .nk-contact-social {
        margin-top: 38px;
        padding-top: 25px;
        border-top: 1px solid var(--border);
    }

    .nk-contact-social>span {
        display: block;
        margin-bottom: 14px;

        color: var(--muted);
        font-size: 12px;
        font-weight: 700;
    }

    .nk-contact-social-list {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .nk-contact-social-list a {
        width: 42px;
        height: 42px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: var(--surface-2);
        border: 1px solid var(--border);
        border-radius: 50%;

        color: var(--muted);
        text-decoration: none;
        font-size: 17px;

        transition: all 0.3s ease;
    }

    .nk-contact-social-list a:hover {
        color: var(--accent);
        border-color: var(--accent);
        transform: translateY(-3px);
    }

    /* =========================
       TABLET
    ========================= */

    @media (max-width: 991px) {

        .nk-contact-page {
            padding-top: 120px;
        }

        .nk-contact-heading {
            margin-bottom: 40px;
        }

        .nk-contact-info {
            padding: 35px;
        }
    }

    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 767px) {

        .nk-contact-page {
            padding-top: 100px;
            padding-bottom: 60px;
        }

        .nk-contact-heading {
            margin-bottom: 35px;
        }

        .nk-contact-title {
            font-size: 42px !important;
            letter-spacing: -1.5px;
        }

        .nk-contact-info {
            padding: 25px;
            border-radius: 15px;
        }

        .nk-contact-info h3 {
            font-size: 26px !important;
        }

        .nk-contact-item {
            align-items: flex-start;
        }
    }
</style>

@section('content')
    <div class="nk-contact-page">

        <div class="container">

            {{-- ================= PAGE HEADER ================= --}}
            <div class="nk-contact-heading">

                <span class="nk-contact-eyebrow">
                    Get In Touch
                </span>

                <h1 class="nk-contact-title">
                    Let's Work <span>Together</span>
                </h1>

                <p class="nk-contact-intro">
                    Have a project, job opportunity, or just want to discuss
                    something? Feel free to reach out. I'd be happy to hear from you.
                </p>

            </div>


            {{-- ================= CONTACT CONTENT ================= --}}
            <div class="row">

                <div class="col-12">

                    <div class="nk-contact-info">

                        <h3>
                            Let's talk
                        </h3>

                        <p class="nk-contact-info-text">
                            I'm always open to discussing new projects, development
                            opportunities, freelance work, or interesting ideas.
                        </p>


                        {{-- ================= EMAIL ================= --}}
                        <div class="nk-contact-item">

                            <div class="nk-contact-icon">
                                <i class="icofont-envelope"></i>
                            </div>

                            <div class="nk-contact-item-content">

                                <span>Email</span>

                                <a href="mailto:{{ env('EMAIL') }}">
                                    {{ env('EMAIL') }}
                                </a>

                            </div>

                        </div>


                        {{-- ================= PHONE ================= --}}
                        <div class="nk-contact-item">

                            <div class="nk-contact-icon">
                                <i class="icofont-phone"></i>
                            </div>

                            <div class="nk-contact-item-content">

                                <span>Phone</span>

                                <a href="tel:+91 {{ env('MOBILE') }}">
                                    +91 {{ env('MOBILE') }}
                                </a>

                            </div>

                        </div>


                        {{-- ================= LOCATION ================= --}}
                        <div class="nk-contact-item">

                            <div class="nk-contact-icon">
                                <i class="icofont-location-pin"></i>
                            </div>

                            <div class="nk-contact-item-content">

                                <span>Location</span>

                                <p>
                                    Patna, Bihar, India
                                </p>

                            </div>

                        </div>


                        {{-- ================= SOCIAL ================= --}}
                        <div>

                            <span>Follow Me</span>

                            <div class="footer-single-info">
                                <a href="{{ env('FACEBOOK') }}" class="info-box" target="_blank" rel="noopener noreferrer" >
                                    <span class="icon"><i class="icofont-facebook"></i></span>
                                </a>
                                <a href="{{ env('GITHUB') }}" class="info-box" target="_blank" rel="noopener noreferrer" >
                                    <span class="icon"><i class="icofont-github"></i></span>
                                </a>
                                <a href="{{ env('LINKEDIN') }}" class="info-box" target="_blank" rel="noopener noreferrer" >
                                    <span class="icon"><i class="icofont-linkedin"></i></span>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
