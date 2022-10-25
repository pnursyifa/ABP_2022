<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/product/store" method="post">
        @csrf
        <label for="">Nama Produk</label>
        <input type="text" name="nama_product" required>
        <label for="">Stock Product</label>
        <input type="number" name="stock">
        <button type="submit">Save</button>
    </form>
</body>
</html>