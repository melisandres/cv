@extends('master')
@php
    $pageTitle = __('message.projects.title');  
    $link = __('message.projects.link');
    $coming = __('message.projects.coming-soon');
    $projectList = array_filter(
        __('message.projects.projectList'),
        fn ($project) => $project['show'] ?? true
    );
    $galleryDescription = __('message.projects.galleryDescription');
    $linkDescription = __('message.projects.linkDescription');
    $githubDescription = __('message.projects.githubDescription');
    $itchioDescription = __('message.projects.itchioDescription');
    $videoDescription = __('message.projects.videoDescription');
    $moreInfoDescription = __('message.projects.moreInfoDescription');
    $technicalDetails = __('message.projects.technicalDetails');
    $technicalDetailsHint = __('message.projects.technicalDetailsHint');
    $technicalDetailsHideHint = __('message.projects.technicalDetailsHideHint');
    $aFewThoughts = __('message.projects.aFewThoughts');
    $aFewThoughtsHint = __('message.projects.aFewThoughtsHint');
    $aFewThoughtsHideHint = __('message.projects.aFewThoughtsHideHint');
    $galleries = [];
    foreach ($projectList as $project) {
        if (isset($project['gallery']) && isset($project['name'])) {
            $galleries[$project['name']] = $project['gallery'];
        }
    }
@endphp
@section('title', $pageTitle)
@section('content')
    <div class="modal-container">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div class="arrow-left">&#x2B45;</div>
                <div class="modal-images-container">
                    <img class="modal-image current" alt=""></img>
                    <img class="modal-image upcoming" alt=""></img>
                </div>
                <div class="arrow-right">&#x2B46;</div>
            </div>
            <div class="modal-footer">
                <div class="image-links"></div>
                <div class="image-description"></div>
            </div>
        </div>
    </div>
    <main class="projects">
        <section >
            <div class="name">
                <div></div>
                <h1>Melisandre Schofield</h1>
            </div>
            @foreach($projectList as $key => $value)
                <article class="project">
                    <div>
                        <div class="project-header">
                            <div class="project-title">
                                <span class="bigyear">{{ $value['year'] }}</span>
                                <h2 class="bigtitle">{{ $value['name'] }}</h2>
                            </div>

                            <img class="circle-img" src="img/{{$value['image']}}" alt="{{$value['alt']}}" data-project="{{$value['name']}}" data-description="{{ $galleryDescription }}">

                            <p class="project-description">DESCRIPTION: {{$value['description']}}</p>
                        </div>


                        <ul class="project-details">
                        @foreach($value['details'] as $detail)
                            <li>{{ $detail }}</li>
                        @endforeach
                        </ul>
                        @if(!empty($value['thoughts']))
                        <p class="project-thoughts">{{ $value['thoughts'] }}</p>
                        @endif
                        @if(__($value['ready']))
                        <div class="project-links">
                            <span>{{ $link }}</span>
                            @if($value['link'])
                            <a href="{{$value['link']}}" data-description="{{ $linkDescription }}" target="_blank" >
                                <img class="project-link" src="img/icons/world-wide-web.png" alt="project link">
                            </a>
                            @endif
                            @if($value['github'])
                            <a href="{{$value['github']}}" data-description="{{ $githubDescription }}" target="_blank">
                                <img class="project-link" src="img/icons/github.png" alt="project github">
                            </a>
                            @endif
                            @if($value['itchio'])
                            <a href="{{$value['itchio']}}" data-description="{{ $itchioDescription }}" target="_blank">
                                <img class="project-link" src="img/icons/itchio.png" alt="project itch">
                            </a>
                            @endif
                            @if($value['video'])
                            <a href="{{$value['video']}}" data-description="{{ $videoDescription }}" target="_blank">
                                <img class="project-link" src="img/icons/movie.png" alt="project video">
                            </a>
                            @endif
                            @if($value['moreInfo'])
                            <a href="{{$value['moreInfo']}}" data-description="{{ $moreInfoDescription }}" target="_blank">
                                <img class="project-link" src="img/icons/paper.png" alt="project more info">
                            </a>
                            @endif
                        </div>
                        <div class="project-tabs">
                            <span
                                data-tab="technical"
                                data-description="{{ $technicalDetailsHint }}"
                                data-description-hide="{{ $technicalDetailsHideHint }}"
                            >{{ $technicalDetails }}</span>
                            @if(!empty($value['thoughts']))
                            <span
                                data-tab="thoughts"
                                data-description="{{ $aFewThoughtsHint }}"
                                data-description-hide="{{ $aFewThoughtsHideHint }}"
                            >{{ $aFewThoughts }}</span>
                            @endif
                        </div>
                        <div class="project-links-description">
                            <span></span>
                        </div>
                        @else
                            <a> {{ $coming }}</a>
                        @endif
                    </div>
                </article>
            @endforEach
        </section>
    </main>
    <script id="portfolio-data" type="application/json">
        {!! json_encode($galleries) !!}
    </script>
    @endsection
