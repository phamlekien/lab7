{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang quản lý')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('style')
</head>
<body>

    {{-- Navbar --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
            <a class="navbar-brand" href="#">trang db           </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    @if (Auth::check())
                        <li class="nav-item">
                            <span class="nav-link">Xin chào các cu, <strong>{{ Auth::user()->name }}</strong></span>
                        </li>
                       {{-- Logout (ẩn) --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                        </form>

                        <li class="nav-item">
                         <a href="#" class="nav-link text-danger"
                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          Đăng xuất </a>
                        </li>

                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Đăng nhập</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>

    {{-- Nội dung chính --}}
    <main class="container mt-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="text-center mt-5 py-3 border-top">
        <small> xin chào các cu </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('script')
</body>
</html>

