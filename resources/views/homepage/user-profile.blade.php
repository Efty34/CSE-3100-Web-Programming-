<x-user-profile-outer>

    <header class="header" data-header>
        <div class="container">

            <div class="overlay" data-overlay></div>

            <a href="{{ route('index.landing-page') }}" class="navbar-link1">
                InFoo
            </a>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <p class="navbar-title">Menu</p>

                    <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                        <ion-icon name="close-circle-outline"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="#dream11" class="navbar-link" data-navlink>Dream 11</a>
                    </li>

                    <li>
                        <a href="#explore" class="navbar-link" data-navlink>Products</a>
                    </li>

                    <li>
                        <a href="#contact" class="navbar-link" data-navlink>Contact</a>
                    </li>

                </ul>

            </nav>


            <a href="#" class="navbar-link" style="font-weight: 600; font-size: 2.5rem;">
                {{ Auth::user()->name }}
            </a>



            <button class="menu-open-btn" aria-label="Open Menu" data-nav-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <a href="/logout" class="btn" aria-labelledby="wallet">
                <ion-icon name="exit-outline"></ion-icon>

                <span id="wallet">Logout</span>
            </a>

        </div>
    </header>

    <main>
        <article>

            <section class="section top-seller" id="dream11">
                <div class="container">

                    <p class="section-subtitle">Dream 11</p>

                    <h2 class="h2 section-title">Show Creativity</h2>

                    <ul class="grid-list">

                        @foreach ($user->players as $player)
                            <li>
                                <div class="card top-seller-card">
                                    <form
                                        action="{{ route('player.remove', ['player_name' => $player->player_name, 'player_position' => $player->player_position]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="delete-button" type="submit">X</button>
                                    </form>

                                    <div class="top-seller-card2">
                                        <h3 class="card-title">
                                            {{ $player->player_name }}
                                        </h3>
                                        <data>{{ $player->player_position }}</data>
                                    </div>
                                </div>
                            </li>
                        @endforeach


                        {{-- @foreach ($dream11Players as $dream11Player)
                            <li>
                                <div class="card top-seller-card">

                                    <button class="delete-button" type="submit">X</button>

                                    <div class="top-seller-card2">
                                        <h3 class="card-title">
                                            {{$dream11Player->player_name}}
                                        </h3>

                                        <data>{{$dream11Player->player_position}}</data>
                                    </div>

                                </div>
                            </li>
                        @endforeach --}}


                    </ul>

                </div>
            </section>

            <section class="section explore" id="explore">
                <div class="container">

                    <p class="section-subtitle">Products</p>

                    <div class="title-wrapper">
                        <h2 class="h2 section-title">Explore</h2>
                    </div>

                    <ul class="grid-list">
                        @foreach ($products as $product)
                            <li>
                                <div class="card explore-card">

                                    <figure class="card-banner">
                                        <img src="products_storage/{{ $product->product_image }}" width="600"
                                            height="600" loading="lazy" class="img-cover">
                                        </a>
                                    </figure>

                                    <h3 class="h3 card-title">
                                        {{ $product->product_name }}
                                    </h3>

                                    <div class="wrapper">
                                        <data class="wrapper-item" value="1.5">Product Id</data>

                                        <span class="wrapper-item">{{ $product->product_id }}</span>
                                    </div>

                                    <div class="wrapper">
                                        <data class="wrapper-item" value="1.5">Price</data>

                                        <span class="wrapper-item">{{ $product->product_price }}$</span>
                                    </div>

                                </div>
                            </li>
                        @endforeach


                    </ul>


                    <p class="section-subtitle">Order Section</p>

                    <div class="center">
                        <div class="login-box">
                            <p>Order</p>
                            <form method="POST" action="/user-profile/order-products">
                                @csrf
                                <div class="user-box">
                                    <input required="" name="name" type="text" value="{{ old('name') }}">
                                    <label>Your Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="user-box">
                                    <input required="" name="product_id" type="text"
                                        value="{{ old('product_id') }}">
                                    <label>Product Id</label>
                                    @if ($errors->has('product_id'))
                                        <span class="text-danger">{{ $errors->first('product_id') }}</span>
                                    @endif
                                </div>
                                <div class="user-box">
                                    <input required="" name="product_quantity" type="number"
                                        value="{{ old('product_quantity') }}">
                                    <label>Quantity</label>
                                    @if ($errors->has('product_quantity'))
                                        <span class="text-danger">{{ $errors->first('product_quantity') }}</span>
                                    @endif
                                </div>
                                <div class="user-box">
                                    <input required="" name="product_total_price" type="number"
                                        value="{{ old('product_total_price') }}">
                                    <label>Total Price</label>
                                    @if ($errors->has('product_total_price'))
                                        <span class="text-danger">{{ $errors->first('product_total_price') }}</span>
                                    @endif
                                </div>

                                <a>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <button type="submit" style="color: rgb(68, 8, 189)">Submit</button>
                                </a>
                            </form>
                        </div>
                    </div>




                </div>
            </section>

        </article>
    </main>


    <footer id="contact" class="footer">
        <div class="container">

            <div class="footer-top">

                <div class="footer-list">

                    <p class="section-subtitle">Contact Us</p>

                    <div class="center">
                        <div class="form-container">
                            <p class="title">Contact</p>
                            <form class="form" method="POST" action="/user-profile/send-message">
                                @csrf
                                <div class="input-group">
                                    <label for="username">Your Name</label>
                                    <input type="text" name="name" id="name" required=""
                                        value="{{ old('name') }}">
                                </div>
                                <div class="input-group">
                                    <label for="username">Email</label>
                                    <input type="email" name="email" id="email" required=""
                                        value="{{ old('email') }}">
                                </div>
                                <div class="input-group">
                                    <label for="password">Subject</label>
                                    <input type="text" name="subject" id="product" required=""
                                        value="{{ old('subject') }}">
                                </div>
                                <div class="input-group">
                                    <label for="password">Message</label>
                                    <textarea required="" name="message" cols="30" rows="10">{{ old('message') }}</textarea>
                                </div>
                                <button class="sign">Send</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </footer>

    <a href="#top" class="back-to-top" aria-label="Back to Top" data-back-top-btn>
        <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
</x-user-profile-outer>
