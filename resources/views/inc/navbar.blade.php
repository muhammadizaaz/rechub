<nav class="navbar navbar-expand-md navbar-white bg-white border-bottom sticky-top" id="navbar">
  <div class="container">
    <a href="{{URL('/')}}" class="logo">recruithub.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        @auth
        <li class="dropdown"><span class="getstarted scrollto" href="">{{auth()->user()->name}}</span>
          <ul>
            @role('admin')
            <li><a href="{{route('account.dashboard')}}">Dashboard</a></li>
            @endrole
            @role('author')
            <li><a href="{{route('account.authorSection')}}">Author Dashboard</a></li>
            @endrole
            <li><a href="{{route('account.index')}}">Account</a></li>
            <li><a href="{{route('account.logout')}}">Logout</a></li>
          </ul>
        </li>
        @guest
        <a href="/login" class="btn primary-btn">Sign up or Log in</a>
        @endguest
        @endauth
      </ul>
    </div>
  </div>
 
</nav>