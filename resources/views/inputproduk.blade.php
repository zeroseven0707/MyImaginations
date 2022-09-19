<link rel="stylesheet" href="css/bootstrap.css">
<div class="container w-25 my-5">

<form action="/input/in" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <span class="form-label" for="name">Nama</span>
    <input type="text" name="name" class="form-control" id="name">
</div>
<div class="mb-3">
    <span class="form-label" for="kategori">Kategori</span>
    <input type="text" name="kategoriid" class="form-control" id="kategori">
</div>
<div class="mb-3">
    <span class="form-label" for="deskripsi">Deskripsi</span>
    <input type="text" name="deskripsi" class="form-control" id="deskripsi">
</div>
<div class="mb-3">
    <span class="form-label" for="harga">Harga</span>
    <input type="text" name="harga" class="form-control" id="harga">
</div>
<div class="mb-3">
    <input type="file" name="gambar" id="gambar" class="form-control">
</div>
<div class="mb-3">
   <button type="submit" class="btn border">Simpan</button>
</form>
</div>
</div>