<x-outer-template>

    <div class="outer-con">

        <div class="content">
            @foreach ($clubs as $club)
                <div class="card one">
                    <div class="top">
                        <div class="title">{{$club->club_name}}</div>
                    </div>
                    <div class="details">
                        <img class="club-img" src="{{ asset('club_storage/' . $club->{'logo'}) }}" alt="">
                        <a class="href-decoration" href="{{ route('clubs.show', $club->id) }}"><button>Explore</button></a>
                    </div>
                </div>
            @endforeach

        </div>
        
        {{-- <nav aria-label="Page navigation" class="pagination-container">
            {{ $clubs->links() }}
        </nav> --}}
    </div>
    

</x-outer-template>
