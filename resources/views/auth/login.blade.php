<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paket Travel</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="frontend/libraries/xzoom/xzoom.css">
    <link rel="stylesheet" href="frontend/libraries/gijgo/css/gijgo.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:400,600,700,800|Playfair+Display:400,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="frontend/styles/main.css">
</head>

<body>
    <!-- Navbar -->

    <main class="login-container">
        <div class="container">
            <div class="row page-login d-flex align-items-center">
                <div class="section-left col col-12 col-md-6">
                    <h1 class="mb-4">We explore the new <br> life much better</h1>
                    <img src="frontend/images/login-1.jpg" class="w-75 d-none d-sm-flex" alt="">
                </div>
                <div class="section-right col col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="frontend/images/logo_nomads.png" class="w-50 mb-4" alt="">
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input id="email" name="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Masukan Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Masuksan Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-login btn-block mt-2">Masuk</button>
                                    <p class="text-center mt-2">
                                        <a href="{{route('register')}}" class="btn btn-primary">Register</a>
                                    </p>
                                    <p class="text-center mt-2">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">saya lupa password</a>
                                        @endif
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        </main>



        <script src="{{ url('frontend/libraries/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>

</body>

</html>
