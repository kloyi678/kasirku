
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') &middot; {{ config('app.name', 'KasirKu') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { margin: 0;
            min-height: 100vh;
            font-family: "Segoe UI", Arial,
            sans-serif;

            background: linear-gradient(
                135deg,
                #e3eeed,
                #9da5bb,
                #cfc6d4,
                #76949b
            );

             background-color: fixed;
        }
         .navbar-kasir {
            background: linear-gradient(135deg,
            #3e6e96, #767fb3, #9a8fb9) !important;
               box-shadow: 0 4px 15px rgba(33, 150, 243, 0.23);
         }

         .navbar-kasir .navbar-brand {
            color: aliceblue !important;
            font-weight: 700;
         }

           .navbar-kasir .navbar-link {
            color: aliceblue !important;
             transition: 0.3s
           }

           .navbar-kasir .navbar-link:hover {
            color: #dbeafe; !important;
            transform: 0.3s;
           }

         .navbar-brand { font-weight: 700;
            letter-spacing: .5px;
        }
        .card {
                width: 100%;
                min-height: 180px;
                border: none;
                border-radius: 18px;
                background: #ffffff;
                padding: 25px 30px;

                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08),
                            0 19px 30px rgba(33, 150, 243,
                            0.08);

                            transition: 0.3s ease;
            }

        .card:hover {
            transform: translateY(-6px);
            box-shadow:
                0 10px 25px rgba(0, 0, 0, 0.12),

                0 15px 40px rgba(33, 150, 243, 0.15);
        }

        .table th { white-space: nowrap; }
        .harga { font-variant-numeric: tabular-nums; }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark navbar-kasir mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">&#128179; KasirKu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home', 'produk.*') ? 'active' : '' }}"
                       href="{{ route('produk.index') }}">Daftar Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('transaksi.create') ? 'active' : '' }}"
                       href="{{ route('transaksi.create') }}">Transaksi Baru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('transaksi.index', 'transaksi.show') ? 'active' : '' }}"
                       href="{{ route('transaksi.index') }}">Riwayat Transaksi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container pb-5">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif


    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
