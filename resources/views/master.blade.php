<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Melisandre Schofield e2395207">
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <title>@yield('title')</title>

</head>
<body>
    <header></header>
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="menu-button-container">
        <span class="menu-button">☰</span>
    </label>
    <nav class="withFog">
        <ul role="menu">
            <li> <a  @if($__env->yieldContent('title') == 'Accueil | CV') class="active" @endif href="{{route('acceuil')}}"> Acceuil </a></li>
            <li> <a @if($__env->yieldContent('title') == 'Education | CV') class="active" @endif href="{{route('education')}}"> Éducation </a></li>
            <li class="dropbtn">   <a @if($__env->yieldContent('title') == 'Experience | CV') class="active" @endif href="{{route('experience')}}"> Experience</a>
                <input type="checkbox" id="submenu-toggle">
                <label for="submenu-toggle" class="submenu-button-container">
                    <span class="submenu-button"></span>
                </label>
                <ul class="dropdown-content">
                    <li class="dropdown-item"><a href="{{route('experience')}}#bourses">Bourses</a></li>
                    <li class="dropdown-item"><a href="{{route('experience')}}#residences">Résidences</a></li>
                    <li class="dropdown-item"><a href="{{route('experience')}}#autre">Autres</a></li>
                </ul>
            </li>
            <li> <a @if($__env->yieldContent('title') == 'Contact | CV') class="active" @endif href="{{route('contact')}}"> Contact </a></li>
        </ul>
    </nav>
        <!-- content -->
        @yield('content')

    <footer>
        copy left 2023
    </footer>
</body>
</html>