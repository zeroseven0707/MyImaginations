@extends('template.header')
@section('content')
<div class="container w-75">
<div id="carouselExampleDark" class="carousel carousel-dark slide" style="margin-top: 100px" data-bs-ride="carousel">
        <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                       <a href="" class="nav-link">
                       <h5>First slide label</h5>
                       <p>Some representative placeholder content for the first slide.</p>
                       </a>
                       <img src="img/iklan.jpg" class="d-block w-100 rounded-4" style="height: 260px;" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="10000">
                       <h5>First slide label</h5>
                       <p>Some representative placeholder content for the first slide.</p>
                       <img src="img/iklan2.jpg" class="d-block w-100 rounded-4" style="height: 260px;" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="10000">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                        <img src="img/iklan3.jpg" class="d-block w-100 rounded-4" style="height: 260px;" alt="...">
            </div>

        </div>
        <div class="carousel-indicators">
            <button type="button" style="height: 10px; width:10px; border-radius:50%;" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active bg-danger" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" style="height: 10px; width:10px; border-radius:50%;" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="bg-danger" aria-label="Slide 2"></button>
            <button type="button" style="height: 10px; width:10px; border-radius:50%;" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="bg-danger" aria-label="Slide 3"></button>
        </div>
  </div>
  <div class="d-flex align-items-center my-5 border-bottom text-center">
      <h2>Welcome Home</h2>
      <b class="ms-auto"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders2" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10.5 1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4H1.5a.5.5 0 0 1 0-1H10V1.5a.5.5 0 0 1 .5-.5ZM12 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-6.5 2A.5.5 0 0 1 6 6v1.5h8.5a.5.5 0 0 1 0 1H6V10a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5ZM1 8a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2A.5.5 0 0 1 1 8Zm9.5 2a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V13H1.5a.5.5 0 0 1 0-1H10v-1.5a.5.5 0 0 1 .5-.5Zm1.5 2.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z"/>
          </svg>Content Preferences
      </b>
  </div>




{{-- star paling banyak --}}
{{-- modal --}}
@foreach ($story as $item )
<div class="modal fade" id="staticBackdrop{{ $modal++ }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
         <div class="modal-body">
           <div class="card mb-3 my-4 border-0" style="max-width: 540px; font-size:15px;">
              <div class="row g-0">
              <div class="col-md-4">
                <img src="storage/{{ $item['img'] }}" style="height: 230px; width:100%;" class="img-fluid rounded-start" alt="...">
              </div>
                <div class="col-md-8">
                  <div class="card-body "style="color: gray;">
                    <h5 class="card-title text-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $item['title'] }}</h5>
                    <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>{{ $item['look'] }}
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>{{ $item['star'] }}
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                      <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                    </svg>{{ $item['bookmark'] }}</p>
                    <a href="/story/detail/{{ $item['post_id'] }}"><button type="button" class="btn btn-danger w-75">Read</button></a>
                    <p class="card-text">{{Str::substr($item['isi'], 0, 240).'...' }}</p>
                    <p class="card-text">
                      <span class="badge rounded-pill text-bg-secondary">{{ $item['category_name'] }}</span>
                    </p>
                    <p class="card-text"><small class="text-muted">{{ $item['created_at']->format('Y-m-d H:i') }}</small></p>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
{{-- modal --}}
  <h2><b>Top Picks For You</b></h2>
    <div class="row row-cols-2 row-cols-lg-4 g-4">
        @foreach ($story as $item )
        <div class="col">
            <div class="card mx-1" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $target++ }}">
              <img src="storage/{{ $item['img'] }}" class="card-img-top w-100 rounded-2" style="height: 230px" alt="...">
                <div class="card-body">
                    <p class="card-text text-center">{{ $item['title'] }}</p>
                </div>
            </div>
         </div>
         @endforeach
      </div>
</div>
{{-- satu data star paling banyak --}}
<div class="my-5" style="background-color: white; padding: 5px;">
  <div class="container w-75">
      @foreach ($app as $item)
            <div class=" row row-cols-1 row-cols-lg-3 my-5 justify-content-center">
                <div class="col" style="width: 250px">
                  <img src="storage/{{ $item['img'] }}" style="height: 330px;" class="rounded-start w-100" alt="...">
                </div>
                    <div class="col mx-2 ">
                      <div class="card-body "style="color: gray;">
                        <h5 class="card-title text-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $item['title'] }}</h5>
                        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>{{ $item['look'] }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>{{ $item['star'] }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                          <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                        </svg>{{ $item['bookmark']}}</p>
                        <div class="d-flex">
                          <a href="/story/detail/{{ $item['post_id'] }}">
                          <button type="button" class="btn btn-dark w-100 rounded-4">
                            <b>
                            Free Preview
                            </b>
                        </button>
                      </a>
                        </div>
                      
                        <p class="card-text">{{Str::substr($item['isi'], 0, 240).'...' }}</p>
                        <p class="card-text">
                          <span class="badge rounded-pill text-bg-secondary">{{ $item['category_name'] }}</span>
                        </p>
                        <p class="card-text"><small class="text-muted">{{ $item['created_at']->format('Y-m-d H:i') }}</small></p>
                </div>
          </div>     
        </div>     
      @endforeach
    </div>
  </div>




  {{-- data terbaru --}}
<div class="container w-75">
  {{-- modal --}}
@foreach ($news as $item )
<div class="modal fade" id="news{{ $modal++ }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card mb-3 my-4 border-0" style="max-width: 540px; font-size:15px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="storage/{{ $item['img'] }}" style="height: 230px; width:100%;" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body "style="color: gray;">
                <h5 class="card-title text-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $item['title'] }}</h5>
                <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>{{ $item['look'] }}
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>{{ $item['star'] }}
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                  <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                </svg>{{ $item['bookmark'] }}</p>
                <a href="/story/detail/{{ $item['post_id'] }}">
                <button type="button" class="btn btn-danger w-75">Read</button>
                </a>
                <p class="card-text">{{Str::substr($item['isi'], 0, 240).'...' }}</p>
                <p class="card-text">
                  <span class="badge rounded-pill text-bg-secondary">{{ $item['category_name'] }}</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
{{-- modal --}}
    <h2><b>New</b></h2>
    <div class="row row-cols-2 row-cols-lg-4 g-4">
      @foreach ($news as $item)
      <div class="col">
          <div class="card mx-1" type="button" data-bs-toggle="modal" data-bs-target="#news{{ $target++ }}">
          <img src="storage/{{ $item['img'] }}" class="card-img-top rounded-2"  style="height: 230px" alt="...">
          <div class="card-body">
            <p class="card-text text-center">{{ $item['title'] }}.</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
</div>
{{-- satu data paling baru --}}
<div class="my-5" style="background-color: white; padding: 5px;">
  <div class="container w-75">
      @foreach ($new as $item)
            <div class=" row row-cols-1 row-cols-lg-3 my-5 justify-content-center">
                <div class="col" style="width: 250px">
                  <img src="storage/{{ $item['img'] }}" class="rounded-start w-100" style="height: 330px" alt="...">
                </div>
                    <div class="col mx-2 ">
                      <div class="card-body "style="color: gray;">
                        <h5 class="card-title text-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $item['title'] }}</h5>
                        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>{{ $item['look'] }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>{{ $item['star'] }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                          <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                        </svg>{{ $item['bookmark']}}</p>
                        <div class="d-flex">
                          <a href="/story/detail/{{ $item['post_id'] }}">
                          <button type="button" class="btn btn-dark w-100 rounded-4">
                            <b>
                            Free Preview
                            </b>
                        </button>
                      </a>
                        </div>
                      
                        <p class="card-text">{{Str::substr($item['isi'], 0, 240).'...' }}</p>
                        <p class="card-text">
                          <span class="badge rounded-pill text-bg-secondary">{{ $item['category_name'] }}</span>
                        </p>
                        <p class="card-text"><small class="text-muted">{{ $item['created_at']->format('Y-m-d H:i') }}</small></p>
                      </div>
          </div>     
        </div>     
      @endforeach
  </div>
</div>






{{-- data gratis --}}
{{-- modal --}}
@foreach ($free as $item )
<div class="modal fade" id="free{{ $modal++ }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card mb-3 my-4 border-0" style="max-width: 540px; font-size:15px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="storage/{{ $item['img'] }}" style="height: 230px; width:100%;" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body "style="color: gray;">
                <h5 class="card-title text-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $item['title'] }}</h5>
                <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>{{ $item['look'] }}
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>{{ $item['star'] }}
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                  <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                </svg>{{ $item['bookmark'] }}</p>
                <a href="/story/detail/{{ $item['post_id'] }}">
                <button type="button" class="btn btn-danger w-75">Read</button>
                </a>
                <p class="card-text">{{Str::substr($item['isi'], 0, 240).'...' }}</p>
                <p class="card-text">
                  <span class="badge rounded-pill text-bg-secondary">{{ $item['category_name'] }}</span>
                </p>
                <p class="card-text"><small class="text-muted">{{ $item['created_at']->format('Y-m-d H:i') }}</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
{{-- modal --}}
    <div class="container w-75">
      <h2><b>Free For You</b></h2>
    <div class="row row-cols-2 row-cols-lg-4 g-4">
      @foreach ($free as $free)
        <div class="col">
            <div class="card mx-1" type="button" data-bs-toggle="modal" data-bs-target="#free{{ $target++ }}">
                <img src="storage/{{ $free['img'] }}" class="card-img-top rounded-2" style="height: 230px" alt="...">
                <div class="card-body">
                    <p class="card-text text-center">{{ $free['title'] }}</p>
                </div>
            </div>
         </div>
         @endforeach
        </div>
</div>
</div>
<div class="my-5" style="background-color: white; padding: 5px;">
  <div class="container w-75">
      @foreach ($onefree as $item)
            <div class=" row row-cols-1 row-cols-lg-3 my-5 justify-content-center">
                <div class="col" style="width: 250px">
                  <img src="storage/{{ $item['img'] }}" style="height: 330px;" class="rounded-start w-100" alt="...">
                </div>
                    <div class="col mx-2 ">
                      <div class="card-body "style="color: gray;">
                        <h5 class="card-title text-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $item['title'] }}</h5>
                        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>{{ $item['look'] }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>{{ $item['star'] }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                          <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                        </svg>{{ $item['bookmark']}}</p>
                        <div class="d-flex">
                          <a href="/story/detail/{{ $item['post_id'] }}">
                          <button type="button" class="btn btn-dark w-100 rounded-4">
                            <b>
                            Free Preview
                            </b>
                        </button>
                      </a>
                        </div>
                      
                        <p class="card-text">{{Str::substr($item['isi'], 0, 240).'...' }}</p>
                        <p class="card-text">
                          <span class="badge rounded-pill text-bg-secondary">{{ $item['category_name'] }}</span>
                        </p>
                        <p class="card-text"><small class="text-muted">{{ $item['created_at']->format('Y-m-d H:i') }}</small></p>
                      </div>
                </div>
        </div>     
      @endforeach
  </div>
</div>
<div class="container w-75">
  {{-- modal --}}
@foreach ($premium as $item )
<div class="modal fade" id="premium{{ $modal++ }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card mb-3 my-4 border-0" style="max-width: 540px; font-size:15px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="storage/{{ $item['img'] }}" style="height: 230px; width:100%;" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body "style="color: gray;">
                <h5 class="card-title text-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $item['title'] }}</h5>
                <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>{{ $item['look'] }}
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>{{ $item['star'] }}
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                  <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                </svg>{{ $item['bookmark'] }}</p>
                <a href="/story/detail/{{ $item['post_id'] }}">
                <button type="button" class="btn btn-danger w-75">Read</button>
                </a>
                <p class="card-text">{{Str::substr($item['isi'], 0, 240).'...' }}</p>
                <p class="card-text">
                  <span class="badge rounded-pill text-bg-secondary">{{ $item['category_name'] }}</span>
                </p>
                <p class="card-text"><small class="text-muted">{{ $item['created_at']->format('Y-m-d H:i') }}</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
{{-- modal --}}
    <h2><b>Paid Stories</b></h2>
    <div class="row row-cols-2 row-cols-lg-4 g-4">
      @foreach ($premium as $item)
      <div class="col">
          <div class="card mx-1" type="button" data-bs-toggle="modal" data-bs-target="#premium{{ $target++ }}">
          <img src="storage/{{ $item['img'] }}" class="card-img-top rounded-2" alt="...">
          <div class="card-body">
            <p class="card-text text-center">{{ $item['title'] }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="my-5" style="background-color: white; padding: 5px;">
    <div class="container w-75">
        @foreach ($onepremium as $item)
              <div class=" row row-cols-1 row-cols-lg-3 my-5 justify-content-center">
                  <div class="col" style="width: 250px">
                    <img src="storage/{{ $item['img'] }}" style="height: 330px;" class="rounded-start w-100" alt="...">
                  </div>
                      <div class="col mx-2 ">
                        <div class="card-body "style="color: gray;">
                          <h5 class="card-title text-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $item['title'] }}</h5>
                          <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg>{{ $item['look'] }}
                          <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                          </svg>{{ $item['star'] }}
                          <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="16" height="16" fill="currentColor" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                            <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/>
                          </svg>{{ $item['bookmark']}}</p>
                          <div class="d-flex">
                            <a href="/story/detail/{{ $item['post_id'] }}">
                            <button type="button" class="btn btn-dark w-100 rounded-4">
                              <b>
                              Free Preview
                              </b>
                          </button>
                        </a>
                          </div>
                        
                          <p class="card-text">{{Str::substr($item['isi'], 0, 240).'...' }}</p>
                          <p class="card-text">
                            <span class="badge rounded-pill text-bg-secondary">{{ $item['category_name'] }}</span>
                          </p>
                          <p class="card-text"><small class="text-muted">{{ $item['created_at']->format('Y-m-d H:i') }}</small></p>
                        </div>
                  </div>   
          </div>     
        @endforeach
    </div>
  </div>

    @endsection