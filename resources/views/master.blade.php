<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="base-url" content="{{ url('/') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Melisandre Schofield e2395207">
    <link rel="stylesheet" href="{{asset('styles/main.css')}}">
    <title>@yield('title') | Mélisandre Schofield</title>
    <script src="{{ asset('language-switcher.js') }}" defer></script>

    @vite(['resources/css/app.css', 'resources/js/main.js'])

</head>
<body>
    <!-- Language Picker -->
    
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="menu-button-container">
        <span class="menu-button">&zwnj;</span>
    </label>
    <nav class="withFog">
        <ul role="menu">
            <li>
                <label for="language-switcher"></label>
                <select class="language" id="language-switcher" onchange="changeLanguage(this.value)">
                    <option value="fr" @if(App::getLocale() == 'fr') selected @endif>FR</option>
                    <option value="en" @if(App::getLocale() == 'en') selected @endif>EN</option>
                </select>
            </li>
            <li> 
                <a  @if($__env->yieldContent('title') == __('message.nav.projects')) class="active" @endif href="{{route('projects')}}">@lang('message.nav.projects')</a>
            </li>
            <li> 
                <a  @if($__env->yieldContent('title') == __('message.nav.bio')) class="active" @endif href="{{route('bio')}}">@lang('message.nav.bio')</a>
            </li>
            <li> 
                <a @if($__env->yieldContent('title') == __('message.nav.studies')) class="active" @endif href="{{route('education')}}">@lang('message.nav.studies')</a>
            </li>
            <!-- <li class="dropbtn">   
                <a @if($__env->yieldContent('title') == __('message.nav.achievements')) class="active" @endif href="{{route('experience')}}">@lang('message.nav.achievements')</a>
                <input type="checkbox" id="submenu-toggle">
                <label for="submenu-toggle" class="submenu-button-container">
                    <span class="submenu-button"></span>
                </label>
                <ul class="dropdown-content">
                    <li class="dropdown-item"><a href="{{route('experience')}}#bourses">@lang('message.nav.grants')</a></li>
                    <li class="dropdown-item"><a href="{{route('experience')}}#residences">@lang('message.nav.residencies')</a></li>
                    <li class="dropdown-item"><a href="{{route('experience')}}#autre">@lang('message.nav.other')</a></li>
                </ul>
            </li> -->
            <li> <a @if($__env->yieldContent('title') == __('message.nav.contact')) class="active" @endif href="{{route('contact')}}">@lang('message.nav.contact')</a></li>
        </ul>
    </nav>
        <!-- content -->
        @yield('content')

    <footer>
        <a href="https://github.com/melisandres" target="_blank"><img class="footer-links" src="img/icons/github.png" alt="visit my github"></a>
        <a href="https://gitlab.com/melisandreschofield" target="_blank"><img class="footer-links" src="img/icons/gitlab.png" alt="visit my gitlab"></a>
        <a href="https://melisandre.itch.io/" target="_blank"><img class="footer-links" src="img/icons/itchio.png" alt="visit my itch.io"></a>
        <a href="https://linkedin.com/in/melisandre-schofield777" target="_blank"><img class="footer-links" src="img/icons/linkedin.png" alt="visit my linkedin"></a>
    </footer>
</body>
</html>