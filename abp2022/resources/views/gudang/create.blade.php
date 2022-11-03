<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <title>{{ $title }} Gudang - Lesgow Inc.</title>
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
                        <a class="nav-link active" href="/gudang">Gudang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/merk">Merk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/customer">Customer</a>
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
                <div class="col-sm-8 display-6">{{ $title }} Gudang</div>
                <div class="col-sm-4 text-end align-self-end">
                    <a href="/gudang" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <div class="row">
                <div class = "col-4" id="tabel">
                    <form action="{{ $action }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="{{ $method }}" />
                        <div class="mb-3">
                            <label for="nama_gudang" class="form-label">Nama Gudang</label>
                            <input type="text" class="form-control" id="nama_gudang" name="nama_gudang" value="{{ isset($data_gudang)?$data_gudang->nama_gudang:'' }}">
                        </div>
                        <div class="mb-3">
                            <label for="alamat_gudang" class="form-label">Alamat Gudang</label>
                            <textarea class="form-control" rows="3" id="alamat_gudang" name="alamat_gudang" value="{{ isset($data_gudang)?$data_gudang->alamat_gudang:'' }}">{{ isset($data_gudang)?$data_gudang->alamat_gudang:'' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>