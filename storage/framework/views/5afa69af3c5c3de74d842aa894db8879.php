

        <!-- START DATA -->
<?php $__env->startSection('konten'); ?>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='<?php echo e(url('mahasiswa/create')); ?>' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">NIM</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">Jurusan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstitem()?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($item->nim); ?></td>
                            <td><?php echo e($item->nama); ?></td>
                            <td><?php echo e($item->jurusan); ?></td>
                            <td>
                                <a href='<?php echo e(url('mahasiswa/'.$item->nim.'/edit')); ?>' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('yakin menghapus data ini?')" action="<?php echo e(url('mahasiswa/'.$item->nim)); ?>" class='d-inline' method="post">
                                    <?php echo csrf_field(); ?> 
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" name="sumbit" class="btn btn-danger btn-sm">Del</button>    
                                </form>
                                
                            </td>
                        </tr>    
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
               <?php echo e($data->links()); ?>

          </div>
          <!-- AKHIR DATA -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.tamplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CRUD_MBD\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>