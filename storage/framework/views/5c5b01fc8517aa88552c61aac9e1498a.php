
<!-- START FORM -->
<?php $__env->startSection('konten'); ?>

    
       <form action='<?php echo e(url('mahasiswa/'.$data->nim)); ?>' method='post'>
<?php echo csrf_field(); ?>      
<?php echo method_field('PUT'); ?>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href= '<?php echo e(url('mahasiswa')); ?>' class="btn btn-secondary"><< kembali </a>
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <?php echo e($data->nim); ?>

                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="<?php echo e($data->nama); ?>" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jurusan' value="<?php echo e($data->jurusan); ?>" id="jurusan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </div>
        </form>
        <!-- AKHIR FORM -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.tamplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CRUD_MBD\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>