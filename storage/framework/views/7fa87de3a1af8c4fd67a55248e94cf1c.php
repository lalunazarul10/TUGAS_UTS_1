

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Tambah Buku</h2>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<form action="<?php echo e(route('buku.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control">
    </div>

    <div class="mb-3">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control">
    </div>

    <div class="mb-3">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">
        Simpan
        </button>

    <a href="/buku" class="btn btn-secondary">
        Kembali
    </a>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\imamb\Herd\toko_buku\resources\views/buku/create.blade.php ENDPATH**/ ?>