<x-player-profile>

    <header class="header1">
        <div class="container">
            @include('partials._nav-row-v')
        </div>
    </header>

    <main>

        <aside class="sidebar" data-sidebar>

            <div class="sidebar-info">

                <figure class="avatar-box">
                    <img src="{{ asset('laliga_storage/' . $la_liga_club->{'logo'}) }}" alt="" width="80">
                </figure>

                <div class="info-content">
                    <h1 class="name" title="Richard hanrick">{{ $la_liga_club->club_name }}</h1>

                </div>

                <button class="info_more-btn" data-sidebar-btn>
                    <span>Show Contacts</span>

                    <ion-icon name="chevron-down"></ion-icon>
                </button>

            </div>

            <div class="sidebar-info_more">

                <div class="separator"></div>

                <ul class="contacts-list">

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Founded</p>

                            <time datetime="1982-06-23">{{ $la_liga_club->founded_year }}</time>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Country</p>

                            <address>{{ $la_liga_club->country }}</address>
                        </div>

                    </li>

                </ul>

                <div class="separator"></div>

                <ul class="social-list">

                    <li class="social-item">
                        <a href="{{ $la_liga_club->social }}" class="social-link">
                            <ion-icon name="globe-outline"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </aside>

        <div class="main-content">

            <nav class="navbar">

                <ul class="navbar-list">


                    <li class="navbar-item">
                        <button class="navbar-link  active" data-nav-link>About</button>
                    </li>

                    <li class="navbar-item">
                        <button class="navbar-link active" data-nav-link>Timeline</button>
                    </li>

                    <li class="navbar-item">
                        <button class="navbar-link active" data-nav-link>Squad</button>
                    </li>


                </ul>

            </nav>


            <article class="about  active" data-page="about">

                <header>
                    <h2 class="h2 article-title">About Club</h2>
                </header>


                <section class="service">

                    <h3 class="h3 service-title">Club Details</h3>

                    <ul class="service-list">

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="{{ asset('playerprofile_assets/info.png') }}" alt="design icon"
                                    width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title"> League</h4>

                                <p class="service-item-text">
                                    {{ $la_liga_club->league }}
                                </p>
                            </div>

                        </li>

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="{{ asset('playerprofile_assets/info.png') }}" alt="Web development icon"
                                    width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">World Ranking</h4>

                                <p class="service-item-text">
                                    {{ $la_liga_club->world_ranking }}
                                </p>
                            </div>

                        </li>

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="{{ asset('playerprofile_assets/info.png') }}" alt="mobile app icon"
                                    width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Market Value</h4>

                                <p class="service-item-text">
                                    {{ $la_liga_club->market_value }}
                                </p>
                            </div>

                        </li>

                    </ul>

                </section>



                <section class="testimonials">

                    <h3 class="h3 testimonials-title">Trophies</h3>

                    <ul class="testimonials-list has-scrollbar">

                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img src="{{ asset('playerprofile_assets/medal.png') }}" alt="Medal"
                                        width="60" data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>Champions League</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        {{ $la_liga_club->champions_league }}
                                    </p>
                                </div>

                            </div>
                        </li>

                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img src="{{ asset('playerprofile_assets/medal.png') }}" alt="Medal"
                                        width="60" data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>Spanish Championshio</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        {{ $la_liga_club->league_trophy }}
                                    </p>
                                </div>

                            </div>
                        </li>

                    </ul>

                </section>

                <div class="modal-container" data-modal-container>

                    <div class="overlay" data-overlay></div>

                    <section class="testimonials-modal">

                        <button class="modal-close-btn" data-modal-close-btn>
                            <ion-icon name="close-outline"></ion-icon>
                        </button>

                        <div class="modal-img-wrapper">
                            <figure class="modal-avatar-box">
                                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80"
                                    data-modal-img>
                            </figure>

                            <img src="./assets/images/icon-quote.svg" alt="quote icon">
                        </div>

                        <div class="modal-content">

                            <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

                            <time datetime="2021-06-14">14 June, 2021</time>

                            <div data-modal-text>
                                <p>
                                    Richard was hired to create a corporate identity. We were very pleased with the work
                                    done. She has a
                                    lot of experience
                                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet,
                                    ullamcous cididt
                                    consectetur adipiscing
                                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                                </p>
                            </div>

                        </div>

                    </section>

                </div>

            </article>

            <article class="resume" data-page="timeline">

                <header>
                    <h2 class="h2 article-title">Timeline</h2>
                </header>

                <section class="timeline">

                    <div class="title-wrapper">
                        <div class="icon-box">
                            <ion-icon name="shield-outline"></ion-icon>
                        </div>

                        <h3 class="h3">Stadium</h3>
                    </div>

                    <ol class="timeline-list">

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Stadium Name</h4>

                            <span>{{ $la_liga_club->stadium_name }}</span>

                        </li>

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Capacity</h4>

                            <span>{{ $la_liga_club->capacity }}</span>

                        </li>


                    </ol>

                </section>

                <section class="timeline">

                    <div class="title-wrapper">
                        <div class="icon-box">
                            <ion-icon name="people-outline"></ion-icon>
                        </div>

                        <h3 class="h3">Staff</h3>
                    </div>

                    <ol class="timeline-list">

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Manager</h4>
                            <span>{{ $la_liga_club->manager }}</span>
                        </li>
                    </ol>

                </section>

                <section class="skill">

                    <h3 class="h3 skills-title">Home Ground</h3>

                    <section class="clients">

                        <ul class="clients-list has-scrollbar">

                            <li class="clients-item">

                                <img id="std-img"
                                    src="{{ asset('laliga_storage/' . $la_liga_club->{'stadium_picture'}) }}"
                                    alt="client logo">

                            </li>

                        </ul>

                    </section>

                </section>

            </article>

            <article class="portfolio" data-page="portfolio">

                <header>
                    <h2 class="h2 article-title">Portfolio</h2>
                </header>

                <section class="projects">

                    <ul class="filter-list">

                        <li class="filter-item">
                            <button class="active" data-filter-btn>All</button>
                        </li>

                        <li class="filter-item">
                            <button data-filter-btn>Web design</button>
                        </li>

                        <li class="filter-item">
                            <button data-filter-btn>Applications</button>
                        </li>

                        <li class="filter-item">
                            <button data-filter-btn>Web development</button>
                        </li>

                    </ul>

                    <div class="filter-select-box">

                        <button class="filter-select" data-select>

                            <div class="select-value" data-selecct-value>Select category</div>

                            <div class="select-icon">
                                <ion-icon name="chevron-down"></ion-icon>
                            </div>

                        </button>

                        <ul class="select-list">

                            <li class="select-item">
                                <button data-select-item>All</button>
                            </li>

                            <li class="select-item">
                                <button data-select-item>Web design</button>
                            </li>

                            <li class="select-item">
                                <button data-select-item>Applications</button>
                            </li>

                            <li class="select-item">
                                <button data-select-item>Web development</button>
                            </li>

                        </ul>

                    </div>

                    <ul class="project-list">

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-1.jpg" alt="finance" loading="lazy">
                                </figure>

                                <h3 class="project-title">Finance</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-2.png" alt="orizon" loading="lazy">
                                </figure>

                                <h3 class="project-title">Orizon</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web design">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-3.jpg" alt="fundo" loading="lazy">
                                </figure>

                                <h3 class="project-title">Fundo</h3>

                                <p class="project-category">Web design</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="applications">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                                </figure>

                                <h3 class="project-title">Brawlhalla</h3>

                                <p class="project-category">Applications</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web design">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                                </figure>

                                <h3 class="project-title">DSM.</h3>

                                <p class="project-category">Web design</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web design">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                                </figure>

                                <h3 class="project-title">MetaSpark</h3>

                                <p class="project-category">Web design</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-7.png" alt="summary" loading="lazy">
                                </figure>

                                <h3 class="project-title">Summary</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="applications">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                                </figure>

                                <h3 class="project-title">Task Manager</h3>

                                <p class="project-category">Applications</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                                </figure>

                                <h3 class="project-title">Arrival</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                    </ul>

                </section>

            </article>

            <article class="blog" data-page="squad">

                <header>
                    <h2 class="h2 article-title">Squad</h2>
                </header>

                <section class="blog-posts">

                    <section class="clients">


                        <section class="service">

                            <h3 class="h3 service-title">Starting 11</h3>

                            <ul class="service-list">

                                <li class="service-item">

                                    <div class="service-icon-box">
                                        <a href="#"><button><ion-icon style="color: burlywood;"
                                                    name="star-outline"></ion-icon></button></a>
                                    </div>

                                    <div class="service-content-box">
                                        <h4 class="h4 service-item-title">{{ $la_liga_club->name1 }}</h4>

                                        <p class="service-item-text">
                                            {{ $la_liga_club->position1 }}
                                        </p>
                                    </div>

                                </li>

                                <li class="service-item">

                                    <div class="service-icon-box">
                                        <a href="#"><button><ion-icon style="color: burlywood;"
                                                    name="star-outline"></ion-icon></button></a>
                                    </div>

                                    <div class="service-content-box">
                                        <h4 class="h4 service-item-title">{{ $la_liga_club->name2 }}</h4>

                                        <p class="service-item-text">
                                            {{ $la_liga_club->position2 }}
                                        </p>
                                    </div>

                                </li>

                                <li class="service-item">

                                    <div class="service-icon-box">
                                        <a href="#"><button><ion-icon style="color: burlywood;"
                                                    name="star-outline"></ion-icon></button></a>
                                    </div>

                                    <div class="service-content-box">
                                        <h4 class="h4 service-item-title">{{ $la_liga_club->name3 }}</h4>

                                        <p class="service-item-text">
                                            {{ $la_liga_club->position3 }}
                                        </p>
                                    </div>

                                </li>

                                <li class="service-item">

                                    <div class="service-icon-box">
                                        <a href="#"><button><ion-icon style="color: burlywood;"
                                                    name="star-outline"></ion-icon></button></a>
                                    </div>

                                    <div class="service-content-box">
                                        <h4 class="h4 service-item-title">{{ $la_liga_club->name4 }}</h4>

                                        <p class="service-item-text">
                                            {{ $la_liga_club->position4 }}
                                        </p>
                                    </div>

                                </li>

                                <li class="service-item">

                                    <div class="service-icon-box">
                                        <a href="#"><button><ion-icon style="color: burlywood;"
                                                    name="star-outline"></ion-icon></button></a>
                                    </div>

                                    <div class="service-content-box">
                                        <h4 class="h4 service-item-title">{{ $la_liga_club->name5 }}</h4>

                                        <p class="service-item-text">
                                            {{ $la_liga_club->position5 }}
                                        </p>
                                    </div>

                                </li>

                                <li class="service-item">

                                    <div class="service-icon-box">
                                        <a href="#"><button><ion-icon style="color: burlywood;"
                                                    name="star-outline"></ion-icon></button></a>
                                    </div>

                                    <div class="service-content-box">
                                        <h4 class="h4 service-item-title">{{ $la_liga_club->name6 }}</h4>

                                        <p class="service-item-text">
                                            {{ $la_liga_club->position6 }}
                                        </p>
                                    </div>

                                </li>

                                <li class="service-item">

                                    <div class="service-icon-box">
                                        <a href="#"><button><ion-icon style="color: burlywood;"
                                                    name="star-outline"></ion-icon></button></a>
                                    </div>

                                    <div class="service-content-box">
                                        <h4 class="h4 service-item-title">{{ $la_liga_club->name7 }}</h4>

                                        <p class="service-item-text">
                                            {{ $la_liga_club->position7 }}
                                        </p>
                                    </div>

                                </li>

                                <li class="service-item">

                                    <div class="service-icon-box">
                                        <a href="#"><button><ion-icon style="color: burlywood;"
                                                    name="star-outline"></ion-icon></button></a>
                                    </div>

                                    <div class="service-content-box">
                                        <h4 class="h4 service-item-title">{{ $la_liga_club->name8 }}</h4>

                                        <p class="service-item-text">
                                            {{ $la_liga_club->position8 }}
                                        </p>
                                    </div>

                                </li>

                                <li class="service-item">

                                    <div class="service-icon-box">
                                        <a href="#"><button><ion-icon style="color: burlywood;"
                                                    name="star-outline"></ion-icon></button></a>
                                    </div>

                                    <div class="service-content-box">
                                        <h4 class="h4 service-item-title">{{ $la_liga_club->name9 }}</h4>

                                        <p class="service-item-text">
                                            {{ $la_liga_club->position9 }}
                                        </p>
                                    </div>

                                </li>

                                <li class="service-item">

                                    <div class="service-icon-box">
                                        <a href="#"><button><ion-icon style="color: burlywood;"
                                                    name="star-outline"></ion-icon></button></a>
                                    </div>

                                    <div class="service-content-box">
                                        <h4 class="h4 service-item-title">{{ $la_liga_club->name10 }}</h4>

                                        <p class="service-item-text">
                                            {{ $la_liga_club->position10 }}
                                        </p>
                                    </div>

                                </li>

                                <li class="service-item">

                                    <div class="service-icon-box">
                                        <a href="#"><button><ion-icon style="color: burlywood;"
                                                    name="star-outline"></ion-icon></button></a>
                                    </div>

                                    <div class="service-content-box">
                                        <h4 class="h4 service-item-title">{{ $la_liga_club->name11 }}</h4>

                                        <p class="service-item-text">
                                            {{ $la_liga_club->position11 }}
                                        </p>
                                    </div>

                                </li>


                            </ul>

                        </section>

                    </section>




                </section>

            </article>



        </div>

    </main>

</x-player-profile>
