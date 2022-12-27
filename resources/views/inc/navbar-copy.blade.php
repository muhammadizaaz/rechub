<nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#job">Job</a></li>
          @guest
          <li><a class="getstarted scrollto" href="/register">Sign In / Register</a></li>
          @endguest
          @auth
          <li class="dropdown"><span class="getstarted scrollto" href="">{{ Auth::user()->name }}</span>
            <ul>
              <li><a href="/account">Account</a></li>
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->