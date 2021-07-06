@extends('layout.v_template')
@section('title','Tabel Produk')


@section('content')
<section class="content">
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
                  <th>ID Kategori</th>
                  <th>Nama Produk</th>
                  <th>Stock</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
<<<<<<< Updated upstream:frontend/project_sister/resources/views/tabel/v_tabelproduk.blade.php
                <tr>
=======
                  @foreach($rows as $row)
                    <tr>
                      <a href="produk"><td>{{ $loop->index + 1 }}</td></a>
                      <td>{{ $row->kategoriNama }}</td>
                      <td>{{ $row->nama }}</td>
                      <td>{{ $row->stok }} </td>
                      <td>Rp {{ number_format($row->harga, 2, ',', '.') }}</td>
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
                <!--
                  <tr>
>>>>>>> Stashed changes:resources/views/tabel/v_tabelproduk.blade.php
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                </tr>
<<<<<<< Updated upstream:frontend/project_sister/resources/views/tabel/v_tabelproduk.blade.php
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>ID Kategori</th>
                  <th>Nama Produk</th>
                  <th>Stock</th>
                  <th>Harga</th>
                </tr>
                </tfoot>
=======
                -->
>>>>>>> Stashed changes:resources/views/tabel/v_tabelproduk.blade.php
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
@endsection
