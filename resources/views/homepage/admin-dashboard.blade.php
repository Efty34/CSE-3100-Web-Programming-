<x-admin-outer>

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
                        <a href="{{ route('index.create-player') }}">
                            <div tabindex="0" class="plusButton">
                                <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                    <g mask="url(#mask0_21_345)">
                                        <path
                                            d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z">
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
                            @foreach ($players as $player)
                                <tr>
                                    <td>
                                        <img src="players_storage/{{ $player->profile_image }}" alt="" />
                                        <a class="no-design" href="/players/{{ $player->id }}">
                                            <p>{{ $player->first_name . ' ' . $player->last_name }}</p>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="submit">
                                            <a class="no-design"
                                                href="/players/{{ $player->id }}/edit"><span>Update</span></a>
                                        </button>
                                        <form action="/players/{{ $player->id }}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                        
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>

            <div class="table-data">
                <div id="epl" class="order">
                    <div class="head">
                        <h3>Add Epl Clubs</h3>
                    </div>

                    <div class="head">
                        <a href="{{ route('epl.create-club') }}">
                            <div tabindex="0" class="plusButton">
                                <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                    <g mask="url(#mask0_21_345)">
                                        <path
                                            d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z">
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
                            @foreach ($epl_clubs as $epl_club)
                                <tr>
                                    <td>
                                        <img src="laliga_storage/{{ $epl_club->logo }}" alt="" />
                                        <a class="no-design" href="/epl-clubs/{{ $epl_club->id }}">
                                            <p>{{ $epl_club->club_name }}</p>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="submit">
                                            <a class="no-design"
                                                href="/epl-clubs/{{ $epl_club->id }}/edit"><span>Update</span></a>
                                        </button>
                                        <form action="/epl-clubs/{{ $epl_club->id }}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                        
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>

            <div class="table-data">
                <div id="laliga" class="order">
                    <div class="head">
                        <h3>Add La Liga Clubs</h3>
                    </div>

                    <div class="head">
                        <a href="{{ route('laliga.create-club') }}">
                            <div tabindex="0" class="plusButton">
                                <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                    <g mask="url(#mask0_21_345)">
                                        <path
                                            d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z">
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
                            @foreach ($la_liga_clubs as $la_liga_club)
                                <tr>
                                    <td>
                                        <img src="laliga_storage/{{ $la_liga_club->logo }}" alt="" />
                                        <a class="no-design" href="/la-liga-clubs/{{ $la_liga_club->id }}">
                                            <p>{{ $la_liga_club->club_name }}</p>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="submit">
                                            <a class="no-design"
                                                href="/la-liga-clubs/{{ $la_liga_club->id }}/edit"><span>Update</span></a>
                                        </button>
                                        <form action="/la-liga-clubs/{{ $la_liga_club->id }}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                        
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>

            <div class="table-data">
                <div id="laliga" class="order">
                    <div class="head">
                        <h3>Add Bundes Liga Clubs</h3>
                    </div>

                    <div class="head">
                        <a href="{{ route('bundesliga.create-club') }}">
                            <div tabindex="0" class="plusButton">
                                <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                    <g mask="url(#mask0_21_345)">
                                        <path
                                            d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z">
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
                            @foreach ($bundes_liga_clubs as $bundes_liga_club)
                                <tr>
                                    <td>
                                        <img src="laliga_storage/{{ $bundes_liga_club->logo }}" alt="" />
                                        <a class="no-design" href="/bundes-liga-clubs/{{ $bundes_liga_club->id }}">
                                            <p>{{ $bundes_liga_club->club_name }}</p>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="submit">
                                            <a class="no-design"
                                                href="/bundes-liga-clubs/{{ $bundes_liga_club->id }}/edit"><span>Update</span></a>
                                        </button>
                                        <form action="/bundes-liga-clubs/{{ $bundes_liga_club->id }}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                        
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>

            

        </main>
    </section>

</x-admin-outer>
