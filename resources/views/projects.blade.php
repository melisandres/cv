@extends('master')
@php
    $pageTitle = __('message.projects.title');  
@endphp
@section('title', $pageTitle)
@section('content')
    <main class="projects">
        <section >
            <div class="name">
                <div></div>
                <h1>Melisandre Schofield</h1>
                <div></div>
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
                        <a href="{{$value['link']}}" target="_blank">link to the project</a>
                    </div>
                    <a href="{{$value['link']}}" target="_blank">
                        <img class="circle-img" src="img/{{$value['image']}}" alt="{{$value['alt']}}">
                    </a>
                </article>
            @endforEach
        </section>
    </main>
    @endsection