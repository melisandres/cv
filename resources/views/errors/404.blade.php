@extends('master')

@section('content')
<main class="errorPage">
    <section>
        <h1>@lang('message.error.404.title')</h1>
        <p>@lang('message.error.404.description')</p>
        <a href="{{ url('/') }}">@lang('message.error.back-home')</a>
    </section>
</main>
@endsection