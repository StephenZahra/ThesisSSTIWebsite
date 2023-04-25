<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('reflectedssti')}}">Reflected SSTI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('storedpos')}}">Stored SSTI (posterior)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('storedimm')}}">Stored SSTI (immediate)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('blindpos')}}">Blind SSTI (posterior)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('blindimm')}}">Blind SSTI (immediate)</a>
      </li>

      @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('blindposAdmin')}}">Blind SSTI Admin Page(posterior)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('blindimmAdmin')}}">Blind SSTI Admin Page(immediate)</a>
        </li>
        <li class="nav-item">
          <a style="width:100%;" class="nav-link" href="{{route('authstoredpos')}}">Authenticated Stored SSTI (Posterior)</a>
        </li>
        <a style="height:5%; margin-right:20%;" class="nav-link btn btn-primary" href="{{route('signout')}}">Logout</a>
        <p style="width:10%;">Hello, {{Blade::render(Auth::user()->name)}}</p>
      @else
        <a class="nav-link btn btn-success" href="{{route('loginform')}}">Login</a>
      @endauth
    </ul>
  </div>
</nav>