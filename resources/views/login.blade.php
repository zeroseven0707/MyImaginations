<link rel="stylesheet" href="css/bootstrap.css">
<div class="container w-25 border" style="margin-top: 15%;">
    
    <form action="login\in" method="POST">
    @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" id="email" aria-describedby="emailHelp" class="form-control" name="email">
                <div class="form-text" id="emailHelp">Gunakan Email Yang Valid!!!!</div>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="text" id="pass" class="form-control" name="password">
            </div>

        <button type="submit" class="btn btn-danger">Login</button>
    </form>
</div>