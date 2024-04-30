<x-outer-template>


    <div class="containerPC">
        <div class="card__container">
            @foreach ($players as $player)
                <article class="card__article">
                    <img src="players_storage/{{ $player->profile_image }}" alt="image" class="card__img">

                    <div class="card__data">
                        <span class="card__description">{{ $player->first_name }}</span>
                        <h2 class="card__title">{{ $player->last_name }}</h2>
                        <a href="/players/{{ $player->id }}" class="card__button">Read More</a>
                    </div>
                </article>
            @endforeach
        </div>

        <nav aria-label="Page navigation" class="pagination-container">
            {{ $players->links() }}
        </nav>

    </div>

</x-outer-template>
