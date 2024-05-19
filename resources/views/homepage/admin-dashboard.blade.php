<x-admin-outer>

    @if (session('message'))
        <div class="floating-alert">
            <div class="alert alert-success" id="flash-message" role="alert">
                {{ session('message') }}
            </div>
        </div>
    @endif

    <section class="sidebar">
        <a href="{{ route('index.landing-page') }}" class="logo">

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
                <a href="#leagues" class="nav-link">
                    <i class="fas fa-trophy"></i>
                    <span class="text">Leagues</span>
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
                <a href="#ipl" class="nav-link">
                    <i class="fas fa-shield"></i>
                    <span class="text">Seria A Clubs</span>
                </a>
            </li>

            @foreach ($leagues as $league)
                <li>
                    <a href="#{{ $league->name }}" class="nav-link">
                        <i class="fas fa-shield"></i>
                        <span class="text">{{ $league->name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>



        <ul class="side-menu">
            <li>
                <a href="#product" class="nav-link">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="text">Products</span>
                </a>
            </li>
            <li>
                <a href="#order" class="nav-link">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span class="text">Ordered Products:{{count($orderproducts)}}</span>
                </a>
            </li>
        </ul>

        <ul class="side-menu">
            <li>
                <a href="#message" class="nav-link">
                    <i class="fa-solid fa-message"></i>
                    <span class="text">Messages: {{count($messages)}}</span>
                </a>
            </li>
        </ul>

        <ul class="side-menu">
            <li>
                <a href="#settings">
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
                        <div class="loader">Add Players</div>

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
                                <th>Si No</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($players as $index => $player)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="players_storage/{{ $player->profile_image }}" alt="" />
                                    </td>
                                    <td>
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
                                            <button type="submit" onclick="return confirm('Are you sure?')">
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
                <div id="leagues" class="order">
                    <div class="head">
                        <div class="loader">Add Leagues</div>

                    </div>

                    <div class="head">
                        <a href="{{ route('leagues.create') }}">
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
                                <th>Si No</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leagues as $index => $league)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="league_storage/{{ $league->league_logo }}" alt="" />
                                    </td>
                                    <td>
                                        <a class="no-design">
                                            <p>{{ $league->name }}</p>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="submit">
                                            <a class="no-design"
                                                href="{{ route('leagues.edit', $league->id) }}"><span>Update</span></a>
                                        </button>
                                        <form action="{{ route('leagues.destroy', $league->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')">
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

                        <div class="loader">Add Epl Clubs</div>

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
                                <th>Si No</th>
                                <th>Club Logo</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($epl_clubs as $index => $epl_club)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="laliga_storage/{{ $epl_club->logo }}" alt="" />

                                    </td>
                                    <td>
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
                                            <button type="submit" onclick="return confirm('Are you sure?')">
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
                        <div class="loader">Add La Liga Clubs</div>
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
                                <th>Si No</th>
                                <th>Club Logo</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($la_liga_clubs as $index => $la_liga_club)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="laliga_storage/{{ $la_liga_club->logo }}" alt="" />

                                    </td>
                                    <td>
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
                                            <button type="submit" onclick="return confirm('Are you sure?')">
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
                <div id="bpl" class="order">
                    <div class="head">

                        <div class="loader">Add Bundes Liga Clubs</div>

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
                                <th>Si No</th>
                                <th>Club Logo</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bundes_liga_clubs as $index => $bundes_liga_club)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="laliga_storage/{{ $bundes_liga_club->logo }}" alt="" />
                                    </td>
                                    <td>
                                        <a class="no-design" href="/bundes-liga-clubs/{{ $bundes_liga_club->id }}">
                                            <p>{{ $bundes_liga_club->club_name }}</p>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="submit">
                                            <a class="no-design"
                                                href="/bundes-liga-clubs/{{ $bundes_liga_club->id }}/edit"><span>Update</span></a>
                                        </button>
                                        <form action="/bundes-liga-clubs/{{ $bundes_liga_club->id }}/delete"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')">
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
                <div id="ipl" class="order">
                    <div class="head">
                        <div class="loader">Add Seria A Clubs</div>
                    </div>

                    <div class="head">
                        <a href="{{ route('seriaa.create-club') }}">
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
                                <th>Si No</th>
                                <th>Club Logo</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seria_a_clubs as $index => $seria_a_club)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="laliga_storage/{{ $seria_a_club->logo }}" alt="" />
                                    </td>
                                    <td>
                                        <a class="no-design" href="/seria-a-clubs/{{ $seria_a_club->id }}">
                                            <p>{{ $seria_a_club->club_name }}</p>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="submit">
                                            <a class="no-design"
                                                href="/seria-a-clubs/{{ $seria_a_club->id }}/edit"><span>Update</span></a>
                                        </button>
                                        <form action="/seria-a-clubs/{{ $seria_a_club->id }}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')">
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

            @foreach ($leagues as $league)
                <div class="table-data">
                    <div id="{{ $league->name }}" class="order">
                        <div class="head">
                            <div class="loader">Add {{ $league->name }} Clubs</div>
                        </div>

                        <div class="head">
                            <a href="/leagues/{{ $league->id }}/clubs/create">
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
                                    <th>Si No</th>
                                    <th>Club Logo</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($league->clubs as $index => $club)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <img src="{{ asset('club_storage/' . $club->logo) }}" alt=""
                                                 />
                                        </td>
                                        <td>
                                            <a class="no-design" href="{{ route('clubs.show', $club->id) }}">
                                                <p>{{ $club->club_name }}</p>
                                            </a>
                                        </td>
                                        {{-- Uncomment and modify as needed for action buttons --}}
                                        <td>
                                            <button type="submit">
                                                <a class="no-design"
                                                    href="/leagues/{{$league->id}}/clubs/{{$club->id}}/edit"><span>Update</span></a>
                                            </button>
                                            <form action="{{ route('clubs.destroy', ['league' => $league->id, 'club' => $club->id]) }}" method="POST"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                                @if ($league->clubs->isEmpty())
                                    <tr>
                                        <td colspan="3">No clubs found for this league.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach


            <div class="table-data">
                <div id="product" class="order">
                    <div class="head">
                        <div class="loader">Add Products</div>
                    </div>

                    <div class="head">
                        <a href="{{ route('products.create-product') }}">
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
                                <th>Si No</th>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Product Id</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $index => $product)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img id="product_img" src="products_storage/{{ $product->product_image }}"
                                            alt="" />

                                    </td>
                                    <td>
                                        <p>{{ $product->product_name }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $product->product_id }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $product->product_price }}$</p>
                                    </td>
                                    <td>
                                        <button type="submit">
                                            <a class="no-design"
                                                href="/products/{{ $product->id }}/edit"><span>Update</span></a>
                                        </button>
                                        <form action="/products/{{ $product->id }}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')">
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
                <div id="order" class="order">
                    <div class="head">
                        <div class="loader">Ordered Products: {{count($orderproducts)}}</div>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Si No</th>
                                <th>Customer Name</th>
                                <th>Product Id</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderproducts as $index => $orderproduct)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <p>{{ $orderproduct->name }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $orderproduct->product_id }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $orderproduct->product_quantity }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $orderproduct->product_total_price }}$</p>
                                    </td>

                                    <td>

                                        <form action="/order/{{ $orderproduct->id }}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')">
                                                <span>Deliver</span>
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
                <div id="message" class="order">
                    <div class="head">
                        <div class="loader">Message from Users:  {{count($messages)}}</div>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Si No</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $index => $message1)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <p>{{ $message1->name }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $message1->email }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $message1->subject }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $message1->message }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $message1->created_at }}</p>
                                    </td>

                                    <td>

                                        <form action="/message/{{ $message1->id }}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')">
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
                <div id="settings" class="order">
                    <div class="head">
                        <div class="loader">Users</div>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            
                                <tr>
                                    <td>
                                        <p>{{ $user->name }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $user->email }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $user->type }}</p>
                                    </td>

                                    @if ($user->type == 'user')
                                        <td>
                                            <form action="/users/{{ $user->id }}/delete" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure?')">
                                                    <span>Delete</span>
                                                </button>
                                            </form>
                                        </td>
                                    @else
                                        <td>
                                            Can't peform this action.
                                        </td>
                                    @endif


                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>


        </main>
    </section>

</x-admin-outer>
