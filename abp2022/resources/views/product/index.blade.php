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
    <!-- header, otw pisah? -->
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
                        <a class="nav-link active" href="#">Produk</a>
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
                <div class="col-sm-8 display-6">List Produk</div>
                <div class="col-sm-4 text-end align-self-end">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <div class="row cols-auto" id="tabel">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" id="colID">#id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Gudang</th>
                            <th scope="col" id="colAksi">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($product as $key => $data)
                        <tr>
                            <?php
                                $arrBrand =  $data->brand()->pluck('nama_brand');
                                $arrGudang = $data->gudang()->pluck('nama_gudang');
                            ?>
                            <th>{{ $data->id}}</th>
                            <td>{{ $data->nama_product}}</td>
                            <td>{{ $data->harga_product}}</td>
                            <td>{{ $data->stock}}</td>
                            <td>{{ $arrBrand[0] }}</td>
                            <td>{{ $arrGudang[0] }}</td>
                            <td>
                                <form method="post" action="{{ route('product.show', ['product' => $data]) }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm"><i class="bi bi-dash-square"></i></button>
                                </form>
                                <a href="{{ route('product.edit', ['product' => $data]) }}" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{ route('product.show', ['product' => $data]) }}" class="btn btn-secondary btn-sm"><i class="bi bi-eye-fill"></i></a>
                            </td>
                        </tr>
                        @empty
                            <tr><td colspan="4">No record found</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>