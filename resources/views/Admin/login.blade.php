<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <style>
        body {
            background: #6a70fc;
        }

        .btn-purple {
            background: #6a70fc;
            width: 100%;
            color: #fff;
        }

    </style>

    <title>Halaman Masuk Petugas</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h2 class="text-center text-white mb-0 mt-5">PEKAT</h2>
                <P class="text-center text-white mb-5">Pengaduan Masyarakat</P>
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center mb-5">FORM PETUGAS</h2>
                        <form action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                            <div class="input-group-append">
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control col-md-11 @error('password') is-invalid @enderror">
                                <span class="input-group-text" onclick="password_show_hide();">
                                <!-- <i class="fa fa-eye-slash" id="show_eye"></i> -->
                                <i class="fa fa-eye" id="hide_eye"></i>
                                </span>
                             </div>
                            </div>
                            <button type="submit" class="btn btn-purple">MASUK</button>
                        </form>
                    </div>
                </div>
                <a href="{{ route('pekat.index') }}" class="btn btn-warning text-white mt-3" style="width: 100%">Kembali
                    ke Halaman Utama</a>
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
</body>

</html>
