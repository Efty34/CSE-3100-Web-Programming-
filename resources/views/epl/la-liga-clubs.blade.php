<x-outer-template>

    <div class="outer-con">

        <div class="content">
            @foreach ($epl_clubs as $epl_club)
                <div class="card one">
                    <div class="top">
                        <div class="title">{{$epl_club->club_name}}</div>
                    </div>
                    <div class="details">
                        <img class="club-img" src="laliga_storage/{{ $epl_club->logo }}" alt="">
                        <a class="href-decoration" href="/epl-clubs/{{ $epl_club->id }}"><button>Explore</button></a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

</x-outer-template>
