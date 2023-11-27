@extends('master')
@php
    $pageTitle = __('message.bio.title');
@endphp
@section('title', $pageTitle)
@section('content')
    <main class="bio">
        <div>
<!--        <picture>
                <source srcset="img/bio-whitebg-1200x500.jpg" media="(min-width: 720px)">
                <source srcset="img/bio-whitebg-720x250.jpg" media="(max-width: 720px)">
                <img src="img/bio-whitebg-1200x500.jpg" alt="falling bear">
            </picture> -->
        </div>

        <section>
            <h1>Mélisandre Schofield</h1>
            <p>@lang('message.bio.bio')</p>
        </section>
    </main>
@endsection
