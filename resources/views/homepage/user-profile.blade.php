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
                        <a href="#order" class="navbar-link" data-navlink>Order</a>
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

    @if (session('message'))
        <div class="floating-alert">
            <div class="alert alert-success" id="flash-message" role="alert">
                {{ session('message') }}
            </div>
        </div>
    @endif

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
                                        {{-- <button class="delete-button" type="submit">X</button> --}}
                                        <button class="dream11">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                                height="25" width="25">
                                                <path fill="#6361D9"
                                                    d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z"
                                                    clip-rule="evenodd" fill-rule="evenodd"></path>
                                            </svg>

                                        </button>
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

                                    {{-- <div class="wrapper">
                                        <data class="wrapper-item" value="1.5">Product Id</data>

                                        <span class="wrapper-item">{{ $product->product_id }}</span>
                                    </div> --}}

                                    <div class="wrapper">
                                        <data class="wrapper-item" value="1.5">Price</data>

                                        <span class="wrapper-item">{{ $product->product_price }}$</span>
                                    </div>

                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </section>  
            
            <section class="section explore" id="order">
                <div class="container">

                    <p class="section-subtitle">Order Section</p>

                    <div class="center" >
                        <div class="login-box">
                            <p>Order</p>
                            <form method="POST" action="/user-profile/order-products">
                                @csrf
                                <div class="user-box">
                                    <input required="" name="name" type="text" value="{{ Auth::user()->name }}">
                                    <label>Your Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="user-box">
                                    <select id="product-select">
                                        <option value="">Select a product</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->product_id }}" data-price="{{ $product->product_price }}">
                                                {{ $product->product_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="user-box">
                                    <input required="" name="product_quantity" id="product_quantity" type="number" value="{{ old('product_quantity') }}">
                                    <label>Quantity</label>
                                    @if ($errors->has('product_quantity'))
                                        <span class="text-danger">{{ $errors->first('product_quantity') }}</span>
                                    @endif
                                </div>
                                <h4 class="total-h4">Total Price($):</h4>
                                <div class="user-box">
                                    <input required="" name="product_total_price" id="product_total_price" type="number" value="{{ old('product_total_price') }}" readonly>
                                    @if ($errors->has('product_total_price'))
                                        <span class="text-danger">{{ $errors->first('product_total_price') }}</span>
                                    @endif
                                </div>
                                <input type="hidden" id="product_price" name="product_price">
                                <input type="hidden" id="product_id" name="product_id">
                                <a>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <button type="submit" style="color: rgb(68, 8, 189)">Order</button>
                                </a>

                            </form>
                        </div>
                        
                        <script>
                            document.getElementById('product-select').addEventListener('change', function() {
                                var selectedOption = this.options[this.selectedIndex];
                                var productId = selectedOption.value;
                                var productPrice = selectedOption.getAttribute('data-price');
                        
                                document.getElementById('product_id').value = productId;
                                document.getElementById('product_price').value = productPrice;
                                calculateTotalPrice();
                            });
                        
                            document.getElementById('product_quantity').addEventListener('input', calculateTotalPrice);
                        
                            function calculateTotalPrice() {
                                var quantity = document.getElementById('product_quantity').value;
                                var price = parseFloat(document.getElementById('product_price').value);
                        
                                var totalPrice = quantity * price;
                                document.getElementById('product_total_price').value = totalPrice;
                            }
                        </script>
                        
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
                                        value="{{ Auth::user()->name }}">
                                </div>
                                <div class="input-group">
                                    <label for="username">Email</label>
                                    <input type="email" name="email" id="email" required=""
                                        value="{{ Auth::user()->email }}">
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
