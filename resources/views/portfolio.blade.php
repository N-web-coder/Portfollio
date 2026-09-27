@extends('layouts.index')

@section('title', 'Nitish Kumar | Laravel Developer')

@section('content')

{{-- HERO --}}
<section class="hero-section" id="home">
    <div class="container">
        <div class="hero-content">
            <span class="availability">
                <span class="status-dot"></span>
                Available for freelance projects
            </span>

            <p class="eyebrow">HELLO, I'M</p>

            <h1>Nitish Kumar<span>.</span></h1>

            <h2>
                Laravel Developer
                <span class="gradient-text">& Backend Engineer</span>
            </h2>

            <p class="hero-description">
                I build reliable, scalable and user-friendly web
                applications using Laravel, PHP and MySQL.
                Turning ideas into practical digital solutions.
            </p>

            <div class="hero-buttons">
                <a href="#projects" class="btn-primary">
                    Explore My Work <i class="fas fa-arrow-up-right-from-square"></i>
                </a>

                <a href="#contact" class="btn-outline">
                    Let's Work Together
                </a>
            </div>

            <div class="hero-socials">
                <a href="https://github.com/N-web-coder"
                   target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-github"></i> GitHub
                </a>

                <a href="https://www.linkedin.com/in/nitish-kumar-32a386187/"
                   target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
            </div>
        </div>

        <div class="hero-badge">
            <i class="fab fa-laravel"></i>
            <span>Building with Laravel</span>
        </div>
    </div>
</section>

{{-- ABOUT --}}
<section class="section" id="about">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">GET TO KNOW ME</span>
            <h2>About <span>Me</span></h2>
        </div>

        <div class="about-grid">
            <div class="about-card">
                <div class="about-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Backend Development</h3>
                <p>
                    I am a Laravel Developer with 2.2 years of
                    experience building web applications, working
                    with databases, authentication, APIs and
                    business logic.
                </p>
            </div>

            <div class="about-details">
                <p>
                    I enjoy solving real-world problems through
                    clean code and practical software solutions.
                    My work includes management systems,
                    marketplaces and real-time applications.
                </p>

                <p>
                    I focus on writing maintainable code,
                    building secure applications and continuously
                    improving my development skills.
                </p>

                <a href="{{ asset('resume.docx') }}"
                   class="btn-outline"
                   target="_blank">
                    <i class="fas fa-file-pdf"></i> View Resume
                </a>
            </div>
        </div>
    </div>
</section>

{{-- SKILLS --}}
<section class="section section-alt" id="skills">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">MY TOOLKIT</span>
            <h2>Technical <span>Skills</span></h2>
        </div>

        <div class="skills-grid">
            @foreach($skills as $skill)
                <div class="skill-card">
                    <i class="fas fa-check-circle"></i>
                    {{ $skill }}
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- PROJECTS --}}
<section class="section" id="projects">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">SOME THINGS I'VE BUILT</span>
            <h2>Featured <span>Projects</span></h2>
            <p>Selected work and personal projects.</p>
        </div>

        <div class="projects-grid">
            @foreach($projects as $project)
                <article class="project-card">
                    <div class="project-icon">
                        <i class="fas {{ $project['icon'] }}"></i>
                    </div>

                    <span class="project-category">
                        {{ $project['category'] }}
                    </span>

                    <h3>{{ $project['name'] }}</h3>

                    <p>{{ $project['description'] }}</p>

                    <div class="project-links">
                        @if($project['github'] !== '#')
                            <a href="{{ $project['github'] }}"
                               target="_blank"
                               rel="noopener noreferrer">
                                <i class="fab fa-github"></i> Source Code
                            </a>
                        @endif

                        @if($project['demo'] !== '#')
                            <a href="{{ $project['demo'] }}"
                               target="_blank"
                               rel="noopener noreferrer">
                                Live Demo <i class="fas fa-arrow-up-right-from-square"></i>
                            </a>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- CONTACT --}}
<section class="section section-alt" id="contact">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">HAVE A PROJECT IN MIND?</span>
            <h2>Let's Work <span>Together</span></h2>
            <p>Have a Laravel project? Let's discuss it.</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <a href="mailto:nitishkr152@gmail.com">
                    <i class="fas fa-envelope"></i>
                    <span>nitishkr152@gmail.com</span>
                </a>

                <a href="https://github.com/N-web-coder"
                   target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-github"></i>
                    <span>GitHub Profile</span>
                </a>

                <a href="https://www.linkedin.com/in/nitish-kumar-32a386187/"
                   target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-linkedin"></i>
                    <span>LinkedIn Profile</span>
                </a>
            </div>

            <form action="{{ route('portfolio.contact') }}"
                  method="POST" class="contact-form">
                @csrf

                @if(session('success'))
                    <div class="success-message">
                        {{ session('success') }}
                    </div>
                @endif

                <input type="text" name="name"
                       placeholder="Your name"
                       value="{{ old('name') }}" required>
                @error('name') <small>{{ $message }}</small> @enderror

                <input type="email" name="email"
                       placeholder="Your email"
                       value="{{ old('email') }}" required>
                @error('email') <small>{{ $message }}</small> @enderror

                <textarea name="message" rows="5"
                          placeholder="Tell me about your project"
                          required>{{ old('message') }}</textarea>
                @error('message') <small>{{ $message }}</small> @enderror

                <button type="submit" class="btn-primary">
                    Send Message <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</section>

<footer class="footer">
    <p>Designed & developed by <span>Nitish Kumar</span></p>
    <p>© {{ date('Y') }} • Built with Laravel</p>
</footer>

@endsection