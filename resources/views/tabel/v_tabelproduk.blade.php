@extends('layout.v_template')
@section('title','Tabel Produk')


@section('content')
<h1>Ini Halaman Tabel Produk</h1>
<section class="content">
  @if ($inputSuccess == 'success')
    <div class="alert alert-success" role="alert">
      <strong>Data berhasil dimasukkan!</strong>
    </div>
  @elseif ($inputSuccess == 'failed')
    <div class="alert alert-success" role="alert">
      <strong>Data gagal dimasukkan!</strong>
    </div>
  @endif
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Produk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Nama Produk</th>
                  <th>Stok</th>
                  <th>Harga</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($rows as $row)
                    <tr>
                      <a href="produk"><td>{{ $loop->index + 1 }}</td></a>
                      <td>{{ $row->kategoriNama }}</td>
                      <td>{{ $row->nama }}</td>
                      <td>{{ $row->stok }} </td>
                      <td>Rp {{ number_format($row->harga, 2, ',', '.') }}</td>
                    </tr>
                  @endforeach
                <!--
                  <tr>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                </tr>
                -->
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Nama Produk</th>
                  <th>Stok</th>
                  <th>Harga</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Produk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Stock</th>
                  <th>Harga</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                </tr>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Stock</th>
                  <th>Harga</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
@endsection
