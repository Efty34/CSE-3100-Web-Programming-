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
                <p>E-Commerce</p>
            </div>

            <div class="col-md-9 register-right">

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="club" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Add Product</h3>
                        <form action="/products/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row register-form">

                                <div class="col-md-6 mt-4">
                                    <h4 id="title">Product Details</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="product_name"
                                            placeholder="Product Name" value="{{old('product_name')}}" />
                                        @if ($errors->has('product_name'))
                                            <span class="text-danger">{{ $errors->first('product_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="product_image" id="" value="{{old('product_image')}}">
                                        @if ($errors->has('product_image'))
                                            <span class="text-danger">{{ $errors->first('product_image') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="product_id" class="form-control"
                                            placeholder="Product Id" value="{{old('product_id')}}" />
                                        @if ($errors->has('product_id'))
                                            <span class="text-danger">{{ $errors->first('product_id') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="product_price" class="form-control" placeholder="Price"
                                            value="{{old('product_price')}}" />
                                        @if ($errors->has('product_price'))
                                            <span class="text-danger">{{ $errors->first('product_price') }}</span>
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
