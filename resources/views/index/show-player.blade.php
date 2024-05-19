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
                    <img src="{{ asset('players_storage/' . $player->{'profile_image'}) }}" alt=""
                        width="80">
                </figure>

                <div class="info-content">
                    <h1 class="name" title="Richard hanrick">{{ $player->first_name . ' ' . $player->last_name }}</h1>

                    <p class="title">{{ $player->position }}</p>
                </div>

                <button class="info_more-btn" data-sidebar-btn>
                    <span>Show Contacts</span>

                    <ion-icon name="chevron-down"></ion-icon>
                </button>

            </div>

            <div class="sidebar-info_more">

                <ul class="contacts-list">

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Birthday</p>

                            <time datetime="1982-06-23">{{ $player->birth_date }}</time>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Birth Place</p>

                            <address>{{ $player->birth_place }}</address>
                        </div>

                    </li>

                </ul>

                <div class="separator"></div>

                <ul class="social-list">

                    <li class="social-item">
                        <a href="{{ $player->social }}" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
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
                        <button class="navbar-link" data-nav-link>Timeline</button>
                    </li>

                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Archive</button>
                    </li>

                </ul>

            </nav>

            <article class="about  active" data-page="about">

                <header>
                    <h2 class="h2 article-title">About Player</h2>
                </header>

                <section class="service">

                    <h3 class="h3 service-title">Personal Details</h3>

                    <ul class="service-list">

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="{{ asset('playerprofile_assets/info.png') }}" alt="design icon"
                                    width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title"> Preferred Foot</h4>

                                <p class="service-item-text">
                                    {{ $player->preferred_foot }}
                                </p>
                            </div>

                        </li>

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="{{ asset('playerprofile_assets/info.png') }}" alt="Web development icon"
                                    width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Height</h4>

                                <p class="service-item-text">
                                    {{ $player->height }}
                                </p>
                            </div>

                        </li>

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="{{ asset('playerprofile_assets/info.png') }}" alt="mobile app icon"
                                    width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Current Market Value</h4>

                                <p class="service-item-text">
                                    {{ $player->market_value }}
                                </p>
                            </div>

                        </li>

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="{{ asset('playerprofile_assets/info.png') }}" alt="camera icon"
                                    width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Outfitter</h4>

                                <p class="service-item-text">
                                    {{ $player->outfitter }}
                                </p>
                            </div>

                        </li>

                    </ul>

                </section>

                <section class="testimonials">

                    <h3 class="h3 testimonials-title">Achievements</h3>

                    <ul class="testimonials-list has-scrollbar">

                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img src="{{ asset('playerprofile_assets/medal.png') }}" alt="Medal"
                                        width="60" data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>Career Goals</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        {{ $player->career_goals }}
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

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>World Cup</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        {{ $player->world_cups }}
                                    </p>
                                </div>

                            </div>
                        </li>

                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img src="{{ asset('playerprofile_assets/medal.png') }}" alt="Jessica miller"
                                        width="60" data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>Continental Trophy</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        {{ $player->continental_cups }}
                                    </p>
                                </div>

                            </div>
                        </li>

                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img src="{{ asset('playerprofile_assets/medal.png') }}" alt="Emily evans"
                                        width="60" data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>Ballon d'OR</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        {{ $player->ballon_dors }}
                                    </p>
                                </div>

                            </div>
                        </li>

                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img src="{{ asset('playerprofile_assets/medal.png') }}" alt="Henry william"
                                        width="60" data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>Champions League</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        {{ $player->champions_league }}
                                    </p>
                                </div>

                            </div>
                        </li>

                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img src="{{ asset('playerprofile_assets/medal.png') }}" alt="Henry william"
                                        width="60" data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>League Trophy</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        {{ $player->league_titles }}
                                    </p>
                                </div>

                            </div>
                        </li>

                    </ul>

                </section>

                {{-- Don't Touch this Div --}}
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

                        <h3 class="h3">Club History</h3>
                    </div>

                    <ol class="timeline-list">

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Debut</h4>

                            <span>{{ $player->club_debut }}</span>

                        </li>

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Current Club</h4>

                            <span>{{ $player->current_club }}</span>



                        </li>

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Previous Clubs</h4>

                            <span>{{ $player->previous_clubs }}</span>

                        </li>

                    </ol>

                </section>

                <section class="timeline">

                    <div class="title-wrapper">
                        <div class="icon-box">
                            <ion-icon name="flag-outline"></ion-icon>
                        </div>

                        <h3 class="h3">National History</h3>
                    </div>

                    <ol class="timeline-list">

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Team</h4>

                            <span>{{ $player->national_team }}</span>

                        </li>

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Debut</h4>

                            <span>{{ $player->national_debut }}</span>


                        </li>

                    </ol>

                </section>

                <section class="skill">

                    <h3 class="h3 skills-title">Fifa Rating</h3>

                    <ul class="skills-list content-card">

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Overall</h5>
                                <data value="{{ $player->overall }}">{{ $player->overall }}</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: {{ $player->overall }}%;"></div>
                            </div>

                        </li>

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Pace</h5>
                                <data value="{{ $player->pace }}">{{ $player->pace }}</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: {{ $player->pace }}%;"></div>
                            </div>

                        </li>

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Shooting</h5>
                                <data value="{{ $player->shooting }}">{{ $player->shooting }}</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: {{ $player->shooting }}%;"></div>
                            </div>

                        </li>

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Passing</h5>
                                <data value="{{ $player->passing }}">{{ $player->passing }}</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: {{ $player->passing }}%;"></div>
                            </div>

                        </li>

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Dribbling</h5>
                                <data value="{{ $player->dribbling }}">{{ $player->dribbling }}</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: {{ $player->dribbling }}%;"></div>
                            </div>

                        </li>

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Defending</h5>
                                <data value="{{ $player->defending }}">{{ $player->defending }}</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: {{ $player->defending }}%;"></div>
                            </div>

                        </li>

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Physical</h5>
                                <data value="{{ $player->physical }}">{{ $player->physical }}</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: {{ $player->physical }}%;"></div>
                            </div>

                        </li>

                    </ul>

                </section>

            </article>

            {{-- Don't Touch thid article --}}
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

            <article class="blog" data-page="archive">

                <header>
                    <h2 class="h2 article-title">Archive</h2>
                </header>

                <section class="blog-posts">

                    <section class="clients">

                        <ul class="clients-list has-scrollbar">

                            @for ($i = 1; $i <= 5; $i++)
                                @if (!empty($player->{'photo' . $i}))
                                    <li class="clients-item">
                                        <img src="{{ asset('players_storage/' . $player->{'photo' . $i}) }}"
                                            alt="Photo {{ $i }}">
                                    </li>
                                @endif
                            @endfor

                        </ul>

                    </section>

                </section>

            </article>

        </div>

    </main>

</x-player-profile>
