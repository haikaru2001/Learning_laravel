<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data {{ $title }}</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr2J5f5f1+OFsDjIbI5ePT13w9cFqWCC1NiGaq" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">EBS</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Dashboard' ? 'active' : '' }}" href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Mahasiswa' ? 'active' : '' }}" href="/mahasiswa">Data
                            Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Dosen' ? 'active' : '' }}" href="/dosen">Data Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Mata Kuliah' ? 'active' : '' }}" href="/matkul">Mata
                            Kuliah</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="adminDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> Admin
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                        <li><a class="dropdown-item" href="/profile">Users</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-dark py-4 text-white mt-4 footer">
        <div class="container">
            Muhammad Haikal Fuady | Copyright @ {{ date('Y') }} ESQ Business School
        </div>
    </footer>

    <script src="/js/bootstrap.js"></script>
    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        integrity="sha384-fbA56CFLEr1MAqXg2Vz4k/biMd0jRVhGyRVdh4EN7F4+8WXLnxmOrpRUp8yIeApJ" crossorigin="anonymous">
    </script>
</body>

</html>
