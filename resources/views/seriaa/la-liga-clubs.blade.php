<x-outer-template>

    <div class="outer-con">

        <div class="content">
            @foreach ($seria_a_clubs as $seria_a_club)
                <div class="card one">
                    <div class="top">
                        <div class="title">{{$seria_a_club->club_name}}</div>
                    </div>
                    <div class="details">
                        <img class="club-img" src="laliga_storage/{{ $seria_a_club->logo }}" alt="">
                        <a class="href-decoration" href="/la-liga-clubs/{{ $seria_a_club->id }}"><button>Explore</button></a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

</x-outer-template>
