@extends('master')
@section('title', 'Contact | Mélisandre Schofield')
@section('content')
    <main  class="contact">
        <section>
            <h1>contactez Mélisandre</h1>
            @isset($data)
                <p> nom: <span>{{ $data->nom ?? ''}}</span> </p>
                <p> prenom: <span>{{ $data->prenom ?? ''}}</span> </p>
                <p> couriel: <span>{{ $data->couriel ?? ''}}</span> </p>
                <p> message: <span>{{ $data->message ?? ''}}</span> </p>
                <p> tier: <span>{{ $data->tier ?? ''}}</span> </p>
            @else
            <form method="post">
                @csrf
                <label for="nom"></label>
                <input type="text" id="nom" name="nom" placeholder="nom">
                <label for="prenom"></label>
                <input type="text" id="prenom" name="prenom" placeholder="prenom">
                <label for="email"></label>
                <input type="email" id="email" name="couriel" placeholder="email">
                <label for="message"></label>
                <textarea name="message" id="message" rows="10" cols="60" placeholder="ecrivez un message pour melisandre">Soyons amis!</textarea>
                <select name="tier" id="tier" required>
                    <option value="">selectioner le tier voulu</option>
                    <optgroup label="options de base">
                        <option value="tier1.1">site sans html</option>
                        <option value="tier1.2">site avec moin d'une page</option>
                        <option value="tier1.3" selected>site sans addresse</option>
                    </optgroup>
                    <optgroup label="options exotiques">
                        <option value="tier2.1">site en nuage</option>
                        <option value="tier2.2">site en papier</option>
                    </optgroup>
                    <optgroup label="options executifs">
                        <option value="tier3.1">site, images, et texts vivants</option>
                        <option value="tier3.2">Intelligence artificielle inclus</option>
                    </optgroup>
                </select>
                <input type="submit">
            </form>
            @endisset
        </section>
    </main>
    @endsection