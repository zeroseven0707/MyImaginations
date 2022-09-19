@extends('nav')
@section('konten')
    
<div class="container">
    
    <div class="card">
        <div class="card-body d-flex border">
            <div class="">
                1.<img src="img/gadget.jpg" alt="">
            </div>
            <div class="mx-5">
                <h4>Komputer Acer Generasi 6</h4>
                <h5><b>Rp.12.000.000</b></h5>
                <i>Gadget</i>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, sequi nisi? Possimus ex dolores voluptate molestiae voluptatem reprehenderit magnam iste cumque, ipsa beatae inventore id quis iure quos. Placeat, eum. In atque iure vero nemo, animi repellendus? Corrupti, earum. Est vero dolores, tempora minus iste eveniet optio praesentium, neque, et asperiores officia nulla hic rerum eum ducimus quis consequatur unde iusto officiis magnam impedit facilis. Aut assumenda cum ipsa vitae iste quidem rem sunt! Vero optio, soluta velit debitis maiores doloribus minus aspernatur iusto. Veniam harum accusantium dolor magni labore! Velit a ad aliquam nam necessitatibus qui iure autem natus.</p>
            </div>
    </div>
    <div class="card-body d-flex border">
        <div class="">
            2.<img src="img/gadget.jpg" alt="">
        </div>
        <div class="mx-5">
            <h4>Komputer Acer Generasi 6</h4>
            <h5><b>Rp.12.000.000</b></h5>
            <i>Gadget</i>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, sequi nisi? Possimus ex dolores voluptate molestiae voluptatem reprehenderit magnam iste cumque, ipsa beatae inventore id quis iure quos. Placeat, eum. In atque iure vero nemo, animi repellendus? Corrupti, earum. Est vero dolores, tempora minus iste eveniet optio praesentium, neque, et asperiores officia nulla hic rerum eum ducimus quis consequatur unde iusto officiis magnam impedit facilis. Aut assumenda cum ipsa vitae iste quidem rem sunt! Vero optio, soluta velit debitis maiores doloribus minus aspernatur iusto. Veniam harum accusantium dolor magni labore! Velit a ad aliquam nam necessitatibus qui iure autem natus.</p>
        </div>
    </div>
    <div class="card-body d-flex border">
        <div class="">
            3.<img src="img/gadget.jpg" alt="">
        </div>
        <div class="mx-5">
            <h4>Komputer Acer Generasi 6</h4>
            <h5><b>Rp.12.000.000</b></h5>
            <i>Gadget</i>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, sequi nisi? Possimus ex dolores voluptate molestiae voluptatem reprehenderit magnam iste cumque, ipsa beatae inventore id quis iure quos. Placeat, eum. In atque iure vero nemo, animi repellendus? Corrupti, earum. Est vero dolores, tempora minus iste eveniet optio praesentium, neque, et asperiores officia nulla hic rerum eum ducimus quis consequatur unde iusto officiis magnam impedit facilis. Aut assumenda cum ipsa vitae iste quidem rem sunt! Vero optio, soluta velit debitis maiores doloribus minus aspernatur iusto. Veniam harum accusantium dolor magni labore! Velit a ad aliquam nam necessitatibus qui iure autem natus.</p>
        </div>
    </div>
    <div class="card-body d-flex border">
        <div class="">
            4.<img src="img/gadget.jpg" alt="">
        </div>
        <div class="mx-5">
            <h4>Komputer Acer Generasi 6</h4>
            <h5><b>Rp.12.000.000</b></h5>
            <i>Gadget</i>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, sequi nisi? Possimus ex dolores voluptate molestiae voluptatem reprehenderit magnam iste cumque, ipsa beatae inventore id quis iure quos. Placeat, eum. In atque iure vero nemo, animi repellendus? Corrupti, earum. Est vero dolores, tempora minus iste eveniet optio praesentium, neque, et asperiores officia nulla hic rerum eum ducimus quis consequatur unde iusto officiis magnam impedit facilis. Aut assumenda cum ipsa vitae iste quidem rem sunt! Vero optio, soluta velit debitis maiores doloribus minus aspernatur iusto. Veniam harum accusantium dolor magni labore! Velit a ad aliquam nam necessitatibus qui iure autem natus.</p>
        </div>
    </div>
</div>
<form action="/cekout" method="post">
    @csrf
    <button type="submit" class="btn btn-danger float-end my-3">Cekout Semua Pesanan</button>
</form>
</div>
@endsection