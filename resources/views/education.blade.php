@extends('master')
@php
    $pageTitle = __('message.studies.title');  
@endphp
@section('title', $pageTitle)
@section('content')
    <main class="education">
        <section>
            <ul class="edu">
                @foreach(__('message.studies.studiesList') as $key => $value)
                    @php
                        $startYear = $value['startYear'] ?? null;
                        $endYear = $value['endYear'] ?? $value['year'] ?? null;
                        $isRange = $endYear === null || $endYear === '';
                        $statusLabel = $isRange ? __('message.projects.ongoing') : null;
                    @endphp
                    <li>
                        <div @class(['edu-content', 'edu-content--has-status' => $statusLabel])>
                            <h2>
                                @if($statusLabel)
                                <span class="sr-only">{{ $startYear }}–{{ $statusLabel }}, </span>
                                @endif
                                {{ $value['program-truncated'] }},
                            </h2>
                            <h4 class="school">{{ $value['school'] }}, {{ $value['location'] }}</h4>
                            @if($isRange)
                            <h4 class="bigyear bigyear--range" aria-hidden="true">
                                <span class="bigyear-value">{{ $startYear }}</span><span class="bigyear-dash">–</span>
                            </h4>
                            @else
                            <h4 class="bigyear">{{ $endYear }}</h4>
                            @endif
                            @if($statusLabel)
                            <span class="edu-status">{{ $statusLabel }}</span>
                            @endif
                        </div>
                        <img src="img/{{ $value['image'] }}" alt="{{ $value['alt'] }}">
                    </li>
                @endforeach
            </ul>
        </section>
    </main>
@endsection
