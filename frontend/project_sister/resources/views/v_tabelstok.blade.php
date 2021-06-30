@extends('layout.v_template')
@section('title','Tabel Stock')


@section('content')
<h1>Ini Halaman Tabel Stok</h1>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Order Stock</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Karyawan</th>
                <th>Admin</th>
                <th>Produk</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>/detail</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Karyawan</th>
                <th>Admin</th>
                <th>Produk</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>
@endsection
