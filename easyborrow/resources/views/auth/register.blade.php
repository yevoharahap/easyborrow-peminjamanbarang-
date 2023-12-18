<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/template/assets/css/main/app.css">
    <link rel="stylesheet" href="/template/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="/template/assets/images/logo/favicon.png" type="image/png">
</head>

<body class="d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-12 mt-5">
                <!-- Tambahkan class mt-5 untuk memberikan margin atas -->
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h1 class="auth-title text-center">Sign Up</h1>
                        <p class="auth-subtitle text-center mb-3">Masukkan
                            data Anda untuk mendaftar ke situs web kami.</p>

                        <form method="post" action="{{ route('register.store') }}">
                            @csrf
                            <div class="mb-2">
                                <div class="form-group position-relative has-icon-left">
                                    <input type="text" id="nama_user" name="nama_user"
                                        class="form-control form-control-xl" placeholder="Username">
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-group position-relative has-icon-left">
                                    <input type="email" id="email" name="email"
                                        class="form-control form-control-xl" placeholder="Email">
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-group position-relative has-icon-left">
                                    <input type="password" id="password" name="password"
                                        class="form-control form-control-xl" placeholder="Password">
                                    <div class="form-control-icon">
                                        <i class="bi bi-shield-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block btn-lg mt-4">Buat
                                Akun</button>
                        </form>
                        <div class="text-center mt-4 text-lg fs-6">
                            <p class='text-gray-600'>Sudah memiliki akun? <a href={{ url('/login') }}
                                    class="font-bold">Masuk</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
