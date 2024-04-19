<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>InFoo | Admin</title>

  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!--css file-->
  <link rel="stylesheet" href="{{ asset('auth_assets/admin_style.css') }}" />
</head>

<body>

  <section class="sidebar">
    <a href="{{route('index.landing-page')}}" class="logo">
      
      <span id="infoo-logo">InFoo</span>
    </a>

    <ul class="side-menu top">
      {{-- <li class="active">
        <a href="{{route('index.landing-page')}}" class="nav-link">
          <i class="fas fa-home"></i>
          <span class="text">Home</span>
        </a>
      </li> --}}
      <li class="active">
        <a href="#player" class="nav-link">
          <i class="fas fa-people-group"></i>
          <span class="text">Players</span>
        </a>
      </li>
      <li>
        <a href="#epl" class="nav-link">
          <i class="fas fa-shield"></i>
          <span class="text">EPL Clubs</span>
        </a>
      </li>
      <li>
        <a href="#laliga" class="nav-link">
          <i class="fas fa-shield"></i>
          <span class="text">La-Liga Clubs</span>
        </a>
      </li>
      <li>
        <a href="#bpl" class="nav-link">
          <i class="fas fa-shield"></i>
          <span class="text">Bundes Liga Clubs</span>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link">
          <i class="fas fa-people-group"></i>
          <span class="text">Team</span>
        </a>
      </li>
    </ul>

    <ul class="side-menu">
      <li>
        <a href="#">
          <i class="fas fa-cog"></i>
          <span class="text">Settings</span>
        </a>
      </li>
      <li>
        <a href="/logout" class="logout">
          <i class="fas fa-right-from-bracket"></i>
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>
  </section>

    {{$slot}}


    <script src="{{ asset('auth_assets/admin_app.js') }}"></script>
</body>

</html>