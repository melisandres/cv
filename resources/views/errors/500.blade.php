@extends('master')

@section('content')
<main class="error">
    <section>
        <h1>@lang('message.error.500.title')</h1>
        <p>@lang('message.error.500.description')</p>
        <a href="{{ url('/') }}">@lang('message.error.back-home')</a>
    </section>
</main>
@endsection