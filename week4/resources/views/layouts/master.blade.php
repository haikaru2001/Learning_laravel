<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">EBS</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/mahasiswa">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dosen">Data Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin">Halaman Admin</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

@yield('content')

<footer class="bg-dark py-4 text-white mt-4 footer">
    <div class="container">
        Mahasiswa Ilmu Komputer | Copyright @ {{date("Y")}} ESQ Business School
    </div>
</footer>

<script src="/js/bootstrap.js"></script>
<script src="/js/app.js"></script>
</body>
</html>