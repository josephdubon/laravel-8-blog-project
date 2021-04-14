<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">Blog Project: Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a
                    class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                    href="{{ route('home') }}"
                >Home</a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                    href="{{ route('about') }}"
                >About</a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link {{ request()->is('posts') ? 'active' : '' }}"
                    href="{{ route('posts') }}"
                >Posts</a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link {{ request()->is('portfolio') ? 'active' : '' }}"
                    href="{{ route('portfolio') }}"
                >Portfolio</a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                    href="{{ route('contact') }}"
                >Contact</a>
            </li>
        </ul>
    </div>
</nav>
