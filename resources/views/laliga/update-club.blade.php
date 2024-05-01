<!DOCTYPE html>
<html>

<head>
    <title>InFoo | Update</title>
    <link rel="icon" type="image/png" href=" {{ asset('homepage_assets/favnew.png') }} ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('createplayer_assets/createplayer_style.css') }}">
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

                    <div class="tab-pane fade show active" id="club" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Update Club</h3>
                        <form action="/la-liga-clubs/{{ $la_liga_club->id}}/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row register-form">

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">About Club</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="club_name"
                                            placeholder="Club Name" value="{{old('club_name', $la_liga_club->club_name)}}" />
                                        @if ($errors->has('club_name'))
                                            <span class="text-danger">{{ $errors->first('club_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="logo" id="" value="{{old('logo', $la_liga_club->logoImg)}}">
                                        @if ($errors->has('logo'))
                                            <span class="text-danger">{{ $errors->first('logo') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="founded_year" class="form-control"
                                            placeholder="Founded Year" value="{{old('founded_year', $la_liga_club->founded_year)}}" />
                                        @if ($errors->has('founded_year'))
                                            <span class="text-danger">{{ $errors->first('founded_year') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="country" class="form-control" placeholder="Country"
                                            value="{{old('country', $la_liga_club->country)}}" />
                                        @if ($errors->has('country'))
                                            <span class="text-danger">{{ $errors->first('country') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="social" class="form-control" placeholder="Social"
                                            value="{{old('social', $la_liga_club->social)}}" />
                                        @if ($errors->has('social'))
                                            <span class="text-danger">{{ $errors->first('social') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="league" class="form-control" placeholder="Laeague"
                                            value="{{old('league', $la_liga_club->league)}}" />
                                        @if ($errors->has('league'))
                                            <span class="text-danger">{{ $errors->first('league') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="world_ranking" class="form-control"
                                            placeholder="World Ranking" value="{{old('world_ranking', $la_liga_club->world_ranking)}}" />
                                        @if ($errors->has('world_ranking'))
                                            <span class="text-danger">{{ $errors->first('world_ranking') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="market_value" class="form-control"
                                            placeholder="Market Value" value="{{old('market_value', $la_liga_club->market_value)}}" />
                                        @if ($errors->has('market_value'))
                                            <span class="text-danger">{{ $errors->first('market_value') }}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Trophy</h4>
                                    <div class="form-group">
                                        <input type="number" name="champions_league" class="form-control"
                                            placeholder="Champions League" value="{{old('champions_league', $la_liga_club->champions_league)}}" />
                                        @if ($errors->has('champions_league'))
                                            <span class="text-danger">{{ $errors->first('champions_league') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="league_trophy" class="form-control"
                                            placeholder="League Trophy" value="{{old('league_trophy', $la_liga_club->league_trophy)}}" />
                                        @if ($errors->has('league_trophy'))
                                            <span class="text-danger">{{ $errors->first('league_trophy') }}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Stadium</h4>
                                    <div class="form-group">
                                        <input type="text" name="stadium_name" class="form-control"
                                            placeholder="Stadium Name" value="{{old('stadium_name', $la_liga_club->stadium_name)}}" />
                                        @if ($errors->has('stadium_name'))
                                            <span class="text-danger">{{ $errors->first('stadium_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="capacity" class="form-control"
                                            placeholder="Capacity" value="{{old('capacity', $la_liga_club->capacity)}}" />
                                        @if ($errors->has('capacity'))
                                            <span class="text-danger">{{ $errors->first('capacity') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="file" name="stadium_picture" id="" value="{{old('stadium_picture', $la_liga_club->stadiumpic)}}">
                                        @if ($errors->has('stadium_picture'))
                                            <span class="text-danger">{{ $errors->first('stadium_picture') }}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Staff</h4>
                                    <div class="form-group">
                                        <input type="text" name="manager" class="form-control"
                                            placeholder="Manager" value="{{old('manager', $la_liga_club->manager)}}" />
                                        @if ($errors->has('manager'))
                                            <span class="text-danger">{{ $errors->first('manager') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Squad</h4>

                                    <div class="form-group">
                                        <input type="text" name="name1" class="form-control"
                                            placeholder="PLayer1" value="{{old('name1', $la_liga_club->name1)}}" />
                                        @if ($errors->has('name1'))
                                            <span class="text-danger">{{ $errors->first('name1') }}</span>
                                        @endif
                                        <input type="text" name="position1" class="form-control"
                                            placeholder="Position" value="{{old('position1', $la_liga_club->position1)}}" />
                                        @if ($errors->has('position1'))
                                            <span class="text-danger">{{ $errors->first('position1') }}</span>
                                        @endif
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="name2" class="form-control"
                                            placeholder="PLayer2" value="{{old('name2', $la_liga_club->name2)}}" />
                                        @if ($errors->has('name2'))
                                            <span class="text-danger">{{ $errors->first('name2') }}</span>
                                        @endif
                                        <input type="text" name="position2" class="form-control"
                                            placeholder="Position" value="{{old('position2', $la_liga_club->position2)}}" />
                                        @if ($errors->has('position2'))
                                            <span class="text-danger">{{ $errors->first('position2') }}</span>
                                        @endif
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="name3" class="form-control"
                                            placeholder="PLayer3" value="{{old('name3', $la_liga_club->name3)}}" />
                                        @if ($errors->has('name3'))
                                            <span class="text-danger">{{ $errors->first('name3') }}</span>
                                        @endif
                                        <input type="text" name="position3" class="form-control"
                                            placeholder="Position" value="{{old('position3', $la_liga_club->position3)}}" />
                                        @if ($errors->has('position3'))
                                            <span class="text-danger">{{ $errors->first('position3') }}</span>
                                        @endif
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="name4" class="form-control"
                                            placeholder="PLayer4" value="{{old('name4', $la_liga_club->name4)}}" />
                                        @if ($errors->has('name4'))
                                            <span class="text-danger">{{ $errors->first('name4') }}</span>
                                        @endif
                                        <input type="text" name="position4" class="form-control"
                                            placeholder="Position" value="{{old('position4', $la_liga_club->position4)}}" />
                                        @if ($errors->has('position4'))
                                            <span class="text-danger">{{ $errors->first('position4') }}</span>
                                        @endif
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="name5" class="form-control"
                                            placeholder="PLayer5" value="{{old('name5', $la_liga_club->name5)}}" />
                                        @if ($errors->has('name5'))
                                            <span class="text-danger">{{ $errors->first('name5') }}</span>
                                        @endif
                                        <input type="text" name="position5" class="form-control"
                                            placeholder="Position" value="{{old('position5', $la_liga_club->position5)}}" />
                                        @if ($errors->has('position5'))
                                            <span class="text-danger">{{ $errors->first('position5') }}</span>
                                        @endif
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="name6" class="form-control"
                                            placeholder="PLayer6" value="{{old('name6', $la_liga_club->name6)}}" />
                                        @if ($errors->has('name6'))
                                            <span class="text-danger">{{ $errors->first('name6') }}</span>
                                        @endif
                                        <input type="text" name="position6" class="form-control"
                                            placeholder="Position" value="{{old('position6', $la_liga_club->position6)}}" />
                                        @if ($errors->has('position6'))
                                            <span class="text-danger">{{ $errors->first('position6') }}</span>
                                        @endif
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="name7" class="form-control"
                                            placeholder="PLayer7" value="{{old('name7', $la_liga_club->name7)}}" />
                                        @if ($errors->has('name7'))
                                            <span class="text-danger">{{ $errors->first('name7') }}</span>
                                        @endif
                                        <input type="text" name="position7" class="form-control"
                                            placeholder="Position" value="{{old('position7', $la_liga_club->position7)}}" />
                                        @if ($errors->has('position7'))
                                            <span class="text-danger">{{ $errors->first('position7') }}</span>
                                        @endif
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="name8" class="form-control"
                                            placeholder="PLayer8" value="{{old('name8', $la_liga_club->name8)}}" />
                                        @if ($errors->has('name8'))
                                            <span class="text-danger">{{ $errors->first('name8') }}</span>
                                        @endif
                                        <input type="text" name="position8" class="form-control"
                                            placeholder="Position" value="{{old('position8', $la_liga_club->position8)}}" />
                                        @if ($errors->has('position8'))
                                            <span class="text-danger">{{ $errors->first('position8') }}</span>
                                        @endif
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="name9" class="form-control"
                                            placeholder="PLayer9" value="{{old('name9', $la_liga_club->name9)}}" />
                                        @if ($errors->has('name9'))
                                            <span class="text-danger">{{ $errors->first('name9') }}</span>
                                        @endif
                                        <input type="text" name="position9" class="form-control"
                                            placeholder="Position" value="{{old('position9', $la_liga_club->position9)}}" />
                                        @if ($errors->has('position9'))
                                            <span class="text-danger">{{ $errors->first('position9') }}</span>
                                        @endif
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="name10" class="form-control"
                                            placeholder="PLayer10" value="{{old('name10', $la_liga_club->name10)}}" />
                                        @if ($errors->has('name10'))
                                            <span class="text-danger">{{ $errors->first('name10') }}</span>
                                        @endif
                                        <input type="text" name="position10" class="form-control"
                                            placeholder="Position" value="{{old('position10', $la_liga_club->position10)}}" />
                                        @if ($errors->has('position10'))
                                            <span class="text-danger">{{ $errors->first('position10') }}</span>
                                        @endif
                                        
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="name11" class="form-control"
                                            placeholder="PLayer11" value="{{old('name11', $la_liga_club->name11)}}" />
                                        @if ($errors->has('name11'))
                                            <span class="text-danger">{{ $errors->first('name11') }}</span>
                                        @endif
                                        <input type="text" name="position11" class="form-control"
                                            placeholder="Position" value="{{old('position11', $la_liga_club->position11)}}" />
                                        @if ($errors->has('position11'))
                                            <span class="text-danger">{{ $errors->first('position11') }}</span>
                                        @endif
                                        
                                    </div>

                                </div>
                                
                                    <button type="submit" style="height: 50px">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                width="24" height="24">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
                                            </svg> Update
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
