@extends('layout.v_template')
@section('title','Tabel Manajer')


@section('content')
<h1>Ini Halaman Tabel Manajer</h1>
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
                <th>User ID</th>
                <th>Nama Manajer</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>
@endsection