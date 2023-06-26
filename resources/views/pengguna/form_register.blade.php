<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                                @if (session('error'))
                                    <button class="btn btn-danger btn-block" type="button">{{ session('error') }}
                                    </button>
                                @endif
                                @if (session('success'))
                                    <button class="btn btn-primary btn-block" type="button">{{ session('success') }}
                                    </button>
                                @endif
                            </div>
                            <form action="{{ route('register.simpan-register') }}" class="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control @error('name')
                                    is-invalid
                                @enderror"
                                        id="inputFirstName" name="nama" placeholder="Nama"
                                        value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control @error('username')
                                    is-invalid
                                @enderror"
                                        id="inputUsername" name="username" placeholder="Username"
                                        value="{{ old('username') }}">
                                    @error('username')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                        id="inputEmailAddress" name="email" placeholder="Email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <select
                                        class="form-control @error('level')
                                    is-invalid
                                @enderror"
                                        name="level" value="{{ old('level') }}">
                                        <option value="#">- Pilih Level Pengguna -</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                    @error('level')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control @error('password')
                                    is-invalid
                                @enderror"
                                        id="inputPassword" name="password" placeholder="Password"
                                        value="{{ old('password') }}">
                                    @error('password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <input type="submit" value="Registrasi Akun"
                                    class="btn btn-primary btn-user btn-block">
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login.form-login') }}">Apakah anda sudah memiliki
                                    akun? Login di sini!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
