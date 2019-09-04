<header>
    <nav class="topnav" id="myTopnav">
        <a href="/"><img class="logo-nav" src="/images/entendamais_logo.png"></a>
        <ul>
            @guest

            @else
                <li class="nav-item dropdown">

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div id="dropdown" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="/home">
                            Dashboard
                        </a>
                        <a class="dropdown-item" href="/posts/create">
                         Create Post
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>




                    </div>
                </li>
            @endguest
            <div class="responsive-icon">&#8801;</div> {{-- This one is working. The other menu icon didn't want to work out.  --}}
            <li><a class="nav-link" href="/about-project">Sobre o projeto</a></li>
            <li><a class="nav-link" href="/about-author">Sobre o autor</a></li>
            <li><a class="nav-link" href="/posts">Artigos</a></li>
            <li><a class="nav-link" href="/">Início</a></li>
        </ul>
    </nav>
</header>
