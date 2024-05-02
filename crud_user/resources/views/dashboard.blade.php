<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('/front-end/style.css') }}">
</head>

<body>
    <nav class="nav-bar">
        <div class="container">
            <div class="menu">
                <ul>
                    <li>
                        <a href="#">HOME | </a>
                    </li>
                    @guest
                        <li>
                            <a href="{{ route('login') }}">Đăng Nhập | </a>
                        </li>
                        <li>
                            <a href="{{ route('user.registration') }}">Đăng Ký </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('signout') }}"> | Đăng Xuất</a>
                        </li>
                        <li>
                            <a href="{{ asset('ds-so-thich') }}"> | Danh sách sở thích</a>
                        </li>
                        <li>
                            <a href="{{ asset('ds-bai-viet') }}"> | Danh sách bài viết</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="content-yield">
        @yield('content')
        @yield('content_update')
        @yield('content_list_favorite')
        @yield('content_list_posts')
    </div>

    <footer>
        <h5 class="text">Lập trình web be2 lab7 Sơn Nguyễn</h5>
    </footer>

</body>

</html>
