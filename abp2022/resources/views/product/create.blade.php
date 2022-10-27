<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <title>Tambah Produk - Lesgow Inc.</title>
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
                        <a class="nav-link active" href="/product">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gudang">Gudang</a>
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
                <div class="col-sm-8 display-6">Tambah Produk</div>
                <div class="col-sm-4 text-end align-self-end">
                    <a href="/product/add" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <div class="row">
                <!-- <form action="/product/store" method="post">
                @csrf
                    <label for="">Nama Produk</label>
                    <input type="text" name="nama_product" required>
                    <label for="">Stock Product</label>
                    <input type="number" name="stock">
                    <button type="submit">Save</button>
                </form> -->
                <form action="/product/store" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_product" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_product" name="nama_product">
                    </div>
                    <div class="mb-3">
                        <label for="harga_produk" class="form-label">Harga Produk</label>
                        <input type="number" class="form-control" id="harga_product" name="harga_product">
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Gudang</label>
                        <input type="text" class="form-control" id="merk" name="merk">
                    </div>
                    <div class="mb-3">
                        <label for="gudang" class="form-label">Gudang</label>
                        <input type="text" class="form-control" id="gudang" name="gudang">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Jumlah Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>