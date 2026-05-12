

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="mb-0">📚 Data Buku</h2>

    <a href="/logout" class="btn btn-danger btn-sm">
        Logout
    </a>

</div>

<a href="<?php echo e(route('buku.create')); ?>" class="btn btn-primary mb-3">
    + Tambah Buku
</a>

<?php if(session('success')): ?>
<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $bukus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($buku->judul); ?></td>
            <td><?php echo e($buku->penulis); ?></td>
            <td><?php echo e($buku->penerbit); ?></td>
            <td><?php echo e($buku->tahun_terbit); ?></td>
            <td>
                <a href="<?php echo e(route('buku.show', $buku->id)); ?>" class="btn btn-info btn-sm">
                    Detail
                </a>

                <a href="<?php echo e(route('buku.edit', $buku->id)); ?>" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="<?php echo e(route('buku.destroy', $buku->id)); ?>" method="POST" style="display:inline-block">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin hapus data?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\imamb\Herd\toko_buku\resources\views/buku/index.blade.php ENDPATH**/ ?>