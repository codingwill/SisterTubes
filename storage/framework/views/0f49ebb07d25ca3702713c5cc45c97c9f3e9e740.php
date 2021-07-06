
<?php $__env->startSection('title','Tabel Stock'); ?>


<?php $__env->startSection('content'); ?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Detail Order Stock</h3>
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
                <th>Keterangan</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($loop->index + 1); ?></td>
                <td><?php echo e($row->karyawan_nama); ?></td>
                <td><?php echo e($row->admin_nama); ?></td>
                <td><?php echo e($row->produk_nama); ?></td>
                <td><?php echo e($row->tanggal); ?></td>
                <td><?php echo e($row->keterangan); ?></td>
                <td><?php echo e($row->jumlah_item); ?></td>
                <td>Rp <?php echo e(number_format($row->harga_item, 2, ',', '.')); ?></td>
                <td>
                      <a href="">
                        <button type="button" class="btn btn-block btn-info btn-sm">Detail</button>
                      </a>
                      <a href="">
                        <button type="button" class="btn btn-block btn-success btn-sm">Edit</button>
                      </a>
                      <a href="" onClick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                        <button type="button" class="btn btn-block btn-danger btn-sm">Delete</button>
                      </a>
                  </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SisterTubes\resources\views/tabel/v_tabeldetailstok.blade.php ENDPATH**/ ?>