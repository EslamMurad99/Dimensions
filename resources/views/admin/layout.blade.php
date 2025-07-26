<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #e0f7fa, #e1bee7);
            font-family: 'Segoe UI', sans-serif;
            padding: 2rem;
        }

        .card {
            border-radius: 1rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .nav-link {
            font-weight: bold;
            color: #007bff !important;
        }

        .nav-link:hover {
            color: #0056b3 !important;
        }

        footer {
            position: absolute;
            bottom: 10px;
            right: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="d-flex justify-content-between mb-4">
            <div>
                <a href="{{ route('lang.switch', 'en') }}" class="btn btn-outline-primary">EN</a>
                <a href="{{ route('lang.switch', 'ar') }}" class="btn btn-outline-primary">عربي</a>
            </div>
            <h4>{{ __('Admin Panel') }}</h4>
        </div>

        @yield('content')
    </div>

    <footer>
        &copy; 2025 Dimensions
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
