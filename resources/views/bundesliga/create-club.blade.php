<!DOCTYPE html>
<html>

<head>
    <title>InFoo</title>
    <link rel="icon" type="image/png" href=" {{ asset('homepage_assets/new.png') }} ">
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
                        <h3 class="register-heading">Add Club</h3>
                        <form action="/bundes-liga-clubs/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row register-form">

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">About Club</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="club_name"
                                            placeholder="Club Name" value="{{old('club_name')}}" />
                                        @if ($errors->has('club_name'))
                                            <span class="text-danger">{{ $errors->first('club_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="logo" id="" value="{{old('logo')}}">
                                        @if ($errors->has('logo'))
                                            <span class="text-danger">{{ $errors->first('logo') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="founded_year" class="form-control"
                                            placeholder="Founded Year" value="{{old('founded_year')}}" />
                                        @if ($errors->has('founded_year'))
                                            <span class="text-danger">{{ $errors->first('founded_year') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="country" class="form-control" placeholder="Country"
                                            value="{{old('country')}}" />
                                        @if ($errors->has('country'))
                                            <span class="text-danger">{{ $errors->first('country') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="social" class="form-control" placeholder="Social"
                                            value="{{old('social')}}" />
                                        @if ($errors->has('social'))
                                            <span class="text-danger">{{ $errors->first('social') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="league" class="form-control" placeholder="Laeague"
                                            value="{{old('league')}}" />
                                        @if ($errors->has('league'))
                                            <span class="text-danger">{{ $errors->first('league') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="world_ranking" class="form-control"
                                            placeholder="World Ranking" value="{{old('world_ranking')}}" />
                                        @if ($errors->has('world_ranking'))
                                            <span class="text-danger">{{ $errors->first('world_ranking') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="market_value" class="form-control"
                                            placeholder="Market Value" value="{{old('market_value')}}" />
                                        @if ($errors->has('market_value'))
                                            <span class="text-danger">{{ $errors->first('market_value') }}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Trophy</h4>
                                    <div class="form-group">
                                        <input type="number" name="champions_league" class="form-control"
                                            placeholder="Champions League" value="{{old('champions_league')}}" />
                                        @if ($errors->has('champions_league'))
                                            <span class="text-danger">{{ $errors->first('champions_league') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="league_trophy" class="form-control"
                                            placeholder="League Trophy" value="{{old('league_trophy')}}" />
                                        @if ($errors->has('league_trophy'))
                                            <span class="text-danger">{{ $errors->first('league_trophy') }}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Stadium</h4>
                                    <div class="form-group">
                                        <input type="text" name="stadium_name" class="form-control"
                                            placeholder="Stadium Name" value="{{old('stadium_name')}}" />
                                        @if ($errors->has('stadium_name'))
                                            <span class="text-danger">{{ $errors->first('stadium_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="capacity" class="form-control"
                                            placeholder="Capacity" value="{{old('capacity')}}" />
                                        @if ($errors->has('capacity'))
                                            <span class="text-danger">{{ $errors->first('capacity') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="file" name="stadium_picture" id="" value="{{old('stadium_picture')}}">
                                        @if ($errors->has('stadium_picture'))
                                            <span class="text-danger">{{ $errors->first('stadium_picture') }}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Staff</h4>
                                    <div class="form-group">
                                        <input type="text" name="manager" class="form-control"
                                            placeholder="Manager" value="{{old('manager')}}" />
                                        @if ($errors->has('manager'))
                                            <span class="text-danger">{{ $errors->first('manager') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Squad</h4>
                                
                                    <div class="form-group">
                                        @for ($i = 1; $i <= 11; $i++)
                                            <input type="text" name="name{{ $i }}" class="form-control" placeholder="Player{{ $i }}" value="{{ old('name' . $i) }}" />
                                            @if ($errors->has('name' . $i))
                                                <span class="text-danger">{{ $errors->first('name' . $i) }}</span>
                                            @endif
                                            <input type="text" name="position{{ $i }}" class="form-control" placeholder="Position" value="{{ old('position' . $i) }}" />
                                            @if ($errors->has('position' . $i))
                                                <span class="text-danger">{{ $errors->first('position' . $i) }}</span>
                                            @endif
                                        @endfor
                                    </div>
                                
                                </div>
                                
                                
                                    <button type="submit" style="height: 50px">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                width="24" height="24">
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
