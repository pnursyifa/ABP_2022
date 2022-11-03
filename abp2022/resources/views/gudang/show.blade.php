<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <title>Gudang - Lesgow Inc.</title>
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
                <div class="col-sm-8 display-6">Detail Gudang</div>
                <div class="col-sm-4 text-end align-self-end">
                    <a href="{{ route('gudang.edit', ['gudang' => $d]) }}" class="btn btn-primary">Edit</a>
                    <form method="post" action="{{ route('gudang.show', ['gudang' => $d]) }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">&nbsp;<i class="bi bi-dash-lg"></i>&nbsp;</button>
                    </form>
                </div>
            </div>
            <div class="row cols-auto" id="tabel">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" id="colDetail">Nama</th>
                            <td scope="col">{{ $data_gudang->nama_gudang }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $data_gudang->alamat_gudang }}</td>
                        </tr>
                        <tr>
                            <th>Total Stok</th>
                            <td>{{ $total_stock }}</td>
                        </tr>
                        <tr>
                            <th>Created at</th>
                            <td>{{ $data_gudang->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Last updated at</th>
                            <td>{{ $data_gudang->updated_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="lead" id="judul2">
                List Produk di Gudang {{ $d->nama_gudang }}
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
                    </thead>
                    <tbody>
                        @forelse($product_gudang as $key => $data)
                        <?php
                            $arrBrand =  $data->brand()->pluck('nama_brand')->toArray();
                            $brand = implode("", $arrBrand);
                        ?>
                        <tr>
                            <th>{{ $data->id }}</th>
                            <td>{{ $data->nama_product }}</td>
                            <td>{{ $data->harga_product }}</td>
                            <td>{{ $data->stock }}</td>
                            <td>{{ $brand }}</td>
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