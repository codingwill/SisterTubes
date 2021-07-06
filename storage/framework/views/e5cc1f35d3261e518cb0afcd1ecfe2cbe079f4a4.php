
<?php $__env->startSection('title','Produk'); ?>


<?php $__env->startSection('content'); ?>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kategori Form</h3>
            </div>
            <form role="form" method="post" action="/kategori/tambah">
              <?php echo csrf_field(); ?>
              <div class="box-body">
              <div class="form-group">
                <!--
                <div class="form-group">
                  <label for="exampleInputIdKategori">ID Kategori</label>
                  <input type="text" class="form-control" id="exampleInputIdKategori" placeholder="Enter ID Kategori">
                </div> -->

                <div class="form-group">
                  <label for="exampleInputNamaProduk">Nama Kategori</label>
                  <input name="nama" type="text" value="<?php echo e(old('nama')); ?>" id="exampleInputNamaProduk" placeholder="Nama kategori" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                  <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="alert alert-danger"><?php echo e($message); ?></div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  
                </div> 
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


        </div>

    </section>

    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SisterTubes\resources\views/form/vf_kategori.blade.php ENDPATH**/ ?>