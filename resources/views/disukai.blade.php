@extends('template.header')
@section('content')
<div class="" style="overflow-y: scroll; height: 499px  ;">
    <div class="container w-75 my-5">
    <div class="row row-cols-1 row-cols-lg-2">
        @foreach ($all as $item)
        <div class="col">
          <div class="card mb-3 my-4 border-0" style="max-width: 540px; font-size:12px;"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $target++ }}">
               <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{ asset('storage/'.$item['img'])}}" style="height: 230px; width:100%" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body "style="color: gray;">
                  <h5 class="card-title text-dark">{{ $item['title'] }}</h5>
                  <p class="card-text"><i>By {{ $item['name'] }}</i></p>
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
                  <p class="card-text">{{Str::substr($item['isi'], 0, 100).'...' }}</p>
                  <p class="card-text">
                    <span class="badge rounded-pill text-bg-secondary">{{ $item['category_name'] }}</span>
                  </p>
                  <p class="card-text"><small class="text-muted">{{ $item['created_at']->format('Y-m-d H:i') }}</small></p>
  
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- modal --}}
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
                      <img src="{{ asset('storage/'.$item['img']) }}" style="height: 230px; width:100%;" class="img-fluid rounded-start" alt="...">
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
                        <a href="/detail/{{ $item['post_id'] }}"><button type="button" class="btn btn-danger w-75">Read</button></a>
                        
                        <button type="button" class="btn btn-danger">+</button>
                        <p class="card-text">{{Str::substr($item['isi'], 0, 100).'...' }}</p>
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
        {{-- modal --}}
        @endforeach
        </div>
</div>
</div>

@endsection
