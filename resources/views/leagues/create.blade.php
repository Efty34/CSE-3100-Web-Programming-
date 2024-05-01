<!DOCTYPE html>
<html>

<head>
    <title>InFoo | League</title>
    <link rel="icon" type="image/png" href=" {{ asset('homepage_assets/favnew.png') }} ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('createplayer_assets/createplayer_style.css') }}">
</head>

<body>
    <div class="container register">

        <div class="row">

            <div class="col-md-3 register-left">
                <h1>InFoo</h1>
                <p>Create League</p>
            </div>

            <div class="col-md-9 register-right">

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="club" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Add League</h3>
                        <form action="/leagues/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row register-form">

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">League Details</h4>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="League Name" value="{{old('name')}}" />
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="file" name="league_logo" id="" value="{{old('league_logo')}}">
                                        @if ($errors->has('league_logo'))
                                            <span class="text-danger">{{ $errors->first('league_logo') }}</span>
                                        @endif
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
