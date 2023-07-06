@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i
class="bi-hexagon-fill me-2"></i> Data Master</a>
        <button type="button" class="navbar-toggler"
data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"
id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="{{
route('home') }}" class="nav-link @if($currentRouteName == 'home') active
@endif">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{
route('employees.index') }}" class="nav-link @if($currentRouteName ==
'employees.index') active @endif">Employee List</a></li>
            </ul>
            <hr class="d-md-none text-white-50">
<li class="btn btn-outline-light my-2 ms-md-auto">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="bi bi-person-badge"></i> {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            <i class="bi bi-door-open text-danger"> {{ __('Logout') }}</i>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <a class="dropdown-item" href="{{ route('profile') }}">
            <i class="bi bi-person-fill"></i> {{ __('Profile') }}
        </a>
    </div>
</li>
        </div>
    </div>
</nav>
