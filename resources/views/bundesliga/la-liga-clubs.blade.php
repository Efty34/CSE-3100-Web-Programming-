<x-outer-template>

    <div class="outer-con">

        <div class="content">
            @foreach ($bundes_liga_clubs as $bundes_liga_club)
                <div class="card one">
                    <div class="top">
                        <div class="title">{{$bundes_liga_club->club_name}}</div>
                    </div>
                    <div class="details">
                        <img class="club-img" src="laliga_storage/{{ $bundes_liga_club->logo }}" alt="">
                        <a class="href-decoration" href="/bundes-liga-clubs/{{ $bundes_liga_club->id }}"><button>Explore</button></a>
                    </div>
                </div>
            @endforeach

        </div>

        <nav aria-label="Page navigation" class="pagination-container">
            {{ $bundes_liga_clubs->links() }}
        </nav>

    </div>

</x-outer-template>
