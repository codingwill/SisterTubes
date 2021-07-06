@extends('layout.v_template')
@section('title','Tabel Manajer')


@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Manajer</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>User ID</th>
                <th>Nama Manajer</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
<<<<<<< Updated upstream
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
              </tr>
=======
                <th>Password Sementara</th>
<<<<<<< Updated upstream:frontend/project_sister/resources/views/tabel/v_tabelmanajer.blade.php
                <th>Cabang</th>
=======
                <th>Aksi</th>
>>>>>>> Stashed changes:resources/views/tabel/v_tabelmanajer.blade.php
              </tr>
            </thead>
            <tbody>
              @foreach($rows as $row)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $row->user_id }}</td>
                  <td>{{ $row->nama }}</td>
                  <td>{{ $row->email }} </td>
                  <td>{{ $row->telp }}</td>
                  <td>{{ $row->alamat }}</td>
                  <td>
                    @if ($row->password_changed)
                      <div class="alert alert-success " role="alert">
                        Password sudah diubah oleh pengguna
                      </div>
                    @else
                      <div class="alert alert-danger" role="alert">
                        Password belum diubah oleh pengguna<br>
                        PASSWORD: <strong>{{$row->password}}</strong>
                      </div>
                    @endif
                  </td>
<<<<<<< Updated upstream:frontend/project_sister/resources/views/tabel/v_tabelmanajer.blade.php
                  <td>...</td>
=======
                  <td>
                      <a href="">
                        <button type="button" class="btn btn-block btn-success btn-sm">Edit</button>
                      </a>
                      <a href="" onClick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                        <button type="button" class="btn btn-block btn-danger btn-sm">Delete</button>
                      </a>
                  </td>
>>>>>>> Stashed changes:resources/views/tabel/v_tabelmanajer.blade.php
                </tr>
              @endforeach
>>>>>>> Stashed changes
            </tbody>
<<<<<<< Updated upstream:frontend/project_sister/resources/views/tabel/v_tabelmanajer.blade.php
            <tfoot>
              <tr>
                <th>No</th>
                <th>User ID</th>
                <th>Nama Manajer</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
<<<<<<< Updated upstream
=======
                <th>Password Sementara</th>
                <th>Cabang</th>
>>>>>>> Stashed changes
              </tr>
            </tfoot>
=======
>>>>>>> Stashed changes:resources/views/tabel/v_tabelmanajer.blade.php
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>
@endsection