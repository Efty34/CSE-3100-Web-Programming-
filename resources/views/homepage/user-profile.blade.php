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

                        <li>
                            <div class="card top-seller-card">

                                <button class="delete-button" type="submit">X</button>

                                <div class="top-seller-card2">
                                    <h3 class="card-title">
                                        Luka Modric
                                    </h3>

                                    <data>Mid Fielder</data>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card top-seller-card">

                                <button class="delete-button" type="submit">X</button>

                                <div class="top-seller-card2">
                                    <h3 class="card-title">
                                        Luka Modric
                                    </h3>

                                    <data>Mid Fielder</data>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card top-seller-card">

                                <button class="delete-button" type="submit">X</button>

                                <div class="top-seller-card2">
                                    <h3 class="card-title">
                                        Luka Modric
                                    </h3>

                                    <data>Mid Fielder</data>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card top-seller-card">

                                <button class="delete-button" type="submit">X</button>

                                <div class="top-seller-card2">
                                    <h3 class="card-title">
                                        Luka Modric
                                    </h3>

                                    <data>Mid Fielder</data>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card top-seller-card">

                                <button class="delete-button" type="submit">X</button>

                                <div class="top-seller-card2">
                                    <h3 class="card-title">
                                        Luka Modric
                                    </h3>

                                    <data>Mid Fielder</data>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card top-seller-card">

                                <button class="delete-button" type="submit">X</button>

                                <div class="top-seller-card2">
                                    <h3 class="card-title">
                                        Luka Modric
                                    </h3>

                                    <data>Mid Fielder</data>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card top-seller-card">

                                <button class="delete-button" type="submit">X</button>

                                <div class="top-seller-card2">
                                    <h3 class="card-title">
                                        Luka Modric
                                    </h3>

                                    <data>Mid Fielder</data>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card top-seller-card">

                                <button class="delete-button" type="submit">X</button>

                                <div class="top-seller-card2">
                                    <h3 class="card-title">
                                        Luka Modric
                                    </h3>

                                    <data>Mid Fielder</data>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card top-seller-card">

                                <button class="delete-button" type="submit">X</button>

                                <div class="top-seller-card2">
                                    <h3 class="card-title">
                                        Luka Modric
                                    </h3>

                                    <data>Mid Fielder</data>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card top-seller-card">

                                <button class="delete-button" type="submit">X</button>

                                <div class="top-seller-card2">
                                    <h3 class="card-title">
                                        Luka Modric
                                    </h3>

                                    <data>Mid Fielder</data>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card top-seller-card">

                                <button class="delete-button" type="submit">X</button>

                                <div class="top-seller-card2">
                                    <h3 class="card-title">
                                        Luka Modric
                                    </h3>

                                    <data>Mid Fielder</data>
                                </div>

                            </div>
                        </li>



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

                        <li>
                            <div class="card explore-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/boot.jpg" width="600" height="600" loading="lazy"
                                        class="img-cover">
                                    </a>
                                </figure>

                                <h3 class="h3 card-title">
                                    Adidas air x11
                                </h3>

                                <div class="wrapper">
                                    <data class="wrapper-item" value="1.5">Product Id</data>

                                    <span class="wrapper-item">#01</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card explore-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/boot.jpg" width="600" height="600" loading="lazy"
                                        class="img-cover">
                                    </a>
                                </figure>

                                <h3 class="h3 card-title">
                                    Adidas air x11
                                </h3>

                                <div class="wrapper">
                                    <data class="wrapper-item" value="1.5">Product Id</data>

                                    <span class="wrapper-item">#01</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card explore-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/boot.jpg" width="600" height="600" loading="lazy"
                                        class="img-cover">
                                    </a>
                                </figure>

                                <h3 class="h3 card-title">
                                    Adidas air x11
                                </h3>

                                <div class="wrapper">
                                    <data class="wrapper-item" value="1.5">Product Id</data>

                                    <span class="wrapper-item">#01</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card explore-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/boot.jpg" width="600" height="600" loading="lazy"
                                        class="img-cover">
                                    </a>
                                </figure>

                                <h3 class="h3 card-title">
                                    Adidas air x11
                                </h3>

                                <div class="wrapper">
                                    <data class="wrapper-item" value="1.5">Product Id</data>

                                    <span class="wrapper-item">#01</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card explore-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/boot.jpg" width="600" height="600" loading="lazy"
                                        class="img-cover">
                                    </a>
                                </figure>

                                <h3 class="h3 card-title">
                                    Adidas air x11
                                </h3>

                                <div class="wrapper">
                                    <data class="wrapper-item" value="1.5">Product Id</data>

                                    <span class="wrapper-item">#01</span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="card explore-card">

                                <figure class="card-banner">
                                    <img src="./assets/images/boot.jpg" width="600" height="600" loading="lazy"
                                        class="img-cover">
                                    </a>
                                </figure>

                                <h3 class="h3 card-title">
                                    Adidas air x11
                                </h3>

                                <div class="wrapper">
                                    <data class="wrapper-item" value="1.5">Product Id</data>

                                    <span class="wrapper-item">#01</span>
                                </div>

                            </div>
                        </li>

                    </ul>


                    <p class="section-subtitle">Order Section</p>

                    <div class="center">
                        <div class="login-box">
                            <p>Order</p>
                            <form>
                                <div class="user-box">
                                    <input required="" name="" type="text">
                                    <label>Your Name</label>
                                </div>
                                <div class="user-box">
                                    <input required="" name="" type="password">
                                    <label>Product Id</label>
                                </div>
                                <div class="user-box">
                                    <input required="" name="" type="password">
                                    <label>Quantity</label>
                                </div>
                                <a href="#">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Submit
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
                            <form class="form">
                                <div class="input-group">
                                    <label for="username">Your Name</label>
                                    <input type="text" name="name" id="name" placeholder="">
                                </div>
                                <div class="input-group">
                                    <label for="password">Subject</label>
                                    <input type="text" name="product" id="product" placeholder="">
                                </div>
                                <div class="input-group">
                                    <label for="password">Message</label>
                                    <textarea name="message" cols="30" rows="10"></textarea>
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
