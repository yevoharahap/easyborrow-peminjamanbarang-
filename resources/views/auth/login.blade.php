<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/template/assets/css/main/app.css">
    <link rel="stylesheet" href="/template/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="/template/assets/images/logo/favicon.png" type="image/png">
</head>

<body class="d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-12 mt-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h1 class="auth-title text-center fs-2">Log in</h1>
                        <p class="auth-subtitle text-center mb-3 fs-5">Masuk
                            dengan data yang Anda masukkan saat registrasi.</p>

                        {{-- <form method="POST" action="{{ route('home') }}"> --}}
                            @csrf
                            <div class="mb-3">
                                <div class="form-group position-relative has-icon-left">
                                    <input type="text" id="email" name="email"
                                        class="form-control form-control-xl" placeholder="Email">
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group position-relative has-icon-left">
                                    <input type="password" id="password" name="password"
                                        class="form-control form-control-xl" placeholder="Password">
                                    <div class="form-control-icon">
                                        <i class="bi bi-shield-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-check-lg d-flex align-items-end">
                                    <input class="form-check-input me-2" type="checkbox" value id="flexCheckDefault">
                                    <label class="form-check-label text-gray-600 fs-6" for="flexCheckDefault">
                                        Biarkan saya tetap masuk
                                    </label>
                                </div>
                            </div>
                            <a href="{{ url('/home') }}"><button class="btn btn-primary btn-block btn-lg shadow-lg mt-4"> Masuk</button></a>
                        {{-- </form> --}}
                        <div class="text-center mt-3 text-lg fs-6">
                            <p class="text-gray-600">Tidak memiliki akun? <a href="{{ url('/register') }}"
                                    class="font-bold">Buat Akun</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
