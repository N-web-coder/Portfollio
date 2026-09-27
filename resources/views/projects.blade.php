@extends('layouts.index')

@section('content')

<div class="project-detail-page">

    <div class="container">

        {{-- Back Button --}}
        <div class="project-back-wrapper">
            <a href="#"
               onclick="window.history.back(); return false;"
               class="project-back-link">

                <i class="icofont-arrow-left"></i>
                <span>Back to Projects</span>

            </a>
        </div>


        {{-- Project Hero --}}
        <div class="project-card">

            <div class="row align-items-center g-5">

                {{-- Project Content --}}
                <div class="col-lg-6">

                    <div class="project-heading">

                        <div class="project-label">

                            <span class="project-detail-number">
                                {{ $project['number'] }}
                            </span>

                            <span class="project-detail-type">
                                {{ $project['type'] }}
                            </span>

                        </div>

                        <h1 class="project-detail-title">
                            {{ $project['title'] }}
                        </h1>

                        <p class="project-detail-description">
                            {{ $project['description'] }}
                        </p>

                        <div class="project-meta">

                            <span class="text-warning" >Category</span>

                            <strong>
                                {{ $project['category'] }}
                            </strong>

                        </div>

                    </div>

                </div>


                {{-- Project Image --}}
                <div class="col-lg-6">

                    @if(!empty($project['image']))

                        <div class="project-detail-image">

                            <img src="{{ asset($project['image']) }}"
                                 alt="{{ $project['title'] }}">

                        </div>

                    @endif

                </div>

            </div>

        </div>


        {{-- Project Information --}}
        <div class="row g-4 project-information">

            {{-- Technologies --}}
            <div class="col-lg-6">

                <div class="project-card h-100">

                    <div class="project-info-icon">
                        <i class="icofont-code"></i>
                    </div>

                    <h3>Technologies</h3>

                    <p class="project-info-text">
                        Technologies and tools used to build this project.
                    </p>

                    <div class="project-tech-list">

                        @foreach($project['technologies'] as $technology)

                            <span class="project-tech-item">
                                {{ $technology }}
                            </span>

                        @endforeach

                    </div>

                </div>

            </div>


            {{-- Key Features --}}
            <div class="col-lg-6">

                <div class="project-card h-100">

                    <div class="project-info-icon">
                        <i class="icofont-check-circled"></i>
                    </div>

                    <h3>Key Features</h3>

                    <p class="project-info-text">
                        Main features and functionality implemented in this project.
                    </p>

                    <ul class="project-feature-list">

                        @foreach($project['features'] as $feature)

                            <li>
                                <i class="icofont-check"></i>
                                <span>{{ $feature }}</span>
                            </li>

                        @endforeach

                    </ul>

                </div>

            </div>

        </div>


        {{-- Project Actions --}}
        @if(
            (!empty($project['live_url']) && $project['live_url'] !== '#') ||
            (!empty($project['github_url']) && $project['github_url'] !== '#')
        )

            <div class="project-detail-actions">

                @if(!empty($project['live_url']) && $project['live_url'] !== '#')

                    <a href="{{ $project['live_url'] }}"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="project-action-btn primary">

                        <span>View Live Project</span>
                        <i class="icofont-arrow-right"></i>

                    </a>

                @endif


                @if(!empty($project['github_url']) && $project['github_url'] !== '#')

                    <a href="{{ $project['github_url'] }}"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="project-action-btn secondary">

                        <i class="icofont-github"></i>
                        <span>View on GitHub</span>

                    </a>

                @endif

            </div>

        @endif

    </div>

</div>

@endsection