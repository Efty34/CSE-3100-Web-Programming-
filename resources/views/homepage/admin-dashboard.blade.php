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

            
        </main>
    </section>

</x-admin-outer>
