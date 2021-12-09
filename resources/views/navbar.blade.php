<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('profile') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                @guest('admin')
                <li class="nav-item">
                    <a href="{{ route('admin.login') }}" class="nav-link">Login</a>
                </li>
                @else
                @can('role','admin')
                    <li class="nav-item">
                        <a href="{{ route('service') }}" class="nav-link">Data Member</a>
                    </li>
                @endcan
                @can('role',['admin','member'])
                    <li class="nav-item">
                        <a href="{{ route('service') }}" class="nav-link">Service</a>
                    </li>
                @endcan
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('profile') }}" class="dropdown-item">My Profile</a>
                        <a href="{{ route('admin.logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="dropdown-item">Logout</a>
                        <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>