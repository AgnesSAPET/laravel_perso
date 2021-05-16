<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <ul class="all">
            <li><a id="menu" href="/">Accueil</a></li>
            <li>
                <a id="menu" href="/list">Persos</a>
                    <ul>
                        <li class="albator"><a href="/character/1">Albator</a></li>
                        <li class="musclore"><a href="/character/2">Musclore</a></li>
                        <li class="tintin"><a href="/character/3">Tintin</a></li>
                    </ul>
            </li>
            <li><a id="menu" href="/designers">Auteurs</a></li>
            <li><a id="menu" href="/add">Ajouts</a>
                <ul>
                    <li class="perso"><a href="/addPerso">Personnages</a></li>
                    <li class="designer"><a href="/addDesigner">Créateurs</a></li>
                </ul>
            </li>
            
            
            
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
</body>
<footer id="footer">
    <ul>
        <li>
            <a id="foot" href="https://www.amazon.fr/b?node=301061&ie=UTF8&tag=googhydr0a8-21&hvadid=217081511002&hvpos=&hvexid=&hvnetw=g&hvrand=8760079798989939345&hvpone=&hvptwo=&hvqmt=e&hvdev=c&ref=pd_sl_3gifhlyq0n_e" target="_blank">
                <img src="/images/amazon.png" >
            </a>
        </li>
        <li>
            <a id="foot" href="https://www.plumesduweb.com/" target="_blank">
                <img src="/images/plumes_du_web.png" >
            </a>
        </li>
        <li>
            <a id="foot" href="https://www.cultura.com/livre.html" target="_blank">
                <img src="/images/cultura.png" >
            </a>
        </li>
        
    </ul>
</footer>
</html>