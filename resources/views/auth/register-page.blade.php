<x-loginsystem-template>
    <x-outer-template>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">

                    @if (session('message'))
                        <div class="floating-alert">
                            <div class="alert alert-success" id="flash-message" role="alert">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif

                    <form action="/loginsystem/login" method="POST" class="sign-in-form">

                        @csrf
                        <h2 class="title">Sign In</h2>
                        @if ($errors->any())

                            <div class="alert-box" role="alert">
                                <strong class="font-bold">Error!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li><span>{{ $error }}</span></li>
                                    @endforeach
                                </ul>
                            </div>

                        @endif
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input name="email" type="email" placeholder="Email" required="" value="" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Password" required="" />
                        </div>
                        <input type="submit" value="Login" class="btn solid" />
                    </form>


                    <form action="/loginsystem/save" method="POST" class="sign-up-form">
                        @csrf
                        <h2 class="title">Sign Up</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input name="name" type="text" placeholder="Username" required=""
                                value="{{ old('name') }}" />
                            @error('name')
                                <div class="error-message">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input name="email" type="email" placeholder="Email" required=""
                                value="{{ old('email') }}" />
                            @error('email')
                                <div class="error-message">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input name="password" type="password" placeholder="Password" required="" />
                            @error('password')
                                <div class="error-message">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input name="password_confirmation" type="password" placeholder="Confirm Password"
                                required="" />
                            @error('password_confirmation')
                                <div class="error-message">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <input type="submit" value="Sign Up" class="btn solid" />

                    </form>

                </div>
            </div>
            <div class="panels-container">

                <div class="panel left-panel">
                    <div class="content">
                        @if (session('success'))
                            <div id="success-message" class="alert-box2">
                                {{ session('success') }}
                            </div>
                        @endif
                        <h3>New here?</h3>
                        <p>Welcome back! Ready to dive back into everything our website has to offer?</p>
                        <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                    </div>
                    <img src="{{ asset('auth_assets/img1.svg') }}" class="image" alt="">
                </div>

                <div class="panel right-panel">
                    <div class="content">
                        <h3>One of us?</h3>
                        <p>Welcome to our website! We're thrilled to have you here. 🌟

                            To get started and access all the exciting features, please sign up-</p>
                        <button class="btn transparent" id="sign-in-btn">Sign In</button>
                    </div>
                    <img src="{{ asset('auth_assets/img2.svg') }}" class="image" alt="">
                </div>
            </div>
        </div>
    </x-outer-template>
</x-loginsystem-template>
