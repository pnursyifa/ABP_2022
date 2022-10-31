<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <title>{{ $title }}Customer - Lesgow Inc.</title>
</head>
<body>
    <nav class="navbar fixed-top" id="nav">
        <div class="container-fluid">
            <div class="navbar-brand logo">
                Lesgow
            </div>
            <div class="mx-auto">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gudang">Gudang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/merk">Merk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/customer">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/order">Order</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid konten">
        <div class="container">
            <div class="row" id=judul>
                <div class="col-sm-8 display-6">{{ $title }} Customer</div>
                <div class="col-sm-4 text-end align-self-end">
                    <a href="/customer" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <div class="row">
                <div class = "col-4" id="tabel">
                    <form action="{{ $action }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="{{ $method }}" />
                        <div class="mb-3">
                            <label for="nama_customer" class="form-label">Nama Customer</label>
                            <input type="text" class="form-control" id="nama_customer" name="nama_customer" value="{{ isset($d)?$d->nama_customer:'' }}">
                        </div>
                        <div class="mb-3">
                            <label for="alamat_customer" class="form-label">Alamat Customer</label>
                            <textarea class="form-control" rows="3" id="alamat_customer" name="alamat_customer" value="{{ isset($d)?$d->alamat_customer:'' }}"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">Nomor HP</label>
                            <input type="text" class="form-control" rows="3" id="no_hp" name="no_hp" value="{{ isset($d)?$d->no_hp:'' }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>