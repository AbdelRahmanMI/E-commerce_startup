<?php

use Illuminate\Support\Facades\Auth;
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{URL::asset('/images/transparant bg.png')}}" alt="Main_Logo" width="40" height="40">
        </a>
      <a class="navbar-brand" href="{{ url('/') }}"><h4>Wizard</h4></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('category') }}">Our Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link ">Contact US</a>
          </li>
        </ul>
        <ul class="navbar-nav  ms-auto">
            <li>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </li>
            
            <li class="nav-item active ">
                <a class="nav-link  " href='/dashboard'  role="button"  aria-expanded="false">
                    @if (Auth::check())
                    {{ Auth::user()->name }}
                     @else
                        Guest
                    @endif
                </a>
            </li>

            <li class="nav-item">
                <ul>
                    @if (Route::has('login'))
                        <div class="hidden fixed">
                            @auth
                                <li class="nav-item ">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"class="nav-link">
                                        Logout
                                    </a>
                                
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            @else
                                <li class="nav-item ">
                                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                </li>
                                <li class="nav-item ">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                                    @endif
                                </li>
                            @endauth
                        </div>
                    @endif
                </ul>
            </li>

        </ul>
      </div>
    </div>
  </nav>