@extends('admin.navbar')
@section('konten')
    

    </section>

    <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with minimal features & hover style</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Kategori</th>
                      <th>Deskripsi</th>
                      <th>Harga</th>
                      <th>Gambar</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($produk as $item)
                      <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['kategoriid'] }}</td>
                        <td>{{ $item['deskripsi'] }}</td>
                        <td>{{ $item['harga'] }}</td>
                        <td>{{ $item['gambar'] }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
@endsection
  