<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">Manajemen Produksi</a>
        <div>
            <a href="{{ route('produksi.index') }}" class="btn btn-outline-light btn-sm">Produksi</a>
            <a href="{{ route('gudang.index') }}" class="btn btn-outline-light btn-sm">Gudang</a>
            <a href="{{ route('barang-keluar.index') }}" class="btn btn-outline-light btn-sm">Barang Keluar</a>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
