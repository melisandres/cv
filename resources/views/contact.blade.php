@extends('master')
@php
    $pageTitle = __('message.contact.title');  
@endphp
@section('title', $pageTitle)
@section('content')
    <main  class="contact">
        <section>
            <h1>@lang('message.contact.greeting')</h1>
            @isset($data)
                <div class="message">
                    <p> @lang('message.contact.name'): <span>{{ $data->nom ?? ''}}</span> </p>
                    <p> @lang('message.contact.last-name'): <span>{{ $data->prenom ?? ''}}</span> </p>
                    <p> @lang('message.contact.email'): <span>{{ $data->courriel ?? ''}}</span> </p>
                    <p> @lang('message.contact.message'): <span>{{ $data->message ?? ''}}</span> </p>
                    <p> tier: <span>{{ $data->tier ?? ''}}</span> </p>
                </div>
            @else
            <form method="post">
                @csrf
                <label for="nom"></label>
                <input type="text" id="nom" name="nom" placeholder="@lang('message.contact.last-name')" value="{{ old('nom') }}">
                <label for="prenom"></label>
                <input type="text" id="prenom" name="prenom" placeholder="@lang('message.contact.name')" value="{{ old('prenom') }}">
                <label for="email"></label>
                <input type="email" required id="email" name="courriel" placeholder="@lang('message.contact.email')" value="{{ old('email') }}">
                @if($errors->has('courriel'))
                    <span class="error">{{$errors->first('courriel')}}</span>
                @endif
                <label for="message"></label>
                <textarea name="message" id="message" rows="10" cols="60" placeholder="@lang('message.contact.message-placeholder')"> {{ old('message') ?? __('message.contact.message-initial') }}</textarea>
                <select name="tier" id="tier" required>
                    <option value="">@lang('message.contact.selectbox-message')</option>
                    @foreach(__('message.contact.option-groups') as $key => $value)
                    <optgroup label="{{ $key }}">
                        @foreach($value as $optkey => $optvalue)
                        <option value="{{ $optkey }}">{{ $optvalue }}</option>
                        @endforeach
                    </optgroup>
                    @endforeach
                </select>
                <input type="submit">
            </form>
            @endisset
        </section>
    </main>
    @endsection