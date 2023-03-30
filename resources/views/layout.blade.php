<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"></link>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"></link>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Tugas 5</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">WarungKu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item me-auto mb-2 mb-lg-0">
          <a class="nav-link" href="/home">Home</a>
        </li>
        <li class="nav-item me-auto mb-2 mb-lg-0">
          <a class="nav-link" href="/kategoris/kategori">Kategori</a>
        </li>
        <li class="nav-item me-auto mb-2 mb-lg-0">
          <a class="nav-link" href="/product/produk">Produk</a>
        </li>

      </ul>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a  class="nav-link" href="{{route('keranjang.index')}}">
            <i class="fa-solid fa-cart-shopping"></i></a>
          </li>
          <li class="nav-icon dropdown">
            <a class="nav-link dropdown-toggle mr-3 " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Auth
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/login">Login</a></li>
                <li><a class="dropdown-item" href="/login">Logout</a></li>
            </ul>
          </li>
        </ul>
    </div>
  </div>
</nav>

<div class="container mt-6">
            @yield('konten')
      </div>

</body>
</html>
