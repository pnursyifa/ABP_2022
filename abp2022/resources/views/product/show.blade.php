<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Produk - Lesgow Inc.</title>
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
                <div class="col-sm-8 display-6">Detail Produk</div>
                <div class="col-sm-4 text-end align-self-end">
                    <a href="{{ route('product.edit', ['product' => $d]) }}" class="btn btn-primary">Edit</a>
                        <form method="post" action="{{ route('product.show', ['product' => $data_product]) }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="bi bi-dash"></i></button>
                        </form>
                </div>
            </div>
            <div class="row cols-auto" id="tabel">
                <table class="table">
                    <thead>
                        <?php
                            $arr_brand =  $d->brand()->pluck('nama_brand')->toArray();
                            $arr_gudang = $d->gudang()->pluck('nama_gudang')->toArray();
                        ?>
                        <tr>
                            <th scope="col" id="colDetail">Nama</th>
                            <td scope="col">{{ $data_product->nama_product }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Harga</th>
                            <td>{{ $data_product->harga_product }}</td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td>{{ $data_product->stock }}</td>
                        </tr>
                        <tr>
                            <th>Merk</th>
                            <td>{{ $arr_brand[0] }}</td>
                        </tr>
                        <tr>
                            <th>Gudang</th>
                            <td>{{ $arr_gudang[0] }}</td>
                        </tr>
                        <tr>
                            <th>Created at</th>
                            <td>{{ $data_product->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Last updated at</th>
                            <td>{{ $data_product->updated_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>