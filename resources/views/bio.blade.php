@extends('master')
@php
    $pageTitle = __('message.bio.title');
    $bioMessages = __('message.bio');
    $artistStatement = $bioMessages['artistStatement'] ?? '';
    $artistStatementTab = $bioMessages['artistStatementTab'] ?? '';
    $artistStatementHint = $bioMessages['artistStatementHint'] ?? '';
    $artistStatementHideHint = $bioMessages['artistStatementHideHint'] ?? '';
@endphp
@section('title', $pageTitle)
@section('content')
    <main class="bio">
        <div class="bio__banner">
<!--        <picture>
                <source srcset="img/bio-whitebg-1200x500.jpg" media="(min-width: 720px)">
                <source srcset="img/bio-whitebg-720x250.jpg" media="(max-width: 720px)">
                <img src="img/bio-whitebg-1200x500.jpg" alt="falling bear">
            </picture> -->
        </div>

        <section>
            <h1>Mélisandre Schofield</h1>
            <p>@lang('message.bio.bio')</p>

            @if(!empty($artistStatement))
            <div class="tab-panel">
                <div class="tab-panel__tabs">
                    <span
                        data-tab="panel"
                        data-description="{{ $artistStatementHint }}"
                        data-description-hide="{{ $artistStatementHideHint }}"
                    >{{ $artistStatementTab }}</span>
                </div>
                <div class="tab-panel__hint">
                    <span></span>
                </div>
                <div class="tab-panel__content">{!! $artistStatement !!}</div>
            </div>
            @endif
        </section>
    </main>
@endsection
