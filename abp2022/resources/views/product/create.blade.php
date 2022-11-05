<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <title>{{ $title }} Produk - Lesgow Inc.</title>
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
                <div class="col-sm-8 display-6">{{ $title }} Produk</div>
                <div class="col-sm-4 text-end align-self-end">
                    <a href="/product" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <div class="row">
                <div class = "col-4" id="tabel">
                    <form action="{{ $action }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="{{ $method }}" />
                        <div class="mb-3">
                            <label for="nama_product" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_product" name="nama_product" value="{{ isset($data_product)?$data_product->nama_product:'' }}">
                        </div>
                        <div class="mb-3">
                            <label for="harga_produk" class="form-label">Harga Produk</label>
                            <input type="number" class="form-control" id="harga_product" name="harga_product" value="{{ isset($data_product)?$data_product->harga_product:''}}">
                        </div>
                        <div class="mb-3">
                            <label for="merk" class="form-label">Merk</label>
                            <select class="form-select" aria-label="Default select example" id="merk" name="merk">
                                <option value="{{ isset($data_product)?$data_product->brand_id:''}}" selected disabled>Pilih Merk...</option>
                                @foreach ($brand as $key => $data)
                                    <option value="{{ $data->id }}" {{ isset($data_product)?'selected':'' }}>{{ $data->nama_brand }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gudang" class="form-label">Gudang</label>
                            <select class="form-select" aria-label="Default select example" id="gudang" name="gudang">
                                <option value="{{ isset($data_product)?$data_product->gudang_id:''}}" selected disabled>Pilih Gudang...</option>
                                @foreach ($gudang as $key => $data)
                                    <option value="{{ $data->id }}" {{ isset($data_product)?'selected':'' }}>{{ $data->nama_gudang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Jumlah Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" value="{{ isset($data_product)?$data_product->stock:''}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>