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
                    <li>
                        <h2>{{ $value['program-truncated'] }},</h2>
                        <h4 class="school">{{ $value['school'] }}, {{ $value['location'] }}</h4>
                        <h4 class="bigyear">{{ $value['year'] }}</h4>
                    <li>
                        <img src="img/{{ $value['image'] }}" alt="{{ $value['alt'] }}">
                    </li>   
                @endforeach
            </ul>
        </section>
    </main>
@endsection