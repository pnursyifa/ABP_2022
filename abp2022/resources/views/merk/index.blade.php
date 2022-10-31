<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <title>Merk - Lesgow Inc.</title>
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
                        <a class="nav-link" href="/product">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gudang">Gudang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Merk</a>
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
                <div class="col-sm-8 display-6">List Merk</div>
                <div class="col-sm-4 text-end align-self-end">
                    <a href="/merk/add" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <div class="row cols-auto" id="tabel">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" id="colID">#id</th>
                            <th scope="col">Nama</th>
                            <th scope="col" id="colAksi">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($brand as $key => $data)
                        <tr>
                            <th>{{ $data->id}}</th>
                            <td>{{ $data->nama_brand}}</td>
                            <td>del | edit | detail</td>
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