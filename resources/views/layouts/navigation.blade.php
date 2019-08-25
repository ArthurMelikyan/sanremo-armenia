{{-- {{dd(Route::currentRouteName())}} --}}
{{-- {{dd(Request::path())}} --}}

{{-- @if (request()->is('/'))
    {{dd('aaaaaaaaaaaaaa')}}
    @else
    {{dd('ajdfedkje')}}
@endif --}}

<header class="navigation">
    <nav class="navbar {{request()->is('/') ? '' : 'navbar-rose'}} navbar-expand-lg fixed-top">
        <button class="navbar-toggler" data-target="#navbarText" data-toggle="collapse" type="button" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">               
                @foreach ($items as $menu) 
         <li class="nav-item {{(Route::currentRouteName() == $menu->route) ? 'active-nav' : ''}}">
            <a class="nav-link" href="{{$menu->route}}">
                {{$menu->title}}
            </a>
        </li>
                @endforeach

            </ul>
        </div>
    </nav>
</header> 
{{-- {{dd($items)}} --}}