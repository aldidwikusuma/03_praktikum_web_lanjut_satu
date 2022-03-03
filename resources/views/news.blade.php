<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app.css') }}">
</head>
<body>
    <div class="d-flex align-items-center justify-content-center flex-column container">
        <h1>Ini adalah Halaman News</h1>
        <h2>Judul Berita : {{ $berita }}</h2>
    </div>
    <script type="text/javascript" src="{{ asset('assets/script/app.js') }}"></script>
</body>
</html>