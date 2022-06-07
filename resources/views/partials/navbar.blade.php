<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">NBA APP</a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Teams</a>
        </li>
        @guest
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
        @endguest

        @auth
            <li class="nav-item">
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn nav-link">{{auth()->user()->name}}, Logout</button>
                </form>
            </li>
          @endauth
      </ul>
  </nav>