<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="/css/app.css"> -->
</head>
<body>
    <div class="container text-center mt-3 bg-white">
        <h1>Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
                @component('layouts.alert')
                @slot('class')
                    warning
                @endslot
                @slot('judul')
                    Hati-hati
                @endslot
                100 data mahasiswa perlu diperbaiki
                @endcomponent

                @component('layouts.alert')
                @slot('class')
                    danger
                @endslot
                @slot('judul')
                    bahaya-mendatang
                @endslot
                Hari ini deadline laporan perjalanan dinas!
                @endcomponent
            </div>
        </div>
    </div>
</body>
<script src="/js/bootstrap.js"></script>
</html>