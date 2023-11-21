@extends('master')
@section('title', 'Accueil | CV')
@section('content')
    <main class="acceuil">
        <div>
            <picture>
                <source srcset="img/bio-whitebg-1200x500.jpg" media="(min-width: 720px)">
                <source srcset="img/bio-whitebg-720x250.jpg" media="(max-width: 720px)">
                <img src="img/bio-whitebg-1200x500.jpg" alt="falling bear">
            </picture>
        </div>

        <section>
            <h1>Qui est Mé</h1>
            <p>Mélisandre’s background is in visual arts. Her work consists of writing that oscillates between literature and media arts. Through her involvement with Lafin (the Liberal Arts Fictional Institute of Narrative: a fictional collective of artists and researchers), she has designed a series of poetic dream experiments, volunteered as an archivist, and written the novel Melancholy’s Satellites, which is currently in final revision. She has also recently begun searching for a publisher for her novel Sky Paint. </p>
        </section>
    </main>
@endsection
