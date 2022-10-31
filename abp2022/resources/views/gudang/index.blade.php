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
                        <a class="nav-link active" href="#">Gudang</a>
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
                <div class="col-sm-8 display-6">List Gudang</div>
                <div class="col-sm-4 text-end align-self-end">
                    <a href="{{ route('gudang.create') }}" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <div class="row cols-auto" id="tabel">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" id="colID">#id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col" id="colAksi">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($gudang as $key => $data)
                        <tr>
                            <th>{{ $data->id}}</th>
                            <td>{{ $data->nama_gudang}}</td>
                            <td>{{ $data->alamat_gudang}}</td>
                            <td>
                                <form method="post" action="/gudang/{{ $data->id }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm"><i class="bi bi-dash-square"></i></button>
                                </form>
                                <a href="/gudang/{{ $data->id }}/edit" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <a href="/gudang/{{ $data->id }}" class="btn btn-secondary btn-sm"><i class="bi bi-eye-fill"></i></a>
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