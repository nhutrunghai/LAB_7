<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Lab 7 Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <header class="bg-dark text-white py-3">
        <div class="container d-flex gap-3">
            <a class="text-white text-decoration-none" href="/">Welcome</a>
            <a class="text-white text-decoration-none" href="/home">Trang chủ</a>
            <a class="text-white text-decoration-none" href="/contact">Liên hệ</a>
            <a class="text-white text-decoration-none" href="/products">Sản phẩm</a>
            <a class="text-white text-decoration-none" href="/bang-cuu-chuong/5">Bảng cửu chương</a>
        </div>
    </header>

    <main class="container py-4">
        @yield('content')
    </main>

    <footer class="bg-white border-top py-3">
        <div class="container text-muted">
            Bản quyền {{ date('Y') }} - Nhữ Trung Hải
        </div>
    </footer>
</body>
</html>
