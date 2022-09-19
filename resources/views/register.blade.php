<link rel="stylesheet" href="css/bootstrap.css">
<div class="container w-25" style="margin-top:10%">
<form action="register\in" method="post">
    @csrf
    <div class="mb-3">
        <span class="form-label" for="name">Nama</span>
        <input type="text"  class="form-control" name="name" id="name">
    </div>
    <div class="mb-3">
        <span class="form-label" for="nohp">No Hp</span>
        <input type="text"  class="form-control" name="nohp" id="nohp">
    </div>
    <div class="mb-3">
        <span class="form-label" for="email">Email</span>
        <input type="text" class="form-control" name="email" id="email">
    </div>
    <div class="mb-3">
        <span class="form-label" for="Password">Password</span>
        <input type="text"  class="form-control" name="Password" id="Password">
    </div>
    <div class="mb-3">
        <span class="form-label" for="alamat">Alamat</span>
        <textarea name="alamat" id="alamat" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Daftar</button>
</form>
</div>