@extends('template.header')
@section('content')
@foreach ($story as $item)
<div class="w-100 position-fixed d-flex" style="margin-top: -6px">
  <div class="border border-1 bg-light rounded-2 text-dark">
    @if ($bookmark == 1)
         <form action="/bookmark/hapus/{{ $item['post_id'] }}/{{ $item['bookmark'] }}" method="post">
      @csrf
      <button type="submit" class="border-0 bg-light">
        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="20" height="20" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
            <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
          </svg>
    </button>
    </form>
 
    @elseif($bookmark == 0) 
        <form action="/bookmark/{{ $item['post_id'] }}/{{ $item['bookmark'] }}" method="post" >
      @csrf
      <button type="submit" class="border-0 bg-light mx-2">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
      </svg>
    </button>
    </form>
    @endif
  </div>
  <div class="border border-1 bg-light rounded-2 text-dark ms-auto">
    @if ($star == 1)
    <div class="col">
        <form action="/star/hapus/{{ $item['post_id'] }}/{{ $item['star'] }}" method="post" class="ms-auto">
      @csrf
      <button type="submit" class="bg-light border-0" id="star">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mx-2 bi bi-star-fill" viewBox="0 0 16 16">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg>
    </button>
    </form>
    </div>
  
    @elseif($star == 0)
    <div class="col">
            <form action="/star/{{ $item['post_id'] }}/{{ $item['star'] }}" method="post" class="ms-auto" >
      @csrf
      <button type="submit" class="bg-light mx-2 border-0" id="star">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star " viewBox="0 0 16 16">
          <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
        </svg>
    </button>
    </form>
    </div>

    @endif
    </div>
</div>

<div class="w-100 fixed-bottom" style="margin-left: -10px">
  <a href="#atas" class="text-dark float-end">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
      <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
    </svg>
   </a><br><br>
  <a href="#bawah" class="text-dark float-end">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
      <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
    </svg>
 </a>
</div>
    <div class="bg-secondary p-2" style="margin-top: 70px">
      <center>
        <img src="{{ asset('storage/'.$item['img'])}}" class="img-fluid" alt="{{ $item['img'] }}" style="width: 200px; height: 300px;" id="atas">
    </center>
    <h2 class="text-center">{{ $item['title'] }}</h2>
    </div>
    <div class="container w-75 my-4">
      <p>{{ $item['isi'] }}</p>
            @endforeach
    </div>
    <div class="container w-75" id="bawah">
      <div class="pb-5 w-100 rounded-top" style="background-color: rgb(231, 229, 229); height: 200px; overflow-y: scroll">
        <div class="container w-75">
          @if ($comment == 0)
            <p class="text-center">Tidak ada komentar</p>
          @elseif ($comment > 0)
              @foreach ($comments as $item)
              <div class="d-flex">
                <a href="/profile/{{ $item['username'] }}">
                  <img src="{{asset('storage/'.$item['image'])}}" alt="{{ $item['img']}}" style="border-radius: 100%; height: 30px; width: 30px;">
                </a>
                 <div class="bg-white rounded-3 my-4 p-2" style="display: inline-block">
                <div>
                <p class="mx-2" style="font-size: 10px;">
                  {{ $item['name'] }} <br>
                  {{ $item['created_at']->format('Y-m-d H:i') }}
                </p>
                </div>
             
                  {{ $item['isi_comment'] }}
              </div>
              </div>
              @endforeach
          @endif
        </div>
      </div>
        <div class="m-auto w-100 rounded-bottom" style="height:60px; background-color: rgb(231, 229, 229);">
           @foreach ($story as $item)
          <form action="/comment/{{ $item['post_id'] }}" method="post" class="w-75 m-auto d-flex">
            @csrf
            @endforeach
        <input type="text" id="comment" class="form-control" name="comment">
        <button type="submit" class="btn bg-dark text-light">Kirim</button>
        </form>
        </div>
          
    </div>
  </div>
    <br>
    <br>
    <br>
@endsection