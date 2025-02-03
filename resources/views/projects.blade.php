@extends('master')
@php
    $pageTitle = __('message.projects.title');  
    $link = __('message.projects.link');
    $coming = __('message.projects.coming-soon');
    $projectList = __('message.projects.projectList');
    $galleryDescription = __('message.projects.galleryDescription');
    $linkDescription = __('message.projects.linkDescription');
    $githubDescription = __('message.projects.githubDescription');
    $itchioDescription = __('message.projects.itchioDescription');
    $videoDescription = __('message.projects.videoDescription');
    $moreInfoDescription = __('message.projects.moreInfoDescription');
    $galleries = [];
    foreach ($projectList as $project) {
        if (isset($project['gallery']) && isset($project['name'])) {
            $galleries[$project['name']] = $project['gallery'];
            error_log("Added gallery for project: " . $project['name']);
        }
    }
    error_log("Total galleries: " . count($galleries));
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
            @foreach(__('message.projects.projectList') as $key => $value)
                <article class="project">
                    <div>
                        <span class="bigyear">{{ $value['year'] }}</span>
                        <h2>{{ $value['name'] }}</h2>
                        <ul>
                        @foreach($value['details'] as $detail)
                            <li>{{ $detail }}</li>
                        @endforeach
                        </ul>
                        <p>DESCRIPTION: {{$value['description']}}</p>
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
                        <div class="project-links-description">
                            <span></span>
                        </div>
                        @else
                            <a> {{ $coming }}</a>
                        @endif
                    </div>

                    <img class="circle-img" src="img/{{$value['image']}}" alt="{{$value['alt']}}" data-project="{{$value['name']}}" data-description="{{ $galleryDescription }}">
                </article>
            @endforEach
        </section>
    </main>
    <script id="portfolio-data" type="application/json">
        {!! json_encode($galleries) !!}
    </script>
    @endsection
