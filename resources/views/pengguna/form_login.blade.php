<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>


    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                    </div>
                                    <form class="user" action="{{ route('login.proses-login') }}" method="POST"
                                        id="logForm">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            @error('login_gagal')
                                                {{-- <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span> --}}
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                                    <span class="alert-inner--text"><strong>Warning!</strong>
                                                        {{ $message }}</span>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @enderror
                                            <input class="form-control form-control-user" id="username" name="username"
                                                type="text" placeholder="Masukkan Username" />
                                            @if ($errors->has('username'))
                                                <span>{{ $errors->first('username') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password"
                                                name="password" placeholder="Masukkan Password">
                                            @if ($errors->has('password'))
                                                <span>{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>


                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('forgot.form-forgot') }}">Lupa Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register.form-register') }}">Buat Akun
                                            Anda!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>
