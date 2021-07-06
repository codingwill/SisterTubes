
<?php $__env->startSection('title','Tabel Stock'); ?>


<?php $__env->startSection('content'); ?>
<section class="content">
  
  <?php if($inputSuccess == 'success'): ?>
    <div class="alert alert-success" role="alert">
      <strong>Data berhasil dimasukkan!</strong>
    </div>
  <?php elseif($inputSuccess == 'failed'): ?>
    <div class="alert alert-success" role="alert">
      <strong>Data gagal dimasukkan!</strong>
    </div>
  <?php endif; ?>

  <?php if($deleteSuccess == 'success'): ?>
    <div class="alert alert-success" role="alert">
      <strong>Data berhasil dihapus!</strong>
    </div>
  <?php elseif($deleteSuccess == 'failed'): ?>
    <div class="alert alert-success" role="alert">
      <strong>Data gagal dihapus!</strong>
    </div>
  <?php endif; ?>

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
              
                <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($loop->index + 1); ?></td>
                    <td><?php echo e($row->karyawan_nama); ?></td>
                    <td><?php echo e($row->admin_nama); ?></td>
                    <td><?php echo e($row->produk_nama); ?></td>
                    <td><?php echo e($row->tanggal); ?></td>
                    <td>
                      <a href="/order/<?php echo e($row->id); ?>">
                        <button type="button" class="btn btn-block btn-info btn-sm">Detail</button>
                      </a>
                      <a href="/order/update/<?php echo e($row->id); ?>">
                        <button type="button" class="btn btn-block btn-success btn-sm">Edit</button>
                      </a>
                      <a href="/order/delete/<?php echo e($row->id); ?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data?')">
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

<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SisterTubes\resources\views/tabel/v_tabelstok.blade.php ENDPATH**/ ?>