<!DOCTYPE html>
<html>

<head>
    <title>InFoo | Creation</title>
    <link rel="icon" type="image/png" href=" {{ asset('homepage_assets/favnew.png') }} ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('createplayer_assets/createplayer_style.css') }}">
    <link rel="icon" type="image/png" href=" {{ asset('homepage_assets/favnew.png') }} ">

</head>

<body>
    <div class="container register">

        <div class="row">

            <div class="col-md-3 register-left">
                <h1>InFoo</h1>
                <p>Create Players <br> Create Clubs</p>
            </div>

            <div class="col-md-9 register-right">

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="player" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Add Player</h3>
                        <form action="/players/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row register-form">
                                <div class="col-md-6 mt-4">

                                    <h4 id="title">About Player</h4>

                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control"
                                            placeholder="First Name" value="{{ old('first_name') }}" />
                                        @if ($errors->has('first_name'))
                                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="last_name" class="form-control"
                                            placeholder="Last Name" value="{{ old('last_name') }}" />
                                        @if ($errors->has('last_name'))
                                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="position" class="form-control"
                                            placeholder="Position" value="{{ old('position') }}" />
                                        @if ($errors->has('position'))
                                            <span class="text-danger">{{ $errors->first('position') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="profile_image" class="form-control"
                                            placeholder="Upload Image" value="{{ old('profile_image') }}" />
                                        @if ($errors->has('profile_image'))
                                            <span class="text-danger">{{ $errors->first('profile_image') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="birth_date" class="form-control"
                                            placeholder="Birth Date" value="{{ old('birth_date') }}" />
                                        @if ($errors->has('birth_date'))
                                            <span class="text-danger">{{ $errors->first('birth_date') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">

                                        <input type="text" name="birth_place" class="form-control"
                                            placeholder="Birth Place" value="{{ old('birth_place') }}" />
                                        @if ($errors->has('birth_place'))
                                            <span class="text-danger">{{ $errors->first('birth_place') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="social" class="form-control"
                                            placeholder="Instagram" value="{{ old('social') }}" />
                                        @if ($errors->has('social'))
                                            <span class="text-danger">{{ $errors->first('social') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="preferred_foot" class="form-control"
                                            placeholder="Preferred Foot" value="{{ old('preferred_foot') }}" />
                                        @if ($errors->has('preferred_foot'))
                                            <span class="text-danger">{{ $errors->first('preferred_foot') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="height" class="form-control" placeholder="Height"
                                            value="{{ old('height') }}" />
                                        @if ($errors->has('height'))
                                            <span class="text-danger">{{ $errors->first('height') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="market_value" class="form-control"
                                            placeholder="Current Market Value" value="{{ old('market_value') }}" />
                                        @if ($errors->has('market_value'))
                                            <span class="text-danger">{{ $errors->first('market_value') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="outfitter" class="form-control"
                                            placeholder="Outfitter" value="{{ old('outfitter') }}" />
                                        @if ($errors->has('outfitter'))
                                            <span class="text-danger">{{ $errors->first('outfitter') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-md-6 mt-4">

                                    <h4 id="title">Achievements</h4>

                                    <div class="form-group">
                                        <input type="number" name="career_goals" class="form-control"
                                            placeholder="Career Goals" value="{{ old('career_goals') }}" />
                                        @if ($errors->has('career_goals'))
                                            <span class="text-danger">{{ $errors->first('career_goals') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="world_cups" class="form-control"
                                            placeholder="World Cup" value="{{ old('world_cups') }}" />
                                        @if ($errors->has('world_cups'))
                                            <span class="text-danger">{{ $errors->first('world_cups') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="continental_cups" class="form-control"
                                            placeholder="Continental Cup" value="{{ old('continental_cups') }}" />
                                        @if ($errors->has('continental_cups'))
                                            <span class="text-danger">{{ $errors->first('continental_cups') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="ballon_dors" class="form-control"
                                            placeholder="Ballon d'OR" value="{{ old('ballon_dors') }}" />
                                        @if ($errors->has('ballon_dors'))
                                            <span class="text-danger">{{ $errors->first('ballon_dors') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="champions_league" class="form-control"
                                            placeholder="Champions League" value="{{ old('champions_league') }}" />
                                        @if ($errors->has('champions_league'))
                                            <span class="text-danger">{{ $errors->first('champions_league') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="league_titles" class="form-control"
                                            placeholder="League Trophy" value="{{ old('league_titles') }}" />
                                        @if ($errors->has('league_titles'))
                                            <span class="text-danger">{{ $errors->first('league_titles') }}</span>
                                        @endif
                                    </div>


                                </div>

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Club History</h4>

                                    <div class="form-group">
                                        <input type="text" name="club_debut" class="form-control"
                                            placeholder="Club Debut" value="{{ old('club_debut') }}" />
                                        @if ($errors->has('club_debut'))
                                            <span class="text-danger">{{ $errors->first('club_debut') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="current_club" class="form-control"
                                            placeholder="Current Club" value="{{ old('current_club') }}" />
                                        @if ($errors->has('current_club'))
                                            <span class="text-danger">{{ $errors->first('current_club') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="previous_clubs" class="form-control"
                                            placeholder="Previous Club" value="{{ old('previous_clubs') }}" />
                                        @if ($errors->has('previous_clubs'))
                                            <span class="text-danger">{{ $errors->first('previous_clubs') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">

                                    <h4 id="title">National History</h4>

                                    <div class="form-group">
                                        <input type="text" name="national_team" class="form-control"
                                            placeholder="National Team" value="{{ old('national_team') }}" />
                                        @if ($errors->has('national_team'))
                                            <span class="text-danger">{{ $errors->first('national_team') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="national_debut" class="form-control"
                                            placeholder="National Debut" value="{{ old('national_debut') }}" />
                                        @if ($errors->has('national_debut'))
                                            <span class="text-danger">{{ $errors->first('national_debut') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">

                                    <h4 id="title">Fifa Rating</h4>

                                    <div class="form-group">

                                        <input type="number" name="overall" class="form-control"
                                            placeholder="Overall" value="{{ old('overall') }}" />
                                        @if ($errors->has('overall'))
                                            <span class="text-danger">{{ $errors->first('overall') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="pace" class="form-control" placeholder="Pace"
                                            value="{{ old('pace') }}" />
                                        @if ($errors->has('pace'))
                                            <span class="text-danger">{{ $errors->first('pace') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="shooting" class="form-control"
                                            placeholder="Shooting" value="{{ old('shooting') }}" />
                                        @if ($errors->has('shooting'))
                                            <span class="text-danger">{{ $errors->first('shooting') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="passing" class="form-control"
                                            placeholder="Passing" value="{{ old('passing') }}" />
                                        @if ($errors->has('passing'))
                                            <span class="text-danger">{{ $errors->first('passing') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="dribbling" class="form-control"
                                            placeholder="Dribling" value="{{ old('dribbling') }}" />
                                        @if ($errors->has('dribbling'))
                                            <span class="text-danger">{{ $errors->first('dribbling') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="defending" class="form-control"
                                            placeholder="Defending" value="{{ old('defending') }}" />
                                        @if ($errors->has('defending'))
                                            <span class="text-danger">{{ $errors->first('defending') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="physical" class="form-control"
                                            placeholder="Physical" value="{{ old('physical') }}" />
                                        @if ($errors->has('physical'))
                                            <span class="text-danger">{{ $errors->first('physical') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Archive</h4>

                                    {{-- <div class="form-group">
                                        <input type="file" name="photo1" class="form-control"
                                            placeholder="Upload Image" value="{{ old('photo1') }}" />
                                        @if ($errors->has('photo1'))
                                            <span class="text-danger">{{ $errors->first('photo1') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="photo2" class="form-control"
                                            placeholder="Upload Image" value="{{ old('photo2') }}" />
                                        @if ($errors->has('photo2'))
                                            <span class="text-danger">{{ $errors->first('photo2') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="photo3" class="form-control"
                                            placeholder="Upload Image" value="{{ old('position') }}" />
                                        @if ($errors->has('photo3'))
                                            <span class="text-danger">{{ $errors->first('photo3') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="photo4" class="form-control"
                                            placeholder="Upload Image"  value="{{ old('photo4') }}"/>
                                        @if ($errors->has('photo4'))
                                            <span class="text-danger">{{ $errors->first('photo4') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="photo5" class="form-control"
                                            placeholder="Upload Image" value="{{ old('photo5') }}" />
                                        @if ($errors->has('photo5'))
                                            <span class="text-danger">{{ $errors->first('photo5') }}</span>
                                        @endif
                                    </div> --}}
                                    @php
                                        $photoInputs = ['photo1', 'photo2', 'photo3', 'photo4', 'photo5'];
                                    @endphp

                                    @foreach ($photoInputs as $photoInput)
                                        <div class="form-group">
                                            <input type="file" name="{{ $photoInput }}" class="form-control"
                                                placeholder="Upload Image" value="{{ old($photoInput) }}" />
                                            @if ($errors->has($photoInput))
                                                <span class="text-danger">{{ $errors->first($photoInput) }}</span>
                                            @endif
                                        </div>
                                    @endforeach



                                </div>
                                <button type="submit">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
                                        </svg> Create
                                    </span>
                                </button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
