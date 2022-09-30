<!-- Authentication Links -->
@guest
    @if (Route::has('login'))
        <a class="nav-link ps-0 py-0 text-dark" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
    @endif

    {{-- @if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
@endif --}}
@else
    <span class="texte-icone">
        <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark p-0" href="#" role="button"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown text-dark">
            <a class="dropdown-item " href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                {{ __('Se déconnecter') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </span>
@endguest
