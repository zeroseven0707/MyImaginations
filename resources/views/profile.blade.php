@extends('template.header')
@section('content')
    
<div class="content-wrapper" style="margin-top: 100px">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  @foreach ($data as $item)
                      
                  <img class="profile-user-img img-fluid rounded-circle"
                  src="{{ asset('storage/'.$item['image'])}}"
                  alt="User profile picture"
                  style="width: 200px; height:200px;">
                </div>
                
                <h3 class="profile-username text-center">{{ $item['name'] }}</h3>
                <p class="text-muted text-center">{{ $item['bio'] }}</p>
                
            <div class="row row-cols-lg-2 row-cols-2 g-2 text-center">
              <div class="col"><b>Following</b></div>
              <div class="col"><b>Followers</b></div>
              @if ($item['username'] == Auth::guard('web')->user()->username)
              <div class="col"><a href="#following" class="nav-link"><b>{{ $following }}</b></a></div>
              <div class="col"><a href="#follower" class="nav-link"><b>{{ $follower }}</a></b></div>
              @else
              <div class="col"><a href="#following" class="nav-link"><b>{{ $followingnonauth }}</b></a></div>
              <div class="col"><a href="#follower" class="nav-link"><b>{{ $followernonauth }}</b></a></div>
              @endif
 
            </div>
                @if ($item['username'] == Auth::guard('web')->user()->username)
                    
                @else
                @if ($sudahfollow == 1)
                <form action="/follow/hapus/{{ $item['username'] }}" class="text-center" method="post">
                  @csrf
                  <button type="submit" class="btn btn-primary btn-block"><b>Unfollow</b></button>
                </form>
                    @elseif ($sudahfollow == 0)
                    <form action="/follow/{{ $item['username'] }}" class="text-center" method="post">
                      @csrf
                      <button type="submit" class="btn btn-primary btn-block"><b>Follow</b></button>
                    </form>
                    @endif
                @endif
                @endforeach
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header" id="follower">
                <h3 class="card-title text-center">Followers</h3>
              </div>
              <!-- /.card-header -->
              <div style="height: 250px; overflow-y: scroll;">
              @foreach ($data as $item)
              @if ($item['username'] == Auth::guard('web')->user()->username)
              <div class="card-body">
                @foreach ($followersauth as $item)
                <a class="nav-link" href="/profile/{{ $item['username'] }}">
                <img src="{{ asset('storage/'.$item['image']) }}" alt="" class="rounded-circle" style="width:40px; height: 40px;">
                <strong><i class="fas fa-book mr-1"></i>{{ $item['name']}}</strong>
                </a>
                <hr>
                @endforeach
              </div>
              @else
              <div class="card-body">
                @foreach ($followers as $item)
                <a class="nav-link" href="/profile/{{ $item['username'] }}">
                <img src="{{ asset('storage/'.$item['image']) }}" alt="" class="rounded-circle" style="width:40px; height: 40px;">
                <strong><i class="fas fa-book mr-1"></i>{{ $item['name']}}</strong>
                </a><hr>
                @endforeach
              </div>
              @endif
              @endforeach
         
            </div>
          </div>
            <div class="card card-primary">
              <div class="card-header" id="following">
                <h3 class="card-title text-center">Following</h3>
              </div>
              <!-- /.card-header -->
              <div style="height: 250px; overflow-y: scroll;">
              @foreach ($data as $item)
              @if ($item['username'] == Auth::guard('web')->user()->username)
              <div class="card-body">
                @foreach ($followingsauth as $item)
                <a class="nav-link" href="/profile/{{ $item['username'] }}">
                <img src="{{ asset('storage/'.$item['image']) }}" alt="" class="rounded-circle" style="width:40px; height: 40px;">
                <strong><i class="fas fa-book mr-1"></i>{{ $item['name']}}</strong>
                </a><hr>
                @endforeach
              </div>
              @else
              <div class="card-body">
                @foreach ($followings as $item)
                <a class="nav-link" href="/profile/{{ $item['username'] }}">
                <img src="{{ asset('storage/'.$item['image']) }}" alt="" class="rounded-circle" style="width:40px; height: 40px;">
                <strong><i class="fas fa-book mr-1"></i>{{ $item['name']}}</strong>
                </a><hr>
                @endforeach
              </div>
              @endif
              @endforeach
            </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  @foreach ($data as $item)
                  @if ($item['id'] == Auth::guard('web')->user()->id)
                  <li class="nav-item ms-auto"><a class="nav-link active" href="#post" data-toggle="tab">Post</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                  @else
                  
                  @endif
                  @endforeach
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="post">
                    <div class="post">
                      <div class="d-flex align-items-center">
                        <h1>postingan</h1>
                        @if ($item['id'] == Auth::guard('web')->id())        
                        <a href="/story/input" class="ms-auto">
                          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                           <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
                         </svg>
                        </a>
                        @else
                        
                        @endif
                      </div>
                     <div class="row row-cols-1 row-cols-lg-2 p-4" style=" height:760px; overflow-y: scroll">
                        @foreach ($story as $item)
                        <div class="col">
                          <div class="card mb-3 my-4 shadow-sm p-1" style="max-width: 540px; font-size:12px;" >
                               <div class="row g-0">
                                <div class="col-md-4">
                                  <img src="{{ asset('storage/'.$item['img'] )}}" style="height: 230px; width:100%" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body "style="color: gray;">
                                  <h5 class="card-title text-dark">{{ $item['title'] }}</h5>
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
                                    <span class="badge rounded-pill text-bg-secondary">HOT</span>
                                    <span class="badge rounded-pill text-bg-secondary">Romance</span>
                                    <span class="badge rounded-pill text-bg-secondary">Magic</span>
                                    <span class="badge rounded-pill text-bg-secondary">Oper Vower</span>
                                  </p>
                                  <p class="card-text"><small class="text-muted">{{ $item['created_at']->format('Y-m-d H:i') }}</small></p>
                                 @if ($item['user_id'] == auth::guard('web')->id())
                                 <div class="float-end">
                                  <a href="/story/edit/{{ $item['post_id'] }}" class="text-dark p-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                  </svg></a>
                                  <a href="/story/detail/{{ $item['post_id'] }}" class="text-dark ">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                  </svg>
                                  </a>

                                  <a href="/destroy/{{ $item['post_id'] }}" class="text-dark p-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                  </svg></a>
                                </div>
                                   @else
                                   <div class="float-end">
                                       <a href="/story/detail/{{ $item['post_id'] }}" class="text-dark ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" bi bi-eye-fill" viewBox="0 0 16 16">
                                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                    </a>
                                    </div>
                                  
                                 @endif
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                       
                        </div>
                          
                    </div>
                    <!-- /.post -->
                  </div>
                  <div class="tab-pane" id="settings">
                    <form action="/users/update" method="POST" class="form-horizontal" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="{{ $item['name'] }}" name="name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="{{ $item['email'] }}" name="email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="bio" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="bio" placeholder="{{ $item['bio'] }}" name="bio"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" id="photo" name="image">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>
@endsection