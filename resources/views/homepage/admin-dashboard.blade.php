<x-admin-outer>
  <section class="sidebar">
    <a href="#" class="logo">
      <i class="fab fa-info-circle"></i>
      <span class="text">Admin Panel</span>
    </a>

    <ul class="side-menu top">
      <li class="active">
        <a href="{{route('index.landing-page')}}" class="nav-link">
          <i class="fas fa-home"></i>
          <span class="text">Home</span>
        </a>
      </li>
      <li>
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

  <section class="content">
    <nav>
      <i class="fas fa-bars menu-btn"></i>

      <input type="checkbox" hidden id="switch-mode" />
      <label for="switch-mode" class="switch-mode"></label>

    </nav>

    <main>

      <div class="table-data">
        <div id="player" class="order">
          <div class="head">
            <h3>Add Players</h3>
          </div>

          <div class="head">
            <a href="{{route('index.create-player')}}">
              <div tabindex="0" class="plusButton">
                <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                  <g mask="url(#mask0_21_345)">
                    <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z">
                    </path>
                  </g>
                </svg>
              </div>
            </a>
          </div>

          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              {{-- @foreach ($players as $player)
                  <tr>
                <td>
                  <img src="players_storage/{{ $player->profile_image }}" alt="" />
                  <p>{{ $player->first_name . ' ' . $player->last_name }}</p>
                </td>
                <td><button>
                    <span>Update</span>
                  </button>
                  <button>
                    <span>Delete</span>
                  </button>
                </td>

              </tr>
              @endforeach --}}
              
            </tbody>
          </table>
        </div>


      </div>
    </main>
  </section>
</x-admin-outer>
  