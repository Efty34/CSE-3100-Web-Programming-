<x-outer-template>

    <div class="outer-con">

        <div class="content">
            @foreach ($la_liga_clubs as $la_liga_club)
                <div class="card one">
                    <div class="top">
                        <div class="title">{{$la_liga_club->club_name}}</div>
                    </div>
                    <div class="details">
                        <img class="club-img" src="laliga_storage/{{ $la_liga_club->logo }}" alt="">
                        <a class="href-decoration" href="/la-liga-clubs/{{ $la_liga_club->id }}"><button>Explore</button></a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

</x-outer-template>
