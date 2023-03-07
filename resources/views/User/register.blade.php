@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
<style>
    .login_oueter {
        width: 360px;
        max-width: 100%;
    }

    .logo_outer {
        text-align: center;
    }

    .logo_outer img {
        width: 120px;
        margin-bottom: 40px;
    }

    body {
        background: #6a70fc;
    }

    .btn-purple {
        background: #6a70fc;
        width: 100%;
        color: #fff;
        font-weight: 600;
    }

    .btn-purple:hover {
        background: #6a70fc;
        width: 100%;
        color: #fff;
        font-weight: 600;
    }

    .btn-facebook {
        background: #3b66c4;
        width: 100%;
        color: #fff;
        font-weight: 600;
    }

    .btn-facebook:hover {
        background: #3b66c4;
        width: 100%;
        color: #fff;
        font-weight: 600;
    }

    .btn-google {
        background: #cf4332;
        width: 100%;
        color: #fff;
        font-weight: 600;
    }

    .btn-google:hover {
        background: #cf4332;
        width: 100%;
        color: #fff;
        font-weight: 600;
    }

</style>
@endsection

@section('title', 'Halaman Daftar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">TS</h2>
            <P class="text-center text-white mb-5">Tempat Sambat</P>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-4">FORM DAFTAR</h2>
                    <form action="{{ route('pekat.register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" value="{{ old('nik') }}" name="nik" placeholder="NIK"
                                class="form-control @error('nik') is-invalid @enderror">
                            @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{ old('nama') }}" name="nama" placeholder="Nama Lengkap"
                                class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" value="{{ old('email') }}" name="email" placeholder="Email"
                                class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{ old('username') }}" name="username" placeholder="Username"
                                class="form-control @error('username') is-invalid @enderror">
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group-append">
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control col-md-11 @error('password') is-invalid @enderror">
                                <span class="input-group-text" onclick="password_show_hide();">
                                <!-- <i class="fa fa-eye-slash" id="show_eye"></i> -->
                                <i class="fa fa-eye" id="hide_eye"></i>
                                </span>
                            </div>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{ old('telp') }}" name="telp" placeholder="No. Telp"
                                class="form-control @error('telp') is-invalid @enderror">
                            @error('telp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-purple">DAFTAR</button>
                    </form>
                    <!-- <div class="text-center">
                        <p class="my-3 text-secondary">Gunakan Akun Media Sosial Anda</p>
                    </div>
                    <a href="{{ route('pekat.auth', 'facebook') }}" class="btn btn-facebook mb-2"><i class="fa fa-facebook" style="font-size:14px"></i> FACEBOOK</a>
                    <a href="{{ route('pekat.auth', 'google') }}" class="btn btn-google"><i class="fa fa-google" style="font-size:14px"></i> GOOGLE</a>
                </div> -->
                </div>
                @if (Session::has('pesan'))
                <div class="alert alert-danger my-2">
                    {{ Session::get('pesan') }}
                </div>
                @endif
                <a href="{{ route('pekat.index') }}" class="btn btn-warning text-white mt-3"
                    style="width: 100%; font-weight: 600">Kembali ke Halaman Utama</a>
            </div>
        </div>
        <script>
            function password_show_hide() {
                var x = document.getElementById("password");
                var show_eye = document.getElementById("show_eye");
                var hide_eye = document.getElementById("hide_eye");
                hide_eye.classList.remove("d-none");
                if (x.type === "password") {
                    x.type = "text";
                    show_eye.style.display = "none";
                    hide_eye.style.display = "block";
                } else {
                    x.type = "password";
                    show_eye.style.display = "block";
                    hide_eye.style.display = "none";
                }
            }
        </script>
    </div>
    @endsection
