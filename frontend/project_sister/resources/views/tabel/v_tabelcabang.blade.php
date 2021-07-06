@extends('layout.v_template')
@section('title','Tabel Cabang')


@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Cabang</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>KTP (Manager)</th>
                <th>Nama Cabang</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
<<<<<<< Updated upstream:frontend/project_sister/resources/views/tabel/v_tabelcabang.blade.php
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
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>KTP (Manager)</th>
                <th>Nama Cabang</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
              </tr>
            </tfoot>
=======
                <th>Nama Manager</th>
                <th>Nomor KTP Manager</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($rows as $row)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $row->cabangNama }}</td>
                  <td>{{ $row->cabangTelp }} </td>
                  <td>{{ $row->cabangAlamat }}</td>
                  <td>{{ $row->manajerNama }}</td>
                  <td>{{ $row->manajerKtp }}</td>
                  <td>
                      <a href="">
                        <button type="button" class="btn btn-block btn-success btn-sm">Edit</button>
                      </a>
                      <a href="" onClick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                        <button type="button" class="btn btn-block btn-danger btn-sm">Delete</button>
                      </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
>>>>>>> Stashed changes:resources/views/tabel/v_tabelcabang.blade.php
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>
@endsection