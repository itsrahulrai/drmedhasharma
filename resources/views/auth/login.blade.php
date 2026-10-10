<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Dashboard Login | Dr Medha Sharma</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ static_asset('front-assets/assets/img/home1/favicon.png') }}" type="image/gif"
        sizes="20x20">

    <style>
        body {
            background: linear-gradient(135deg, #56ccf2, #9b51e0);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        .login-btn {
            background: linear-gradient(to right, #56ccf2, #9b51e0);
            color: #fff;
            border: none;
            font-weight: 600;
            text-transform: uppercase;
        }

        .login-btn:hover {
            opacity: 0.9;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            color: #ffffff;
        }

        .form-text a {
            color: #5c7cfa;
            text-decoration: none;
        }

        .form-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-white rounded-4 shadow p-4 position-relative">
                    <span class="close-btn d-none d-md-block">&times;</span>
                    <div class="text-center">
                        <h2 class="fw-bold mb-4">Admin Login</h2>
                        <img class="img-fluid logo mx-auto d-block"
                            src="{{ static_asset('front-assets/assets/images/logo.webp') }}" alt="logo"
                            style="max-width: 150px;">
                    </div>


                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email or Phone -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email or Phone</label>
                            <input type="text" id="email" name="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-5">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn login-btn">Login</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
